<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mad.php" method="get">
    Color:<input type="text" name="color">
    Noun:<input type="text" name="noun">
    Thing:<input type="text" name="thing">
    <input type="submit">
    </form>
    <br><br>

    <?php
        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $thing = $_GET["thing"];


    echo "rose $color <br>";
    echo "$noun are blu <br>";
    echo "i love $thing <br>";

    ?>
</body>
</html>