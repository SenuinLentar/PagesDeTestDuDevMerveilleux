<nav>
    <div class="menu"><a href="\dev_merveilleux\Hello.php" title="Les premiers sont troujours les meilleurs">La Première Page</a></div>

    <div class="menu"><a href="\dev_merveilleux\coucou.php" title="Vous verrez, c'est magique!">La Deuxième Page</a></div>

    <div class="menu"><a href="\dev_merveilleux\Hallo.php" title="Un terrible dragon vous attend!">Un dragon</a></div>

    <div class="menu"><a href="\dev_merveilleux\Fun.php" title="Du son et des images enfin!">Sons et lumières</a></div>

    <?php
        if(isset($_SESSION['role']) AND $_SESSION['role'] == 1)
        {
            ?><div class="menu"><a href="\dev_merveilleux\test_bdd.php" title="Data! Data everywhere!">BDD</a></div><?php
        }
    ?>

    <div class="menu"><a href="\dev_merveilleux\boutique.php" title="Boutique du site">Boutique</a></div>

    <div class="menu"><a href="\dev_merveilleux\identification\connexion.php" title="Connexion au site">Connexion</a></div>

    <div class="menu"><a href="\dev_merveilleux\identification\deconnexion.php" title="Deconnexion au site">Deconnexion</a></div>

    <?php
        if(isset($_SESSION['pseudo']))
        {
            ?><div class="menu"><?php echo $_SESSION['pseudo']; ?></div><?php
        }
    ?>
</nav>
