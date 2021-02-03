<?php
include __DIR__ . '/disks.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>
    <link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <img src="../dist/img/logo.png" alt="logo spotify">
            </div>
        </nav>
    </header>

    <main>
        <div class="container d-flex flex-wrap space-between">
            <!-- TEST CARD 
            <div class="card">
                <img src="../dist/img/logo.png">
                <h3>Titolo</h3>
                <h4>Artista</h4>
                <h5>1986</h5>
                <h5>Genere</h5>
            </div> -->

            <?php foreach($disks as $disk) { ?>
                <div class="card">
                    <img src="<?php echo $disk['poster']; ?>" alt="<?php echo $disk['title']; ?>">
                    <h3><?php echo $disk['title']; ?></h3>
                    <h4><?php echo $disk['author']; ?></h4>
                    <h5><?php echo $disk['year']; ?></h5>
                    <h5><?php echo $disk['genre']; ?></h5>
                </div>
            <?php } ?>
        </div>
    </main>
    
</body>
</html>