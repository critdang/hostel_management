<div class="about">
            <div class="about__desc">
                <div class="grid wide">
                    <div class="row">
                        <div class="about__container col c-12 m-12 l-12">
                            <div class="about__container">
                                <div class="about__container-item">
                                    <h1 class="about__title">
                                        Cart detail
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php foreach ($cart as $room) {
            ?>
                <div class="detail__container">
                    <div class="grid wide">
                        <div class="detail-nav">
                            <div class="detail-nave--back short">
                                <a href="?manage=dorm" class="fas fa-arrow-left"></a>
                            </div>
                            <h1>
                                <?php echo $room['room_name'] ?>
                                
                            </h1>
                        </div>
                        <div class="row">
                            
                            <div class="detail__item-slider col c-12 m-9 l-9">
                                <div class="detail__item--slider--img">
                                    <img src="assets/img/<?php echo $room['room_img'] ?>" alt="">
                                    <div class="row">
                                        <div class="long-line detail__item-desc col c-12 m-9 l-3">
                                            <h1>Properties:</h1>
                                        </div>
                                        <div class="long-line detail__item-desc col c-12 m-9 l-5">
                                        <p>
                                        Accommodates: 2
                                        </p>
                                        <p>Beds: 2 Double(s)</p>
                                        </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-4">
                                        <p>
                                            Size: 260 sq ft
                                        </p>
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-3">
                                        <h1>More Info:</h1>
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-9">
                                        <p>
                                            Affordable luxury. Our Junior Suites are the perfect option if you’re looking for a little extra luxury. With an open 400 square foot floor plan, the Junior Suites offer the extra space you need to spread out and enjoy the breathtaking views of the city skyline.
                                        </p>
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-3">
                                        <h1>Amenities:</h1>
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-5">
                                        <img src="./assets/img/mini-bar.svg" alt="">
                                        <img src="./assets/img/air-conditioner.svg" alt="">
                                        <img src="./assets/img/locker.svg" alt="">
                                    </div>
                                    <div class="long-line detail__item-desc col c-12 m-9 l-4">
                                        <img src="./assets/img/screen.svg" alt="">
                                        <img src="./assets/img/wifi-line.svg" alt="">
                                    </div>
                                    <div class="long-line detail__item-desc--term col c-12 m-9 l-9">
                                        <a href="">Read Our Policies</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <form action="?manage=detail" class="detail__item-book col c-12 m-3 l-3" method="POST">
                                <div class="detail__book--value">
                                    <div class="detail__book-item">
                                        <label for = "checkin-date">Check In Date: </label>
                                        <input type="date" id="checkin" name="checkin">
                                    </div>
    
                                    <div class="detail__book-item">
                                        <label for = "checkout-date">Check Out Date: </label>
                                        <input type="date" id="checkout" name="checkout">
                                    </div>
                                    
                                    <div class="detail__book-item">
                                        <label for = "rooms">Rooms: </label>
                                        <input type = "number" min = "1" value = "1" name = "rooms">
                                    </div>
                                    <div class="detail__book-item">
                                        <label for = "adults">Adults: </label> 
                                        <input type = "number" min = "1" value = "2" name = "adults">
                                    </div>
                                    <div class="detail__book-item">
                                        <label for = "child">Children: </label>
                                        <input type = "number" min = "0" value = "0" name = "children">
                                    </div>
                                    <div class="detail__item-book--title">
                                    <h1><?php echo '$'.number_format($room['room_price']) ?></h1>
                                    <p>Per Night</p>
                                    <p></p>
                                    <h1><?php echo '$'.number_format($room['room_sale']) ?></h1>
                                    <p>Total</p>
                                </div>
                                    <input type="hidden" name="cart_id" value="<?php echo $room['cart_id'] ?>">
                                    <input type="hidden" name="user_id" value="<?php echo $room['user_id'] ?>">
                                    <div class = "detail__book-item">
                                        <input type = "submit" class = "btn-primary" value = "Book" name="updateCart">
                                    </div>
                                </div>
                          </div>
                        </form>
                        <div class="row">
                            
                        </div>
                    </div>
                    <div class="grid2">
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>