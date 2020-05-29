<?php
include "modele.php";
$produits = all("produit");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <?php include("_menu.php"); ?>
    <div class="container">
        <div class="clearfix"></div>
        <a href="create_produit.php" class="btn btn-primary my-1 float-right">Nouveau</a>
        <div class="clearfix"></div>
        <div class="alert alert-info clearfix">Liste des produits</div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">libelle</th>
                    <th scope="col">photo</th>
                    <th scope="col">categorie</th>
                    <th scope="col">prix</th>
                    <th scope="col">reduction</th>
                    <th scope="col">place</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($produits as $c) { ?>
                    <tr>
                        <th scope="row"><?= $c['id'] ?></th>
                        <td><?= $c['libelle']; ?></td>
                        <td>
                            <img src="<?= $c['photo'] ?>" width="100" class="img-thumbnail">

                        </td>
                        <td><?php


                            $id = $c['categorie_id'];
                            $cat =  find($id, "categorie");
                            echo $cat['nom'];

                            ?></td>
                        <td><?= $c['prix']; ?>MAD</td>
                        <td><?= $c['reduction']; ?>%</td>
                        <td><?= $c['place']; ?></td>
                        <td>
                            <a href="controller.php?id=<?= $c['id'] ?>&action=supprimer&table=produit" class="btn btn-danger btn-sm">Supprimer</a>

                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>