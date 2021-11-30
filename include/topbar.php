<header class="header">
    <div class="grid">
        <nav class="header__navbar">
            <style>
            .index-page a{
                color: var(--primary-color);
            }</style>
            <?php 
                
                // echo $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                
            ?> 
            <div class="header__navbar-list">
                <a href="" class="header__navbar-logo logo" >
                    CASA 3
                </a>
            </div>
            <ul class="header__navbar-list-menu">
                <li class="home  header__navbar-item ">
                    <a href="" class=" header__navbar-link" style="color:red" >HOME</a>
                </li>
                <li class="activities header__navbar-item">
                    <a href="?manage=activities" class="header__navbar-link">ACTIVITIES</a>
                </li>
                <li class="dorm header__navbar-item">
                    <a href="?manage=dorm" class="header__navbar-link">DORM & ROOMS</a>
                </li>
                <li class="location header__navbar-item">
                    <a href="?manage=location" class="header__navbar-link">LOCATION</a>
                </li>
                <li class=" header__navbar-item" id="about">
                    <a href="?manage=about" class="header__navbar-link">ABOUT</a>
                </li>
                <li class=" header__navbar-item" id="about">
                    <a href="?manage=detail" class="header__navbar-link">CART</a>
                </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon fab fa-facebook-f"></i>
                        
                        </a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon fab fa-instagram"></i>
                        </a>
                    </li>
            </ul>
            
            <!-- kéo navbar vào -->
            <input type="checkbox" id="check">
            <label for="header__nav-mobile-input" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <!-- label để check vào label nhưng affect toi input. Checkbox hiện overlay -->
            <!-- <label for="header__nav-mobile-input">Check 1</label> -->
            <input type="checkbox" hidden name="" class="header__nav-input" id="header__nav-mobile-input">

            <!-- phủ màn hình. Click ngoài overlay để thoát -->
            <label for="header__nav-mobile-input" class="header__nav-overlay"></label>


            <!-- navbar mobile -->
            <nav class="header__navbar-mobile">
                <label for="header__nav-mobile-input" class="header__navbar-mobile-close">
                    <i class="fas fa-times"></i>
                </label>
                <ul class="header__navbar-mobile-list menu">
                    <li class=" header__navbar-mobile-item index-page">
                        <a href="" class=" header__navbar-mobile-link" >HOME</a>
                    </li>
                    <li class="header__navbar-mobile-item">
                        <a href="activities.html" class="header__navbar-mobile-link">ACTIVITIES</a>
                    </li>
                    <li class="header__navbar-mobile-item">
                        <a href="dorm.html" class="header__navbar-mobile-link">DORM & ROOMS</a>
                    </li>
                    <li class="header__navbar-mobile-item">
                        <a href="location.html" class="header__navbar-mobile-link">LOCATION</a>
                    </li>
                    <li class="header__navbar-mobile-item">
                        <a href="about.html" class="header__navbar-mobile-link">ABOUT</a>
                    </li>
                    
                    <li class="header__navbar-mobile-item">
                        <a href="" class="header__navbar-mobile-link">
                            <i class="header__navbar-icon fab fa-facebook-f"></i>
                            <i class="header__navbar-icon fab fa-instagram"></i>
                        </a>
                    </li>
                    <!-- <li class="header__navbar-mobile-item">
                        <a href="" class="header__navbar-mobile-link">
                            <i class="header__navbar-icon fab fa-instagram"></i>
                        </a>
                    </li> -->
                    <li class="header__navbar-mobile-item">
                        <button type="submit" class="header__navbar-book--btn ">
                            Book
                        </button>
                    </li>
                </ul>
                <!-- <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon fab fa-facebook-f"></i>
                        
                        </a>
                    </li>
                    <li class="header__navbar-item">
                        <a href="" class="header__navbar-icon-link">
                            <i class="header__navbar-icon fab fa-instagram"></i>
                        </a>
                    </li> -->
                </ul>
                
            </nav>
            <!-- navbar mobile -->

            <!-- <ul class="header__navbar-list">
                <li class="header__navbar-item">
                    <a href="" class="header__navbar-icon-link">
                        <i class="header__navbar-icon fab fa-facebook-f"></i>
                    
                    </a>
                </li>
                <li class="header__navbar-item">
                    <a href="" class="header__navbar-icon-link">
                        <i class="header__navbar-icon fab fa-instagram"></i>
                    </a>
                </li>
                <li class="header__navbar-item">
                    <button type="submit" class="header__navbar-book--btn ">
                        Book
                    </button>
                </li>
            </ul>  -->
        </nav>
    </div>
</header>