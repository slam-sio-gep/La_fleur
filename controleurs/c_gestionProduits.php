<?php
if(!isset($_SESSION['id']) )
{
    if(!empty($_POST['login'])) {
    
    $result = $pdo->getConnect($_POST['login'],$_POST['password']);

    var_dump($result);
    
    if(!is_array($result)) 
    {     
    echo "Mot de passe ou login incorrect";
    }
    else 
    {
        /* Permet de suivre la connexion de l'utilisateur, active sur toute les pages */
        $_SESSION['id'] = $result['id'];
        header("Location: index.php?uc=administrer"); // redirige la page       
    }   
}
    include("vues/v_login.php");   
} 
else
{
    $lesCategories = $pdo->getLesCategories();
    include("vues/v_categories.php");
    $categorie = $_REQUEST['categorie'];
    $lesProduits = $pdo->getLesProduitsDeCategorie($categorie);

    echo 'je suis dans l\'administration';  

    $action = $_REQUEST['action'];

    switch($action) {
    case 'ajouterProduit':
        if (isset($_POST['valide_add']))
        {
            $desc_prod = $_POST['desc_prod'];
            $prixadd = $_POST['prix_prod'];
            $url_img = $POST[dirname('img_prod')];
            echo $POST[dirname('img_prod')];  
            //$prix = $_POST['update_prix'];
            //$pdo->setNewProduit($id_produit, $prix);
        }  
                   
         include("vues/v_addproduit.php");          
    break;

    case 'voirProduits':
        echo '#'.$_REQUEST['categorie'].'#'; 
        if (isset($_POST['update_submit'])) {       // Ici pour que la page se mette à jour quand update, et affiche
            $id_produit = $_POST['id_produit'];     // le prix actuel
            $prix = $_POST['update_prix'];
            $pdo->setPrixProduit($id_produit, $prix);
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }
        elseif(isset($_POST['delete_submit'])) {
            $id_produit = $_POST['id_produit'];
            $pdo->deleteProduit($id_produit);
            header('Location: ' . $_SERVER['REQUEST_URI']);
        }
        include("vues/v_produits.php");
    break;
}
include("vues/v_backoffice.php");
}

?>