<div id="produits">
<a href=index.php?uc=administrer&action=ajouterProduit>Ajouter un nouveau produit</a>
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
			 <li><?php echo " : ".$prix." Euros" ?>
			</a></li>
			 <?php 
			 	if ($uc == voirProduits)
			 	{
			 		echo'<li><a href=index.php?uc=voirProduits&categorie='.$categorie.'&produit='.$id.'&action=ajouterAuPanier>
			 		<img src="images/mettrepanier.png" TITLE="Ajouter au panier" </li></a>';
			 	}
			 	elseif ($uc == administrer) 
			 	{
			 		echo '<form class="form" action="" method="post"  onsubmit="return sure()">
			 			  	<input id="update_in" title="MISE A JOUR" name="update_submit" type="submit" value="">

			 				Prix : <input id="update_form" type="text"  name="update_prix" value="'.$prix.'">
		                	<input style="width:10%" type="text" name="uc" value="'.$uc.'">
		                	<input style="width:10%" type="text" name="categorie" value="'.$categorie.'">		                	
		                	<input style="width:10%" type="text" name="id_produit" value="'.$id.'"><br >

		                	<input id="delete_in" title="SUPPRIMER" name="delete_submit" type="submit" value="">		               	 	
            			</form>';
			 					 		
			 	}
			 ?>	 			
	</ul>
			
			
			
<?php			
}
?>
</div>

<script>
function sure(){
    return confirm("Confirmation ?");
}
</script>