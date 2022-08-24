<?php
    $alga = $_GET['alga'];      
    $priedas = $_GET['pliusas']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <div class="card">
        
        <div class="alga">
            <?=$alga?>
        </div>
        <div class="priedas">
            <?=$priedas?>
        </div>
        <div class="trukme">
            <?php
                $count = 0; 
                $naujaAlga = $alga;

                while ($naujaAlga < ($alga *2)) {
                    $naujaAlga += $priedas;
                    ++$count;
                }
                echo $count;
            ?>
        </div>
    </div>

    <a href="form.php">Atgal į skaičiuoklę</a>

   
</body>
</html>