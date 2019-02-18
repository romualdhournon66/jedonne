$(function () {
    $('#category').blur(function () {
        //Mon appel AJAX
        //$.post prend en paramètre la page PHP qui va effectuer le traitement, la variable que l'on communique au PHP, et la fonction de traitement avec la réponse de PHP.
        $.post('controllers/add_annonceCtl.php', {
            idCat: $(this).val()}, 
        function (data) {
//            dans data se trouve ce que le PHP a envoyé via son echo
            console.log(data);
        });
    });
});


