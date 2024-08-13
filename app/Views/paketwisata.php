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
        .footer{
            margin-top: 50px;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
        }
        .package-card {
            text-decoration: none; /* Remove underline */
            color: inherit; /* Inherit color from parent */
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            transition: transform 0.2s;
        }
        .package-card:hover {
            transform: scale(1.02);
        }
        .package-card img {
            width: 100%;
            height: auto;
        }
        .card-body {
            padding: 1rem;
        }
        .card-body h5 {
            margin: 0;
            font-size: 1.25rem;
        }
        .package-info {
            margin-top: 0.5rem;
            font-size: 1rem;
            color: #333;
        }
    </style>
</head>
<body>

<?php include 'layout/header.php'; ?>

<img src="<?php echo base_url('images/line1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 100%;">

<main class="container mt-5">
    <section class="package-section" style="margin-bottom: 200px">
        <div class="container">
            <h1 style="text-align: center">PAKET WISATA</h1><br>
            <div class="row">
                <div class="col-md-4">
                    <a href="otpppk" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/pw1.png")?>" alt="Open Trip Pantai Pink dan Pulau Komodo" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Open Trip Pantai Pink dan Pulau Komodo</h5>
                            <div class="package-info">
                                <span>Rp 1.000.000/orang</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="otsb" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/pw2.png")?>" alt="Private Trip Pulau Komodo dan Pulau Padar" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Open Trip Sailing Boat</h5>
                            <div class="package-info">
                                <span>Rp 500.000/orang</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="otpkpp" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/pw3.png")?>" alt="Open Trip Sailing Boat" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Open Trip Pulau Komodo dan Pulau Padar</h5>
                            <div class="package-info">
                                <span>Rp 2.500.000/orang</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="ptpppk" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/pw4.png")?>" alt="Open Trip Pantai Pink dan Pulau Komodo" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Private Trip Pantai Pink dan Pulau Komodo</h5>
                            <div class="package-info">
                                <span>Rp 2.000.000/orang</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="ptsb" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/pw5.png")?>" alt="Private Trip Pulau Komodo dan Pulau Padar" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Private Trip Sailing Boat</h5>
                            <div class="package-info">
                                <span>Rp 1.000.000/orang</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="ptpkpp" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/pw6.png")?>" alt="Open Trip Sailing Boat" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Private Trip Pulau Komodo dan Pulau Padar</h5>
                            <div class="package-info">
                                <span>Rp 1.500.000/orang</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><br>
        <p style="text-align: center">Menampilkan 3 hasil dari 3</p>
    </section>
</main>

<img src="<?php echo base_url('images/line1.png'); ?>" style="width: 100%; margin-bottom: 50px">
<?php include 'layout/footer.php'; ?>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>    