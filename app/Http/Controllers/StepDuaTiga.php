<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepDuaTiga extends Controller
{

    public function index()
    {
      $url1 = "https://reqres.in/api/users?page=2";
      $apis1 = $this->curlconfig($url1);
    
      $url2 = "https://reqres.in/api/users/2";
      $apis2 = $this->curlconfig($url2);

      // $djson = json_encode($apis);
      return view('step2tiga',['apis1'=>$apis1,'apis2'=>$apis2]);
    }

    
    public function curlconfig($url){
      $ch = curl_init(); 
      curl_setopt($ch, CURLOPT_URL, $url); 
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
      $output = curl_exec($ch);
      curl_close($ch);

      return json_decode($output);
    }

    protected function gobacktostep(){        
      echo "<br><br>";
      echo "<a href='\'>Back to Step<a/>";
   }

  public function json_validate($string)
    {
        // decode the JSON data
        // $result = json_decode($string);
        $result = $string;

        // switch and check possible JSON errors
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                $error = ''; // JSON is valid // No error has occurred
                break;
            case JSON_ERROR_DEPTH:
                $error = 'The maximum stack depth has been exceeded.';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                $error = 'Invalid or malformed JSON.';
                break;
            case JSON_ERROR_CTRL_CHAR:
                $error = 'Control character error, possibly incorrectly encoded.';
                break;
            case JSON_ERROR_SYNTAX:
                $error = 'Syntax error, malformed JSON.';
                break;
            // PHP >= 5.3.3
            case JSON_ERROR_UTF8:
                $error = 'Malformed UTF-8 characters, possibly incorrectly encoded.';
                break;
            // PHP >= 5.5.0
            case JSON_ERROR_RECURSION:
                $error = 'One or more recursive references in the value to be encoded.';
                break;
            // PHP >= 5.5.0
            case JSON_ERROR_INF_OR_NAN:
                $error = 'One or more NAN or INF values in the value to be encoded.';
                break;
            case JSON_ERROR_UNSUPPORTED_TYPE:
                $error = 'A value of a type that cannot be encoded was given.';
                break;
            default:
                $error = 'Unknown JSON error occured.';
                break;
        }

        if ($error !== '') {
            // throw the Exception or exit // or whatever :)
            exit($error);
        }

        // everything is OK
        return $result;
    }
}
