<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once "navbar.php";
    require_once "processes/autoload.php"
    ?>
    <br>
    <h1>Form Page</h1>
    <div class="form">
        <?php
            $prcs = new ProcessMethods();
            $prcs->Post();
        ?>

    </div>

</body>

</html>