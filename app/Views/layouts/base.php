<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?= base_url()?>/public/assets/index.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        />
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"
        />
        <link
            href="https://fonts.googleapis.com/css?family=Montserrat"
            rel="stylesheet"
        />
        <title>PSD-HTML</title>
    </head>
    <body>
        <div class="content">
            <div class="header">
                <div class="top-menu">
                    <div class="container">
                        <div class="social-icons">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i
                            ></a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i
                            ></a>
                            <a href="">
                                <i
                                    class="fa fa-pinterest-p"
                                    aria-hidden="true"
                                ></i
                            ></a>
                            <a href="">
                                <i class="fa fa-vk" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i
                                    class="fa fa-google-plus"
                                    aria-hidden="true"
                                ></i>
                            </a>
                            <a href="">
                                <i class="fa fa-behance" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i
                                    class="fa fa-dribbble"
                                    aria-hidden="true"
                                ></i>
                            </a>
                            <a href="">
                                <i
                                    class="fa fa-instagram"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                        <div class="right-top-menu">
                            <div class="sign-in">
                                <span class="material-symbols-outlined">
                                    account_circle
                                </span>
                                <span>SIGN IN</span>
                            </div>
                            <div class="language">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                                <span> ENG </span>
                                <span class="material-symbols-outlined"
                                    >expand_more</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
