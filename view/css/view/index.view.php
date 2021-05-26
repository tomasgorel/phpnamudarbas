<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Duomenų lentelė</title>
        <link rel="stylesheet" href="view/css/style.css">
    </head>
    <body>
        <h1>Kontroliniu darbu suvestin</h1>
        <table >
            <tr>
                <th>Klasė</th>
                <th>Kodas</th>
                <th>Vardas</th>
                <th>Pavardė</th>
                <th>Kontroliniu darbų vidurkis</th>
                <th>Formatavimo data</th>
            </tr>    
            <?php
                $suma=0;
                $kiekis=0;
                foreach($b5 as $student) {
                    echo "<tr>";
                    foreach($student as $key =>$value) {
                        if (is_array($value)){
                            foreach($value as $key1 =>$value1) {
                                $suma=$suma+$value1;
                                $kiekis++;
                            }
                        }
                    }
                    echo "<td>".$student["Klase"]."</td>";
                    echo "<td>".$student["Kodas"]."</td>";
                    echo "<td>".$student["Vardas"]."</td>";
                    echo "<td>".$student["Pavarde"]."</td>";
                    echo "<td>".round($suma/$kiekis, 2)."</td>";
                    echo "<td>".$student["Data"]."</td>";
                }
            ?>
            </tr>
        </table>
    </body>
</html>