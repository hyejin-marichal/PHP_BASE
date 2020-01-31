
 <?php
 $visible = false;

if(isset($_GET['page'])) {
    if (isset($_GET['equipe'])) {
        switch ($_GET['equipe']) {
            case 'muzaffer':
                include 'muzaffer.php';
                break;
            case 'matthias':
                include 'matthias.php';
                break;
            case 'hyejin':
                include 'hyejin.php';
                break;
            case 'aurelie':
                include 'aurelie.php';
                break;
        }
    } else {
        switch ($_GET['page']) {
            case 'home':
                include 'home.php';
                break;
            case 'catalogue':
                include 'catalogue.php';
                break;
            case 'contact':
                include 'contact.php';
                break;
            case 'equipe':
                include 'equipe.php';
                break;
            case 'connexion':
                include 'connexion.php';
                break;
            default:
                include 'home.php';
        }
    }
    }
else{
        include 'home.php';
}
