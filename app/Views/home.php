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
        .footer{
            margin-top: 50px;
        }
        
    </style>
</head>
<body>

<?php include 'layout/header.php'; ?>
<img src="<?php echo base_url('images/line1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 100%;">

<main class="container mt-5">
    <section class="hero">
        <div class="row">
            <div class="col-md-6">
                <h1>Temukan</h1>
                <h1>Keindahan Alam</h1>
                <h1>Indonesia di</h1>
                <h1>Labuan Bajo</h1>
                <p>Nikmati Liburanmu dengan BajoTour, harga terjangkau dan pemesanan yang mudah akan membuat liburanmu menyenangkan.</p>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url('images/gbr1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid">
            </div>
        </div>
    </section>

    <br>

    <section class="aboutbajo">
        <div class="col-md-12 text-center">
            <h7 class="mb-4" style="color: #E76F3D">APA YANG KAMI BERIKAN</h7>
            <h1 class="mb-4">Mengapa Harus Bajotour?</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <div class="card text-center">
                    <img src="<?php echo base_url('images/cv1.png'); ?>" class="card-img-top mx-auto" alt="Banyak Pilihan" style="width: 30%; height: auto;">
                    <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold">Banyak Pilihan</h5>
                    <p class="card-text">Kami menyediakan banyak pilihan perjalanan yang beragam.</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card text-center">
                    <img src="<?php echo base_url('images/cv2.png'); ?>" class="card-img-top mx-auto" alt="Booking Mudah" style="width: 30%; height: auto;">
                    <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold">Booking Mudah</h5>
                    <p class="card-text">Fitur booking yang simple memudahkan perjalanan Anda.</p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card text-center">
                    <img src="<?php echo base_url('images/cv3.png'); ?>" class="card-img-top mx-auto" alt="Harga Affordable" style="width: 30%; height: auto;">
                    <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold">Harga Affordable</h5>
                    <p class="card-text">Harga lebih murah dibandingkan dengan agen trip lain.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>

    </section>

    <br><br>

    <section class="paket-wisata">
        <h6 class="mb-4" style="color: #E76F3D">PAKET WISATA</h6>
        <h1 class="mb-4">PILIHAN PAKET WISATA TERBAIK</h1>
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                <img src="<?php echo base_url('images/paket1.png'); ?>" class="card-img-top" alt="Paket Wisata Gunung Rinjani">
                <div class="card-body">
                    <h5 class="card-title">Open Trip Pantai Pink dan Pulau Komodo</h5>
                    <h6 class="card-price">Rp. 1.000.000/orang</h6>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                <img src="<?php echo base_url('images/paket2.png'); ?>" class="card-img-top" alt="Paket Wisata Labuan Bajo">
                <div class="card-body">
                    <h5 class="card-title">Open Trip Sailing Boat</h5>
                    <h6 class="card-price">Rp. 500.000/orang</h6>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                <img src="<?php echo base_url('images/paket3.png'); ?>" class="card-img-top" alt="Paket Wisata Bali">
                <div class="card-body">
                    <h5 class="card-title">Private Trip Pulau Komodo dan Pulau Padar</h5>
                    <h6 class="card-price">Rp. 2.500.000/orang</h6>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center align-items-center">
        <img src="<?php echo base_url('images/line.png'); ?>" style="width: 400px; margin-right: 20px">
        <a href="paketwisata"><button type="button" class="btn btn-primary">View More</button></a>
        <img src="<?php echo base_url('images/line.png'); ?>" style="width: 400px; margin-left: 20px">
    </div>


    <br><br>

    <section class="destinasi-wisata">
        <h6 class="mb-4" style="color: #E76F3D">DESTINASI WISATA</h6>
        <h1 class="mb-4">TEMPAT WISATA TERPOPULER</h1>
        <div class="container">
            <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                <img src="<?php echo base_url('images/ppink.png'); ?>" class="card-img-top" alt="Pantai Pink">
                <div class="card-body">
                    <h5 class="card-title">Pantai Pink</h5>
                    <h6 class="card-price">Rp. 1.000.000/orang</h6>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                <img src="<?php echo base_url('images/pkoaba.png'); ?>" class="card-img-top" alt="Pulau Koaba">
                <div class="card-body">
                    <h5 class="card-title">Pulau Koaba</h5>
                    <h6 class="card-price">Rp. 500.000/orang</h6>
                </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                <img src="<?php echo base_url('images/ppadar.png'); ?>" class="card-img-top" alt="Pulau Padar">
                <div class="card-body">
                    <h5 class="card-title">Pulau Padar</h5>
                    <h6 class="card-price">Rp. 2.500.000/orang</h6>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-center align-items-center">
        <img src="<?php echo base_url('images/line.png'); ?>" style="width: 400px; margin-right: 20px">
        <a href="destinasi"><button type="button" class="btn btn-primary">View More</button></a>
        <img src="<?php echo base_url('images/line.png'); ?>" style="width: 400px; margin-left: 20px">
    </div>
    <br><br>

    <section class="aboutme">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo base_url('images/koper.png'); ?>" alt="Koper" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h6 style="color: #E76F3D; text-align: right;">TENTANG KAMI</h6>
                <h2 style="text-align: right;">CERITA TENTANG</h2>
                <h2 style="text-align: right;">PERJALANAN KAMI</h2>
                <p style="text-align: right;">BajoTour merupakan perusahaan agen trip sejak tahun 2015 yang menyediakan banyak pilihan paket wisata dengan harga terjangkau.</p>
                <div class="row">
                    <div class="col-md-4">
                        <h1 style="color: #E76F3D; text-align: center">9</h1>
                        <h6 style="text-align: center;">Tahun</h6>
                        <h6 style="text-align: center;">Pengalaman</h6>
                    </div>
                    <div class="col-md-4">
                        <h1 style="color: #00A7C7; text-align: center;">4,8/5</h1>
                        <h6 style="text-align: center;">Review</h6>
                        <h6 style="text-align: center;">Kepuasan</h6>
                        <h6 style="text-align: center;">Pengguna</h6>
                    </div>
                    <div class="col-md-4">
                        <h1 style="color: #E76F3D; text-align: center;">500+</h1>
                        <h6 style="text-align: center;">Pengguna</h6>
                        <h6 style="text-align: center;">Telah</h6>
                        <h6 style="text-align: center;">Memilih Kami</h6>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <br><br>

    <section class="mereka-katakan">
        <div class="row">
            <div class="col-md-6">
                <h6 style="color: #E76F3D">APA YANG MEREKA KATAKAN</h6>
                <h1>APA KATA MEREKA TENTANG</h1>
                <h1>BAJOTOUR?</h1>
                <p>“Saya sangat beruntung memilih agen travel BajoTour. Pelayannya sangat baik!”</p>
                <p>- Han So Hee</p>
                <p>“Labuan Bajo sangat indah! BajoTour membantu saya menikmati keindahan ini.”</p>
                <p>- Shin Ryu Jin</p>
                <a style="color: #E76F3D" href="opini">Tuliskan pengalamanmu di sini</a>
            </div>
            
            <div class="col-md-6">
                <img src="<?php echo base_url('images/indmap.png'); ?>" alt="Indonesia" class="img-fluid">
            </div>
        </div>
    </section><br><br>
</main>

<img src="<?php echo base_url('images/line1.png'); ?>" style="width: 100%; margin-bottom: 50px">
<?php include 'layout/footer.php'; ?>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>    

