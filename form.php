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
    <form action="process.php" method="POST">
        <lable>Full Name</lable> <br>
        <input name="Fullname" type="Text" placeholder="Please write your Full Name"> <br>
        <lable>Email Address</lable> <br>
        <input name="Email" type="Text" placeholder="Please write your Email Address"> <br>
        <lable>Password</lable> <br>
        <input name="Pass" type="Password" placeholder="Please write your Password"> <br>
        <input name="Submit" type="submit" value="Submit">
    </form>
</body>
</html>