
<!-- about -->
<div class="about">
    <!-- about title -->
    <div class="grid wide">
        <div class="row">
            <div class="about__container col c-12 l-12 m-12">
                <div class="about__container-item">
                    <h1 class="about__title">
                        About our casa
                    </h1>
                </div>
                <div class="about__container-item">
                    <p class="about_desc grid__text">
                        I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
                    </p>
                </div>
                <div class="about__container-item">
                    <div class="about__submit">
                        <a href="about.html" class="about__submit--btn btn btn--normal">
                            READ MORE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- components about -->
    <div class="about__component">
        <div class="grid wide">
            <div class="about__component-desc row">
            <?php $i=0;?>
            <?php foreach ($rooms as $room ) :
                $i++;
                ?> 
                
                <div class="grid__column-5 col c-12 m-12 l-6">
                    <div class="about__component-item ">
                        <div class="about__component-image ">
                            <img src="./assets/img/<?php echo $room['room_img']?>" alt="" class="about__component-image1">
                            <img src="https://static.wixstatic.com/media/94e66f_22b4e27ff3a0452a8207d9fbb1a93bbd~mv2_d_4272_2848_s_4_2.jpeg/v1/fill/w_454,h_450,al_c,q_80,usm_0.66_1.00_0.01/94e66f_22b4e27ff3a0452a8207d9fbb1a93bbd~mv2_d_4272_2848_s_4_2.webp" alt="" class="about__component-image2">
                        </div>
                    </div>
                </div>
                <div class="grid__column-5 col c-12 m-12 l-6 ">
                    <div class="about__component-item ">
                        <div class="about__component-desc--num">
                            <h1>
                                <?php
                                    if($i<10) {
                                        echo '0'.$i;
                                    }else{
                                        echo $i;
                                    }
                                ?>
                            </h1>
                        </div>
                        <div class="about__component-desc--title">
                            <p>
                                <?php echo $room['room_name']?>
                            </p>
                        </div>
                        <div class="about__component-desc--detail">
                            <p>
                                <?php echo $room['room_desc']?>
                            </p>
                        </div>
                        <div class="about__component-desc--btn">
                            <a href="dorm.html" class="about__component-desc--btn btn btn--normal">
                                BOOK A ROOM
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
        <!-- facilities -->
        <div class="grid">
            <div class="about__container">
                <div class="about__container-item">
                    <h1 class="about__title">
                        FACILITIES
                    </h1>
                </div>
                <div class="about__container-item">
                    <p class="about_desc grid__text">
                        I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your
                        users know a little more about you.
                    </p>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="grid">
            <!-- <div class="row"> -->
                <div class="facility-list row">
                    <div class="facility__item col c-12 m-4 l-4">
                        <a href="" class="facility__item--img">
                            <img src="https://static.wixstatic.com/media/84770f_615b07bf2c2e4035b8d04e934c350595~mv2_d_3500_2338_s_2.jpeg/v1/fit/w_599,h_604,q_90/84770f_615b07bf2c2e4035b8d04e934c350595~mv2_d_3500_2338_s_2.webp)" alt="">
                        </a>
                        <div class="facility__content">
                            <h1>Free Wifi</h1>
                            <p>lorem </p>
                        </div>
                    </div>
                    <div class="facility__item col c-12 m-4 l-4">
                        <a href="" class="facility__item--img">
                            <img src="https://static.wixstatic.com/media/c68ff7b87c084d20b01e349e515cfb6a.jpeg/v1/fit/w_599,h_604,q_90/c68ff7b87c084d20b01e349e515cfb6a.webp)" alt="">
                        </a>
                        <div class="facility__content">
                            <h1>Free Wifi</h1>
                            <p>lorem </p>
                        </div>
                    </div>
                    <div class="facility__item col c-12 m-4 l-4">
                        <a href="" class="facility__item--img">
                            <img src="https://static.wixstatic.com/media/449ea3f729b54ff39329332fb1d5f00b.jpg/v1/fit/w_599,h_604,q_90/449ea3f729b54ff39329332fb1d5f00b.webp)" alt="">
                        </a>
                        <div class="facility__content">
                            <h1>Free Wifi</h1>
                            <p>lorem </p>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        
    </div>
</div>