<?= $this->renderSection("content"); ?>

    <div class="footer">
                <div class="insta-widget">
                    <img src="./image/insta/1.png" alt="" />
                    <img src="./image/insta/2.png" alt="" />
                    <img src="./image/insta/3.png" alt="" />
                    <img src="./image/insta/4.png" alt="" />
                    <img src="./image/insta/5.png" alt="" />
                    <img src="./image/insta/6.png" alt="" />
                    <img src="./image/insta/7.png" alt="" />
                    <img src="./image/insta/8.png" alt="" />
                </div>
                <div class="footer-subscribe">
                    <div class="footer-subscribe-container">
                        <p>Subscribe to our newsletter</p>
                        <input placeholder="Email Address" type="email" />
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
                <div class="top">
                    <div class="top-container">
                        <div class="pages-widget">
                            <p class="pages-widget-title">PAGES WIDGET</p>
                            <ul class="page-widget-list">
                                <li class="page">
                                    <div>
                                        HOME
                                        <button
                                            class="page-widget-expand"
                                            onclick="handleClick(this)"
                                        >
                                            <span
                                                class="material-symbols-outlined"
                                            >
                                                add
                                            </span>
                                        </button>
                                    </div>
                                    <div class="expand-div">
                                        <ul>
                                            <li><a href="">Service</a></li>
                                            <li><a href="">FAQ</a></li>
                                            <li><a href="">About</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        PAGES
                                        <button
                                            onclick="handleClick(this)"
                                            id="btn-1"
                                        >
                                            <span
                                                class="material-symbols-outlined"
                                            >
                                                add
                                            </span>
                                        </button>
                                    </div>
                                    <div class="expand-div">
                                        <ul>
                                            <li><a href="">Service</a></li>
                                            <li><a href="">FAQ</a></li>
                                            <li><a href="">About</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        PORTFOLIO
                                        <button
                                            onclick="handleClick(this)"
                                            id="btn-1"
                                        >
                                            <span
                                                class="material-symbols-outlined"
                                            >
                                                add
                                            </span>
                                        </button>
                                    </div>
                                    <div class="expand-div">
                                        <ul>
                                            <li><a href="">Service</a></li>
                                            <li><a href="">FAQ</a></li>
                                            <li><a href="">About</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        BLOG
                                        <button onclick="handleClick(this)">
                                            <span
                                                class="material-symbols-outlined"
                                            >
                                                add
                                            </span>
                                        </button>
                                    </div>
                                    <div class="expand-div">
                                        <ul>
                                            <li><a href="">Service</a></li>
                                            <li><a href="">FAQ</a></li>
                                            <li><a href="">About</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        SHOP
                                        <button onclick="handleClick(this)">
                                            <span
                                                class="material-symbols-outlined"
                                            >
                                                add
                                            </span>
                                        </button>
                                    </div>
                                    <div class="expand-div">
                                        <ul>
                                            <li><a href="">Service</a></li>
                                            <li><a href="">FAQ</a></li>
                                            <li><a href="">About</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="twitter-widget">
                                <p class="twitter-widget-title">
                                    TWITTER WIDGET
                                </p>
                                <ul>
                                    <li class="tweet">
                                        <div class="top-tweet">
                                            <i
                                                class="fa fa-twitter"
                                                aria-hidden="true"
                                            ></i>
                                            <p>
                                                <span>@PASCO</span>, Duis
                                                commodo elit sed nisi molestie
                                            </p>
                                        </div>
                                        <div class="bot-tweet">
                                            2 hours ago →
                                            <span>
                                                <a href="">Reply</a>
                                            </span>
                                            <span>
                                                <a href="">Retweet</a>
                                            </span>
                                            <span>
                                                <a href="">Favorite</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="tweet">
                                        <div class="top-tweet">
                                            <i
                                                class="fa fa-twitter"
                                                aria-hidden="true"
                                            ></i>
                                            <p>
                                                <span>@PASCO</span>, Duis
                                                commodo elit sed nisi molestie
                                            </p>
                                        </div>
                                        <div class="bot-tweet">
                                            2 hours ago →
                                            <span>
                                                <a href="">Reply</a>
                                            </span>
                                            <span>
                                                <a href="">Retweet</a>
                                            </span>
                                            <span>
                                                <a href="">Favorite</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li class="tweet">
                                        <div class="top-tweet">
                                            <i
                                                class="fa fa-twitter"
                                                aria-hidden="true"
                                            ></i>
                                            <p>
                                                <span>@PASCO</span>, Duis
                                                commodo elit sed nisi molestie
                                            </p>
                                        </div>
                                        <div class="bot-tweet">
                                            2 hours ago →
                                            <span>
                                                <a href="">Reply</a>
                                            </span>
                                            <span>
                                                <a href="">Retweet</a>
                                            </span>
                                            <span>
                                                <a href="">Favorite</a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="social-widget">
                                <p class="social-widget-title">SOCIAL WIDGET</p>
                                <div class="social-icons-widget">
                                    <a href="">
                                        <i
                                            class="fa fa-facebook"
                                            aria-hidden="true"
                                        ></i
                                    ></a>
                                    <a href="">
                                        <i
                                            class="fa fa-twitter"
                                            aria-hidden="true"
                                        ></i
                                    ></a>
                                    <a href="">
                                        <i
                                            class="fa fa-vk"
                                            aria-hidden="true"
                                        ></i>
                                    </a>
                                    <a href="">
                                        <i
                                            class="fa fa-pinterest-p"
                                            aria-hidden="true"
                                        ></i
                                    ></a>
                                    <a href="">
                                        <i
                                            class="fa fa-tumblr"
                                            aria-hidden="true"
                                        ></i>
                                    </a>
                                    <a href="">
                                        <i
                                            class="fa fa-dribbble"
                                            aria-hidden="true"
                                        ></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flicker">
                            <p class="flicker-title">FLICKR WIDGET</p>
                            <div class="flicker-grid">
                                <img src="./image/bot/1.png" alt="" />
                                <img src="./image/bot/2.png" alt="" />
                                <img src="./image/bot/3.png" alt="" />
                                <img src="./image/bot/4.png" alt="" />
                                <img src="./image/bot/5.png" alt="" />
                                <img src="./image/bot/6.png" alt="" />
                                <img src="./image/bot/7.png" alt="" />
                                <img src="./image/bot/8.png" alt="" />
                                <img src="./image/bot/9.png" alt="" />
                            </div>
                        </div>
                        <div class="news-letter">
                            <p class="news-letter-title">NEWS LETTER</p>
                            <form action="">
                                <input type="text" placeholder="Name" />
                                <input
                                    type="email"
                                    placeholder="Email Address"
                                />
                                <textarea
                                    placeholder="Message"
                                    name=""
                                    id=""
                                    cols="30"
                                    rows="10"
                                ></textarea>
                                <button>SUBSCRIBE</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bot">
                    <div class="footer-bot-container">
                        <div class="footer-sort">
                            <ul>
                                <li><a href="">HOME</a></li>
                                <li><a href="">PORTFOLIO</a></li>
                                <li><a href="">BLOG</a></li>
                                <li><a href="">PAGES</a></li>
                                <li><a href="">SHOP</a></li>
                                <li><a href="">COMPONENTS</a></li>
                                <li><a href="">FEATURES</a></li>
                            </ul>
                        </div>
                        <div class="bot-search-bar">
                            <input type="text" placeholder="Search" />
                            <button>
                                <span class="material-symbols-outlined">
                                    search
                                </span>
                            </button>
                        </div>
                        <div class="language-bot">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span> ENG </span>
                            <span class="material-symbols-outlined"
                                >expand_more</span
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./index.js"></script>
    </body>
</html>
