<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre</title>
    </head>
    <body>
        <section>
            <h1>Bienvenue sur ce site de test php</h1>
            <h2>Voici la liste des question:</h2>
            <form action="Accueil.php">
                <label>Identifiant de la catégorie</label>
                <input name="shortname" size="15"/>
                <input type="submit" size="15"/>
                
                <?php 
                    if(isset($_GET["shortname"])){
                        $shortname = $_GET["shortname"];
                        echo $shortname; 
                    } 
                ?>
                
                <table border id="Table" >
                    <?php
                    include_once('PHP/function.php');
                        ConsulterQuestion(); 
                    ?>         
                </table>
            </form>
        </section>
        <section>
            <form>
                <h1>Sa vous dis une petite question ?</h1>
                <table border id="Table" >
                    <?php
                    include_once('PHP/function.php');
                        RandomQuestion(); 
                    ?>         
                </table>
                <button type="submit" class="" action="Accueil.php">Changer la question</button>
                <button type="submit" class="" name='Confirmation' value="oui">Envoyer</button>
            </form>
        </section>
    </body>
</html>