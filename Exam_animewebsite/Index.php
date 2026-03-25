<?php
session_start();

$Titles_of_anime =['BlackClover','Frieren','Jack of all tardes Party of None'
,'The Angel Next Door Spoils Me Rotten','Alya sometimes hides her feelings in russian',
'Wistoria Wand and sword']; 

$AnimeDescription = [
    'A Boy who has no magic but Never gives up and keeps on fighing to reach his gole to become a magic emperor.',
    'A that keeps adventuring every corner of earth to find interesting magic and grimoire and hunt demons with her party.',
    'Once in a hero\'s party but banished by the hero his childhood friend who swear to fight aloong side him.',
    'a unpopular boy who has no interest in the world met and a girl who is popular in the school and give a nick name the "Angel"',
    'A Russian girl who falls in love with a boy and "saying i love you" in russian but the girl doesn\'t know that the boy knows how to speak in Russian.',
    'In the world full of magic theres a boy who doesn\'t have any drop of magic but never gives up to catch up to the girl he loves the most.'
];
$images = [
    'Litrato/BlackClover.jpg',
    'Litrato/Frieren_.jpg',
    'Litrato/Jack-of-All-Trades Party of None.webp',
    'Litrato/Angel.webp',
    'Litrato/AlyaSeason2.webp',
    'Litrato/Wistoria Season 2.webp'
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AniChisa</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-image: url('https://media1.tenor.com/m/XmriPSWwCKUAAAAC/chisa-wuthering-waves.gif');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.2); 
            min-height: 100vh;
            color: white;
        }

        .Navprofile {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9); 
            color: black;
        }
    </style>
</head>
<body>


      



<div class="overlay">
    <nav class="navbar navbar-dark bg-dark px-4">
        <div class="container-fluid">
            <div class="navbar-left d-flex align-items-center">
                <img src="Litrato/Baby.jpg" class="Navprofile" alt="Profile">
                <h4 class="navbar-text">AniChisa</h4>
            </div>
            <div class="navbar-right">
         <a class="navbar-btn" href="Sign-up.php">Log Out</a>
     </div>
    
        </div>
    </nav>

    <div class="container py-5">
        <br>    
        <br>
        <h1 class="text-center mb-5">List of Anime</h1>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            
            <?php for ($i = 0; $i < count($Titles_of_anime); $i++): ?>
            <div class="col">
                <div class="card h-100 shadow">
                    <img src="<?= $images[$i] ?>" class="card-img-top img-fluid" style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $Titles_of_anime[$i] ?></h5>
                        <p class="card-text"><?= $AnimeDescription[$i] ?></p>
                        <p class="btn btn-primary" href="#">Watch <?= $Titles_of_anime[$i] ?></p>
                    </div>
                </div>
            </div>
            <?php endfor; ?>

        </div> </div> </div> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
             

</body>
</html>