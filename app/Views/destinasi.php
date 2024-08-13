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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-......................." crossorigin="anonymous" />

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
    </style>
</head>
<body>

<?php include 'layout/header.php'; ?>

<img src="<?php echo base_url('images/line1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 100%;">

<main class="container mt-5">
    <section class="package-section" style="margin-bottom: 200px">
        <div class="container">
            <h1 style="text-align: center">DESTINASI WISATA</h1><br>
            <div class="row">
                <div class="col-md-4">
                    <a href="ppink" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/dw1.png")?>" alt="Pantai Pink" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pantai Pink</h5>
                            <div class="package-info">
                            <span>Sekaroh, Lombok Timur</span>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,7/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="pkoaba" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/dw2.png")?>" alt="Pulau Koaba" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pulau Koaba</h5>
                            <div class="package-info">
                            <span>Sekaroh, Lombok Timur</span>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,7/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="ppadar" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/dw3.png")?>" alt="Pulau Padar" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pulau Padar</h5>
                            <div class="package-info">
                            <span>Komodo, Manggarai Barat</span>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,8/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="atcw" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/dw4.png")?>" alt="Air Terjun Cunca" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Air Terjun Cunca</h5>
                            <div class="package-info">
                            <p>Wae Los, Manggarai Barat</p>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,6/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="grangko" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/dw5.png")?>" alt="Goa Rangko" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Goa Rangko</h5>
                            <div class="package-info">
                            <span>Tanjung Boleng, Manggarai Barat</span>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,5/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="gbcermin" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/dw6.png")?>" alt="Gua Batu Cermin" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gua Batu Cermin</h5>
                            <div class="package-info">
                            <span>Komodo, Manggarai Barat</span>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,3/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="waerebo" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/wae_rebo_utama.jpeg")?>" alt="Wae Rebo Village" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Wae Rebo Village</h5>
                            <div class="package-info">
                            <span>Komodo, Manggarai Barat</span>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,6/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="bukitsylvia" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/bukit_sylvia_utama.jpeg")?>" alt="Bukit Sylvia" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bukit Sylvia</h5>
                            <div class="package-info">
                            <span>Komodo, Manggarai Barat</span>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,6/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="pkanawa" class="package-card">
                        <div class="package-image">
                            <img src="<?= base_url("images/pulau_kanawa_utama.jpeg")?>" alt="Pulau Kanawa" class="img-fluid" style="width: 518px; height: 348px">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Pulau Kanawa</h5>
                            <div class="package-info">
                            <span>Komodo, Manggarai Barat</span>
                            </div>
                            <div class="rating"><br>
                                <h6 style="font-weight: bold"><i class="fas fa-star" style="color: #FFD43B;"></i> 4,6/5</h6>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div><br>
        <p style="text-align: center">Menampilkan 9 hasil dari 9</p>
    </section>
</main>

<img src="<?php echo base_url('images/line1.png'); ?>" style="width: 100%; margin-bottom: 50px">
<?php include 'layout/footer.php'; ?>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>    