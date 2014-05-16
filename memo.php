<!-- OBTENIR LE MENU DES COMPOSITIONS -->
<ul id="categories">
<?php
foreach( $resultCategories as $uneCategorie) 
{
	$idCategorie = $uneCategorie['id'];
	$libCategorie = $uneCategorie['libelle'];
	?>
	<li>
		<a href=index.php?uc=administrer&categorie=<?php echo $idCategorie ?>&action=voirProduits><?php echo $libCategorie ?></a>
	</li>        
<?php
}

?>
</ul>

<!-- OBTENIR LES PRODUITS -->
<div id="produits">
<?php
	
foreach( $lesProduits as $unProduit) 
{
	$id = $unProduit['id'];
	$description = $unProduit['description'];
	$prix=$unProduit['prix'];
	$image = $unProduit['image'];
	?>	
	<ul>
            <li><img src="<?php echo $image ?>" alt=image /></li>
            <li><?php echo $description ?></li>
             <li><?php //echo " : ".$prix." Euros" ?>
            <li><a href="index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=supprimer_du_magasin"> 
                    <img src="images/delete.png" TITLE="Supprimer du magasin"></a></li>

            <form action='' method="post">
                <input type="text" name="uc" value="<?php echo $uc; ?>">
                <input type="text" name="categorie" value="<?php echo $categorie; ?>">
                <input type="text" name="id_produit" value="<?php echo $id; ?>">
                Prix : <input id ="update_form" type='text'  name="update_prix" value="<?php echo $prix; ?>">
                <input name="update_submit" id ="update_button" type='submit' value="Mise à jour du prix">
            </form>		
	</ul>
			
			
			
<?php			
}
?>
</div>