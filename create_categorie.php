<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle categorie</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
    <?php //include("_menu.php"); 
    ?>

    <div class="container">

        <div class="alert alert-info">Nouvelle categorie</div>

        <div class="row">
            <div class="col-md-6  mx-auto">
                <form action="controller.php?action=ajouter&table=categorie" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="libelle">nom (*)</label>
                        <input required type="text" class="form-control" id="nom" name="nom" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="photo">photo</label>
                        <input type="file" class="form-control" id="photo" name="photo" aria-describedby="emailHelp">
                    </div>


                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </div>

        </div>


    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>