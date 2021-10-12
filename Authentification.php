<html>
    <head>
      <title>Authentification</title>
      <meta charset="utf-8">



    </head>
ta mere jeff
    <body>
        <div id="container">
            <!-- zone de connexion -->

            <form action="verification.php" method="POST">
                <h1> Connexion </h1>

                <label><b>Nom d'utilisateur / Username </b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username">

                <label><b>Mot de passe / Password </b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password">

                <input type="submit" id='submit' value='LOGIN' <button onclick="http://192.168.64.2/ProjectS78/page_principale.php"></button>

                <label><b> Créer un compte </b></label>
                <input type="submit" id='submit' value='Créer un compte' <button onclick="http://192.168.64.2/ProjectS78/Creercompte.php"></button>

                <label><b>Mot de passe oublié ? </b></label>




                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>
<html>
<img src="favicon.png" alt="" align=top>

</html>
