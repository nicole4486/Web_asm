<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us</title>
    <link rel="stylesheet" href="./style/aboutUs.css" />
    <link rel="stylesheet" href="./style/headerStyle.css" />
    <style>

        body{
            margin-top: 100px;
            background-color:#CCD5AE ;
    
        }

    </style>
</head>

<body>
    <?php include('includes/header.php') ?>
    <div class="wrapper">
        <div class="row">
            <div class="image-section">
                <img src="./images/aboutUs4.jpeg" alt="Beauté de Hito About Us Image">
            </div>
            <div class="content">
                <h1>About Us</h1>
                <p>At Beauté de Hito, we aim to empower you with confidence and the glow of healthy, radiant skin.
                    <br>Our formulations feature high-quality ingredients like hyaluronic acid, vitamin C, and botanical
                    extracts, each chosen for their efficacy and ability to nourish your skin. We believe in
                    sustainability,
                    responsibly sourcing natural ingredients and utilizing eco-friendly packaging to protect the planet.
                    With
                    a customer-centric approach, we continually listen to and understand your skin concerns, developing
                    personalized
                    products that deliver real, lasting results.
                </p>

                <!-- Video Section -->
                <div class="video-section">
                    <h2>Our Story</h2>
                    <p>Watch our journey and learn about our mission and values at Beauté de Hito.</p>
                    <video controls>
                        <source src="./images/aboutUs.mp4" type="video/mp4">
                    </video>
                </div>

                <!-- Team Introduction Section -->
                <div class="team-section">
                    <h2>This Is Our Team</h2>
                    <div class="team-member">
                        <img src="./images/aboutUs2.jpg" alt="Team Member 1">
                        <h3>Chloe</h3>
                        <p>Founder & CEO - Passionate about skincare and dedicated to creating effective, high-quality
                            products.</p>
                    </div>
                    <div class="team-member">
                        <img src="./images/aboutUs3.jpg" alt="Team Member 2">
                        <h3>Ava</h3>
                        <p>Lead Chemist - Expert in formulation and ingredient efficacy, ensuring each product meets our
                            high standards.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <footer>
        <?php include("includes/footer.php") ?>
    </footer>
</body>

</html>