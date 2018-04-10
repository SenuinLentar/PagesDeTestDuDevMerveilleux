<nav>
    <div class="menu"><a href="Hello.php" title="Les premiers sont troujours les meilleurs">La Première Page</a></div>
    <div class="menu"><a href="coucou.php" title="Vous verrez, c'est magique!">La Deuxième Page</a></div>
    <div class="menu"><a href="Hallo.php" title="Un terrible dragon vous attend!">Un dragon</a></div>
    <div class="menu"><a href="Fun.php" title="Du son et des images enfin!">Sons et lumières</a></div>

    <?php
        if(isset($_SESSION['role']) AND $_SESSION['role'] == 1)
        {
            ?><div class="menu"><a href="test_bdd.php" title="Data! Data everywhere!">BDD</a></div><?php
        }
    ?>

    <div class="menu"><a href="identification/connexion.php" title="Connexion au site">Connexion</a></div>
    <div class="menu"><a href="identification/deconnexion.php" title="Deconnexion au site">Deconnexion</a></div>
    <?php
        if(isset($_SESSION['pseudo']))
        {
            ?><div class="menu"><?php echo $_SESSION['pseudo']; ?></div><?php
        }
    ?>
</nav>
