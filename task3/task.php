<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>3. Užduotis</h1>
    <p>Faile yra pateikiami skaičiai, temperatūrų nuoskaitos. Nuskaitykite iš failo duomenis ir suskaičiuokite: minimalią, maksimalią ir vidutinę temperatūras ir jas išveskite į ekraną.  Padarykite galimybę įkelti failą.
    </p>


    
    
    <form action="" method="POST" enctype="magic_quotes_runtime">
        <input type="hidden" name="upload" value="1">
        <input type="file" name="failas">
        <button>Siųsti</button>
    </form>

    <?php
        
       

            $failas = 'C:/xampp/htdocs/php4/task3/temp.txt';
            $f = fopen($failas, "r");

            while ( !feof($f) ){
                $eilute=fgets($f);
                echo  $eilute." <br>";
             };
             
    ?>

</body>
</html>