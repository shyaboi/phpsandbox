<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="ste.php" method="get">
        Name: <input type="text" name="name">
        <input type="submit">
        <br>
        <input type="text" name="age">
        <input type="submit">
    </form>
    <br>
    <?php
    echo $_GET["name"]
    ?>
    <br>
    your age is  <?php echo $_GET["age"] ?>
</body>

</html>