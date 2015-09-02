<?php
require_once 'data/_data.php';
$emp_id = 102; // Employé "par défaut"
// TODO: Lire et mettre à jour l'id de l'employé en Query string
$liste_employes = get_employes(); // Liste des noms de tous les employés
$emp_data = $liste_employes[$emp_id];
$agenda = get_agenda($emp_id);
?>
<html>
<head>
    <meta charset = "UTF-8" />
    <title>Agenda Cabinet Médical</title>
</head>
<body>
<?php require_once('view_bloc/_view_header.php') ?>
<h2>Activité de l'employé <?php echo $emp_data['emp_name'] ?> </h2>
<div id="agenda">
    <table>
        <tr><th>Heure</th><th>Activité</th></tr>

        <?php
        // TODO: Afficher l'agenda de l'employé
        foreach ($agenda as $heure => $activité ) {
            echo '<tr><th>',$heure ,'</th><th>' , $activité , '</th></tr>';
        }
        echo   $emp_data['emp_name'] ;

        ?>

        <label for="08H"> 08H : <select name="selection" id="08H">
                <option>Planification</option>
                <label for="09H"> 09H : <select name="selection" id="09H">
                <option>Planification</option>
                        <label for="10H"> 10H : <select name="selection" id="10H">
                                <option>Réunion Médicale</option>
                                <label for="11H"> 11H : <select name="selection" id="11H">
                                        <option>Réunion Médicale</option>
                                        <label for="12H"> 12H : <select name="selection" id="12H">
                                                <option>Hors</option>
                                                <label for="13H"> 13H : <select name="selection" id="13H">
                                                        <option>Formation et conseil</option>
                                                        <label for="14H"> 14H : <select name="selection" id="14H">
                                                                <option>Dossiers médicaux</option>
                                                                <label for="15H">15H : <select name="selection" id="15H">
                                                                        <option>Dossiers médicaux</option>


    </table>
</div>
<?php require_once('view_bloc/_view_footer.php')?>;
</body>
</html>