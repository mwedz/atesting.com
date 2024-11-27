<!DOCTYPE html>
<html>
<head>
    <title>Zebras|ARU Investments P/L</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* CSS styles for the header */
        header {
            background-color: black; /* Changed to blue */
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        nav li {
            margin-right: 20px;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            transition: background-color 0.3s;
        }
        nav a:hover {
            color: #ccc;
        }
        .header-icon {
            width: 30px; /* Adjust size as needed */
            height: auto;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h1><img src="images/aru.ico" alt="Logo" class="header-icon">ARU Investments P/L</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="nav-button">Home</a></li>
                <li><a href="shops.php" class="nav-button">Shops</a></li>
                <li><a href="availablep.php" class="nav-button">Available Products</a></li>
                <li><a href="news.php" class="nav-button">News</a></li>
                <li><a href="vacancies.php" class="nav-button">Vacancies</a></li>
                <li><a href="contact.php" class="nav-button">Contact Us</a></li>
                <li><a href="about.php" class="nav-button">About Us</a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Add your main content here -->

    <script>
        // JavaScript to change button colors on click
        const buttons = document.querySelectorAll('.nav-button');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                // Change the background color of the clicked button
                this.style.backgroundColor = this.style.backgroundColor === 'lightblue' ? '' : 'lightblue';
            });
        });
    </script>
</body>
</html>