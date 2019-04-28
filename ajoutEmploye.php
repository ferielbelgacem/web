<?PHP
include "../entities/employe.php";
include "../core/employeC.php";

if (isset($_GET['id_article']) and isset($_GET['type'])){
$Catalogue=new Catalogue(($_GET['id_article']),($_GET['type']));
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$CatalogueC=new CatalogueC();
$CatalogueC->ajouterCatalogueC($Catalogue);
header('Location: ../back/catalogue.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>