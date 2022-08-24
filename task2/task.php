<?php
    $number = $_GET['num'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2 PHP</title>
</head>
<body>
    <h1>2. Užduotis</h1>
    <p>Sukurkite tinklapį kuris suskaičiuotų, kiek duotas skaičius a turi lyginių ir nelyginių skaitmenų. Kai a = 63258, tai lyginių 3, nelyginių 2</p>

    <form action="" method="$_GET">
        <label for="num">Įveskite skaičių: </label>
        <input type="text" name="num">
        <button>Skaičiuoti</button>
    </form>

    <?php
        $toString = (string)$number;
        $countLyginiai = 0;
        $countNelyginiai = 0;

        for($i = 0; $i < strlen($toString); $i++) { 
            if ($toString[$i] % 2 ===0) {
                ++$countLyginiai;
            } else {
               ++$countNelyginiai;
            }
        }
    ?>

    <p>Skaičius <?=$number?> lyginių skaičių turi <?=$countLyginiai?>, o nelyginių - <?=$countNelyginiai?>.</p>
</body>
</html>
