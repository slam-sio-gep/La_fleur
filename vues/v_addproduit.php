<form class="style_form" action='' method='post'>
	<fieldset style="border:1px solid #AEEE00; padding: 9px 5px 30px 25px !Important;">
		
		<legend style="color:#AEEE00; font-weight:bold"> Ajouter un produit </legend>
		Prix du produit : <input type="text"  name="prix_prod"><br />
		<input style="width:80%" type="file" name="img_prod" /><br />
		Description du produit : <textarea name="desc_prod" cols="20" rows="4"></textarea><br />

	  	<label for="utilise">Catégorie du produit : </label><br />
	   		<select>
			   <option value="fle"> Fleur</option>
			   <option value="pla"> Plante</option>
			   <option value="com"> Composition</option>
	   		</select>
	   		<br /><br />
	   	<input name="valide_add" type="submit" value="Valider">
	</fieldset>

</form>