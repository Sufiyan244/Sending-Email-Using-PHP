<?php

include "./config.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>

<body>

    <u>
        <h1>Send Email</h1>
    </u>

    <form  method="post" action="./recievemail.php">
        <label>To:</label>
        <input type="text" name="to" placeholder="@example.com" required><br><br>

        <label>From:</label>
        <input type="text" name="from" placeholder="@example.com" required><br><br>

        <label>Subject:</label>
        <input type="text" name="subject" placeholder="Enter your Subject"><br><br>

        <label>Message</label><br>
        <textarea name="msg" placeholder="Enter Your Message" rows="8" cols="30" required></textarea><br><br>

        <button type="submit" name="submit">Send</button>
    </form>


</body>

</html>