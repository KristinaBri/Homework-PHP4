<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1 PHP</title>
</head>
<body>
<h1>1. Užduotis</h1>
<p>Programuotojui moka a Eurų atlyginimą. Darbdavys pažadėjo kiekvieną mėnesį padidinti atlyginimą x Eurų. Sukurkite puslapį kuriame galėtumėme įvesti pradinį atlyginimą ir kiekvieno mėnesio padidinamą sumą. Suskaičiuokite ir išveskite po kiek mėnesių jo atlyginimas bus daugiau nei dvigubai didesnis.</p>

<form action="output.php" method="$_GET">
    <label for="alga">Esama alga</label>
    <input type="text" name="alga"><br>
    <label for="pliusas">Priedas prie algos</label>
    <input type="text" name="pliusas"><br>
    <button>Paskaičiuoti</button>
</form>
</body>
</html>