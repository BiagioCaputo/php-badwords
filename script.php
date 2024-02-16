<?php 

$user_text = $_POST["user-text"];
$censorship = $_POST["censorship"];
$censored = str_replace($censorship, '***', $user_text)

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
        <div>
            <h1>This is your text:</h1>
            <p><?php echo $user_text; ?></p>
            <h4>Text's length:<?php echo strlen($user_text);?></h4>
        </div>
        <div>
            <h1>This is your censored text:</h1>
            <p><?php echo $censored; ?></p>
            <h4>Censored text's length:<?php echo strlen($censored);?></h4>
        </div>
    </main>
    
</body>
</html>