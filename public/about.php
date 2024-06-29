<!-- about.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Nutriplan</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
       crossorigin="anonymous"/>

</head>
<body>
<header class="header">
    <a href="#" class="logo">Nutri<span>Plan</span></a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="about.php">about</a>
        <a href="#">services</a>
        <a href="#">news</a>
        <a href="contact.php">contact</a>
    </nav>

    <div class=" icons">
        <a href="#" class="btn">Join us</a>
        <div id="menu-btn" class="fas fa-bars"></div>
    </div>
</header>

    <main>
    <div class="box" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)),
                 url('images/about page.jpeg');">" 
        <section class="about-section">
            <h1>About Us</h1>
            <p>Welcome to our Fitness and Health website. Our mission is to inspire and support individuals in their journey towards a healthier, fitter life.</p>
            
            <h2>Our Mission</h2>
            <p>We aim to provide high-quality content, expert advice, and a community for those who seek to improve their physical and mental well-being. Whether you're a beginner or a seasoned athlete, we have something for you.</p>
            
            <h2>Our Team</h2>
            <p>Our team consists of certified fitness trainers, nutritionists, and wellness experts who are passionate about sharing their knowledge and helping you achieve your goals.</p>
            
            <h2>What We Offer</h2>
            <ul>
                <li>Comprehensive workout plans</li>
                <li>Personalized nutrition advice</li>
                <li>Guidance on mental health and wellness</li>
                <li>Community support and motivation</li>
                <li>Latest news and trends in fitness</li>
            </ul>
            
            <h2>Contact Us</h2>
            <p>If you have any questions or need further information, please do not hesitate to <a href="contact.php">contact us</a>.</p>
        </section>
    </div>
    </main>

    <footer>
    <p>&copy; <?php echo date("Y"); ?> Created by Keziah and Karuga. All rights reserved.</p>
</footer>

</body>
</html>
