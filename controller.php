<?php
include("modele.php");

// $nom = $_POST['nom'];
// $prix = $_POST['prix'];
extract($_POST); //$nom : extraire data depuis le form : $libelle , $prix
extract($_GET); //extraire les donnees envoyees ds le lien : $id,$action ($id=$_GET['id]),$table


if ($table == "categorie") {
    if ($action == 'ajouter') {
        $photo = uploader($_FILES['photo'], "images"); // recupere le fichier photo , le met dans images/ ensuite retourne le chemin

        ajouter_categorie($nom, $photo); // ajouter ds la table categorie
        //redirection vers index_categorie.php
    }
    if ($action == 'supprimer') {
        supprimer($id, "categorie");
    }


    header("location:index_categorie.php");
}
if ($table == "produit") {
    if ($action == 'ajouter') {
        $photo = uploader($_FILES['photo'], "images"); // recupere le fichier photo , le met dans images/ ensuite retourne le chemin

        ajouter_produit($libelle, $categorie_id, $prix, $photo, $reduction, $description, $place); // ajouter ds la table categorie
        //redirection vers index_categorie.php
    }
    if ($action == 'supprimer') {
        supprimer($id, "categorie");
    }

    header("location:index_produit.php");
}
