<?php include "header.php"; ?> 

<?php
// about.php

// Company information

$description = "Aru Investments t/a Zebras This & That We offer a wide range of quality products and services at affordable prices. We are proud to draw our customers from all communities and income groups across Zvishavane, while store formats range from convenient small supermarkets to larger supermarkets.#LOWER PRICES TO THE PEOPLE";

// HTML structure
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <style>
        body {
    background-image: url('images/aru.jpg'); /* Change this to your image path */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
        
p {
    color: black;       /* Change color to blue */
    font-size: 25px;  /* Increase font size */
}

footer p {
    color: inherit;    /* Keep the default color for footer paragraphs */
    font-size: inherit; /* Keep the default font size for footer paragraphs */
}
    </style>
</head>

<body>

<h1 id="moving-text">About US</h1>

<script>
    const h1 = document.getElementById('moving-text');
    let position = 0;
    const speed = 3; // Change this value to make it move faster or slower

    function move() {
        position += speed;
        if (position > window.innerWidth) {
            position = -h1.offsetWidth; // Reset position to the left
        }
        h1.style.transform = `translateX(${position}px)`;
        requestAnimationFrame(move);
    }

    move();
</script>

<p><?php echo $description; ?></p>
</body>

</html>

<?php include "footer.php"; ?>



