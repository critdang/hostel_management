<div class="about">
            
            <div class="about__desc">
                <div class="grid wide">
                    <div class="row">
                        <div class="about__container col c-12 m-12 l-12">
                            <div class="about__container">
                                <div class="about__container-item">
                                    <h1 class="about__title">
                                        activities
                                    </h1>
                                </div>
                                <div class="about__container-item">
                                    <p class="about_desc grid__text">
                                        I'm a paragraph. Click here to add your own text and edit me. I’m a great place for you to tell a story and let your users know a little more about you.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="dorm__date">
                    <h1>Our Rooms</h1>
                        <div class="row">
                            <div class="dorm__date col c-12 m-2 l-3">
                                <div class="dorm__date-item">
                                    <label for = "checkin-date">Check In Date: </label>
                                    <input type="date" id="checkout" name="checkout">
                                </div>
                            </div>
                            <div class="dorm__date col c-12 m-2 l-3">

                                <div class="dorm__date-item">
                                    <label for = "checkout-date">Check Out Date: </label>
                                    <input type="date" id="checkout" name="checkout">
                                </div>
                            </div>
                            <div class="dorm__date col c-12 m-2 l-1">

                                <div class="dorm__date-item">
                                    <label for = "adult">Adults: </label>
                                    <input type = "number" min = "1" value = "1" id = "adult">
                                </div>
                            </div>
                            <div class="dorm__date col c-12 m-2 l-1">

                                <div class="dorm__date-item">
                                    <label for = "children">Children: </label>
                                    <input type = "number" min = "1" value = "1" id = "children">
                                </div>
                            </div>
                            <div class="dorm__date col c-12 m-2 l-1">

                                <div class="dorm__date-item">
                                    <label for = "rooms">Rooms: </label>
                                    <input type = "number" min = "1" value = "1" id = "rooms">
                                </div>
                            </div>
                            <div class="dorm__date col c-12 m-2 l-3">
                                <div class = "dorm__date-item dorm__search-btn">
                                    <input type = "submit" class = "btn-primary" value = "Search">
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
                <div class="dorm__container">
                    <div class="grid wide">
                        <div class="row">
                            <div class="long-line dorm__container-item--img col c-12 m-3 l-3">
                            <a href="">
                                <img src="./assets/img/<?php echo $row_sanpham['phong_image'] ?>" alt="">
                                <div class="caption"></div>
                            </a>
                            </div>
                            <div class="long-line dorm__container-item--body col c-12 m-6 l-6">
                                <div class="dorm__container-item">
                                    <div class="short__line">
                                        <h1>phong don</h1>
                                        <p>Our Junior Suites offer breathtaking views of the city skyline.</p>
                                        <div class="dorm__container-item--details">
                                            <ul class="dorm__container-item-detail">
                                                <li> Size: 260 sq ft</li>
                                                <li> Beds: 2 Double(s)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dorm__container-item--facility">
                                        <i class="fas fa-wifi"></i>
                                        <i class="fas fa-tv"></i>
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="long-line dorm__container-item col c-12 m-3 l-3">
                            
                                <div class="dorm__container-item--price">
                                    <p>From</p>
                                    <h1>250$</h1>
                                    <div class="dorm__container-item--btn">
                                        <a href="detail.html" class="btn-primary">
                                            More Info
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="long-line dorm__container-item--img col c-12 m-3 l-3">
                                    <img src="https://static.wixstatic.com/media/fde015_597c7d9710e44a9d91514e0ac84fb653.jpg/v1/fill/w_240,h_170,q_85,usm_0.66_1.00_0.01/fde015_597c7d9710e44a9d91514e0ac84fb653.jpg" alt="">
                            </div> -->
                            <!-- <div class="long-line dorm__container-item--body col c-12 m-6 l-6">
                                <div class="dorm__container-item ">
                                    <div class="short__line">
                                        <h1>Junior Suite</h1>
                                        <p>Our Junior Suites offer breathtaking views of the city skyline.</p>
                                        <div class="dorm__container-item--details">
                                            <ul class="dorm__container-item-detail">
                                                <li> Size: 260 sq ft</li>
                                                <li> Beds: 2 Double(s)</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dorm__container-item--facility">
                                        <i value="free wifi" class="fas fa-wifi"></i>
                                        <i class="fas fa-tv"></i>
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="long-line dorm__container-item col c-12 m-3 l-3">
                            
                                <div class="dorm__container-item--price">
                                    <p>From</p>
                                    <h1>$250</h1>
                                    <div class="dorm__container-item--btn">
                                        <button type="submit" class="btn-primary">
                                            More Info
                                        </button>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="dorm__container-item--img col c-12 m-3 l-3">
                                <img src="https://static.wixstatic.com/media/fde015_6159dcce72024a789a3df21e95e8d495.jpg/v1/fill/w_240,h_170,q_85,usm_0.66_1.00_0.01/fde015_6159dcce72024a789a3df21e95e8d495.jpg" alt="">
                            </div>
                            <div class="dorm__container-item--body col c-12 m-6 l-6">
                                <div class=" short__line">
                                    <h1>Junior Suite</h1>
                                    <p>Our Junior Suites offer breathtaking views of the city skyline.</p>
                                    <div class="dorm__container-item--details">
                                        <ul class="dorm__container-item-detail">
                                            <li> Size: 260 sq ft</li>
                                            <li> Beds: 2 Double(s)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dorm__container-item--facility">
                                    <i class="fas fa-wifi"></i>
                                    <i class="fas fa-tv"></i>
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                            </div>
                            <div class="dorm__container-item col c-12 m-3 l-3">
                                <div class="dorm__container-item--price">
                                    <p>From</p>
                                    <h1>$250</h1>
                                    <div class="dorm__container-item--btn">
                                        <button type="submit" class="btn-primary">
                                            More Info
                                        </button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>