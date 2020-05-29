<?php
include "modele.php";
$categories = all("categorie");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <?php include("_menu.php"); ?>
    <div class="container">
        <div class="text-right">
            <a href="create_categorie.php" class="btn btn-primary my-1">Nouveau</a>
        </div>
        <div class="alert alert-info">Liste des categories</div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">photo</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($categories as $c) { ?>
                    <tr>
                        <th scope="row"><?= $c['id'] ?></th>
                        <td><?= $c['nom']; ?></td>
                        <td>
                            <img src="<?= $c['photo'] ?>" width="100" class="img-thumbnail">

                        </td>
                        <td>
                            <a href="controller.php?id=<?= $c['id'] ?>&action=supprimer&table=categorie&action=supprimer" class="btn btn-danger btn-sm">Supprimer</a>

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