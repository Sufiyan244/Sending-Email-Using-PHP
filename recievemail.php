
<?php

include "./config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

    if(isset($_POST['submit'])){

    $to = $_POST['to'];

    $from = $_POST['from'];

    $subject = $_POST['subject'];

    $msg = $_POST['msg'];


    }

?>


<body>

<h3>To: <?php echo $to; ?></h3>

<h3>From: <?php echo $from; ?></h3>

<h3>Subject: <?php echo $subject; ?></h3>

<h3>Message: <?php echo $msg; ?></h3>


</body>
</html>