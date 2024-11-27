<?php include "header.php"; ?> 

<?php
// Array of shop outlets and their addresses
$shopOutlets = [
    ["name" => "Shop 1", "address" => "Shop No 1 Extension Ruswa House Zvishavane"],
    ["name" => "Shop 2", "address" => "456 Elm St, City B"],
    ["name" => "Zebras Shop, Main ", "address" => "Ruswa House, Mandava, Zvishavane"],
    ["name" => "Zebras 2 Shop", "address" => "Ruswa House, Mandava, Zvishavane"],
    ["name" => "Shop 5", "address" => "202 Oak St, City E"],
    ["name" => "Shop 6", "address" => "303 Birch St, City F"],
    ["name" => "Shop 7", "address" => "404 Cedar St, City G"],
    ["name" => "Sam's Corner Meats", "address" => "602-3 Madeira. Turner Street, Zvishavane"],
    ["name" => "Sam's Corner ", "address" => "602-3 Madeira. Turner Street, Zvishavane"],
    ["name" => "Shop 10", "address" => "707 Ash St, City J"],
    ["name" => "Zebras Shop Mberengwa", "address" => "Shop 297 Mangena Complex Mberengwa"],
    ["name" => "Shop 12", "address" => "909 Cypress St, City L"],
    ["name" => "Shop 13", "address" => "111 Cherry St, City M"],
    ["name" => "Shop 14", "address" => "222 Chestnut St, City N"],
    ["name" => "Shop 15", "address" => "333 Fir St, City O"],
    ["name" => "Shop 16", "address" => "444 Hemlock St, City P"],
    ["name" => "Shop 17", "address" => "555 Larch St, City Q"],
];

// Display the shop outlets
echo "<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-image: url('images/grocery.png'); /* Update this path */
        background-size: cover; /* Cover the entire background */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Don't repeat the image */
    }
    .shop-list {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        background-color: rgba(255, 255, 255, 0.8); /* Optional: Add a background color for contrast */
        padding: 20px; /* Optional: Add some padding around the shop list */
        border-radius: 8px; /* Optional: Round the corners */
        max-width: 1200px; /* Limit max width for larger screens */
        margin: auto; /* Center the shop list */
    }
    .shop-item {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        width: calc(33.33% - 20px); /* Adjust width for three items per row */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
        flex-grow: 1; /* Allow items to grow */
    }
    @media (max-width: 768px) {
        .shop-item {
            width: calc(50% - 20px); /* Two items per row on smaller screens */
        }
    }
    @media (max-width: 480px) {
        .shop-item {
            width: 100%; /* One item per row on mobile */
        }
    }
</style>";

echo "<h1>Shop Outlets</h1>";
echo "<div class='shop-list'>";
foreach ($shopOutlets as $shop) {
    echo "<div class='shop-item'>";
    echo "<strong>" . htmlspecialchars($shop['name']) . ":</strong> " . htmlspecialchars($shop['address']);
    echo "</div>";
}
echo "</div>";
?>

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
      background-color: black; /* Changed background color to blue */
      color: #fff;
      padding: 10px 0; /* Reduced padding */
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
      margin-bottom: 10px; /* Reduced margin for footer sections */
    }

    .footer-section h3 {
      font-size: 16px; /* Slightly reduced font size */
      margin-bottom: 10px; /* Reduced margin */
    }

    .footer-section ul {
      list-style-type: none;
      padding: 0;
    }

    .footer-section ul li {
      margin-bottom: 5px; /* Reduced margin */
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
      margin-bottom: 5px; /* Reduced margin */
    }

    .footer-section .contact-info i {
      margin-right: 5px; /* Reduced margin */
      font-size: 16px; /* Slightly reduced font size */
    }

    .footer-section .contact-info img {
      margin-right: 10px; /* Space between icons */
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
          <a href="#">Shop No 1 Extension Ruswa House Zvishavane</a>
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