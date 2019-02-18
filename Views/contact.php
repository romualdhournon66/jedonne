<?php
if (isset($_POST['submit'])) {
// envoi du mail
    $destinataire = addslashes($_POST['destinataire']);
    $sujet = addslashes($_POST['sujet']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);

    //$emailweb=$email;
    //$log=0;
    //if (isset($_SESSION['username'])) 
    //{
    // $pseudo=$_SESSION['username'];
    // $req=mysql_query("select email from info_membres where username='$pseudo'") or die("Erreur SQL");
    // $emailweb=mysql_result($req,0,"email");
    // $log=1;
    //}
    //else $pseudo="Inconnu";
    $date = time();
    $message = stripslashes($message);

    //mysql_query("insert into contact values('','$sujet','$message','$emailweb','$date','0','$destinataire')") or die("erreur SQL : ".mysql_error());

    $header .= "MIME-Version: 1.0\n";
    $header .= "Content-type: text/plain; charset=iso-8859-1\n";
    $header .= "From: " . $email . " <" . $email . ">";
    $alert = "<h4><p align=\"center\"><strong>Votre message a bien été envoyé.<br>"
            . "Nous y répondrons dans les plus brefs délais.</strong></p></h4><br>";
    if ($destinataire == "2")
        mail('k2001@cegetel.net', $sujet, $message, $header);
    else if ($destinataire == "3")
        mail('k2001@cegetel.net', $sujet, $message, $header);
    else
        mail('k2001@cegetel.net', $sujet, $message, $header);
}
?>
<?php
include 'header.php';
include 'navbar.php';
include '../Controllers/registerCtl.php';
?>
<div align="center">
    <p align="center"><?php if (isset($alert)) echo $alert; ?></p>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <div class="container">
        <h2 class="text-center"></h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <!--Form with header-->
                <form action="contact.php" method="POST">
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Contactez-nous</h3>
                                <p class="m-0">Nous vous répondons sous 24 heures</p>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="sujet" name="sujet" placeholder="Titre de votre message" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre mail" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" id="message" name="message" placeholder="Votre message" required></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit" value="Envoyer" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>
        <?php
include 'sidebar.php';
include 'footer.php';
?>