<?php

include('../include/header.php');
?>

<body>

    <div class="form-group">
        <div class="connexion-cont">
            <form action="../php/traitement_membres.php" method="POST" class="box" enctype="multipart/form-data">
                <h1>Inscription</h1>
                <input type="text" name="firstname" placeholder="Prénom" required>
                <input type="text" name="lastname" placeholder="Nom" required>
                <input type="text" name="pseudo" placeholder="Pseudo" required>
                <input type="text" name="email" placeholder="Email" required>
                <input type="password" name="mdp" placeholder="MotdePasse" required>

                <input type="password" name="passwordvalid" placeholder="Confirmez le mot de passe" required>
                <br>
                <input type="submit" name="submit" value="Je m'inscris !">
            </form>
        </div>
    </div>

    <div>
        <a class="btn btn-primary" href="../index.php">Retour</a>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>