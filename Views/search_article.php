<?php
include 'header.php';
include 'navbar.php';
include '../Controllers/registerCtl.php';
?>
    <h1>Recherchez une annonce sur le site</h1>
    <?//= showError('checkAppointments') ?>
    <div class="row">         
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <label class="label" for="category">Cat&eacute;gorie *</label>
                    <select class="form-control"  name="category" id="category" class="select">
                        <option value="0">&laquo;Choisissez une cat&eacute;gorie&raquo;</option>
                        <?php //foreach ($categoryList as $category) { ?>
                            <option value="<?//= $category->id ?>"><?//= $category->category ?></option>
                        <?php// } ?>
                        <option value='1' id='cat1' >-&#45; VEHICULES -&#45;</option>
                        <option value='8' id='cat8' >-&#45; MOBILIER -&#45;</option>
                        <option value='66' id='cat66' >-&#45; VACANCES -&#45;</option>
                        <option value='14' id='cat14' >-&#45; MULTIMEDIA -&#45;</option>
                        <option value='18' id='cat18' >-&#45; MAISON -&#45;</option>
                        <option value='24' id='cat24' >-&#45; LOISIRS -&#45;</option>
                        <option value='56' id='cat56' >-&#45; MATERIEL PROFESSIONNEL -&#45;</option>
                        <option value='31' id='cat31' >-&#45; SERVICES GRATUITS-&#45;</option>
                        <option value='37' id='cat37' >-&#45; -&#45; -&#45;</option>
                        <option value='38' id='cat38' >Autres</option>
                    </select>
                    <span class="label-error full " data-for="category"></span>
                </div>

                <div class="col-md-6">
                    <label class="label" for="sub_category">Sous-Cat&eacute;gorie *</label>
                    <select class="form-control" name="sub_category" id="sub_category" class="select">
                        <option value="0">&laquo;Choisissez une sous-cat&eacute;gorie&raquo;</option>
                        <option value='71' style='background-color:#E6E6E6' disabled id='cat71' >-&#45; EMPLOI -&#45;</option>
                        <option value='33'  id='cat33' >Offres d'emploi</option>
                        <option value='1' style='background-color:#E6E6E6' disabled id='cat1' >-&#45; VEHICULES -&#45;</option>
                        <option value='2'  id='cat2' >Voitures</option>
                        <option value='3'  id='cat3' >Motos</option>
                        <option value='4'  id='cat4' >Caravaning</option>
                        <option value='5'  id='cat5' >Utilitaires</option>
                        <option value='6'  id='cat6' >Equipement Auto</option>
                        <option value='44'  id='cat44' >Equipement Moto</option>
                        <option value='50'  id='cat50' >Equipement Caravaning</option>
                        <option value='7'  id='cat7' >Nautisme</option>
                        <option value='51'  id='cat51' >Equipement Nautisme</option>
                        <option value='66' style='background-color:#E6E6E6' disabled id='cat66' >-&#45; VACANCES -&#45;</option>
                        <option value='12'  id='cat12' >Locations &amp; G&icirc;tes</option>
                        <option value='67'  id='cat67' >Chambres d'h&ocirc;tes</option>
                        <option value='68'  id='cat68' >Campings</option>
                        <option value='69'  id='cat69' >H&ocirc;tels</option>
                        <option value='70'  id='cat70' >H&eacute;bergements insolites</option>
                        <option value='14' style='background-color:#E6E6E6' disabled id='cat14' >-&#45; MULTIMEDIA -&#45;</option>
                        <option value='15'  id='cat15' >Informatique</option>
                        <option value='43'  id='cat43' >Consoles &amp; Jeux vid&eacute;o</option>
                        <option value='16'  id='cat16' >Image &amp; Son</option>
                        <option value='17'  id='cat17' >T&eacute;l&eacute;phonie</option>
                        <option value='18' style='background-color:#E6E6E6' disabled id='cat18' >-&#45; MAISON -&#45;</option>
                        <option value='19'  id='cat19' >Ameublement</option>
                        <option value='20'  id='cat20' >Electrom&eacute;nager</option>
                        <option value='45'  id='cat45' >Arts de la table</option>
                        <option value='39'  id='cat39' >D&eacute;coration</option>
                        <option value='46'  id='cat46' >Linge de maison</option>
                        <option value='21'  id='cat21' >Bricolage</option>
                        <option value='52'  id='cat52' >Jardinage</option>
                        <option value='22'  id='cat22' >V&ecirc;tements</option>
                        <option value='53'  id='cat53' >Chaussures</option>
                        <option value='47'  id='cat47' >Accessoires &amp; Bagagerie</option>
                        <option value='42'  id='cat42' >Montres &amp; Bijoux</option>
                        <option value='23'  id='cat23' >Equipement b&eacute;b&eacute;</option>
                        <option value='54'  id='cat54' >V&ecirc;tements b&eacute;b&eacute;</option>
                        <option value='24' style='background-color:#E6E6E6' disabled id='cat24' >-&#45; LOISIRS -&#45;</option>
                        <option value='25'  id='cat25' >DVD / Films</option>
                        <option value='26'  id='cat26' >CD / Musique</option>
                        <option value='27'  id='cat27' >Livres</option>
                        <option value='28'  id='cat28' >Animaux</option>
                        <option value='55'  id='cat55' >V&eacute;los</option>
                        <option value='29'  id='cat29' >Sports &amp; Hobbies</option>
                        <option value='30'  id='cat30' >Instruments de musique</option>
                        <option value='40'  id='cat40' >Collection</option>
                        <option value='41'  id='cat41' >Jeux &amp; Jouets</option>
                        <option value='48'  id='cat48' >Vins &amp; Gastronomie</option>
                        <option value='56' style='background-color:#E6E6E6' disabled id='cat56' >-&#45; MATERIEL PROFESSIONNEL -&#45;</option>
                        <option value='57'  id='cat57' >Mat&eacute;riel Agricole</option>
                        <option value='58'  id='cat58' >Transport &#45; Manutention</option>
                        <option value='59'  id='cat59' >BTP &#45; Chantier Gros&#45;oeuvre</option>
                        <option value='60'  id='cat60' >Outillage &#45; Mat&eacute;riaux 2nd&#45;oeuvre</option>
                        <option value='32'  id='cat32' >&Eacute;quipements Industriels</option>
                        <option value='61'  id='cat61' >Restauration &#45; H&ocirc;tellerie</option>
                        <option value='62'  id='cat62' >Fournitures de Bureau</option>
                        <option value='63'  id='cat63' >Commerces &amp; March&eacute;s</option>
                        <option value='64'  id='cat64' >Mat&eacute;riel M&eacute;dical</option>
                        <option value='31' style='background-color:#E6E6E6' disabled id='cat31' >-&#45; SERVICES -&#45;</option>
                        <option value='34'  id='cat34' >Prestations de services</option>
                        <option value='35'  id='cat35' >Billetterie</option>
                        <option value='49'  id='cat49' >Ev&eacute;nements</option>
                        <option value='36'  id='cat36' >Cours particuliers</option>
                        <option value='65'  id='cat65' >Covoiturage</option>
                        <option value='37' style='background-color:#E6E6E6' disabled id='cat37' >-&#45; -&#45; -&#45;</option>
                        <option value='38'  id='cat38' >Autres</option>
                    </select>
                    <span class="label-error full " data-for="sub_category"></span>
                </div>        
            </div><!-- /ROW -->
            <div class="row">
                <div class="col-md-6">
                    <label class="label" for="department">Département *</label>
                    <select class="form-control" name="department" id="department" class="select">
                        <option value="0">&laquo;Séléctionnez votre département</option>
                        <option value='71' disabled id='cat71' >-&#45; EMPLOI -&#45;</option>
                        <option value='33' id='cat33' >Offres d'emploi</option>
                        <option value='1' disabled id='cat1' >-&#45; VEHICULES -&#45;</option>
                        <option value='2'  id='cat2' >Voitures</option>
                        <option value='3'  id='cat3' >Motos</option>
                        <option value='4'  id='cat4' >Caravaning</option>
                        <option value='5'  id='cat5' >Utilitaires</option>
                        <option value='6'  id='cat6' >Equipement Auto</option>
                        <option value='44'  id='cat44' >Equipement Moto</option>
                        <option value='50'  id='cat50' >Equipement Caravaning</option>
                        <option value='7'  id='cat7' >Nautisme</option>
                        <option value='51'  id='cat51' >Equipement Nautisme</option>
                    </select>
                    <span class="label-error full " data-for="department"></span>
                </div>

                <div class="col-md-6">
                    <label class="label" for="ville">Code postal/Ville *</label>
                    <select class="form-control" name="ville" id="ville" class="select">
                        <option value="0">&laquo;Séléctionnez votre ville</option>
                        <option value='71' disabled id='cat71' >-&#45; EMPLOI -&#45;</option>
                        <option value='33' id='cat33' >Offres d'emploi</option>
                        <option value='1' disabled id='cat1' >-&#45; VEHICULES -&#45;</option>
                        <option value='2'  id='cat2' >Voitures</option>
                        <option value='3'  id='cat3' >Motos</option>
                        <option value='4'  id='cat4' >Caravaning</option>
                        <option value='5'  id='cat5' >Utilitaires</option>
                        <option value='6'  id='cat6' >Equipement Auto</option>
                        <option value='44'  id='cat44' >Equipement Moto</option>
                        <option value='50'  id='cat50' >Equipement Caravaning</option>
                        <option value='7'  id='cat7' >Nautisme</option>
                        <option value='51'  id='cat51' >Equipement Nautisme</option>
                    </select>
                    <span class="label-error full " data-for="ville"></span>
                </div>
            </div>
        </div>
    </div>
<?php
include 'sidebar.php';
include 'footer.php';
?>