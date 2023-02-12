<?php
session_start();
require('function.php');
if(!isConnected()){
    header('location: index.php');
}
require('dbconnexion.php');

require('controlpost.php');


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php require_once('header.php'); ?>
        <div class="container" style="margin-top: 30px;">
            <form action="" method="post">
                <div class=" row">
                    <h1 class="col-sm-4 offset-md-3 ">Ajouter un post</h1>
                </div>
                <div class="row">
                    <p style="color: red;" class="col-sm-4 offset-md-3 col-form-label"><?php if(isset($error)) echo $error; ?></p>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-sm-2 offset-md-3 col-form-label">Titre</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="title" id="title" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="content" class="col-sm-2  offset-md-3 col-form-label">Contenu</label>
                    <div class="col-sm-3">
                        <textarea name="content" id="" cols="80" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-5 col-sm-10">
                        <input type="submit" name="addpost" class="btn btn-primary" value="Ajouter">
                    </div>
                </div>
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>