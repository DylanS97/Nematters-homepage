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
        
        <title>Contact Us | Netmatters</title>
    </head>
    <body>
        <div class="added-contact">
            <div class="message">
                <span></span>
            </div>
            <div class="icon"></div>
        </div>

        <div class="overlay-placeholder"></div>
        
        <div class="page-contents">

            <?php include 'inc/header.php'; ?>

            <!-- Track -->
            <section class="hidden-track">
                <div class="container">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><span>How Can We Help You?</span></li>
                    </ul>
                </div>
            </section><!-- /Track -->

            <!-- Banner -->
            <section class="title-banner">
                <div class="container">
                    <h1>How Can We Help You?</h1>
                </div>
            </section><!-- /Banner -->

            <!-- Contact details -->
            <div class="contact-det-form">
                <div class="container">
                    <div class="contact-details">
                        <div class="det-container">
                            <p><strong>Call us on:</strong></p>
                            <p>Wymondham Office:
                                <a href="#" class="hover-underline">01603 70 40 20</a>
                            </p>
                            <p>Gorleston Office:
                                <a href="#" class="hover-underline">01493 60 32 04</a>
                            </p>
                            <p><strong>Email us on:</strong>
                                <a href="#" class="hover-underline">sales@netmatters.com</a>
                            </p>
                            <p><strong>Business hours:</strong></p>
                            <p><strong>Monday - Friday 07:00 - 18:00</strong></p>
                            <p class="hover-underline trigger"><strong>Out of Hours IT Support</strong> <i class="fas fa-angle-down"></i></p>
                            <div class="accordion">
                                <div class="acc-container">
                                    <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                    <p><strong>Monday - Friday 18:00 - 22:00 Saturday<br>08:00 - 16:00<br>Sunday 10:00 - 18:00</strong></p>
                                    <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include 'inc/valid/validation-form.php'; ?>
                </div>
            </div><!-- /Contact details -->

            <section class="locations">
                <div class="row-1 container">
                    <div class="maps-containers">
                        <a id="first-block" class="block web shadow-box">
                            <div class="locations-logo">
                                <div class="home-logo"><i class="fas fa-home"></i></div>
                            </div>
                            <h5>Netmatters Office: Wymondham</h5>
                            <div class="block-bar"></div>
                            <p>Netmatters</p>
                            <p>11 Penfold Drive</p>
                            <p>Wymondham</p>
                            <p>Norfolk</p>
                            <p>NR18 0WZ</p>
                        </a>
                        <div id="map-loc-0"></div>
                    </div>
                    <div class="maps-containers">
                        <a class="block web shadow-box">
                            <div class="locations-logo web">
                                <div class="home-logo"><i class="fas fa-home"></i></div>
                            </div>
                            <h5>Netmatters Office: Gorleston, Great Yarmouth</h5>
                            <div class="block-bar"></div>
                            <p>Netmatters - Great Yarmouth</p>
                            <p>Suite F23 Beacon Innovation Centre, Beacon Park</p>
                            <p>Gorleston, Great Yarmouth</p>
                            <p>Norfolk</p>
                            <p>NR31 7RA</p>
                        </a>
                        <div id="map-loc-1"></div>
                    </div>
                </div>
            </section>

            <?php include 'inc/newsletter.php'; ?> 

            <?php include 'inc/footer.php'; ?> 
            
            <?php include 'inc/partners.php'; ?>

        </div>

        <?php include 'inc/side-bar.php'; ?>

        <!-- JavaScript -->	
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPeHxaG88NIBNtTZ1zO_x-JhLW4jGctKA&callback=initMap"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="js-min/app.js"></script>
        <?php
            include 'inc/valid/validation-script.php';
        ?>
    </body>
</html>