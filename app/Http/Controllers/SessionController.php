<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SessionController extends Controller
{
    public function index()
    {
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</a></li>';
        echo '<li><a href=/akses-session>Akses Session</a></li>';
        echo '<li><a href=/hapus-session>hapus Session</a></li>';
        echo '<li><a href=/flash-session>flash Session</a></li>';
        echo '<ul>';
    }

    public function buatSession()
    {
        session(['hakAkses' => 'admin', 'nama' => 'Joe']);
        return "Session sudah dilihat";
    }
    public function aksesSession(Request $request )
    {
        //Menggunakan helper function
        echo session('hakAkses');
        echo session('nama');

        echo '<hr>';

        //dari request object
        echo $request->session()->get('hakAkses');
        echo $request->session()->get('nama');

        echo '<hr>';

        echo Session::get('hakAkses');
        echo Session::get('nama');

        echo '<hr>';

        //Menggunakan faced Session
        echo Session::get('hakAkses');
        echo Session::get('nama');
    }
    public function hapusSession(Request $request)
    {
        //Menghapus semua session menggunakan helper function
        session()->flush();

        //Menghapus semua session menggunakan Request object
        $request->session()->flush();

        //Menghapus semua session menggunakan faced session\
        Session::flush();

        echo "semua Session sudah dihapus";
    }
public function flashSession(Request $request)
    {
        //Membuat 1 flash session menggunakan helper function
        session()->flash('hakAkses','admin');

        //Membuat 1 flash session menggunakan Request object
        // $request->session()->flash('hakAkses','admin');

        //Membuat 1 flash session menggunakan facade Session
        $request->session::flash('hakAkses','admin');

    echo "Flash session hakAkses sudah dibuat";
}
}
