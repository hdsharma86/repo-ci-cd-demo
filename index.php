<?php
$server_ip = gethostbyname(gethostname());
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Your EC2 Instance V2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f5f5f5;
        }
        h1 {
            color: #4CAF50;
        }
        p {
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Server IP IS: <?php echo $server_ip; ?></h1>
    <h1>Page Version Is: 0001254568</h1>
    <h1>Success! Your Apache server is up and running!</h1>
    <p>PHP and Composer have been installed successfully.</p>
</body>
</html>
