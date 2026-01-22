<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Seminar - Cik Sabri</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>CARA MENGHASILKAN WEBSITE SENDIRI</h1>
    <p>Seminar Eksklusif Bersama Pakar</p>
</header>

<div class="promo-section">
    <h2>Maklumat Program</h2>
    <p><strong>Penceramah:</strong> Cik Sabri bin Saep (Pakar Pembangunan Web)</p>
    <p><strong>Sinopsis:</strong> Ketahui rahsia membina laman web profesional dengan pantas dan kos rendah.</p>
    <p><strong>Logistik:</strong> 22/1/2026 | 8:00 Malam | Dewan Kuliah Utama (DKU)</p>
    <p><strong>Yuran:</strong> RM 20.00 / Slot</p>
</div>

<div class="form-container">
    <h3>Borang Tempahan Peserta</h3>
    <form action="pengesahan.php" method="POST" enctype="multipart/form-data">
        
        <div class="input-group">
            <label>Nama Penuh:</label>
            <input type="text" name="nama" required>
        </div>

        <div class="input-group">
            <label>Alamat E-mel:</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-group">
            <label>Nombor Telefon:</label>
            <input type="text" name="telefon" required>
        </div>

        <div class="input-group">
            <label>Kategori Peserta:</label>
            <select name="kategori" required>
                <option value="Pelajar">Pelajar</option>
                <option value="Pensyarah">Pensyarah</option>
                <option value="Orang Awam">Orang Awam</option>
                <option value="Korporat">Korporat</option>
            </select>
        </div>

        <div class="input-group">
            <label>Bilangan Slot:</label>
            <input type="number" id="slot" name="slot" min="1" value="1" required oninput="kiraYuran()">
        </div>

        <div class="yuran-box" style="margin-bottom: 20px;">
            JUMLAH PERLU DIBAYAR: <br>
            <span class="highlight">RM <span id="total_papar">20.00</span></span>
        </div>

        <div class="input-group">
            <label>Bukti Pembayaran (Fail/Resit):</label>
            <input type="file" name="bukti" required>
        </div>

        <div class="input-group">
            <input type="checkbox" id="terma" name="perakuan" required style="width: auto;">
            <label style="display:inline;" for="terma">Saya mengesahkan butiran adalah benar.</label>
        </div>

        <button type="submit">DAFTAR SEKARANG</button>
    </form>
</div>

<script>
function kiraYuran() {
    var slot = document.getElementById('slot').value;
    var harga = 20;
    var jumlah = slot * harga;
    document.getElementById('total_papar').innerText = jumlah.toFixed(2);
}
</script>

</body>
</html>