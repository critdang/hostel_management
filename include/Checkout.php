<!-- checkout -->
<div class="checkout">
    <div class="grid wide">
        <div class="row  ">
            <div class="checkout-container--info col c-12 m-12 l-8">
            <form action="" method="POST" class="form" id="form-1">
                <h3 class="heading">Fill in the form</h3>
                <p class="desc">Please fill in your private information</p>
            
                <div class="spacer"></div>
                <div class="form-group"> 
                    <label for="fullname" class="form-label">Full Name</label>
                    <input id="fullname" name="fullname" type="text" placeholder="VD: Crit Đặng" class="form-control">
                    <span class="form-message"></span>
                </div>
            
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                    <span class="form-message"></span>
                </div>
            
                <div class="form-group">
                    <label for="country" class="form-label">Country or region</label>
                    <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                    <span class="form-message"></span>
                </div>
            
                <div class="form-group">
                    <label for="nation" class="form-label">Nationality</label>
                    <input id="nation" name="nation" type="text" placeholder="VD: email@domain.com" class="form-control">
                    <span class="form-message"></span>
                </div>
                <!-- <div class="form-group">
                    <label for="avartar" class="form-label">Ảnh đại diện</label>
                    <input id="avartar" name="avartar"  type="file" class="form-control">
                    <span class="form-message"></span>
                </div> -->
                <div class="form-group">
                    <label for="nation" class="form-label">Phone number</label>
                        <div class="form-group__countrycode">
                                <p>Coutry code</p>
                                <input id="country_code" name="country_code" type="text" placeholder="VD: +84" class="form-control">
                        </div>
                        <div class="form-group__phonecode">
                                <p>Phone number</p>
                                <input id="phone_code" name="phone_code" type="text" placeholder="VD: 945246026" class="form-control">
                        </div>
                </div>
                <div class="form-group">
                    <label for="province" class="form-label">City</label>
                    <select id="province" name="province"  class="form-control">
                    <option value="">-- Select City --</option>
                    <option value="hni">Hà Nội</option>
                    <option value="hpg">Hải Phòng</option>
                    </select>
                    <span class="form-message"></span>
                </div>
                <div class="form-policy">
                    <input type="checkbox">
                    <a href="#">I accept the hostel's policy</a>
                </div>

                <!-- gender -->
                <!-- <div class="form-group horizontal">
                    <label for="password_confirmation" class="form-label">Giới tính</label>
                    <div>
                    <input name="gender" type="checkbox" value="male" class="form-control">Nam
                    </div>
                    <div>
                    <input name="gender" type="checkbox" value="female" class="form-control">Nữ
                    </div>
                    <div>
                    <input name="gender" type="checkbox" value="female" class="form-control">Khác
                    </div>
                    <span class="form-message"></span>
                </div> -->
                <div class="form_btn">
                    <input type="submit" class="form-submit btn-primary" value="Book">
                </div>
                </form>
            </div>

            <!-- checkout -->
        <div class="checkout-container col c-12 m-12 l-4">
            <div class="checkout-item">
                <div class="checkout-item__title">
                    <h1>Your Stay</h1>
                    <h3>CASA 3</h3>
                </div>
            </div>
            <div class="checkout-item">
                <div class="checkout-item__info">
                    <div class="checkout_date checkout_divide">
                        <h3>December 2,2021</h3>
                        <i class="fas fa-arrow-right"></i>
                        <h3>December 4,2021</h3>
                    </div>
                        <p>2 nights</p>
                        <p>3 adults</p>
                </div>
            </div>
            <!-- Room -->
            <?php foreach ($rooms as $room) {
            ?>
            <div class="checkout-item">
                <div class="checkout-item__info">
                    <div class="checkout-item__divide">
                        <h3><?php echo $room['room_name'] ?></h3>
                        <p><?php echo number_format($room['total'])." VND" ?></p>
                    </div>
                    <p>1 adult</p>
                </div>
                <div class="checkout-item__detail">
                    <button class="dropbtn">
                        <h5>SEE THE ROOM 1 DETAILS</h5>  
                        <i onclick="myFunction(this)" class="fas fa-chevron-down"></i>
                    </button>
                    <!-- <button onclick="myFunction()" class="dropbtn" data-index="num2"> -->
                    
                    <div id="checkout-dropdown" class="dropdown-content">
                        
                        <p >OPERA WING, PREMIUM ROOM, QUEEN BED</p>
                        <div class="checkout-seperate">
                        <p>
                        <?php echo $room['rooms'] > 1 ? $room['rooms'] . " rooms" : $room['rooms'] . " room" ?> 
                        </p>
                        <div class="test">
                        <p>
                                <?php echo $room['adults'] > 1 ? $room['adults'] . " adults" : $room['adults'] . " adult" ?> 
                            </p>
                            <p>
                                 <?php echo $room['children'] > 1 ? $room['children'] . " children" : $room['children'] . " child" ?> 
                            </p>
                        </div>
                        
                        </div>
                            
                            
                        <a href="">Pricing condition</a>
                        <div class="checkout-item__divide">
                            <h2 >ROOM</h2>
                            <p><?php echo number_format($room['price'])." VND" ?></p>
                        </div>
                        <div class="checkout-item__divide">
                            <h2>VAT</h2>
                            <p><?php echo number_format($room['tax'])." VND" ?></p>
                        </div>
                        <div class="checkout-item__divide">
                            <h2>TOTAL</h2>
                            <p><?php echo number_format($room['total'])." VND" ?></p>
                        </div>

                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="checkout-item">
                <div class="checkout-item__info">
                    <h2>TOTAL(fees and taxes included)</h2>
                    <div class="checkout-item__divide">
                        <h3>Room 3/3</h3>
                        <p>764,43 $</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <input type="checkbox" name class="checkout-input" id="checkout-mobile-input">
        <label for="checkout-mobile-input" class="header__nav-overlay"></label>
        <nav class="checkout-mobile__order">
            <h1>he</h1>
            <ul class="checkout-menu">
                <li class=" header__navbar-mobile-item">
                    <div class="checkout-item__divide">
                        <h1>Your Stay</h1>

                    <label for="checkout-mobile-input" class="checkout-mobile__order-close">
                        <i class="fas fa-times"></i>
                    </label>
                    </div>
                </li>
            </ul>
        </nav> -->
        <div class="checkout-mobile sticky-checkout__mobile">
            <div class="checkout-item__info">
                <div class="checkout-item__divide">
                    <h2>TOTAL(fees and taxes included)</h2>
                    <!-- <input type="checkbox" id="check">
                    <label for="checkout-mobile-input">
                        Detail
                    </label> -->
                    <button class="modal-btn">detail</button>
                </div>

                <div class="checkout-item__divide">
                    <h3>Room 3/3</h3>
                    <p>764,43 $</p>
                </div>
            </div>
            <div class="form_btn-mobile">
                <input type="submit" class="form-submit btn-primary" value="Book">
            </div>
        </div>
        <!-- modal-bg to animation-->
        <div class="checkout-mobile__modal-bg">
            <div class="checkout-mobile__modal">
                <!-- box see on the screen -->
                <div class="checkout-item__divide">
                        <h1>Your Stay</h1>
                <button class="checkout-mobile__order-close modal-close">
                    <i class="fas fa-times"></i>
                </button>
                </div>
                <div class="checkout-item">
                    <div class="checkout-item__info">
                        <div class="checkout_date checkout_divide">
                        <h3>December 2,2021</h3>
                        <i class="fas fa-arrow-right"></i>
                        <h3>December 4,2021</h3>
                        </div>
                        <p>2 nights</p>
                        <p>3 adults</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>