<!DOCTYPE html>
<html>
    <head>
        <title> Informasi Biodata</title>
</head>
    <body bgcolor="#F5F5F5">
        <h1>Informasi Biodata</h1>
<table>
    <tr height="30">
        <td width="120">&emsp;No. Identitas<td>:</td>
    <td><?php echo $_POST ['noint'];?></td>
</tr>
    <tr height="30">
        <td>&emsp;Nama<td>:</td>
    <td><?php echo $_POST ['nama'];?></td>
</tr>
    <tr height="30">
        <td>&emsp;Tempat Lahir<td>:</td>
    <td><?php echo $_POST ['tl'];?></td>
</tr>
    <tr height="30">
        <td>&emsp;Tanggal Lahir<td>:</td>
    <td><?php echo $_POST ['tgl'] . " " . $_POST["bln"] . " " . $_POST["thn"];
        ?>
    </td>
</tr>
    <tr height="30">
        <td>&emsp;Jenis Kelamin<td>:</td>
    <td><?php echo $_POST ['jk'];?></td>
</tr>
    <tr height="30">
        <td>&emsp;Hobby<td>:</td></td>
    <td>
<?php
    $hobby = "";
    if (isset($_POST["hobi1"])) { 
        $hobby .= $_POST["hobi1"];
    }
    if (isset($_POST["hobi2"])) {
        if ($hobby !== "") {
        $hobby .= ", ";
        }
        $hobby .= $_POST["hobi2"];
    }
    if (isset($_POST["hobi3"])) {
        if ($hobby !== "") {
        $hobby .= ", ";
        }
        $hobby .= $_POST["hobi3"];
    }
    // Jika tidak ada hobi yang dipilih
    if ($hobby === "") {
        $hobby = "Tidak ada hobby yang dipilih";
    }
        echo $hobby;
?>
    <tr height="30">
        <td>&emsp;Alamat<td>:</td>
    <td><?php echo $_POST ['alamat'];?></td>
</tr>
    <tr height="30">
        <td>&emsp;Username<td>:</td>
    <td><?php echo $_POST ['username'];?></td>
</tr>
    <tr height="30">
        <td>&emsp;Password<td>:</td>
    <td><?php echo $_POST ['password'];?></td>
</tr>
    <tr height="30">
        <td>&emsp;Pas Foto<td>:</td>
    <td>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0) {

        // Directory penyimpanan gambar
        $target_dir = "uploads/";

        // Path lengkap file
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);

        // Periksa apakah file sebagai gambar
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($imageFileType, $allowedExtensions)) {
        
            // Coba unggah file
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        
            // Display gambar yang di unggah
            echo "<img src='$target_file' alt='Gambar yang diunggah' width='150'/>";
                } else {
                    echo "Gagal mengunggah gambar.";
                    }
                } else {
                    echo "File yang diunggah bukan gambar.";
                    }
                } else {
                    echo "Terjadi kesalahan saat mengunggah gambar.";
                    }
                }
            ?>
            </tr>
        </table>
    </body>
</html>