<?PHP
include "../core/CatalogueC.php";
$CatalogueC=new CatalogueC();
$listeEmployes=$CatalogueC->afficherCatalogue();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id_article</td>
<td>type</td>
<td>Image</td>
<td>Nom</td>
<td>Prix</td>
<td>Description</td>

</tr>

<?PHP
foreach($listeEmployes as $row){
	?>
	<tr>
	<td><?PHP echo $row['id_article']; ?></td>
	<td><?PHP echo $row['type']; ?></td>
	<td><?PHP echo $row['image']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['description']; ?></td>
	<td><form method="POST" action="supprimerCatalogue.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id_article']; ?>" name="id_article">
	</form>
	</td>
	<td><a href="modifierCatalogue.php?id=<?PHP echo $row['id_article']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


