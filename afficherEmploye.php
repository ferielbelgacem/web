<?PHP
include "../core/employeC.php";
$CatalogueC=new CatalogueC();
$listeEmployes=$CatalogueC->afficherCatalogue();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id_article</td>
<td>type</td>
</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_article']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_article']; ?>" name="id_article">
	</form>
	</td>
	<td><a href="modifierEmploye.php?id=<?PHP echo $row['id_article']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


