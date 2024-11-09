<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Menghitung Luas dan Keliling Bangun Datar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            margin-bottom: 10px;
        }
        button {
            padding: 5px 10px;
            margin-right: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        #result {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2>PROGRAM MENGHITUNG LUAS DAN KELILING BANGUN DATAR</h2>

<form id="calculatorForm">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" required>

    <label for="nim">NIM:</label>
    <input type="text" id="nim" required>

    <table>
        <tr>
            <th>Pilihan Bangun Datar</th>
            <th></th>
        </tr>
        <tr>
            <td><button type="button" onclick="hitung('persegi')">PERSEGI</button></td>
            <td><button type="button" onclick="hitung('persegiPanjang')">PANJANG</button></td>
        </tr>
        <tr>
            <td><button type="button" onclick="hitung('lingkaran')">LINGKARAN</button></td>
            <td></td>
        </tr>
    </table>

    <label for="result">Hasil:</label>
    <p id="result"></p>
</form>

<script>
    function hitung(bangunDatar) {
        var nama = document.getElementById('nama').value;
        var nim = document.getElementById('nim').value;
        
        var luas, keliling;

        if (bangunDatar === 'persegi') {
            var sisi = parseFloat(prompt('Masukkan panjang sisi persegi:'));
            luas = luasPersegi(sisi);
            keliling = kelilingPersegi(sisi);
        } else if (bangunDatar === 'persegiPanjang') {
            var panjang = parseFloat(prompt('Masukkan panjang persegi panjang:'));
            var lebar = parseFloat(prompt('Masukkan lebar persegi panjang:'));
            luas = luasPersegiPanjang(panjang, lebar);
            keliling = kelilingPersegiPanjang(panjang, lebar);
        } else if (bangunDatar === 'lingkaran') {
            var jariJari = parseFloat(prompt('Masukkan jari-jari lingkaran:'));
            luas = luasLingkaran(jariJari);
            keliling = kelilingLingkaran(jariJari);
        }

        var resultText = 'Nama: ' + nama + '<br>NIM: ' + nim + '<br>Luas: ' + luas + '<br>Keliling: ' + keliling;
        document.getElementById('result').innerHTML = resultText;
    }

    function luasPersegi(sisi) {
        return sisi * sisi;
    }

    function kelilingPersegi(sisi) {
        return 4 * sisi;
    }

    function luasPersegiPanjang(panjang, lebar) {
        return panjang * lebar;
    }

    function kelilingPersegiPanjang(panjang, lebar) {
        return 2 * (panjang + lebar);
    }

    function luasLingkaran(jariJari) {
        return Math.PI * jariJari * jariJari;
    }

    function kelilingLingkaran(jariJari) {
        return 2 * Math.PI * jariJari;
    }
</script>

</body>
</html>