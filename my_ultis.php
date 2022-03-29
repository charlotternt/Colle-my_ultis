<!DOCTYPE html>
<html lang="fr">

<head>
    <title>My Ultis</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <?php include('connect_bdd.php') ?>
</head>

<body>
    <h1>My To do List</h1>

    <div class="container">
        <h2>A faire:</h2>
        
        <input id="ajout" type="text" placeholder="Ajouter une tache" method="POST">
        <div class="nouvelle_tache">


            <div class="tache">
               
            </div>

        </div>

    </div>

    <div id="fini">
        <h2>Finie:</h2>

        <div class="tache">
            
        </div>

    </div>

    <script type="text/javascript" src="ultis2.js"></script>
</body>

</html>