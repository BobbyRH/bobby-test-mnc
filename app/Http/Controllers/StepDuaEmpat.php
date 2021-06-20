<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StepDuaEmpat extends Controller
{

    public function index(Request $req)
    {
        if($req->session()->has('login')){
            if($req->session()->get('login') == "yes"){
                $login = "yes";
            }else{
                $login = "no";
            }
        }
      return view('step2empat',['login'=>$login]);
    }

    public function login(Request $req)
    {
        $array["bobby"]=array("user"=>"bobby","pass"=>"mnc1");
        $array["rahman"]=array("user"=>"rahman","pass"=>"mnc2");
        $array["hakim"]=array("user"=>"hakim","pass"=>"mnc3");

        if(strtolower($req->post('username')) == $array[$req->post('username')]['user'] && strtolower($req->post('password')) == $array[$req->post('username')]['pass']){
            $req->session()->put('login',"yes");
        }else{
            $req->session()->put('login',"no");
        }
        
        return redirect()->route('step24');

        // // echo $req->post('username');/
        // $req->session()->put('nama',$req->post('username'));
        // return redirect('step24');
    }

    public function logout(Request $req){
        $req->session()->put('login',"");
        return redirect()->route('step24');
    }

}
