<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    
</head>
<body>
    <?php
    require_once "navbar.php";
    ?>
    <br>
    <h1>Fill in the Form</h1>
    <form action="processes/process.php" method="POST">
        <label>Name</label> <br>
        <input name="Name" type="Text" placeholder="Please write your Full Name"> <br>
        <label>Write What you want</label> <br>
        <textarea class="TA" name="Write" type="Text" placeholder="Write about anything you want!"></textarea> <br>
        <input name="Form" type="submit" value="Submit">
    </form>
</body>
</html>