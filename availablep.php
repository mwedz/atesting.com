<?php include "header.php"; ?> 

<style>
    body {
        position: flex;
        margin: 0;
        padding-top: 60px; /* Adjust based on header height */
        font-family: Arial, sans-serif; /* Base font for body */
    }
    header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        background-color: black; /* Header background color */
        color: white; /* Text color */
        z-index: 1000; /* Ensure the header is above other content */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional shadow */
        padding: 10px; /* Padding for header content */
        text-align: center; /* Centered text */
    }
    footer {
        margin-top: 30px; /* Space before footer */
        background-color: black; /* Footer background color */
        color: white; /* Footer text color */
        text-align: center; /* Centered text */
        padding: 10px; /* Padding for footer content */
        width: 100%; /* Full width */
    }
    .content-section {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        margin: 20px;
    }
    .content-text {
        max-width: 600px;
        margin: 10px;
    }
    .content-image {
        max-width: 300px;
        margin: 10px;
    }
    .content-image img {
        width: 100%;
        height: auto;
    }
    @media (max-width: 768px) {
        .content-section {
            flex-direction: column; /* Stack content on smaller screens */
            align-items: center; /* Center align items */
        }
    }
</style>

<div class="content-section">
    <div class="content-text">
        <h1>Household Grocery Supplies</h1>
        <p>Our stores offer essential daily commodities such as maize meal, rice, samp, sugar, oil and beans, as well as perishables, health and beauty products, general merchandise and bulk-buy offers!</p>
    </div>
    <div class="content-image">
        <img src="images/grocery.png" alt="Grocery Supplies">
    </div>
</div>

<div class="content-section">
    <div class="content-text">
        <h1>Butchery</h1>
        <p>At our butchery, we offer a wide selection of high-quality meats and specialty products, backed by our expertise and passion for the craft. Whether you're a professional chef, home cook, or culinary enthusiast, we have everything you need to elevate your culinary creations.</p>
    </div>
    <div class="content-image">
        <img src="images/image3.jpg" alt="Hardware Supplies">
    </div>
</div>

<div class="content-section">
    <div class="content-text">
        <h1>Great Service</h1>
        <p>As a company we pride ourselves in the great service you are assured of getting from our staff members!</p>
    </div>
    <div class="content-image">
        <img src="images/aru.jpg" alt="Great Service">
    </div>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <style>
    /* CSS Styles for the Footer */
    body {
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
      flex-grow: 1;
      padding: 20px;
    }

    footer {
      position: flex;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: black; /* Changed background color to blue */
      color: #fff;
      padding: 5px 0; /* Reduced padding */
    }

    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 0 20px; /* Added padding for better spacing */
    }

    .footer-section {
      flex-basis: 30%;
      margin-bottom: 5px; /* Further reduced margin for footer sections */
    }

    .footer-section h3 {
      font-size: 16px; /* Slightly reduced font size */
      margin-bottom: 5px; /* Further reduced margin */
    }

    .footer-section ul {
      list-style-type: none;
      padding: 0;
    }

    .footer-section ul li {
      margin-bottom: 3px; /* Further reduced margin */
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
      margin-bottom: 3px; /* Further reduced margin */
    }

    .footer-section .contact-info i {
      margin-right: 5px; /* Reduced margin */
      font-size: 16px; /* Slightly reduced font size */
    }

    .footer-section .contact-info img {
      margin-right: 8px; /* Space between icons */
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        align-items: center;
      }

      .footer-section {
        flex-basis: auto;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  
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
          <a href="#">itsupport@aruzebras.co.zw</a>
        </div>
        <div class="contact-info">
          <i class="fa-solid fa-phone"></i>
          <a href="#">+263 712 704 670</a>
        </div>
        <div class="contact-info">
          <i class="fa-solid fa-location-dot"></i>
          <a href="https://maps.app.goo.gl/wSgmCHBfY1LLL8BG9">Shop No 1 Extension Ruswa House Zvishavane</a>
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
      <div class="contact-info">
      <h5>Follow Us on</h5>
          <a href="https://www.facebook.com/"><img src="images/icon.png" class="thumbnail"></a>
          <a href="https://www.facebook.com/"><img src="images/x.ico" class="thumbnail"></a>
        </div>
    </div>
  </footer>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
  
</body>
</html>