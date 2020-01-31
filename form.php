<?php
session_start();

function RecuDonne($donne,$save )
{
   foreach ($donne as $key => $value)
   {
       $save = $donne;
   }
return $save;
}

RecuDonne($_POST,$_SESSION);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<p>
<?php
var_dump($_POST);
if(preg_match('#[\w,;:!.?]{5,}#',$_POST['message'])) {
    echo htmlspecialchars( $_POST['message']);
}
else {
    echo "Error message a au moins 5 lettres";
    echo "<div class='text-center'>
    <button type='submit' class='btn btn-light btn btn-outline-dark'> <a href='index.php?page=contact'>Revenir</a></button>
</div>";
}
?>
</p>
<?php
if (isset($_POST["email"])) {
    if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL) === false) {
        echo("Email is valid");
    } else {
        echo("Email is not valid");
    }
}
?>
<p>
    <?php
    if(isset($_POST['gridRadios'])){
        if($_POST['gridRadios']=="1" OR $_POST['gridRadios']=="2" or $_POST['gridRadios']=="3") {
            echo "checked";
        }
    }
    ?>
</p>
<p>
<?php
if(empty($_POST['name']) OR empty($_POST['firstname']) OR empty($_POST['email']) OR empty($_POST['message']) OR empty($_POST['gridRadios']))
{
    echo "Error champ vide";
}
else {
    echo htmlspecialchars($_POST['name']). "\n".htmlspecialchars($_POST['firstname'])."\n".htmlspecialchars($_POST['email'])."\n".htmlspecialchars($_POST['message']);
}
?>
</p>

<?php
$formulaire = $_POST['name']. "\n".$_POST['firstname']. "\n".$_POST['email']. "\n".$_POST['message']. "\n".$_POST['gridRadios']. "\n".$_POST['civilite'];
file_put_contents('contact.txt', $formulaire,FILE_APPEND);
echo "done";
?>


</body>
</html>