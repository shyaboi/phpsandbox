<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="post.php" method="post">
        Name: <input type="text" name="pass"> <br>
        <input type="submit">

    </form>
    <br><br>
  <?php echo $_POST["pass"] ?>
</body>
</html>