<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $kategori = $_POST['kategori'];
    $slot = (int)$_POST['slot'];
    
    $harga_unit = 20;
    $jumlah_yuran = $harga_unit * $slot;

    $nama_fail = $_FILES['bukti']['name'];
    $lokasi_sementara = $_FILES['bukti']['tmp_name'];
    
    $data_imej = base64_encode(file_get_contents($lokasi_sementara));
    $sumber_imej = 'data:' . $_FILES['bukti']['type'] . ';base64,' . $data_imej;
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <title>Pengesahan Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .resit-imej {
            width: 100%;
            max-width: 200px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="kad-pengesahan">
    <h2 style="color: var(--navy); text-align: center;">Pendaftaran Berjaya!</h2>
    
    <table>
        <tr><td><strong>Nama Penuh</strong></td><td><?php echo htmlspecialchars($nama); ?></td></tr>
        <tr><td><strong>E-mel</strong></td><td><?php echo htmlspecialchars($email); ?></td></tr>
        <tr><td><strong>No. Telefon</strong></td><td><?php echo htmlspecialchars($telefon); ?></td></tr>
        <tr><td><strong>Kategori</strong></td><td><?php echo htmlspecialchars($kategori); ?></td></tr>
        <tr><td><strong>Bilangan Slot</strong></td><td><?php echo htmlspecialchars($slot); ?></td></tr>
        <tr>
            <td><strong>Bukti Pembayaran</strong></td>
            <td>
                <img src="<?php echo $sumber_imej; ?>" alt="Resit Pembayaran" class="resit-imej"><br>
                <small><?php echo htmlspecialchars($nama_fail); ?></small>
            </td>
        </tr>
    </table>

    <div class="yuran-box">
        PENGESAHAN JUMLAH DIBAYAR: <br>
        <span class="highlight">RM <?php echo number_format($jumlah_yuran, 2); ?></span>
    </div>

    <p style="text-align:center; margin-top:30px;">
        <a href="index.php" style="color: var(--navy); text-decoration: none; font-weight: bold;">← Kembali ke Halaman Utama</a>
    </p>
</div>

</body>
</html>