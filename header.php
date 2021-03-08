<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title()?></title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>
    <!--Font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--CSS da pagina-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    

    <?php wp_head(); ?>
</head>
<body>
    <header id="container-header">
        <div id="header-box1">
            <div class="uk-navbar-right">
            <button>LOGIN</button>
                <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
                <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                    <form class="uk-search uk-search-navbar ul-width-1-1" action="">
                        <input class="uk-seach-input" type="search" placeholder="Procurar" name="" id="" autofocus>
                    </form>
                </div>
            </div>
        </div>
        <div id="header-box2">
            <nav id="menu-header">
                <figure id="logo-header">
                    <img src="./wp-content/themes/wp-teste/assets/images/logo.png" alt="Logo Med USA">
                </figure>
                <nav class="uk-navbar-container uk-margin" uk-navbar="mode: click">
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active"><a href="#">ABOUT</a></li>
                            <li><a href="#">SERVICE</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Service 1</a></li>
                                    <li><a href="#">Service 2</a></li>
                                    <li><a href="#">Service 3</a></li>
                                </ul>
                            </div>
                            </li>
                            <li><a href="#">SOFTWARE</a></li>
                            <li><a href="#">CONTACT US</a></li>
                        </ul>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
    <main id="container-main">
        <section id="main-box1">
            <figure>
                <img src="./wp-content/themes/wp-teste/assets/images/MEDUSA_HOME.jpg" alt="">
            </figure>
            <div id="info">
                <h1>MedUSA</h1>
                <span class="line"></span>
                <p>Physican services to help you manage your practice.</p>
                <div id="btns">
                    <button class="btn">View our Services</button>
                    <button class="btn">Software We Offer</button>
                </div>
            </div>
        </section>
        <section id="main-box2">
            <div id="info-2">
                <h2>Cloud Based RCM Service and Software</h2>
                <span class="line2"></span>
                <strong>Execellent Service is our Promise</strong>
                <p>Providing exellent service to your patients and your practice is our promise. Our dedicated team of billing specialists and billing managers are here to help. We have over 38 years of combined practice managenment and industry knowlodge. let our experience work for you.</p>
                <button class="btn">See Our Case Studies</button>
            </div>
            <figure id="doctor">
                <img src="./wp-content/themes/wp-teste/assets/images/MEDUSA_HOME_DOCTOR.jpg" alt="">
            </figure>       
        </section>
        <section>
            <div id="form-content">
                <h2>From Small Practices to Large Provider Health Systems, Med USA Provides Scalable Solutions.</h2>
                <form action="" class="form-home">
                    <fieldset>
                        <legend>Reach out to see how team can help</legend>
                        <input type="text" name="" id="" placeholder="First Name">
                        <input type="text" name="" id="" placeholder="Last Name">
                    </fieldset>
                    <fieldset>
                        <input type="text" name="" id="" placeholder="Email">
                        <input type="text" name="" id="" placeholder="Phone">
                    </fieldset>
                    <button class="btn">Submit</button>
                </form>
            </div>
        </section>    
    </main>
    <footer id="container-footer">
        <figure id="logo-footer">
            <img src="./wp-content/themes/wp-teste/assets/images/logo.png" alt="">
        </figure>
        <div class="address">
            <div>9825 S 500w</div>
            <div>Sandy, UT 84070</div>
            <div>Suport: 801.132.9500</div>
            <div>Sales: 855.303.8806</div>
            <div>info@medusarcm.com</div>
            <a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
            <a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
            <a href="" class="uk-icon-button" uk-icon="linkedin"></a>
        </div>
        <div class="information1">
            <p>About MedUSA</p>
            <p>Case Studies</p>
        </div>
        <div class=" information2">
                <p>Service</p>
                <p>Software</p>
        </div>
        <div class="information3">
            <p>Blog</p>
            <p>Contact Us</p>
        </div>    
            
        <div id="packges">
            <p>Packages</p>
            <p>Gold</p>
            <p>Platinum</p>
            <p>Silver</p>
        </div>
    </footer>
    