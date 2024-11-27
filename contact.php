<?php include "header.php"; ?> 

<?php
// Define contact details
$quote = "Your satisfaction is our priority. We are here to serve you with the best quality products.";
$phone = "+263713995583
          +263 712 704 670";
$email = "website@aruzebras.co.zw";
$address = "Shop No 1 Extension Ruswa House Zvishavane";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            position: relative;
        }
        header, footer {
            background: black;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('images/aru.jpg');
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
            z-index: -1;
        }
        .outer-border {
            border: 10px solid yellow;
            border-radius: 12px;
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px; /* Added margin for spacing */
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
        }
        .content {
            border: 5px solid #007BFF;
            border-radius: 8px;
            padding: 20px;
            background: white;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            z-index: 1;
            max-width: 600px; /* Limit content width for better readability */
            width: 100%; /* Ensure it takes full width */
        }
        .quote {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .contact-info {
            font-size: 1.1em;
            text-align: center;
        }

        /* Footer Styles */
        footer {
            background-color: black;
            color: white;
            padding: 10px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 0 15px;
        }

        .footer-section {
            flex: 1; /* Adjusted for equal distribution */
            min-width: 200px; /* Minimum width to prevent shrinking */
            margin-bottom: 10px;
            text-align: center; /* Center-align text */
        }

        .footer-section h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .footer-section ul {
            list-style-type: none;
            padding: 0;
        }

        .footer-section ul li {
            margin-bottom: 5px;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .footer-section .contact-info {
            display: flex;
            align-items: center;
            justify-content: center; /* Center contact info */
            margin-bottom: 5px;
        }

        .footer-section .contact-info i {
            margin-right: 5px;
            font-size: 14px;
        }

        .footer-section .contact-info img {
            margin-right: 10px;
        }

        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
            }

            .footer-section {
                flex-basis: 100%; /* Sections take full width on small screens */
            }
        }
    </style>
</head>
<body>

<div class="background"></div>

<div class="outer-border">
    <div class="content">
        <div class="quote"><?php echo $quote; ?></div>
        <div class="contact-info">
            <p><strong>For any inquiries, please reach out to our customer care team:</strong></p>
            <p><strong>Phone:</strong> 
                <a href="tel:+263713995583">+263713995583</a> | 
                <a href="tel:+263712704670">+263 712 704 670</a>
            </p>
            <p><strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            <p><strong>Address:</strong> <a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($address); ?>" target="_blank"><?php echo $address; ?></a></p>
        </div>
    </div>
</div>

<script>
    // Background images array
    const images = [
        'image1.jpg', // Replace with your actual image paths
        'image2.jpg',
        'image3.jpg'
    ];
    let currentIndex = 0;

    function changeBackground() {
        currentIndex = (currentIndex + 1) % images.length;
        document.querySelector('.background').style.backgroundImage = `url(${images[currentIndex]})`;
    }

    // Change background every 5 seconds
    setInterval(changeBackground, 5000);

    // Fade-in effect for content
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('.content').style.opacity = 1;
        changeBackground(); // Set initial background
    });
</script>

<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Aru Investments t/a Zebras. #LOWER PRICES TO THE PEOPLE</p>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <div class="contact-info">
                <i class="fa-solid fa-envelope"></i>
                <a href="mailto:itsupport@aruzebras.co.zw">itsupport@aruzebras.co.zw</a>
            </div>
            <div class="contact-info">
                <i class="fa-solid fa-phone"></i>
                <a href="tel:+263712704670">+263 712 704 670</a>
            </div>
            <div class="contact-info">
                <i class="fa-solid fa-location-dot"></i>
                <a href="https://www.google.com/maps/search/?api=1&query=Shop+No+1+Ext+Ruswa+House+Zvishavane" target="_blank">Shop No 1 Ext Ruswa House Zvishavane</a>
            </div>
        </div>
        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="availablep.php">Products</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>Follow Us on</h3>
            <div class="contact-info">
                <a href="https://www.facebook.com/"><img src="images/icon.png" class="thumbnail" alt="Facebook" height="24" width="24"></a>
                <a href="https://www.twitter.com/"><img src="images/x.ico" class="thumbnail" alt="Twitter" height="24" width="24"></a>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>

</body>
</html>