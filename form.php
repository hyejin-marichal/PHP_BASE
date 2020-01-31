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

$formulaire=RecuDonne($_POST,$_SESSION);


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

$filters = array (
    'name' => array('filter' => FILTER_VALIDATE_REGEXP, 'options' => array('regexp' => '#[\d[\^$.|?*+(){}]#')),
    'firstname' => array('filter' => FILTER_VALIDATE_REGEXP, 'options' => array('regexp' => "#[a-zA-Z\'éàèêçùôâîû]#")),
    'email' => FILTER_VALIDATE_EMAIL,
    'message' => array('filter' => FILTER_VALIDATE_REGEXP, 'options' => array('regexp' => "#[\w,;./\:*€'()]{5,600}#")));

$myinputs = filter_input_array(INPUT_POST, $filters);


var_dump($_POST);
var_dump($myinputs);
/*if(!$myinputs['name'] OR !$myinputs['']OR OR RO])) {
    echo htmlspecialchars( $_POST['message']);
}
else {
    echo "Error message a au moins 5 lettres";
    echo "<div class='text-center'>
    <button type='submit' class='btn btn-light btn btn-outline-dark'> <a href='index.php?page=contact'>Revenir</a></button>
</div>";
}*/
?>
</p>

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
file_put_contents('contact.txt',$formulaire ,FILE_APPEND);
echo "done";
?>


</body>
</html>