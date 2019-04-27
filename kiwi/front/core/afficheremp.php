<?php
require "../core/employec.php";
$ec=new Employec();
$liste=$ec->afficheremployerbase();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Liste des employés</h2>
<table border="3">
	<tr>
		<th>CIN</th>
		<th>NOM</th>
		<th>PRENOM</th>
		<th>Nbheures</th>
		<th>Tarif</th>
	</tr>
	<tr>
		<?php foreach ($liste as $key => $value) {?>
		<td><?php echo $value['cin']?></td>
		<td><?php echo $value['nom']?></td>
		<td><?php echo $value['prenom']?></td>
		<td><?php echo $value['nbheures']?></td>
		<td><?php echo $value['tarif']?></td>
	</tr>
	<?php }?>
</table>
</body>
</html>