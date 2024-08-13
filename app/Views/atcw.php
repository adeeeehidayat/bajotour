<!-- Display Messages -->
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 100%; height: auto; text-align: center">
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; height: auto; text-align: center">
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BajoTour Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
        }
        .container-otsb {
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            width: 100%;
            margin-top: 2rem;
        }
        .price-booking {
            margin-bottom: 2rem;
        }
        .price-booking span {
            font-size: 1.5rem;
            margin-right: 1rem;
            color: #333;
        }
        .price-booking button {
            background-color: #F24E1E;
            color: #fff;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
        }
        .price-booking button:hover {
            background-color: #e0411a;
        }
        .gallery {
            display: flex;
            gap: 1rem;
        }
        .gallery .left-column {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 35%;
        }
        .gallery .left-column img,
        .gallery .right-column img {
            width: 350px;
            border-radius: 8px;
        }
        .gallery .right-column {
            width: 100%;
        }
        .gallery .right-column img {
            width: 753px;
            height: auto;
            object-fit: cover;
        }
        .footer {
            margin-top: 50px;
        }
        .about-section {
            margin-top: 50px;
            margin-left: 160px;
            margin-right: 160px;
        }
        .about-section h2 {
            color: #00A7C7;
        }
        .card {
            border: none;
            padding: 20px;
            height: auto;
            margin-top: 20px;
            margin-bottom: 50px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .card-header {
            background-color: #fff;
            color: #F24E1E;
            font-weight: bold;
        }
        .card-body {
            color: #333;
            border-radius: 8px;
        }
        .item-table {
            text-align: center;
            margin-bottom: 50px;
        }
        .item-table img {
            margin-left: 50px;
            margin-right: 50px;
            width: 100px;
            height: auto;
        }
        .additional-info {
            width: 1150px;
            text-align: left;
            margin-bottom: 20px;
        }
        .additional-info ul {
            list-style-type: disc;
            padding-left: 1rem;
            text-align: left;
            display: inline-block;
        }
    </style>
</head>
<body>

<audio id="backgroundAudio" autoplay loop>
    <source src="<?php echo base_url('sound/air_terjun.mp3'); ?>" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>

<?php include 'layout/header.php'; ?>

<img src="<?php echo base_url('images/line1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 100%;">

<div class="container-otsb">
    <h1 style="margin-bottom: 20px;">Air Terjun Cunca Wulang</h1>
    <div class="gallery">
        <div class="left-column">
            <img src="<?php echo base_url('images/atcw1.png'); ?>" alt="Gambar 1">
            <img src="<?php echo base_url('images/atcw2.png'); ?>" alt="Gambar 2">
            <img src="<?php echo base_url('images/atcw3.png'); ?>" alt="Gambar 3">
        </div>
        <div class="right-column">
            <img src="<?php echo base_url('images/atcw4.png'); ?>" alt="Gambar 4">
        </div>
    </div>
</div>

<div class="about-section">
    <h2>Tentang Perjalanan Ini</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                Air Terjun Cunca Wulang di Labuan Bajo adalah sebuah tujuan wisata alam yang menakjubkan di Pulau Flores, Indonesia. Air terjun ini terletak di tengah hutan tropis yang lebat, memberikan pengalaman menyegarkan dan memukau bagi para pengunjung. Terdapat tiga tingkat air terjun dengan ketinggian yang berbeda-beda, dan airnya jatuh ke dalam kolam alami yang hijau toska di bawahnya
                </div>
            </div>
        </div>
    </div>
</div>

<h1 style="color: #00A7C7; text-align: center">Yang Harus Dibawa</h1>
<p style="text-align: center">Kami menyarankan barang bawaan agar perjalanan Anda terasa lebih nyaman.</p>

<table class="item-table">
    <tr>
        <td><img src="<?php echo base_url('images/sunblock.png'); ?>" alt="Sunblock"></td>
        <td><img src="<?php echo base_url('images/kacamata.png'); ?>" alt="Kacamata"></td>
        <td><img src="<?php echo base_url('images/bajurenang.png'); ?>" alt="Baju Renang"></td>
        <td><img src="<?php echo base_url('images/topi.png'); ?>" alt="Topi"></td>
        <td><img src="<?php echo base_url('images/obatpribadi.png'); ?>" alt="Obat Pribadi"></td>
    </tr>
    <tr>
        <td><h3>Sunblock</h3></td>
        <td><h3>Kacamata</h3></td>
        <td><h3>Baju Renang</h3></td>
        <td><h3>Topi</h3></td>
        <td><h3>Obat Pribadi</h3></td>
    </tr>
</table>

<div class="additional-info">
    <h1 style="color: #00A7C7">Informasi Tambahan</h1>
    <p>Kami memberikan informasi tambahan terkait perjalanan demi keamanan Anda.</p>
    <ul>
        <li>Konfirmasi akan diterima pada saat pemesanan</li>
        <li>Tidak disarankan untuk ibu hamil</li>
        <li>Tidak disarankan bagi traveler yang memiliki penyakit jantung atau penyakit serius lainnya</li>
        <li>Tidak dapat diakses kursi roda</li>
    </ul>
</div>
<img src="<?php echo base_url('images/line1.png'); ?>" style="width: 100%; margin-bottom: 50px">
<?php include 'layout/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var audio = document.getElementById('backgroundAudio');
        audio.play(); // Memainkan audio saat halaman dimuat
        
        audio.addEventListener('ended', function() {
            audio.currentTime = 0; // Mengatur waktu kembali ke awal setelah selesai
            audio.play(); // Memainkan kembali audio
        });
    });
</script>
</body>
</html>
