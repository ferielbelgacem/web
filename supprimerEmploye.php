<?PHP
include "../core/employeC.php";
$CatalogueC=new CatalogueC();
if (isset($_POST["id_article"])){
	$CatalogueC->supprimerCatalogueC($_POST["id_article"]);
	header('Location: ../back/catalogue.php');
}

?>