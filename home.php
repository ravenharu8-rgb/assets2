<?php
    $name = $_POST['name'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $number = $_POST['number'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $email = $_POST['myEmail'] ?? '';
    $password = $_POST['myPassword'] ?? '';
    $status = $_POST['status'] ?? '';
    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <h2 class="title">Home</h2>
        
         <p>
            <?= $name ?>
         </p>
         <p>
            <?= $birthdate ?>
         </p>
         <p>
            <?= $number ?>
            <p>
            <?= $gender ?>
         </p>
         <p>
            <?= $email ?>
         </p>
         <p>
            <?= $password ?>
        <p>
            <?= $status ?>
         </p>

        
    </div>
</body>
</html>