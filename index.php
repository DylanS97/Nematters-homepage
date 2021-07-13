<?php
    include_once 'inc/connection.php';

    $sql = "SELECT * FROM news ORDER BY upload_date DESC LIMIT 3";
    $results = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Stylesheet -->
        <link rel="stylesheet" href="css-min/styles.min.css">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;800&display=swap" rel="stylesheet">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/7031b4ba88.js" crossorigin="anonymous"></script>
        
        <title>Netmatters | Full Service Digital Agency | Norwich, Norfolk | Netmatters</title>
    </head>
    <body onload="checkCookies(); slideShow()">
        <div class="inner-body">
            <div class="cookies-container">
                <div class="cookies-box">
                    <h3>Cookies Policy</h3>
                    <hr>
                    <div class="text">
                        <p>We use cookies to obtain aggregate data regarding site traffic and interaction, in order to identify user trends and obtain insights in order to continually improve our site. These cookies enable us to improve your customer experience as you use our site and help provide you with relevant online marketing.</p>
                        <p>You can see a list of the other companies who use cookies on this website, by visiting cookie settings at the bottom of each page. For full details of how we use your personal information, and your rights in relation to it, view our privacy policy.</p>
                    </div>
                    <hr>
                    <div class="cookies-btns">
                        <button class="settings-btn caps"><span>change settings</span></button>
                        <button class="accept-cookies caps"><span>accept cookies</span></button>
                    </div>
                </div>
            </div>
            
            <div class="overlay-placeholder"></div>
            
            <div class="page-contents">

                <?php include 'inc/header.php'; ?>
        
                <!-- Image Slider -->
                <section id="img-slider">
                    <div class="slide-container">
                        <div class="slide-inner transition">
                            <div class="slide-img-container cyber-slide">
                                <div class="inner-slide">
                                    <h2 class="caps">cyber security</h2>
                                    <p>Keeping businesses and their customers<br>sensitive information protected.</p>
                                    <div class="arrow-btn">
                                        <button class="cyber-img-btn slide-btn caps cyber">
                                            <span>find out more</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-img-container web-slide">
                                <div class="inner-slide">
                                    <h2 class="caps">web design</h2>
                                    <p>For businesses looking to make a strong<br>and effective first impression.</p>
                                    <div class="arrow-btn">
                                        <button class="web-img-btn slide-btn caps web">
                                            <span>find out more</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-img-container support-slide">
                                <div class="inner-slide">
                                    <h2 class="caps">it Support</h2>
                                    <p>Fast and cost-effective IT support<br>services for your business.</p>
                                    <div class="arrow-btn">
                                        <button class="support-img-btn slide-btn caps support">
                                            <span>find out more</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-img-container telecoms-slide">
                                <div class="inner-slide">
                                    <h2 class="caps">telecoms services</h2>
                                    <p>A new approach to connectivity, see how<br>we can help your business.</p>
                                    <div class="arrow-btn">
                                        <button class="telecoms-img-btn slide-btn caps telecoms">
                                            <span>find out more</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-img-container bespoke-slide">
                                <div class="inner-slide">
                                    <h2 class="caps">bespoke software</h2>
                                    <p>Bring your business together<br>with solutions that grow with you.</p>
                                    <div class="arrow-btn">
                                        <button class="bespoke-img-btn slide-btn caps bespoke">
                                            <span>find out more</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-img-container marketing-slide">
                                <div class="inner-slide">
                                    <h2 class="caps">digital marketing</h2>
                                    <p>Generating you new business through<br>result-driven marketing activities.</p>
                                    <div class="arrow-btn">
                                        <button class="marketing-img-btn slide-btn caps marketing">
                                            <span>find out more</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-img-container cyber-slide">
                                <div class="inner-slide">
                                    <h2 class="caps">cyber security</h2>
                                    <p>Keeping businesses and their customers<br>sensitive information protected.</p>
                                    <div class="arrow-btn">
                                        <button class="cyber-img-btn slide-btn caps cyber">
                                            <span>find out more</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="slide-img-container web-slide">
                                <div class="inner-slide">
                                    <h2 class="caps">web design</h2>
                                    <p>For businesses looking to make a strong<br>and effective first impression.</p>
                                    <div class="arrow-btn">
                                        <button class="web-img-btn slide-btn caps web">
                                            <span>find out more</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dots-container">
                        <div class="dots active"><div class="inner-dot"></div></div>
                        <div class="dots"><div class="inner-dot"></div></div>
                        <div class="dots"><div class="inner-dot"></div></div>
                        <div class="dots"><div class="inner-dot"></div></div>
                        <div class="dots"><div class="inner-dot"></div></div>
                        <div class="dots"><div class="inner-dot"></div></div>
                    </div>
                </section><!-- /Image Slider -->
        
                <!-- Blocks -->
                <section id="block-container" class="max-width">
                    <div class="row-1">
                        <a id="first-block" class="block bespoke shadow-box">
                            <div class="block-logo">
                                <div class="logo"><i class="fas fa-th"></i></div>
                            </div>
                            <h5>Bespoke Software</h5>
                            <div class="block-bar"></div>
                            <p>Tailored software solutions to improve business productivity and online profits. Our expert team will ensure a software solution.</p>
                            <div class="block-btn btn caps">read more</div>
                        </a>
                        <a class="block support shadow-box">
                            <div class="block-logo support">
                                <div class="logo"><i class="fas fa-desktop"></i></div>
                            </div>
                            <h5>IT Support</h5>
                            <div class="block-bar"></div>
                            <p>Remotely managed IT services that is catered to your businesses needs, adds value and reduces cost.</p>
                            <div class="block-btn btn caps support">read more</div>
                        </a>
                        <a class="block marketing shadow-box">
                            <div class="block-logo marketing">
                                <div class="logo"><i class="fas fa-signal"></i></div>
                            </div>
                            <h5>Digital Marketing</h5>
                            <div class="block-bar"></div>
                            <p>Driving brand awareness and ROI through creative digital marketing campaigns. We Review and monitor online performance.</p>
                            <div class="block-btn btn caps marketing">read more</div>
                        </a>
                    </div>
                    <div class="row-2">
                        <a class="block telecoms shadow-box">
                            <div class="block-logo telecoms">
                                <div class="logo"><i class="fas fa-phone-volume"></i></div>
                            </div>
                            <h5>Telecoms Services</h5>
                            <div class="block-bar"></div>
                            <p>Stay connected with bespoke telecoms solutions when you need it most.</p>
                            <div class="block-btn btn caps telecoms">read more</div>
                        </a>
                        <a class="block web shadow-box">
                            <div class="block-logo web">
                                <div class="logo"><i class="fas fa-code"></i></div>
                            </div>
                            <h5>Web Design</h5>
                            <div class="block-bar"></div>
                            <p>User-centric design for businesses looking to make a lasting first impression.</p>
                            <div class="block-btn btn caps web">read more</div>
                        </a>
                        <a class="block cyber shadow-box">
                            <div class="block-logo cyber">
                                <div class="logo"><i class="fas fa-shield-alt"></i></div>
                            </div>
                            <h5>Cyber Security</h5>
                            <div class="block-bar"></div>
                            <p>Ensuring your online business stays secure 24/7, 365 days of the year.</p>
                            <div class="block-btn btn caps cyber">read more</div>
                        </a>
                        <a class="block training shadow-box web">
                            <div class="block-logo web">
                                <div class="logo"><i class="fas fa-graduation-cap"></i></div>
                            </div>
                            <h5>Developer Training</h5>
                            <div class="block-bar"></div>
                            <p>Have you considered a career in web development but you aren't sure where to start?.</p>
                            <div class="block-btn btn caps web">read more</div>
                        </a>
                    </div>
                </section><!-- /Blocks -->
                
                <!-- Culture -->
                <section id="our-culture">
                    <div class="container-culture max-width">
                        <div class="inner-culture">
                            <h2 class="caps">netmatters</h2>
                            <p><strong>Netmatters Ltd is a leading web design, IT support and digital marketing agency based in Wymondham, Norfolk.</strong></p>
                            <p>Founded in 2008, we work with businesses from a variety of industries to gain new prospects, nurture existing leads and further grow their sales.</p>
                            <p>We provide cost effective, reliable solutions to a range of services; from bespoke cloud-based management systems, workflow and IT solutions through to creative website development and integrated digital campaigning.</p>
                            <div class="arrow-btn">
                                <button class="caps btn">
                                    <span>our culture</span>
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </section><!-- /Culture -->
        
                <!-- Posted Cards -->
                <section id="latest-cards">
                    <div class="shadow-bottom center">
                        <div class="header-latest max-width">
                            <div class="caps">
                                <span>latest</span>
                            </div>
                        </div>
                    </div>
                    <div class="shadow-bottom">
                        <div class="card-container max-width">
                            <?php $i = 1; foreach ($results as $card) {?>
                            <div class="card">
                                <div class="card-inner" >
                                    <div class="card-img-container">
                                        <div <?php echo 'style="background-image: url(\'' . $card['image'] . '\')" ' ?> class="card-top image-position">
                                            <img <?php echo ' src="' . $card['image'] . '" alt="' . $card['image_alt'] . '"'; ?>>
                                            <div class="gradient"></div>
                                        </div>
                                    </div>
                                    <a href="#" <?php echo 'class="caps tag tag-' . $i . '"' ?> class="caps tag"><?php echo $card['category']; ?></a>
                                    <div <?php echo 'class="card-body ' . 'card-' . $i . '"' ?>>
                                        <a href="#"><h5 class="card-title"><?php echo $card['title'] ?></h5></a>
                                        <p class="card-text"><?php echo $card['description'] ?></p>
                                        <a href="#" class="btn card-btn caps">read more</a>
                                        <hr>
                                        <div class="card-footer">
                                            <div class="card-logo"><img <?php echo 'src="' . $card['pro_image'] . '" alt="' . $card['upload_by'] . '"'; ?> ></div>
                                            <ul>
                                                <li><span><strong>Posted by <?php echo $card['upload_by']; ?></strong></span></li>
                                                <li><span class="date-posted"><?php echo date("d F Y", strtotime($card['upload_date'])) ?></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $i++; } ?>
                        </div>
                    </div>
                </section><!-- /Posted Cards -->
        
                <!-- Clients -->
                <section class="clients">
                    <div class="flex-clients max-width">
                        <div class="busseys each-client">
                            <img class="grey" src="images/clients/busseys-grey.jpg" alt="Busseys">
                            <img class="colour" src="images/clients/client-busseys.png" alt="Busseys">
                            <div class="client-center client-info busseys-info">
                                <h3>Busseys</h3>
                                <div class="info-bar"></div>
                                <p>One of the UK's leading Ford dealerships.</p>
                            </div>
                            <div class="client-center arrow"></div>
                        </div>
                        <div class="crane each-client">
                            <img class="grey" src="images/clients/crane-grey.jpg" alt="Crane">
                            <img class="colour" src="images/clients/client-crane.png" alt="Crane">
                            <div class="client-center client-info crane-info">
                                <h3>Crane Golden Builders</h3>
                                <div class="info-bar"></div>
                                <p>Leading manufacturer and supplier of High-end garden rooms, summerhouses, workshops, and sheds in the uk.</p>
                            </div>
                            <div class="client-center arrow"></div>
                        </div>
                        <div class="beat each-client">
                            <img class="grey" src="images/clients/beat-grey.jpg" alt="Beat">
                            <img class="colour" src="images/clients/client-beat.png" alt="Beat">
                            <div class="client-center client-info beat-info">
                                <h3>Beat</h3>
                                <div class="info-bar"></div>
                                <p>The UK's eating disorder charity founded in 1989.</p>
                            </div>
                            <div class="client-center arrow"></div>
                        </div>
                        <div class="northern-diver each-client">
                            <img class="grey" src="images/clients/north-grey.jpg" alt="Northern Diver">
                            <img class="colour northern" src="images/clients/client-northern-diver.png" alt="Northern Diver">
                            <div class="client-center client-info nd-info">
                                <h3>Northern Diver</h3>
                                <div class="info-bar"></div>
                                <p>Global water based equipment manufacturers for sport, military, commercial and rescue businesses.</p>
                            </div>
                            <div class="client-center arrow"></div>
                        </div>
                    </div>
                </section><!-- /Clients -->
        
                <?php include 'inc/newsletter.php'; ?>                
        
                <?php include 'inc/footer.php'; ?>

                <?php include 'inc/partners.php'; ?>
            </div>
    
        <?php include 'inc/side-bar.php'; ?>                        

        <!-- JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js-min/app.js"></script>
    </body>
</html>