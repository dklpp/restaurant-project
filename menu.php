<!DOCTYPE html>
<html>

<head>
    <title>Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="menustyle.css" />
    <title>Restaurant Menu</title>
</head>

<body>
    <div class="container">
        <div class="header-menu">
            <div class="our-menu">
                OUR <span>MENU</span>
            </div>
            <div class="cart">
                <a class="link" href="cart.html">
                    <img class="cart-image" src="images/cart.png"><span class="number">0</span></a>
            </div>
        </div>
    </div>
    <main class="container">
        <div class="menu">
            <h2 class="menu-heading">Appetizers</h2>
            <div class="menu-block">
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Cheese plate</span>
                            <span class="price">$15.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <?php
                                session_start();
                                if(isset($_SESSION["user_id"])) {
                                    echo '<a class="add-cart" href="#">
                                    <img class="small-cart-image" src="images/small_cart.png" alt="">
                                    </a>';
                                } else {echo '';}
                            ?>
                            
                        </p>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Chicken Wings</span>
                            <span class="price">$11.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a class="add-cart" href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Mozzarella Sticks</span>
                            <span class="price">$9.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a class="add-cart" href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <h2 class="menu-heading">Main Course</h2>
            <div class="menu-block">
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Burger</span>
                            <span class="price">$8.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a class="add-cart" href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Salmon with puree</span>
                            <span class="price">$17.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a class="add-cart" href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Steak with grilled vegetables</span>
                            <span class="price">$14.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a class="add-cart" href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <h2 class="menu-heading">Desserts</h2>
            <div class="menu-block">
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Pancakes</span>
                            <span class="price">$10.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Ice Cream</span>
                            <span class="price">$5.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Cheesecake</span>
                            <span class="price">$7.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu">
            <h2 class="menu-heading">Drinks</h2>
            <div class="menu-block">
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Beer</span>
                            <span class="price">$3.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Juice</span>
                            <span class="price">$1.50</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
                <div class="menu-item">
                    <img src="#" class="item-image" />
                    <div class="item-text">
                        <h3 class="item-head">
                            <span class="name">Red wine</span>
                            <span class="price">$4.00</span>
                        </h3>
                        <p class="description">
                            Sed ut perspiciatis unde omnis iste
                            natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.
                            <a href="#">
                                <img class="small-cart-image" src="images/small_cart.png" alt="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="add-to-cart.js"></script>
</body>

</html>