<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepDuaSatu extends Controller
{
    private $maxbilprima =100;

    public function index()
    {
     echo "Bilangan Prima : ";
     echo $this->bilprima(1);
     echo "<br/>";
    
     echo "Bilangan Ganjil : ";
     echo $this->bilgangen(1,"ganjil");
     echo "<br/>";
    
     echo "Bilangan Genap : ";
     echo $this->bilgangen(1,"genap");
     echo "<br/>";
    
     echo "Bilangan Kelipatan 5 : ";
     echo $this->billipat(1);

     
     $this->gobacktostep();
    }

    public function bilprima($loop){
      $a = 0 ;
      for($j=1;$j<=$loop;$j++){
        if($loop % $j == 0){
          $a++;
        }
      }

      if($a == 2){
        echo $loop.', ';
      }

      if($loop < $this->maxbilprima){
        $this->bilprima($j);
      }
    }

    public function bilgangen($loop,$status){
      if ($loop % 2 == 0){ 
          echo ($status == "genap") ? $loop.", " : "";
      }else {
          echo ($status == "ganjil") ? $loop.", " : "";
      }
      
      if($loop < $this->maxbilprima){
        $this->bilgangen($loop+1,$status);
      }
    }

    public function billipat($loop){
      echo ($loop % 5 == 0) ? $loop.", " : "";
      
      if($loop < $this->maxbilprima){
        $this->billipat($loop+1);
      }
    }

    
    protected function gobacktostep(){        
      echo "<br><br>";
      echo "<a href='\'>Back to Step<a/>";
   }
   
}
