<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretest</title>
</head>

<body>
    <h1>Pretest Hari Pertama</h1>
    <?php

    function terurut()
    {
        $angka = array('12', '5', '2', '25');

        echo "Array yang tidak disortir adalah: ";
        echo "<br />";
        print_r($angka);


        for ($j = 0; $j < count($angka); $j++) {
            for ($i = 0; $i < count($angka) - 1; $i++) {

                if ($angka[$i] > $angka[$i + 1]) {
                    $temp = $angka[$i + 1];
                    $angka[$i + 1] = $angka[$i];
                    $angka[$i] = $temp;
                }
            }
        }

        echo "array yang tersortir: ";
        echo "<br />";
        return print_r($angka);
    }
    terurut();
    ?>
</body>

</html>