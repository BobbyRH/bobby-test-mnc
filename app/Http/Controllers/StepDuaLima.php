<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepDuaLima extends Controller
{

    public function index()
    {
        $x=8;
        $this->datas();
        echo $x;
        echo "<br/>";
        echo "<p>hasilnya adalah 8 bukan 2</p>";
        echo "<p>karena var X yang ditampilkan adalah var X yang berada diluar function datas , dan variabel X tidak merubah var X didalam function datas</p>";
        echo "<p>function hanya memproses variabel yang didalam function itu sendiri, jika ingin mendapatkan inputan variabel dari luar bisa ditambahkan pada parameter function.</p>";
   
        $this->gobacktostep();
    }

    public function datas(){
        $x = 2;
        $y = 3;
        $z = 4;
        return $x + $y + $z;
    }
    protected function gobacktostep(){        
      echo "<br><br>";
      echo "<a href='\'>Back to Step<a/>";
   }
}
