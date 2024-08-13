<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('paketwisata', 'PaketWisata::index');
$routes->get('destinasi', 'Destinasi::index');
$routes->get('opini', 'Opini::index');
$routes->get('otsb', 'OTSB::index');
$routes->get('ptsb', 'PTSB::index');
$routes->get('ptpkpp', 'PTPKPP::index');
$routes->get('otpkpp', 'OTPKPP::index');
$routes->get('otpppk', 'OTPPPK::index');
$routes->get('ptpppk', 'PTPPPK::index');
$routes->get('pkoaba', 'Pkoaba::index');
$routes->get('ppink', 'Ppink::index');
$routes->get('ppadar', 'Ppadar::index');
$routes->get('atcw', 'Atcw::index');
$routes->get('grangko', 'Grangko::index');
$routes->get('gbcermin', 'Gbcermin::index');
$routes->get('waerebo', 'Waerebo::index');
$routes->get('bukitsylvia', 'Bukitsylvia::index');
$routes->get('pkanawa', 'Pkanawa::index');
$routes->get('booking', 'Booking::index');
$routes->post('booking/simpan', 'Booking::simpan');
$routes->post('signup/simpan', 'Signup::simpan');
$routes->post('login/prosesLogin', 'Login::prosesLogin');
$routes->post('forgotpassword/simpan', 'ForgotPassword::simpan');
$routes->post('opini/submit', 'Opini::submit');
$routes->get('kontak', 'Kontak::index');