<!DOCTYPE html>
<html lang='eng'>
    <head>
        <meta charset="utf-8">
        <title>Food & Drink</title>
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap-5.1.3-dist/js/bootstrap.js">
        <link rel="stylesheet" href="BackEnd.css">
        <link rel="shortcut icon" type="image/svg" href="food-and-drink.svg">
    </head>
    <header>
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand"><img width="100" src="food-and-drink.svg"></a>
            <a class="navbar-brand">Food and Drink</a>
            <div class="navbar-collapse">
                <form class="form-inline">
                    <button class="btn btn-outline-success" type="button">Déconnexion</button>
                  </form>
            </div>
        </nav>        
    </header>
    <body class="body">
        <?php
        $user = 'root';
        $password = 'root';

        $dbh = new PDO ('mysql:host=localhost;dbname=food and drink',$user, $password);

        $sth = $dbh->prepare('Select * from menu join saisons on menu.saisons_idsaison = saisons.idsaison');
        $sth->execute();
        $results = $sth->fetchAll();

        if (isset($_GET['all'])){
            $sth = $dbh->prepare('Select * from menu join saisons on menu.saisons_idsaison = saisons.idsaison');
            $sth->execute();
            $results = $sth->fetchAll();
        }else{
            $sth = $dbh->prepare('Select * from menu join saisons on menu.saisons_idsaison = saisons.idsaison where Cacher = 1');
            $sth->execute();
            $results = $sth->fetchAll();
        }
        if (isset($_POST['envoyer'])){
            $nouveau_nom = $_POST['NEW_nom'];
            $nouveau_entree = $_POST['NEW_entree'];
            $nouveau_plat = $_POST['NEW_plat']; 
            $nouveau_dessert = $_POST['NEW_dessert'];
            $nouveau_tarif = $_POST['NEW_tarif'];
            $nouveau_boisson = $_POST['NEW_boisson'];
            $nouveau_saison = $_POST['NEW_saison'];
            $nouveau_photo = $_POST['NEW_photo'];
            $ajout=("INSERT INTO `menu` (`nom`,`entree`, `plat`,`dessert`,`tarif`,`boissons`,`saisons_idsaison`,`photo`) VALUES (:nom, :entree, :plat, :dessert, :tar, :boisson, :saison, :photo)");
            $result=$dbh->prepare($ajout);
            $execute=$result->execute(array(":nom"=>$nouveau_nom,":entree"=>$nouveau_entree, ":plat"=>$nouveau_plat, ":dessert"=>$nouveau_dessert,":tar"=>$nouveau_tarif, ":boisson"=>$nouveau_boisson, ":saison"=>$nouveau_saison, ":photo"=>$nouveau_photo));
                if($execute){
                    echo 'ta bd marche';
                }else{
                    echo "y'a une douille";
                    print_r($result->errorInfo());
                }
        }
        if (isset($_POST['modif_saison'])){
            $cours = $_POST['cours_saison'];
            $ajout="UPDATE `menu` SET EnCours = 0;";
            $ajout.="UPDATE menu SET EnCours = 1 WHERE saisons_idsaison = $cours";
            $result=$dbh->prepare($ajout);
            $execute=$result->execute();
            if($execute){
                echo 'Vous avez ajouter un pokémon, veuillez recharger la base de donnée pour le voir';
            }else{
                echo "Vous n'avez pas remplie tout le formulaire";
            }
        }
        ?>
        <section class="info">
                <h1>Modification des informations</h1>
                <form class="modif" action='BackEnd.php' method='POST'>
                    <div>
                        <input type="tel" name="" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" placeholder="Téléphone (ex : 01 23 45 67 89)"></input> <!--name a changer-->
                        <input type='text' name='' placeholder="Adresse"></input> <!--name a changer-->
                    </div>
                    <div>
                        <input type="email" name='' placeholder="Email"></input> <!--name a changer-->
                        <input type="submit" class ="btn btn-info" value="Valider"></div>
                    </div>
                        
                </form>
        </section>
        <section class="season">
            <h1>Choisissez la saison en cours</h1>
                <form action='BackEnd.php' method='POST'>
                    <div>
                        <input type="radio" id="Hiver" name="cours_saison" value="3" checked>
                        <label for="Hiver">Hiver</label>
                    </div>
                    <div>
                        <input type="radio" id="Printemps" name="cours_saison" value="4">
                        <label for="Printemps">Printemps</label>
                    </div>
                    <div>
                        <input type="radio" id="Été" name="cours_saison" value="1">
                        <label for="Été">Été</label>
                    </div>
                    <div>
                        <input type="radio" id="Automne" name="cours_saison" value="2">
                        <label for="Automne">Automne</label>
                    </div>
                    <input type="submit" class ="btn" name="modif_saison" value="Valider la saison">
                </form>
        </section>
        <section class="add">
            <h1>Nouveau menu à la carte</h1>
                <form class="modif" action='BackEnd.php' method='POST'>
                    <div>
                        <input type='text' name='NEW_nom' placeholder="Nom du menu" required></input>    <!--name a changer-->
                        <input type='number' name='NEW_tarif' placeholder="Tarif (€)" min=0 step=0.01 required></input> <!--name a changer-->
                    </div>
                    <div>
                        <input type="radio" id="Hiver" name="NEW_saison" value="3" checked>
                        <label for="Hiver">Hiver</label>
                        <input type="radio" id="Printemps" name="NEW_saison" value="4">
                        <label for="Printemps">Printemps</label>
                    </div>
                    <div>
                        <input type="radio" id="Été" name="NEW_saison" value="1">
                        <label for="Été">Été</label>
                        <input type="radio" id="Automne" name="NEW_saison" value="2">
                        <label for="Automne">Automne</label>
                    </div>
                    <div>
                        <p class="menu">Entrée</p>
                    </div>
                    <div>
                        <input type="text" name="NEW_entree" placeholder="Nom" required></input> <!--name a changer-->
                    </div>
                    <div>
                        <p class="menu">Plat</p>
                    </div>
                    <div>
                        <input type='text' name='NEW_plat' placeholder="Nom" required></input> <!--name a changer-->
                    </div>
                    <div>
                        <p class="menu">Dessert</p>
                    </div>
                    <div>
                        <input type='text' name='NEW_dessert' placeholder="Nom" required></input> <!--name a changer-->
                    </div>
                    <div>
                        <p class="menu">Boisson</p>
                    </div>
                    <div>
                        <input type='text' name='NEW_boisson' placeholder="Nom" required></input> <!--name a changer-->
                    </div>
                    <div>
                        <p class="menu">Photo</p>
                    </div>
                    <div>
                        <input type="url" name="NEW_photo" placeholder="URL" required><!--name a changer-->
                    </div>
                    <input type="submit" class ="btn" name="envoyer" value="Ajouter un menu">
                </form>
        </section>
        <section class="list">
            <h1 id='liste-des-menus'>Liste des menus</h1> <!--php ajouter : liste des menu et "effacer" avec booléen    Bouton effacer à faire-->
            <div>
                <form action='BackEnd.php#liste-des-menus' method='GET'>
                    <input type="checkbox" name="all" <?php if(isset($_GET['all'])) echo 'checked'; ?> onclick="submit()">
                    <label class="foreign">Voir les anciens menus</label>
                </form>
            </div>
            <?php
            echo "<table>";
            echo "<tr><th>Nom</th><th>Entree</th><th>Plat</th><th>Dessert</th><th>Boisson</th><th>Tarif</th><th>Saison</th></tr>";
            for ($i=0; $i < count($results); $i++){
                $result = $results[$i];
                $nom = $result['nom'];
                $entree = $result['entree'];
                $plat = $result['plat'];
                $dessert = $result['dessert'];
                $boisson = $result['boissons'];
                $tarif = $result['tarif'];
                $saison = $result['nomsaison'];
                echo "<tr><td> $nom </td><td> $entree </td><td> $plat </td><td> $dessert </td><td> $boisson </td><td> $tarif </td><td> $saison </td></tr>";
            }
            ?>
        </section>
    </body>
</html>
