<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <!-- Navbar -->
    <nav class="navbar-youplay navbar navbar-default navbar-fixed-top ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="off-canvas" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-2.html">
                    <img src="/web/uploads/images/logo.png" alt="">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-hover ">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Тестовое меню <span class="caret"></span> <span class="label">games</span>
                        </a>
                        <div class="dropdown-menu">
                            <ul role="menu">
                                <li><a href="/test/default/index">Главная</a></li>
                                <li><a href="/test/default/cart">Корзина</a></li>
                                <li><a href="/test/default/not-found">404</a></li>
                                <li><a href="/test/default/checkout">Оплата</a></li>
                                <li><a href="/test/default/coming-soon">Скоро выходят</a></li>
                                <li><a href="/test/default/contact">Контакты</a></li>
                            </ul>
                            <ul role="menu">
                                <li><a href="/test/default/login">Авторизация</a></li>
                                <li><a href="/test/default/store">Магазин</a></li>
                                <li><a href="/test/default/store-product">Продукт</a></li>
                                <li><a href="/test/default/user-messages">Сообщения пользователя</a></li>
                                <li><a href="/test/default/user-messages-compose">Написать сообщение</a></li>
                                <li><a href="/test/default/user-profile">Профиль</a></li>
                                <li><a href="/test/default/user-settings">Настройки профиля</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-hover ">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Blog <span class="caret"></span> <span class="label">news</span>
                        </a>
                        <div class="dropdown-menu">
                            <ul role="menu">
                                <li><a href="blog-1.html">Blog Style 1</a>
                                </li>
                                <li><a href="blog-2.html">Blog Style 2</a>
                                </li>
                                <li><a href="blog-3.html">Blog Style 3</a>
                                </li>
                            </ul>
                            <ul role="menu">
                                <li><a href="blog-post-1.html">Blog Post 1</a>
                                </li>
                                <li><a href="blog-post-2.html">Blog Post 2</a>
                                </li>
                                <li><a href="blog-post-3.html">Blog Post 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown dropdown-hover ">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Features <span class="caret"></span> <span class="label">full list</span>
                        </a>
                        <div class="dropdown-menu">
                            <ul role="menu">
                                <li class="dropdown dropdown-submenu pull-left ">
                                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User</a>
                                    <div class="dropdown-menu">
                                        <ul role="menu">
                                            <li><a href="user-activity.html">Activity</a>
                                            </li>
                                            <li><a href="user-profile.html">Profile</a>
                                            </li>
                                            <li><a href="user-messages.html">Messages</a>
                                            </li>
                                            <li><a href="user-messages-compose.html">Messages Compose</a>
                                            </li>
                                            <li><a href="user-settings.html">Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="forums.html">Forums</a>
                                </li>
                                <li><a href="forums-topics.html">Forums Topics</a>
                                </li>
                                <li><a href="forums-single-topic.html">Single Topic</a>
                                </li>
                                <li><a href="matches-list.html">Matches List</a>
                                </li>
                                <li><a href="match.html">Match</a>
                                </li>
                                <li><a href="match-2.html">Match with Maps</a>
                                </li>
                            </ul>
                            <ul role="menu">
                                <li><a href="widgets.html">Widgets <span class="badge bg-default">New</span></a>
                                </li>
                                <li><a href="components.html">Components</a>
                                </li>
                                <li><a href="coming-soon.html">Coming Soon</a>
                                </li>
                                <li><a href="contact.html">Contact Us</a>
                                </li>
                                <li><a href="search.html">Search</a>
                                </li>
                                <li><a href="login.html">Login</a>
                                </li>
                                <li><a href="404.html">404</a>
                                </li>
                                <li><a href="blank.html">Blank</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-hover">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            John Doe <span class="badge bg-default">2</span> <span class="caret"></span> <span class="label">it is you</span>
                        </a>
                        <div class="dropdown-menu">
                            <ul role="menu">
                                <li><a href="http://html.nkdev.info/youplay/documentation">Documentation</a>
                                </li>
                                <li><a href="http://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK">Purchase</a>
                                </li>
                                <li class="divider"></li>

                                <li><a href="user-profile.html">Profile <span class="badge pull-right bg-warning">13</span></a>
                                </li>
                                <li><a href="cart.html">My Cart <span class="badge pull-right bg-default">3</span></a>
                                </li>
                                <li class="divider"></li>

                                <li><a href="login.html">Log Out</a>
                                </li>
                                <li class="dropdown dropdown-submenu pull-left">
                                    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More..</a>
                                    <div class="dropdown-menu">
                                        <ul role="menu">
                                            <li><a href="#!">3rd level</a>
                                            </li>
                                            <li><a href="#!">3rd level</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a class="search-toggle" href="search.html">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="dropdown dropdown-hover dropdown-cart">
                        <a href="#!" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                        <div class="dropdown-menu" style="width: 300px;">
                            <div class="row youplay-side-news">
                                <div class="col-xs-3 col-md-4">
                                    <a href="#" class="angled-img">
                                        <div class="img">

                                            <img src="/web/uploads/images/game-bloodborne-500x375.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-9 col-md-8">
                                    <a href="#" style="text-decoration: none;" class="pull-right mr-10"><i class="fa fa-times"></i></a>

                                    <h4 class="ellipsis"><a href="#">Bloodborne</a></h4>
                                    <span class="quantity">1 × <span class="amount">$50.00</span></span>
                                </div>
                            </div>

                            <div class="row youplay-side-news">
                                <div class="col-xs-3 col-md-4">
                                    <a href="#" class="angled-img">
                                        <div class="img">

                                            <img src="/web/uploads/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-xs-9 col-md-8">
                                    <a href="#" style="text-decoration: none;" class="pull-right mr-10"><i class="fa fa-times"></i></a>

                                    <h4 class="ellipsis"><a href="#">Kingdoms of Amalur</a></h4>
                                    <span class="quantity">1 × <span class="amount">$20.00</span></span>
                                </div>
                            </div>

                            <div class="ml-20 mr-20 pull-right"><strong>Subtotal:</strong>  <span class="amount">$70.00</span>
                            </div>

                            <div class="btn-group pull-right m-15">
                                <a href="#" class="btn btn-default btn-sm">View Cart</a>
                                <a href="#" class="btn btn-default btn-sm">Checkout</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <?= $content ?>

</div>

<footer class="youplay-footer-parallax">
    <div class="wrapper" style="background-image: url('/web/uploads/images/footer-bg.jpg')">

        <!-- Social Buttons -->
        <div class="social">
            <div class="container">
                <h3>Connect socially with <strong>youplay</strong></h3>

                <div class="social-icons">
                    <div class="social-icon">
                        <a href="#!">
                            <i class="fa fa-facebook-square"></i>
                            <span>Like on Facebook</span>
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#!">
                            <i class="fa fa-twitter-square"></i>
                            <span>Follow on Twitter</span>
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#!">
                            <i class="fa fa-twitch"></i>
                            <span>Watch on Twitch</span>
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#!">
                            <i class="fa fa-youtube-square"></i>
                            <span>Watch on Youtube</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <strong>nK</strong> &copy; 2016. All rights reserved
            </div>
        </div>
        <!-- /Copyright -->

    </div>
</footer>
<!-- /Footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
