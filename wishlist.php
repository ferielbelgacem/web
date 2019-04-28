<?PHP
include "../core/CatalogueC.php";
$CatalogueC=new CatalogueC();
$listeEmployes=$CatalogueC->afficherCatalogue();
?>

<title>Liste des favoris</title>

<!-- BREADCRUMBS -->
            <div class="bcrumbs">
                <div class="container">
                    <ul>
                    </ul>
                </div>
            </div>

        <!-- MY ACCOUNT -->
            <div class="account-wrap">
              <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- HTML -->
                            <div id="account-id">
                                <h4 class="account-title"><span class="fa fa-chevron-right"></span>Liste des favoris</h4>
                                <div class="order-history">
                                    <table class="cart-table">
                                        <tbody><tr>
                                            <th>Id article</th>



                                            <th>type du produit</th>
                                            <th>image</th>
                                            <th></th>
                                        </tr>

                                        <?php foreach ($listeEmployes as $w){?>
                                        <tr>
                                            <td><img src="../img/"<?php echo $w['image']?>" class="img" alt=""></td>

                                            <td>

                                                <h4><a href="#"><?php echo $w['id_article']?></a></h4>
                                            </td>
                                            <td>
                                                <?php echo $w['type']?>
                                               <td/>
                                               <td>
                                             <?php echo $w['image']?>
                                           </td>
                                            </td>
                                            <td>


                                          
                                               <form id="myform" method="post" action="../views/supprimerCatalogue.php">
                                                       <input hidden name="id_article" value="<?php echo $w['id_article'];?>">
                                                        <a href="#" onclick="document.getElementById('myform').submit()" class="btn-black">Supprimer de la liste des favoris</a>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody></table>

                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="clearfix space20"></div>
