<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tujuan.php" method="get">
        <table>
            <tr>
                <td>
                    <label for="">Nama</label>
                </td>
                <td>
                    <input type="text" name="nama" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tujuan</label>
                </td>
                <td>
                    <select name="tujuan">
                        <option value="">--- Pilihan ---</option>
                        <option value="Sidoarjo">Sidoarjo</option>
                        <option value="Malang">Malang</option>
                        <option value="Pasuruan">Pasuruan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Tiket</label>
                </td>
                <td>
                    <input type="text" name="tiket">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Kelas</label>
                </td>
                <td>
                    <select name="kelas">
                        <option value="">--- Pilihan ---</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Eksekutif">Eksekutif</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Bayar"></td>
            </tr>
        </table>
    </form>
</body>

</html>