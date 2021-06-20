<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepDuaDua extends Controller
{
    private $limit =5;
    public function index()
    {
     echo "Pola Segitiga Siku Siku Rata Kiri : <br/>";
     echo $this->segi3sikuratakiri($this->limit);
     echo "<br/>";

     $this->gobacktostep();
    }

    public function segi3sikuratakiri($loop){
      for ($j=0; $j <= $loop; $j++) {
        echo "";
        }
      for ($k=$loop; $k <= $this->limit; $k++) {
      echo "*";
      }
      echo "<br/>";


      if($loop >= 1){
        $this->segi3sikuratakiri($loop-1);
      }
    }

    
    protected function gobacktostep(){        
      echo "<br><br>";
      echo "<a href='\'>Back to Step<a/>";
   }
}
