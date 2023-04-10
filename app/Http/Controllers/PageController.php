<?php
namespace App\Http\Controllers;

class PageController extends Controller
{
public function index()
{
return view ('Welcome');
}
public function tampil()
{
$arrMahasiswa = ["Megawati","Luhut Panjaitan","Susilo Bambang Kusumo",
"Prabowo Subianto"];
return view ('Mahasiswa') ->with ('mahasiswa', $arrMahasiswa);
}
}