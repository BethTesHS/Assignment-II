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
        <label>Full Name</label> <br>
        <input name="Fullname" type="Text" placeholder="Please write your Full Name"> <br>
        <label>Email Address</label> <br>
        <input name="Email" type="Text" placeholder="Please write your Email Address"> <br>
        <label>Password</label> <br>
        <input name="Pass" type="Password" placeholder="Please write your Password"> <br>
        <input name="Submit" type="submit" value="Submit">
    </form>
</body>
</html>