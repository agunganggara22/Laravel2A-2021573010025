<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Admin\PageController::class, 'index']);
Route::get('/mahasiswa', [App\Http\Controllers\Admin\PageController::class, 'tampil']);

Route::get('/coba-facade', [PageController::class, 'cobaFacade']);


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // 1. Route Bawaan Laravel
// Route::get('/', function () {
//     return view('welcome');
// });

// // 2. Membuat Route
// Route::get('/wellplayed', function () {
//     return 'wellplayed';
// });

// Route::get('/belajar', function () {
//     echo '<h1>Hello World</h1>';
//     echo '<p>Sedang belajar Laravel</p>';
// });

// Route::get('/mahasiswa/profil/coba', function () {
//     echo '<h2 style="text-align: center"><u>Welcome Profil Coba</u></h2>';
// });

// // 3. Route Parameter
// Route::get('/mahasiswa/{nama}', function ($agung) {
//     return "Tampilkan data mahasiswa bernama $agung";
// });

// // 4. Route Parameter dengan 2 Parameter
// Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
//     return "Cek sisa stok untuk $jenis $merek";
// });

// Route::get('/stok_barang/{jenis}/{merek}', function ($a, $b) {
//     echo "Cek sisa stok untuk $a $b";
// });


// // 5. Route dengan Optional Parameter
// Route::get('/stok_barang/{jenis?}/{merek?}', function ($a = 'smartphone', $b = 'samsung') {
//     return "Cek sisa stok untuk $a $b";
// });

// // 6. Route Parameter dengan Regular Expression
// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan $id";
// });

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id =  $id";
// })->where('id', '[0-9]+');

// Route::get('/user/{id}', function ($id) {
//     return "Tampilkan user dengan id = $id";
// })->where('id', '[A-Z]{2}[0-9]+');

// // 7. Route Redirect
// Route::get('/hubungi-kami', function () {
//     return "<h1>Hubungi Kami</h1>";
// });

// Route::redirect('/contact-us', '/hubungi-kami');

// // 8. Route Group
// Route::get('/admin/mahasiswa', function () {
//     return "<h1>Daftar Mahasiswa</h1>";
// });
// Route::get('/admin/dosen', function () {
//     return "<h1>Daftar Dosen</h1>";
// });
// Route::get('/admin/karyawan', function () {
//     return "<h1>Daftar Karyawan</h1>";
// });

// Route::prefix('/admin')->group(function () {
//     Route::get('/mahasiswa', function () {
//         echo "<h1>Daftar Mahasiswa</h1>";
//     });
//     Route::get('/dosen', function () {
//         echo "<h1>Daftar Dosen</h1>";
//     });
//     Route::get('/karyawan', function () {
//         echo "<h1>Daftar Karyawan</h1>";
//     });
// });

// // 9. Route Fallback
// Route::fallback(function () {
//     return "Maaf, alamat tidak ditemukan";
// });

// // 10. Route Priority
// Route::get('/buku/1', function () {
//     return "Buku ke-1";
// });
// Route::get('/buku/1', function () {
//     return "Buku saya ke-1";
// });
// Route::get('/buku/1', function () {
//     return "Buku kita ke-1";
// });

// Route::get('/buku/{a}', function ($a) {
//     return "Buku ke-$a";
// });
// Route::get('/buku/{b}', function ($b) {
//     return "Buku saya ke-$b";
// });
// Route::get('/buku/{c}', function ($c) {
//     return "Buku kita ke-$c";
// });

// Route::get('mahasiswa/andi', function () {
//     echo "Halaman mahasiswa andi";
// });
// Route::get('/mahasiswa/andi', function () {
//     echo "Halaman mahasiswa ini andi";
// });


// Route::get('/home', function () {
//     return view('halaman_home');
// });

// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa',["mahasiswa01" => "Agung Anggara"]);
// });

// Route::get('/mahasiswa', function(){
//         $arrMahasiswa = ["Doni Sadikin", "Syadzwina Sahara", "Deliana Putri", "Indra Kenz"];
//         return view('kampus.mahasiswa', ['mahasiswa' => $arrMahasiswa]);
//     });

//     Route::get('/mahasiswa', function(){
//             return view('kampus.mahasiswa')
//                 ->with('mahasiswa01', 'Doni Sadikin')
//                 ->with('mahasiswa02', 'Syadzwina Sahara')
//                 ->with('mahasiswa03', 'Deliana Putri');
//         });

//     Route::get('/mahasiswa', function(){
//             $mahasiswa01 = "Indra kenz";
//             $mahasiswa02 = "Doni salmanan";
//             $mahasiswa03 = "Ulfi Rizkia";
//             $mahasiswa04 = "Deliana putri";
//             return view('kampus.mahasiswa', compact("mahasiswa01",
//             "mahasiswa02", "mahasiswa03", "mahasiswa04"));
//         });

// Route::get('/mahasiswa', function(){ 
// $nama = 'Elok Mas BaraBara';
// $nilai = 75; 
// return view('mahasiswa',compact('nama','nilai'));
// });

// Route::get('/mahasiswa', function(){ 
//     $nama = 'Tya Puantin Rani';
//     $nilai = [80,65,40,75,95]; 
//     return view('mahasiswa',compact('nama','nilai'));
//     });

// Route::get('mahasiswa', function () { 
//     $arrmahasiswa = ["Luhut Panjaitan","Jokowi","Vladimir Putin", 
//     "Lisa pernata"];
//     return view('mahasiswa')->with('mahasiswa', $arrmahasiswa);
// });
//     Route::get('dosen', function () {
//     $arrDosen = ["Maya Fitrianti, M.H.","Prof. Silvia Nst, M.Farm.",
//     "Dr. Umar Agustinus","Dr. Syahrial, M.Kom."];
//     return view('dosen')->with('dosen', $arrDosen);
//     });

//     Route::get('gallery', function () {
//     return view('gallery');
//     });

?>