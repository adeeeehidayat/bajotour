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
        .footer {
            margin-top: 50px;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
        }
        .form-opini {
            margin-top: 100px;
            margin-bottom: 100px;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        label {
            margin-bottom: 0.5rem;
            color: #333;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 0.75rem;
            border: 2px solid #00A7C7;
            border-radius: 4px;
            font-size: 1rem;
        }
        textarea {
            resize: vertical;
            height: 150px;
        }
        button[type="submit"] {
            background-color: #F24E1E;
            color: #fff;
            padding: 0.75rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 1rem;
            align-self: center;
            width: 50%;
        }
        button[type="submit"]:hover {
            background-color: #e0411a;
        }
    </style>
</head>
<body>

<?php include 'layout/header.php'; ?>
<img src="<?php echo base_url('images/line1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 100%;">

<div class="form-opini">
    <h1>CERITAKAN PENGALAMANMU BERSAMA BAJO TOUR!</h1>
    <!-- Display Messages -->
    <?php if ($errors = session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="width: 100%; height: auto; text-align: center">
            <?php foreach ($errors as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach ?>
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
        <script>
            $(document).ready(function() {
                $('#successModal').modal('show');
            });
        </script>
    <?php endif; ?>

    <form action="<?= base_url('opini/submit') ?>" method="post">
        <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="date">Tanggal Berkunjung</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="experience">Tuliskan Pengalamanmu Disini</label>
            <textarea id="experience" name="experience" required></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>

<!-- Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Thank you for your feedback!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<img src="<?php echo base_url('images/line1.png'); ?>" style="width: 100%; margin-bottom: 50px">
<?php include 'layout/footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka/T90P5Wd2qkh6I3LBfDRaoPB6IgFnxklgRVxoxxCBjIzp7JYQIYOw96PQwGgOm" crossorigin="anonymous"></script>

</body>
</html>
