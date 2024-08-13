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
        .contact-section {
            text-align: left;
            margin: 50px 0;
            width: 80%;
        }
        .contact-section h3 {
            font-weight: bold;
            text-align: center;
        }
        .contact-section p {
            margin: 20px 0;
        }
        .contact-methods {
            display: flex;
            flex-direction: column;
        }
        .contact-method {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }
        .contact-method img {
            margin-right: 10px;
            width: 30px;
            height: 30px;
        }
    </style>
</head>
<body>

<?php include 'layout/header.php'; ?>
<img src="<?php echo base_url('images/line1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 100%;">

<div class="contact-section">
    <h3>Hubungi Kami</h3>
    <p>BajoTour menempatkan pelanggan sebagai prioritas utama. Kami selalu siap membantu Anda dengan segala kebutuhan dan pertanyaan terkait perjalanan Anda. Tim kami yang ramah dan profesional berdedikasi untuk memberikan pelayanan terbaik kepada Anda. Jangan ragu untuk menghubungi kami melalui salah satu cara di bawah ini.</p>
    <div class="contact-methods">
        <div class="contact-method">
            <img src="<?php echo base_url('images/wa-icon.png'); ?>" alt="WhatsApp">
            <span><strong>WhatsApp:</strong> +6281232040567</span>
        </div>
        <div class="contact-method">
            <img src="<?php echo base_url('images/gmail-icon.png'); ?>" alt="Email">
            <span><strong>Email:</strong> bajotourr@gmail.com</span>
        </div>
        <div class="contact-method">
            <img src="<?php echo base_url('images/ig-icon.png'); ?>" alt="Instagram">
            <span><strong>Instagram:</strong> bajottour</span>
        </div>
        <div class="contact-method">
            <img src="<?php echo base_url('images/fb-icon.png'); ?>" alt="Facebook">
            <span><strong>Facebook:</strong> bajottour</span>
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
