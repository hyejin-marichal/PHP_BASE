<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>

</head>
<body>
<p>
    <?php
    if (isset($_GET['lenomdelapage'] == "home"))
    {
        echo <a href="index.php?page=lenomdelapage">;
    }
   else
    {
        echo "pas de nom de page.";
    }
    ?>
</p>
</body>
</html>
<?php
