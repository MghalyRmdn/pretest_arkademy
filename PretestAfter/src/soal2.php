<html>

<head>
    <title>Program Sederhana</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="main-wrapper">
        <div id="main">
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>Masukan Total</td>
                        <td><input type="text" name="total" required></td>
                    </tr>

                    <tr>
                        <td>
                            <label><br><br>
                                <input type="submit" name="Submit" value="Hitung" id="prn">
                            </label>
                            <label>
                                <input type="reset" name="reset" value="Batal" id="prn">
                            </label>
                            <label>
                                <a href="./">Hitung Ulang</a>
                            </label>
                        </td>
                        <td></td>
                    </tr>
                </table>
            </form>
            <div id="hasil">
                <?php error_reporting(E_ALL ^ E_NOTICE);
                $total    = $_POST['total'];
                $diskon = "";

                if ($total == 50000) {
                    $diskon = 0;
                } elseif ($total > 50000 && $total <= 100000) {
                    $diskon = 20;
                } elseif ($total > 100000 && $total <= 200000) {
                    $diskon = 35;
                } elseif ($total > 200000) {
                    $diskon = 45;
                }


                $nilai = ($diskon / 100) * $total;
                $pembayaran = $total - $nilai;
                echo 'Nominal pembayaran ';
                echo number_format($total, 2, ",", ".");
                echo ' dengan diskon ';
                echo $diskon . '%';
                echo ' adalah sebesar <u>';
                echo '</u>';
                echo number_format($pembayaran, 2, ",", ".");
                ?>
            </div>
        </div>
    </div>
</body>


</html>