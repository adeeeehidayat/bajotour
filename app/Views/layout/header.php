<header class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?php echo base_url('images/bjlogo.png'); ?>" alt="BajoTour Hero Image" class="img-fluid" style="width: 20%; height: auto"></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="paketwisata">Paket Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="destinasi">Destinasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footerSection">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footerSection">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn" data-toggle="modal" data-target="#signupModal" style="border: 1px solid #E76F3D;">Sign Up</button>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel" style="color: #00A7C7; font-weight: bold;">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('login/prosesLogin') ?>" method="post">
                    <div class="form-group" style="margin-bottom: 20px; border: 1px solid #E76F3D; border-radius: 5px">
                        <input type="email" class="form-control" id="loginEmail" name="loginEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group" style="margin-bottom: 20px; border: 1px solid #E76F3D; border-radius: 5px">
                        <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="#" data-toggle="modal" data-target="#signupModal" data-dismiss="modal" style="text-decoration: none; color: #E76F3D">Belum punya akun?</a>
                        <a href="#" data-toggle="modal" data-target="#resetPasswordModal" data-dismiss="modal" style="text-decoration: none; color: #E76F3D">Lupa password?</a>
                    </div>
                    <button type="submit" class="btn btn-block mt-3" style="background: #00A7C7; color: #fff;">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"  style="padding: 50px">
            <div class="modal-header">
                <h5 class="modal-title" id="signupModalLabel" style="color: #00A7C7; font-weight: bold;">Daftar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('signup/simpan') ?>" method="post">
                    <div class="form-group" style="margin-bottom: 20px; border: 1px solid #E76F3D; border-radius: 5px">
                        <input type="text" class="form-control" id="signupName" name="signupName" placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 20px; border: 1px solid #E76F3D; border-radius: 5px">
                        <input type="email" class="form-control" id="signupEmail" name="signupEmail" placeholder="Masukkan Email" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 20px; border: 1px solid #E76F3D; border-radius: 5px">
                        <input type="password" class="form-control" id="signupPassword" name="signupPassword" placeholder="Masukkan Password" required>
                    </div>
                    <button type="submit" class="btn btn-block mt-3" style="background: #00A7C7; color: #fff;">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Reset Password Modal -->
<div class="modal fade" id="resetPasswordModal" tabindex="-1" aria-labelledby="resetPasswordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="resetPasswordModalLabel" style="color: #00A7C7; font-weight: bold;">Buat Password Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('forgotpassword/simpan') ?>" method="post">
                    <div class="form-group" style="margin-bottom: 20px; border: 1px solid #E76F3D; border-radius: 5px">
                        <input type="email" class="form-control" id="fpEmail" name="fpEmail" placeholder="Email">
                    </div>  
                    <div class="form-group" style="margin-bottom: 20px; border: 1px solid #E76F3D; border-radius: 5px">
                        <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Password Baru">
                    </div>
                    <div class="form-group" style="margin-bottom: 20px; border: 1px solid #E76F3D; border-radius: 5px">
                        <input type="password" class="form-control" id="confirmNewPassword" name="confirmNewPassword" placeholder="Konfirmasi Password Baru">
                    </div>
                    <button type="submit" class="btn btn-block mt-3" style="background: #00A7C7; color: #fff; ">Konfirmasi</button>
                </form>
            </div>
        </div>
    </div>
</div>

