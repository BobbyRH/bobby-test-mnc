<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepSatu extends Controller
{
    public function index($soal)
    {
        
        switch($soal){
            case 'satu':
                echo "Buatlah sebuah fungsi untuk mendapatkan nama subdomain “olahraga” dari URL berikut<br/>
                https://olahraga.okezone.com/2021/05/soal-test<br/><br/><br/>";
                echo "<i>jawaban ada di hardcode</i><br/>";

                $url = "https://olahraga.okezone.com/2021/05/soal-test";
                echo "result : ". $this -> carisubdomain($url);
                
                $this->gobacktostep();

                break;       
            case 'dua':  
            case 'tiga':
            case 'empat':
            case 'lima':
            case 'enam':
            case 'tujuh':
            case 'delapan':
            case 'sembilan':
            case 'sepuluh':
            case 'sebelas':
            case 'duabelas':
                return view("step1". $soal);
                break;    
            default:
                return "Halo ini adalah method index";

                $this->gobacktostep();
                break;
        }
    }

    protected function carisubdomain($url){
        preg_match('/(?:http[s]*\:\/\/)*(.*?)\.(?=[^\/]*\..{2,5})/i', $url, $match);
        if($match){
            return $match[1];
        }else{
            return "subdomain not found";
        }
    }

    protected function gobacktostep(){        
        echo "<br><br>";
        echo "<a href='\'>Back to Step<a/>";
    }


}
