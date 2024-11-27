<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1; /* Makes sure content takes available space */
        }
        footer {
            position: relative;
            background-color: #f1f1f1;
            padding: 1em 0;
            overflow: hidden;
        }
        .moving-text {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            animation: scroll 10s linear infinite;
        }
        @keyframes scroll {
            0% { transform: translate(-50%, 0) translateX(100%); }
            100% { transform: translate(-50%, 0) translateX(-100%); }
        }
    </style>
</head>
<body>

    <div class="content">
        <!-- Your content goes here -->
    </div>

    <footer>
        <div class="moving-text" id="footer-text">
            © <span id="year"></span> ARU Investments. All Rights Reserved. Designed by Sir_Mwedzi
        </div>
    </footer>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>
</html>