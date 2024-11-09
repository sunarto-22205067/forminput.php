<!DOCTYPE html>
<html>
    <head>
        <title>Form Biodata</title>
</head>
    <body bgcolor="#F5F5F5">
        <h1>Form Biodata</h1>
            <form action="proses-22205067.php" method="post" enctype="multipart/form-data">
<table>
    <tr height="30">
        <td width="120">&emsp;No. Identitas</td>
    <td>
        <input type="text" name="noint" placeholder="Masukan No Identitas">
    </td>
</tr>
    <tr height="30">
        <td>&emsp;Nama</td>
    <td>
        <input type="text" name="nama" placeholder="Masukan Nama">
    </td>
</tr>
    <tr height="30">
        <td>&emsp;Tempat Lahir</td>
    <td>
        <input type="text" name="tl" placeholder="Masukan Tempat Lahir">
    </td>
</tr>
    <tr height="30">
        <td>&emsp;Tanggal Lahir</td>
<td>
    <select name="tgl">
        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo "<option value='" . $i . "'>" . $i . "</option>";
        }
        ?>
    </select>
    <select name="bln">
        <?php
        $bulan = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value='" . $bulan[$i] . "'>" . $bulan[$i] . "</option>";
        }
        ?>
    </select>
    <select name="thn">
        <?php
        for ($i = 1980; $i <= 2005; $i++) {
            echo "<option value='" . $i . "'>" . $i . "</option>";
        }
        ?>
    </select>
</td>
<tr height="30"><td>&emsp;Jenis Kelamin</td>
    <td>
        <input type="radio" name="jk" value="Laki-laki"> Laki-laki
        <input type="radio" name="jk" value="Perempuan"> Perempuan
    </td>
</tr>
<tr height="30"><td>&emsp;Hobby</td>
    <td>
        <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
        <input type="checkbox" name="hobi2" value="Membaca">Membaca
        <input type="checkbox" name="hobi3" value="Musik">Musik
    </td>
</tr>
<tr>
    <td>&emsp;Alamat</td>
        <td><textarea id="alamat" name="alamat" rows="4" cols="50" required></textarea>
    </td>
</tr> 
<tr height="40"><td>&emsp;Username</td>
    <td>
       <input type="text" class="form-control" id="username" name="username">
    </td>
</tr>
<tr height="20"><td>&emsp;Password</td>
    <td>
        <input type="password" class="form-control" id="password" name="password">
    </td>
</tr>
    <tr height="40">
        <td>&emsp;Pas Foto</td>
            <td>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
                    </td>
                </tr>
            <tr height="70"><td>&emsp;<button type="submit" class="btn btn-primary">&emsp;Kirim&emsp;</button></td>
        </table>
    </form>
</html>