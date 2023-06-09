<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header-line">
                <div class="header-name">RESTAURANT</div>
                <div class="nav">
                    <a class="nav-item" href="#">HOME</a>
                    <a class="nav-item" href="menu.php">MENU</a>
                    <a class="nav-item" href="aboutus.html">ABOUT US</a>
                    <a class="nav-item" href="bookatable.html">RESERVATION</a>
                    <?php
                        session_start();
                        if(isset($_SESSION["user_id"])) {
                            echo '<a class="nav-item" href="profile.php">PROFILE</a>';
                        } else {
                            echo '<a class="nav-item" href="signup.html">SIGN UP / LOGIN</a>';
                        }
                    ?>
                </div>
                <div class="cart">
                    <a href="#">
                        <img class="cart-image" src="images/cart.png" alt="">
                    </a>
                </div>

                <div class="phone">
                    <div class="phone-pos">
                        <div class="phone-img">
                            <img src="images/phone.png" alt="">
                        </div>
                        <div class="number">
                            <a class="num" href="#">+370 678 44 555</a>
                        </div>
                    </div>
                    <div class="phone-text">Contact us for a reservation</div>
                </div>

                <div class="btn">
                    <a class="book-a-table" href="bookatable.html">BOOK A TABLE</a>
                </div>
                <div class="burger-menu">
                    <button id="burger">
                        <img src="images/burger_menu.png" alt="">
                    </button>
                    <div id='menu' class="bg-slide disp">
                        <a class="nav-item blocks" href="#">HOME</a>
                        <a class="nav-item blocks" href="menu.php">MENU</a>
                        <a class="nav-item blocks" href="aboutus.html">ABOUT US</a>
                        <a class="nav-item blocks" href="bookatable.html">RESERVATION</a>
                        <?php
                        session_start();
                        if(isset($_SESSION["user_id"])) {
                            echo '<a class="nav-item blocks" href="profile.php">PROFILE</a>';
                        } else {
                            echo '<a class="nav-item blocks" href="signup.html">SIGN UP / LOGIN</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="header-down">
                <div class="header-title">
                    WELCOME TO OUR
                    <div class="header-subtitle">
                        RESTAURANT
                    </div>
                    <div class="subtitle">
                        The best restaurant in the city
                    </div>

                    <div class="header-btn">
                        <a class="header-button" href="menu.php">VIEW MENU</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blocks">
        <div class="container">
            <div class="blocks-holder">
                <div class="block">
                    <div class="block-image">
                        <img class="block-img" src="images/food.png" alt="">
                    </div>
                    <div class="block-head">
                        Magical<span>Atmosphere</span>
                    </div>
                    <div class="block-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>
                <div class="block">
                    <div class="block-image">
                        <img class="block-img" src="images/food.png" alt="">
                    </div>
                    <div class="block-head">
                        Best<span>Food</span>
                    </div>
                    <div class="block-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>
                <div class="block">
                    <div class="block-image">
                        <img class="block-img" src="images/food.png" alt="">
                    </div>
                    <div class="block-head">
                        Great<span>Price</span>
                    </div>
                    <div class="block-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore.
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    <div class="intro">
        <div class="container">
            <div class="intro-holder">
                <div class="intro-info">
                    <div class="intro-title">
                        Our <span>History</span>
                    </div>
                    <div class="intro-text">
                        Welcome to our restaurant, where you will experience
                        a culinary journey that will delight your senses.
                        Our restaurant offers a cozy and inviting ambiance,
                        where you can savor a meal in the company of your loved ones or
                        friends.
                    </div>
                    <div class="intro-btn">
                        <a class="intro-button" href="aboutus.html">LEARN MORE</a>
                    </div>
                </div>
                <div class="history-img">
                    <img class="image" src="images/second-page.jpg" alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="black-block">

        <div class="container">

            <div class="block-holder">
                <div class="left">
                    <div class="left-title">
                        CHERISH YOUR BEST MOMENTS WITH US
                    </div>

                    <div class="left-text">
                        All offered for this week only at 10% off!
                    </div>
                </div>

                <div class="right">
                    <div class="right-button">
                        <a href="bookatable.html" class="right-btn">BOOK A TABLE</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="menu">
        <div class="container">
            <div class="holder">
                <div class="menu-title">
                    OUR <span>MENU</span>
                </div>
                <div class="menu-items">
                    <div class="food">
                        <div class="menu-image">
                            <img src="images/salmon.jpg" class="menu-img">
                        </div>
                        <div class="description">
                            Grilled salmon steak with <br> vegetables
                        </div>
                    </div>
                    <div class="food">
                        <div class="menu-image">
                            <img src="images/burger.png" class="menu-img">
                        </div>
                        <div class="description">
                            Fish burger with fresh pickles,<br> cheese, and cheesy sauce
                        </div>
                    </div>
                    <div class="food">
                        <div class="menu-image">
                            <img src="images/pancake.png" class="menu-img">
                        </div>
                        <div class="description">
                            Sweet pancakes with caramel <br> syrup and fruits
                        </div>
                    </div>
                </div>
                <div class="all-menu">
                    <a class="text" href="menu.php">SEE ALL MENU</a>
                </div>
            </div>
        </div>
    </div>

    <div class="comment">
        <div class="container">
            <div class="comment-one">
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore <br> et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation <br>
                ullamco laboris nisi ut aliquip ex ea commodo consequat."
            </div>
            <div class="comment-human">
                <img class="image-1" src="images/person.png" alt="">
            </div>
            <div class="subcomment">
                Happy Guest
            </div>
            <div class="subsubcomment">
                John
            </div>
        </div>
    </div>
    <div class="order">
        <!--<div class="container">-->
        <div class="order-holder">
            <div class="order-header">
                <div class="order-head">
                    ORDER
                </div>
                <div class="subhead">
                    Pick-up and delivery
                </div>
                <div class="pick-up">
                    CONTACTLESS PICK-UP
                </div>
                <div class="order-text">
                    To place an order for delivery <br>
                    please order via our website
                    or <br><a class="bolt-food" href="https://food.bolt.eu/lt-lt">BOLT FOOD</a>
                </div>
                <div class="order-button">
                    <a href="menu.html" class="order-btn">ORDER</a>
                </div>
            </div>
            <div class="order-image">
                <img src="images/order.png" class="order-img">
            </div>
        </div>
        <!--<</div>-->
    </div>
    <div class="footer">
        <div class="links">
            <a class="link" href="#">HOME</a>
            <a class="link" href="menu.html">MENU</a>
            <a class="link" href="aboutus.html">ABOUT US</a>
            <a class="link" href="bookatable.html">RESERVATION</a>
            <a class="link" href="signup.html">SIGN UP / LOGIN</a>
        </div>
        <div class="socials">
            <a class="social-link" href="#">
                <img class="social" src="images/facebook.png">
            </a>
            <a class="social-link" href="#">
                <img class="social" src="images/instagram.png">
            </a>
            <a class="social-link" href="#">
                <img class="social" src="images/twitter.png">
            </a>
            <a class="social-link" href="#">
                <img class="social" src="images/linkedin.png">
            </a>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>