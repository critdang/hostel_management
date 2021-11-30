// Đối tượng `Validator`(constructor function)
function Validator(options) {
    //options là object nhận từ index.html truyền tới
    function getParent(element, selector) {
        //input element là đầu vào cho element, parent là đầu vào selector
        while(element.parentElement) {
            if(element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            //cập nhật element ra ngoài thẻ trùm bên ngoài
            element = element.parentElement;
        }
    }
    //Hàm thực hiện validate 
    var selectorRules= {};

    function validate(inputElement, rule) {
        

        //value: inputElement.value. khách hàng nhập
        //test func: rule.test là hàm nhận đối số inputElement.value(khách nhập) để check
        var errorElement = getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
        // var errorMessage = rule.test(inputElement.value) cách cũ
        var errorMessage;

        // Lấy ra các rules của các selector
        var rules = selectorRules[rule.selector];
        // Lặp qua từng rule & check.
        // Nếu có lỗi thì dừng việc kiểm tra 
        //Vì rules là 1 mảng nên lọc qua và truyển vào inputElement của user
        for(var i=0; i<rules.length; ++i) {
            switch(inputElement.type) {
                case 'radio':
                case 'checkbox':
                    errorMessage = rules[i](
                        //formElement để lấy đúng input chứ không phải documnet
                        formElement.querySelector(rule.selector + ':checked')
                    );
                    break;
                default:
                    errorMessage = rules[i](inputElement.value);

            }
            if(errorMessage) break;
        }

        if(errorMessage) {
            errorElement.innerHTML = errorMessage;
            getParent(inputElement, options.formGroupSelector).classList.add('invalid');
        } else {
            errorElement.innerHTML = '';
            getParent(inputElement, options.formGroupSelector).classList.add('invalid');
        }
        return !errorMessage;
    }
    //lấy form chứa elements cần validate
    var formElement = document.querySelector(options.form);
    if(formElement) {
        // Khi submit form
        formElement.onsubmit = function(e) {
            e.preventDefault();

            var isFormValid = true;
            // Lặp qua từng rules và validate
            options.rules.forEach (function (rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement,rule);
                if(!isValid) {
                    isFormValid = false;
                }
            });
           


            if(isFormValid) {
                //Trường hợp submit với javascript
                if(typeof options.onSubmit === 'function') {

                    var enableInputs = formElement.querySelectorAll('name');
                    // enableInputs là nodelist và array.form convert sang array
                    var formValues = Array.from(enableInputs).reduce(function (values,input) {
                        //Toán tử gán luôn được gán vào input.name
                        switch(input.type) {
                            case 'radio':
                                values[input.name] = formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                break;
                            case 'checkbox':
                                if(input.matches(':checked')) {
                                    values[input.name] =[];
                                    return values;
                                }

                                if(!Array.isArray(values[input.name])) {
                                    values[input.name] =[];
                                }

                                values[input.name].push(input.value)

                                break;
                            case 'file':
                                value[input.name] = input.files;
                                break;
                            default: 
                                values[input.name] = input.value;
                        }
                        return values;
                    }, {});
                    options.onSubmit(formValues);
                }
                // Trường hợp submit với hành vi mặc định
                else{
                    formElement.submit();
                }
            }


        }


        //Lặp qua mỗi rules (Validator.isRequired) và lắng nghe(lăng nghe sự kiện blur,input,...)
        options.rules.forEach (function (rule) {
            // Lưu lại các rules cho mỗi input bằng rule.test(các functions)
            if(Array.isArray(selectorRules[rule.selector])) {
                //Nếu có hơn 2 phần tử chạy vào đây
                selectorRules[rule.selector].push(rule.test);
            }else {
                //Nếu có 1 phần tử đầu thì chạy vào đây
                selectorRules[rule.selector] = [rule.test]
            }
            
            //tìm input theo formElement được query vào chứ không phải document
            var inputElements = formElement.querySelectorAll(rule.selector)
            
            Array.from(inputElements).forEach(function(element) {
                //Xử lý trường hợp blur khỏi input
                inputElement.onblur = function () {
                    //hàm validate nhận rule 
                    validate(inputElement,rule);
                }
                //Xử lý mỗi khi người dùng nhập vào input
                inputElement.oninput = function () {
                    var errorElement = getParent(inputElement, options.formGroupSelector).querySelector('.form-message');
                    errorElement.innerHTML = '';
                    getParent(inputElement, options.formGroupSelector).classList.add('invalid');
                }
            });
        });
        
    }
}



//Định nghĩa rules
// Validator vừa là function vừa là object
// Nguyên tắc của các rules:
// 1. Khi lỗi => message lỗi
// 2. Khi hợp lệ => Không trả gì (undefined)
//isRequired cũng là function nhận object là Validator
//Định nghĩa rules
Validator.isRequired = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            return value ? undefined : message || 'Vui lòng nhập trường này'
        }
    };
}
//selector là tham số nhận từ index.html
Validator.isEmail = function(selector, message) {
    return {
        selector: selector,
        test: function(value) {
            var regrex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regrex.test(value) ? undefined : message || 'Trường này phải là email';
        }
    };    
}
Validator.minLength = function(selector, min, message) {
    return {
        selector: selector,
        test: function(value) {
            return value.length >=min ? undefined : message || `Vui lòng nhập tối thiểu ${min} kí tự`;
        }
    };    
}
Validator.isConfirmed = function(selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function(value) {
            return value === getConfirmValue() ? undefined : message || 'Giá trị nhập vào không chính xác';
        }
    }
}