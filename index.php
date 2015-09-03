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
	<a href="emp_edit.php?<?=PARAM_EMP_ID?>=<?=$emp_id?>"><img src="images/crayon.png" alt="crayon"/></a>
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
		</table>
	</div>
    <?php require_once('view_bloc/_view_footer.php')?>;
</body>
</html>




