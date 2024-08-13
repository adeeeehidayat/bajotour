<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Paket</title>
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
        .card {
            border: 2px solid #F24E1E;
            padding: 50px;
            width: 800px;
            max-width: 90%;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .card-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border: 2px solid #F24E1E;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #ff704d;
            outline: none;
        }
        .btn {
            background-color: #F24E1E;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #ff704d;
        }
        .form-group.inline {
            display: flex;
            align-items: center;
        }
        .form-group.inline .form-control {
            margin-right: 10px;
        }
        @media (max-width: 768px) {
            .form-group.inline {
                flex-direction: column;
            }
            .form-group.inline .form-control {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>

<?php include 'layout/header.php'; ?>

<img src="<?php echo base_url('images/line1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 100%;">

<h1 style="text-align: center; margin-top: 50px; font-weight: bold">BOOKING PAKET</h1>

<div class="card">
    <h2 class="card-title">DETAIL PEMESANAN</h2>
    <form action="<?= base_url('booking/simpan') ?>" method="post" id="bookingForm">
        <div class="form-group">
            <label for="nama_paket">Nama Paket Trip:</label>
            <select id="nama_paket" name="nama_paket" class="form-control" required onchange="setTotalHarga()">
                <option value="Open Trip Pantai Pink dan Pulau Komodo">Open Trip Pantai Pink dan Pulau Komodo</option>
                <option value="Open Trip Sailing Boat">Open Trip Sailing Boat</option>
                <option value="Open Trip Pulau Komodo dan Pulau Padar">Open Trip Pulau Komodo dan Pulau Padar</option>
                <option value="Private Trip Pantai Pink dan Pulau Komodo">Private Trip Pantai Pink dan Pulau Komodo</option>
                <option value="Private Trip Sailing Boat">Private Trip Sailing Boat</option>
                <option value="Private Trip Pulau Komodo dan Pulau Padar">Private Trip Pulau Komodo dan Pulau Padar</option>
            </select>
        </div>
        <div class="form-group row">
            <div class="col-md-6">
                <label for="tanggal">Pemilihan Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="jumlah_orang">Jumlah Orang:</label>
                <div class="input-group">
                    <button type="button" class="btn btn-outline-secondary" onclick="decrement()">-</button>
                    <input type="number" id="jumlah_orang" name="jumlah_orang" class="form-control" min="1" placeholder="Jumlah Orang" value="1" required>
                    <button type="button" class="btn btn-outline-secondary" onclick="increment()">+</button>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="nama_depan">Nama Awal dan Nama Akhir:</label>
            <div class="form-group inline">
                <input type="text" id="nama_depan" name="nama_depan" class="form-control" placeholder="Nama Awal" required>
                <input type="text" id="nama_belakang" name="nama_belakang" class="form-control" placeholder="Nama Akhir" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="hp">Nomor Handphone:</label>
            <input type="number" id="hp" name="hp" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <select id="metode_pembayaran" name="metode_pembayaran" class="form-control" required>
                <option value="transfer">Transfer Bank</option>
                <option value="tunai">Pembayaran Tunai</option>
                <option value="ewallet">E-Wallet</option>
            </select>
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga:</label>
            <input type="text" id="total_harga" name="total_harga" class="form-control" required readonly>
        </div>
        <button type="submit" class="btn" style="display: block; margin-left:auto; margin-right: auto;">Konfirmasi Pembayaran</button>
    </form>
</div>

<div class="card" id="confirmationCard" style="display: none;">
    <h2 class="card-title">Bukti Pembayaran</h2>
    <div id="bookingDetails"></div>
</div>

<img src="<?php echo base_url('images/line1.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 100%; margin-bottom: 50px">
<?php include 'layout/footer.php'; ?>

<script>
    function setTotalHarga() {
        var namaPaket = document.getElementById('nama_paket').value;
        var totalHargaInput = document.getElementById('total_harga');
        var jumlahOrang = parseInt(document.getElementById('jumlah_orang').value);
        var hargaPerOrang = 0;

        // Assign harga per orang based on the selected package
        switch (namaPaket) {
            case 'Open Trip Pantai Pink dan Pulau Komodo':
                hargaPerOrang = 1000000;
                break;
            case 'Open Trip Sailing Boat':
                hargaPerOrang = 500000;
                break;
            case 'Open Trip Pulau Komodo dan Pulau Padar':
                hargaPerOrang = 1500000;
                break;
            case 'Private Trip Pantai Pink dan Pulau Komodo':
                hargaPerOrang = 2000000;
                break;
            case 'Private Trip Sailing Boat':
                hargaPerOrang = 500000;
                break;
            case 'Private Trip Pulau Komodo dan Pulau Padar':
                hargaPerOrang = 2500000;
                break;
            default:
                break;
        }

        // Calculate total harga based on harga per orang and jumlah orang
        var totalHarga = hargaPerOrang * jumlahOrang;

        // Update total harga input field
        totalHargaInput.value = totalHarga;
    }

    // Call setTotalHarga on page load
    document.addEventListener('DOMContentLoaded', function() {
        setTotalHarga();
    });

    document.getElementById('bookingForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get form values
        const formData = new FormData(this);

        // Send form data using fetch
        fetch('<?= base_url('booking/simpan') ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Display booking details
                const bookingDetails = `
                    <p><strong>${data.data.nama_paket}</strong></p>
                    <p>${data.data.tanggal}</p>
                    <p>${data.data.nama_depan} ${data.data.nama_belakang}</p>
                    <p>${data.data.email}</p>
                    <p>${data.data.hp}</p>
                    <p><strong>Total Harga : </strong>Rp. ${data.data.total_harga}</p>
                    <br>
                    <img src="<?= base_url('images/approve.png')?>" style="display: block; margin-left: auto; margin-right: auto; width: 150px; margin-bottom: 20px">
                    <h4 style="text-align: center; font-weight: bold">Booking Telah Terkonfirmasi!</h4>
                    <p style="text-align: center">Bukti pembayaran akan dikirimkan ke email mu ya!</p>
                `;

                // Update confirmation card with booking details
                document.getElementById('bookingDetails').innerHTML = bookingDetails;

                // Show confirmation card
                document.getElementById('confirmationCard').style.display = 'block';

                // Scroll to bookingDetails
                document.getElementById('bookingDetails').scrollIntoView({ behavior: 'smooth' });
            } else {
                alert('Booking gagal. Silakan coba lagi.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Terjadi kesalahan. Silakan coba lagi.');
        });
    });

    // Increment function
    function increment() {
        var input = document.getElementById('jumlah_orang');
        var value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        input.value = value;
        setTotalHarga(); // Update total harga when incrementing jumlah orang
    }

    // Decrement function
    function decrement() {
        var input = document.getElementById('jumlah_orang');
        var value = parseInt(input.value, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            input.value = value;
            setTotalHarga(); // Update total harga when decrementing jumlah orang
        }
    }
</script>

</body>
</html>

