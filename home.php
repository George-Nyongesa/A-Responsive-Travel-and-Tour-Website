<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safiri</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/84ca4e9774.js" crossorigin="anonymous"></script>
    
</head>
<body>
    
    <!-- header section starts here -->
    <section class="header">
        <a href="home.php" class="logo">zuru</a>
        <div class="search-box">
            <div class="row">
                <input type="text" id="search-footer-col" placeholder="Search for anything" autocomplete="off">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fa-solid fa-bars"></div>
    </section>
    <!-- header section ends here -->


    <!-- start of the home section -->
    <section class="home">
        <div class="home-slider">
                <div class="slide" style="background:url(img/slide7.jpeg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>trvel around the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

        </div>
        
    </section>
    <!--home section ends here -->

    <!---start of the services section--> 
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/adventures.png" alt="">
                <h3>adventures</h3>
            </div>
            <div class="box">
                <img src="img/tourguides.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="img/trekking.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="img/bornfire.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="img/offroad.png" alt="">
                <h3>off roads</h3>
            </div>
            <div class="box">
                <img src="img/campings.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>


    <!-- start of the home-about section -->
    <section class="home-about">
        <div class="image-container">
            <img src="img/slide5.jpg" alt="">
        </div>
        <div class="home-content">
            <h3>About us</h3>
            <p>Zuru Travel & Tours is a leading travel and tour company 
                offering a wide range of services including domestic and international travel packages,
                 airline ticketing, hotel reservations, visa assistance, and customized tour packages.
                  With a team of experienced professionals, we are dedicated to providing exceptional customer service
                   and creating unforgettable travel experiences for our clients.
                    Whether you're planning a relaxing beach getaway, an adventurous trekking expedition, or a cultural tour,
                 we have the expertise to make your travel dreams a reality</p>
                 <a href="about.php" class="btn">read more</a>
        </div>
    </section>
<!-- home about section ends here -->

<!-- package section starts here  -->
<section class="home-package">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="img/package2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventures & Tours</h3>
                <p>a relaxing beach getaway</p>
                <a href="book.php" class="btn" >book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/package3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventures & Tours</h3>
                <p>an adventurous trekking expedition</p>
                 <a href="book.php" class="btn" >book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="img/slide3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Adventures & Tours</h3>
                <p> we have the expertise to make your travel dreams a reality</p>
                 <a href="book.php" class="btn" >book now</a>
            </div>
        </div>
    </div>
    <div class="load-more"><a href="package.php" class="btn">load more</a></div>
</section>
<!-- package section ends here  -->

    <!---start of the footer section-->
    <section class="footer">
        <div class="footer-container">
            <div class="row">
                <div class="footer-col">
                    <h1>Quick links</h1>
                    <ul>
                        <li><a href="home.php">home</a></li>
                        <li><a href="about.php">about</a></li>
                        <li><a href="package.php">package</a></li>
                        <li><a href="book.php">book</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h1>Extra links</h1>
                    <ul>
                        <li><a href="#">ask questions</a></li>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">terms and conditions</a></li>
                    </ul> 
                </div>
                <div class="footer-col">
                    <h1>Contact info</h1>
                    <ul>
                        <li>0799952841</li>
                        <li>0795457497</li>
                        <li>belgeo@gmail.com</li>
                        <li>Nairobi, Kenya</li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h1>follow us</h1>
                    <ul>
                        <li><a href="#">facebook</a></li>
                        <li><a href="#">instagram</a></li>
                        <li><a href="#">twitter</a></li>
                        <li><a href="#">linkedIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="credit">
            <p>&copy belgeo travels | design by <span>George Nyongesa</span> | all rights reserved 2024!</p>
        </div>
    </section>
    <!---the end of the footer section-->

    <!---here is the javascript link for this page-->
    <script src="script.js"></script>
</body>
</html>