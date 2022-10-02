<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - 672020145</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2 align="center">Daftar Barang Toko Php</h2>
    <form action="" method="post">

        <table border="1" cellspacing="0" align="center">

            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Beli</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Keyboard</td>
                <td>Rp 80.000,00</td>
                <td>
                    <input type="checkbox" name="brg[]" value="Keyboard"><br>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Mouse</td>
                <td>Rp 100.000,00</td>
                <td>
                    <input type="checkbox" name="brg[]" value="Mouse"><br>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Monitor</td>
                <td>Rp 600.000,00</td>
                <td>
                    <input type="checkbox" name="brg[]" value="Monitor"><br>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Printer</td>
                <td>Rp 1.000.000,00</td>
                <td>
                    <input type="checkbox" name="brg[]" value="Printer"><br>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Speaker</td>
                <td>Rp 300.000,00</td>
                <td>
                    <input type="checkbox" name="brg[]" value="Speaker"><br>
                </td>
            </tr>
            <tr>
                <th colspan="4">
                    <button type="submit" name="submit">Belanja</button>
                </th>
            </tr>
        </table>
    </form>
    <br>
    <br>

    <?php
    $totalHarga=0;
    if(isset($_POST['brg']) && is_array($_POST["brg"])){
        echo '<h3><center>Detail Pembayaran</center></h3>';
        echo '<table border="1" cellspacing="0" align="center"';
        echo '<tr><th colspan="2">Keranjang Belanja</th></tr>';

        for($i = 0; $i < sizeof($_POST['brg']); $i++){
            echo '<td>' . $_POST['brg'][$i] . '</td>';

            if ($_POST['brg'][$i] == "Keyboard") {  
                echo '<td>Rp    80.000,00</td>';
                $totalHarga = $totalHarga + 80000;
            } else if ($_POST['brg'][$i] == "Mouse") {
                echo '<td>Rp    100.000,00</td>';
                $totalHarga = $totalHarga + 100000;
            } else if ($_POST['brg'][$i] == "Monitor") {
                echo '<td>Rp    600.000,00</td>';
                $totalHarga = $totalHarga + 600000;
            } else if ($_POST['brg'][$i] == "Printer") {
                echo '<td>Rp    1.000.000,00</td>';
                $totalHarga = $totalHarga + 1000000;
            } else if ($_POST['brg'][$i] == "Speaker") {
                echo '<td>Rp    300.000,00</td>';
                $totalHarga = $totalHarga + 300000;
            }

            echo '</tr>';

        }
        echo '<tr><td><b>Total Harga</b></td><td><b>Rp  ' . number_format($totalHarga, 2, ',', '.') . '</b></td></tr>';
        echo '</table>';
    }
    ?>


</body>
</html>