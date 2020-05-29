<?php
function connecter_db()
{

    try {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $link =  new PDO("mysql:host=localhost;dbname=ecataloguedb", "root", "", $options);
        return $link;
    } catch (PDOException $e) {
        die("erreur de connexion a la base de donnees " . $e->getMessage());
    }
}


// ajout de produit
function ajouter_produit($libelle, $categorie_id, $prix, $photo, $reduction = 0, $description = "", $place = "")
{
    try {
        //connexion avec la base 
        $link = connecter_db();
        // preparer une requete bd  dans cette connexion: SQL
        $rp = $link->prepare("insert into produit(libelle,categorie_id,prix,photo,reduction,description,place) values(?,?,?,?,?,?,?)");
        // executer la requete  preparee
        $rp->execute([$libelle, $categorie_id, $prix, $photo, $reduction, $description, $place]);
    } catch (PDOException $e) {
        die("erreur d'ajout de produit dans  la base de donnees " . $e->getMessage());
    }
}


// ajout de categorie
function ajouter_categorie($nom, $photo = "images/icon.png")
{
    try {
        //connexion avec la base 
        $link = connecter_db();
        // preparer une requete bd  dans cette connexion: SQL
        $rp = $link->prepare("insert into categorie(nom,photo) values(?,?)");
        // executer la requete  preparee
        $rp->execute([$nom, $photo]);
    } catch (PDOException $e) {
        die("erreur d'ajout de la categorie dans  la base de donnees " . $e->getMessage());
    }
}

function supprimer($id, $table)
{
    try {
        $link = connecter_db();
        $rp = $link->prepare("delete from $table where id=?");
        $rp->execute([$id]);
    } catch (PDOException $e) {
        die("erreur de suppression  de $table dans  la base de donnees " . $e->getMessage());
    }
}

//modifier  une ressource (par id)
function modifier($nom, $classe, $id)
{
    try {
        $link = connecter_db();
        $rp = $link->prepare("update etudiant set nom=? , classe=?  where id=?");
        $rp->execute([$nom, $classe, $id]);
    } catch (PDOException $e) {
        die("erreur de modification   de l'etudiant dans  la base de donnees " . $e->getMessage());
    }
}

// recuperer des ressources depuis la bd
function all($table)
{
    try {
        $link = connecter_db();
        $rp = $link->prepare("select * from $table ");
        $rp->execute();
        $resultat =  $rp->fetchAll();

        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation dans la table  $table dans  la base de donnees " . $e->getMessage());
    }
}
// rechercher par consition
// findBy("prix >4000",'produit');
function findBy($condition, $table)
{
    try {
        $link = connecter_db();
        $rp = $link->prepare("select * from $table  where $condition");
        $rp->execute();
        $resultat =  $rp->fetchAll();

        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation dans la table  $table dans  la base de donnees " . $e->getMessage());
    }
}
// recuperer une  ressource par son id depuis la bd
function find($id, $table)
{
    try {
        $link = connecter_db();
        $rp = $link->prepare("select * from $table  where id=? ");
        $rp->execute([$id]);
        $resultat =  $rp->fetch();

        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation de $table  d'id = $id dans  la base de donnees " . $e->getMessage());
    }
}
// upload = televersement de fichier 
//$infos=$_FILES['chemin']
function uploader($infos, $dossier = "images")
{

    // creer le dossier s'il n'exsite
    if (!is_dir($dossier)) {
        mkdir($dossier);
    }
    $tmp = $infos['tmp_name'];
    $nom = $infos['name'];
    $path_parts = pathinfo($nom);
    //var_dump($path_parts);
    $ext = strtolower($path_parts["extension"]);
    $new_name = md5(date('YmdHis') . '_' . rand(0, 9999)) . '.' . $ext;
    // les extensions autorisees
    $autorise = ['jpg', 'png', 'jpeg', 'gif'];
    $chemin = "images/$new_name";
    if (!in_array($ext, $autorise)) {
        die("Ce n'est pas une image");
    }
    $taille = filesize($tmp); // retourne la taille du fichier en octect
    if ($taille > 8 * 1024 * 1024) {
        die("Veulliez choisir un fichier de taille < 8Mo");
    }
    if (!move_uploaded_file($tmp, $chemin)) {
        die("Probleme d'upload de l'image");
    };

    return $chemin;
}


//check login

function checker($login, $passe)
{
    try {
        $link = connecter_db();
        $rp = $link->prepare("select * from user  where login=? and passe=? ");
        $rp->execute([$login, $passe]);
        $resultat =  $rp->fetch();
        if (empty($resultat)) {
            header("location:login.php?cn=no");
            die();
        } else {

            $_SESSION['login'] = $login;
            $_SESSION['passe'] = $passe;
            $_SESSION['pseudo'] = $resultat['pseudo'];
        }


        return $resultat;
    } catch (PDOException $e) {
        die("erreur de  recuperation de l'etudiant d'id = $id dans  la base de donnees " . $e->getMessage());
    }
}


// fin check login
