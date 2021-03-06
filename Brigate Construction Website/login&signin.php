<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login or Signup</title>
    <!-- ------ page icon ------- -->
    <link rel="icon" href="img/favicon.jpg" type="image/x-icon" />
    <!--------- google fonts work sans --------->
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- ----- google fonts work sans ------- -->
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- google fonts oswald  -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <!-- google fonts open sans  -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- ------- font awesome ------- -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="vendor/css/normalize.css" />
    <link rel="stylesheet" href="vendor/css/grid.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
    <!-------------Preloader------------->
    <div id="preloader">
        <div class="loader-container">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
    <!-------------End Preloader------------->

    <!------------ header section ---------------->

    <header id="pageTop" class="header">
        <div class="row">
            <div class="topIntro">
                <div class="phone">
                    <i class="fa fa-phone"></i><span>Phone: +(98) 888 7777</span>
                </div>
                <div class="email">
                    <i class="fa fa-envelope"></i><span>Email: sample-email@example.com</span>
                </div>
                <div class="socialLinks">
                    <div class="faceBook">
                        <i class="fa fa-facebook"></i>
                    </div>
                    <div class="twittEr">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="linkedIn">
                        <i class="fa fa-linkedin-square"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!------------ navigation section ---------------->

    <nav class="navBar">
        <div class="row">
            <div class="logo">
                <img src="img/logo.svg" alt="Brigate" />
            </div>
            <div class="navLinks">
                <ul class="menuLinks">
                    <li class="subMenuContainer">
                        <a href="index1.html">home<i class="fa fa-angle-down"></i></a>
                        <ul class="subMenu1">
                            <li><a href="index1.html">home1</a></li>
                            <li><a href="index2.html">home2</a></li>
                        </ul>
                    </li>
                    <li class="subMenuContainer">
                        <a href="#">pages<i class="fa fa-angle-down"></i></a>
                        <ul class="subMenu2">
                            <li><a href="#">About Company</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">FAQ’s</a></li>
                            <li><a href="#">404 Page</a></li>

                            <li><a href="#">Teams</a></li>
                            <li><a href="#">typography</a></li>
                            <li><a href="#">form</a></li>
                            <li><a href="#">progress bar</a></li>
                            <li><a href="#">privacy policy</a></li>
                            <li><a href="#">search</a></li>
                            <li><a href="#">button</a></li>
                            <li><a href="#">tab</a></li>
                            <li><a href="#">table</a></li>
                            <li>
                                <a href="#">accordion and Toggle</a>
                            </li>
                            <li>
                                <a href="#">counter and countdown</a>
                            </li>
                        </ul>
                    </li>
                    <li class="subMenuContainer">
                        <a href="#">services<i class="fa fa-angle-down"></i></a>
                        <ul class="subMenu3">
                            <li><a href="#">services</a></li>
                            <li><a href="#">services detail</a></li>
                        </ul>
                    </li>
                    <li class="subMenuContainer">
                        <a href="#">projects<i class="fa fa-angle-down"></i></a>
                        <ul class="subMenu4">
                            <li><a href="#">projects</a></li>
                            <li><a href="#">projects detail</a></li>
                        </ul>
                    </li>
                    <li class="subMenuContainer">
                        <a class="activeLink" href="login&signin.html">account</a>
                    </li>
                    <li class="subMenuContainer"><a href="contact.html">contact</a></li>
                    <li class="subMenuContainer">
                        <a href="#"><i class="searchIcon fa fa-search"></i></a>
                        <div class="searchBox">
                            <form action="#" method="GET" class="searchForm">
                                <input type="text" name="txt" placeholder="Search Here" class="searchInput" required />
                                <button class="btnSearch">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!------------ mobile navigation section ---------------->

    <nav class="mobileNavBar">
        <div class="row">
            <div class="col1 span-1-of-3 searchIcon">
                <i class="fa fa-search"></i>
            </div>
            <div class="col1 span-1-of-3 mblLogo">
                <img src="img/logo.svg" alt="Brigate" />
            </div>
            <div class="col1 span-1-of-3 mobileMenu">
                <i class="mblMenuIcon fa fa-align-right"></i>
            </div>
        </div>
        <div class="mblNavLinks">
            <ul>
                <li>
                    <a href="index1.html">home <i class="fa fa-angle-down"></i></a>
                </li>
                <li>
                    <a href="#">pages <i class="fa fa-angle-down"></i></a>
                </li>
                <li>
                    <a href="#">services <i class="fa fa-angle-down"></i></a>
                </li>
                <li>
                    <a href="#">projects <i class="fa fa-angle-down"></i></a>
                </li>
                <li>
                    <a href="login&signin.html">account <i class="fa fa-angle-down"></i></a>
                </li>
                <li>
                    <a class="activeLink" href="contact.html">contact <i class="fa fa-angle-down"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <!------------ container section ---------------->

    <section class="LoginReg">
        <div class="row">
            <div class="formBox">
                <span id="regHeader" class="formHeader">Register</span>
                <span id="loginHeader" class="formHeader">Login</span>
                <hr id="indicator">
                <form action="account.php" method="get" onsubmit="return false" class="regForm">
                    <input type="text" name="fname" placeholder="First Name">
                    <input type="text" name="lname" placeholder="Last Name">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button class="btn btnHover btnForm">registration</button>
                </form>
                <form action="account.php" method="get" onsubmit="return false" class="loginForm">
                    <input type="text" name="username" placeholder="Username">
                    <i class="fa fa-user"></i>
                    <input type="password" name="password" placeholder="Password">
                    <i class="fa fa-lock"></i>
                    <input type="checkbox">
                    <label>remember me</label>
                    <label class="forgotPassword"><a href="#">forgot password?</a></label>
                    <label class="needAccount"><a href="#">need an account?</a></label>
                    <button class="btn btnHover btnForm">login</button>
                </form>
            </div>
        </div>
    </section>

    <!------------ footer section ---------------->

    <footer class="footerSection">
        <div class="row footerContainer">
            <div class="col1 span-1-of-4 footerBox">
                <h4>about us</h4>
                <p>
                    Mauris mattis auctor cursus. Phasellus tellus tellus, imperdiet ut
                    imperdiet eu, iaculis a sem. Donec vehicula luctus nunc in laoreet.
                </p>
                <ul class="footerIcons">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col1 span-1-of-4 footerBox">
                <h4>contact us</h4>
                <div class="footerAdress">
                    <i class="fa fa-home"></i>
                    <p>
                        Raffles Avenue, Singapore <br />
                        Flyer, Singapore
                    </p>
                </div>
                <div class="footerCall">
                    <i class="fa fa-phone"></i>
                    <p>
                        +(98) 888 7777 <br />
                        +(12) 999 22333
                    </p>
                </div>
                <div class="footerEmail">
                    <i class="fa fa-envelope"></i>
                    <p>
                        sample-email@example.com <br />
                        myinfo@example.com
                    </p>
                </div>
            </div>
            <div class="col1 span-1-of-4 footerBox">
                <h4>useful links</h4>
                <ul class="usefulLinks">
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i>home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i>about us</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i>services</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i>news</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angle-right"></i>portfolio</a>
                    </li>
                </ul>
            </div>
            <div class="col1 span-1-of-4 footerBox">
                <h4>recent post</h4>
                <div class="leftPost">
                    <strong>24</strong>
                    <span class="postMonth">april</span>
                    <span class="postYear">2019</span>
                </div>
                <div class="rightPost">
                    <h6>WHERE WE'RE STANDING RIGHT NOW</h6>
                    <ul class="rightPostList">
                        <li><i class="fa fa-user"></i>by admin</li>
                        <li><i class="fa fa-comments"></i>28</li>
                    </ul>
                </div>
                <div class="leftPost">
                    <strong>24</strong>
                    <span class="postMonth">april</span>
                    <span class="postYear">2019</span>
                </div>
                <div class="rightPost">
                    <h6>AND MAYBE KNOWING ISN'T THE POINT</h6>
                    <ul class="rightPostList">
                        <li><i class="fa fa-user"></i>by admin</li>
                        <li><i class="fa fa-comments"></i>28</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footerLast">
            <div class="row">
                <div class="col1 span-1-of-2 lastFooterBox">
                    <span> © Copyright 2019. All rights reserved. </span>
                </div>
                <div class="col1 span-1-of-2 lastFooterBox">
                    <ul>
                        <li><a href="#">faqs</a></li>
                        <li><a href="#">privacy</a></li>
                        <li><a href="#">policy</a></li>
                        <li><a href="#">support</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-------------- arrow button ----------------->
        <button class="btnArrow">
            <a href="#"><i class="fa fa-angle-up"></i></a>
        </button>
    </footer>

    <!------------ javascript section ---------------->

    <script>
        let regHeader = document.getElementById("regHeader");
        let loginHeader = document.getElementById("loginHeader");
        let indicator = document.getElementById("indicator");
        let regForm = document.querySelector(".regForm");
        let loginForm = document.querySelector(".loginForm");
        let needAccount = document.querySelector(".needAccount");

        regHeader.addEventListener("click", function () {
            indicator.setAttribute("style", "margin-left:10%;")
            regForm.setAttribute("style", "left:0%;");
            loginForm.setAttribute("style", "right:-100%;");
        })

        needAccount.addEventListener("click", function () {
            indicator.setAttribute("style", "margin-left:10%;")
            regForm.setAttribute("style", "left:0%;");
            loginForm.setAttribute("style", "right:-100%;");
        })

        loginHeader.addEventListener("click", function () {
            indicator.setAttribute("style", "margin-left:54%;")
            regForm.setAttribute("style", "left:-100%;");
            loginForm.setAttribute("style", "right:0%;");
        })

    </script>

    <script src="vendor/js/animated_circle.js"></script>
    <script src="vendor/js/morphext.min.js"></script>
    <script src="vendor/js/respond.min.js"></script>
    <script src="vendor/js/html5shiv.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/contact.js"></script>


    <!---------------------- php part ----------------->

    <?php

    ?>
</body>

</html>
