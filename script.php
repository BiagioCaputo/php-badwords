<?php 

$user_text = $_POST["user-text"];
$censorship = $_POST["censorship"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <main>
        <h1><?php echo $user_text; ?></h1>
    </main>
    
</body>
</html>