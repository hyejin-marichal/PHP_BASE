<?php
session_start();
var_dump($_SESSION);
?>
<!doctype html>
<html lang="fr">
<?php
var_dump($_POST);?>
<!--Header-->
<?php $title = "Page de contact" ?>
<?php $description = "notre address et notre telephone" ?>
<?php include("header.php"); ?>

<body>
    <div class="container">
        <div class="col-12 titre_contenu_page">
            <h2>CONTACTEZ-NOUS</h2>
            <p>Pour toute question ou information, merci de nous laisser un message ci-dessous (réponse sous 24h), ou par téléphone au 04 50 00 00 00.</p>
            <p>Réservation obligatoire</p>
        </div>
    </div>
    <!-- formulaire contact-->
    <section class="page_accueil_background">
        <div class="container page_accueil">
            <form method="post" action="form.php" class="formule_contact">
                <div class="form-group">
                    <div class="col-sm-4 col-lg-8">
                        <legend for="civilite-select"> Vous êtes:</legend>
                        <select name="civilite" id="civilite" >
                            <option disabled selected >--choisissez --</option>
                            <option value="Madame" <?php if (isset($_SESSION['civilite'])){echo ($_SESSION['civilite']=='Madame')?'selected':'';}?>>Madame</option>
                            <option value="Monsieur" <?php if (isset($_SESSION['civilite'])){echo ($_SESSION['civilite']=='Monsieur')?'selected':'';}?>>Monsieur</option>
                            <option value="Autre" <?php if (isset($_SESSION['civilite'])){echo ($_SESSION['civilite']=='Autre')?'selected':'';}?>>Autre</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <legend for="name" class="col-form-legend col-sm-4">NOM</legend>
                    <div class="col-sm-4 col-lg-8">

                        <input type="text" name="name" id="name" placeholder="Entrez votre nom" value="<?php
                        if(isset($_SESSION['nom'])) {
                            echo $_SESSION['nom'] ;} ?>" class="form-control" required>
                    </div>
                </div>
                    <div class="form-group">
                    <legend for="name" class="col-form-legend col-sm-4">PRENOM</legend>
                    <div class="col-sm-4 col-lg-8">
                        <input type="text" name="firstname" id="firstname" placeholder="Entrez votre prénom" value="<?php
                        if(isset($_SESSION['prenom'])) {
                            echo $_SESSION['prenom'] ;} ?>"  class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <legend for="email" class="col-sm-4 col-lg-2 col-form-label"></legend>
                    <legend class="col-form-legend col-sm-4">EMAIL</legend>
                    <div class="col-sm- 4 col-lg-8">
                        <input type="text" name="email" id="email" placeholder="Entrez votre email"  value ="<?php
                        if(isset($_SESSION['email'])) {
                            echo $_SESSION['email'] ;} ?>"  class="form-control" required>
                    </div>
                </div>

                <fieldset class="form-group">
                    <legend class="col-sm-4 col-lg-8" >Votre demande concerne : </legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="1"<?php if (isset($_SESSION['gridRadios'])){echo ($_SESSION['gridRadios']=='1')?'checked':'';}?>>
                                Un bon cadeau
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="2"<?php if (isset($_SESSION['gridRadios'])){echo ($_SESSION['gridRadios']=='2')?'checked':'';}?>>
                                Une réservation
                            </label>
                        </div>
                        <div class="form-check disabled">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="3"<?php if (isset($_SESSION['gridRadios'])){echo ($_SESSION['gridRadios']=='3')?'checked':'';}?>>
                                Autre
                            </label>
                        </div>
                    </div>

                </fieldset>
                <div>
                    <label for="message"></label>
                    <legend class="col-form-legend col-sm-4">Message</legend>
                    <textarea name="message" id="message"  placeholder="Entrez votre message" rows="6" required><?php if(isset($_SESSION['message'])) {echo $_SESSION['message'] ;} ?></textarea>
                </div>
                <br />
                <div class="text-center">
                    <button type="submit" class="btn btn-light btn btn-outline-dark">Envoyer</button>
                </div>
            </form>
        </div>

        <!-- module maps-->
        <div class="container googlemaps">
            <div class="row">
                <iframe id= "maps" class="col-md-5 col-sm-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2776.173293209776!2d6.100588515777842!3d45.90784501175113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478b85412d20d46f%3A0xcdf72ac7f7fdadd0!2sLes%20Papeteries%20-%20Image%20Factory!5e0!3m2!1sfr!2sfr!4v1576589322866!5m2!1sfr!2sfr"
                        height="300"  frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <div class="col-md-2"></div>
                <div id= "textmaps" class="col-md-5 col-sm-12"><h3><img src="images/maps2.png" alt="icon adress">Comment nous trouver?</h3><p>Les papeteries -Image Factory<br /> 1, 3 Esplanade Augustin Aussedat, 74960, France</p></div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <?php include("footer.php"); ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    </body>
</html>
