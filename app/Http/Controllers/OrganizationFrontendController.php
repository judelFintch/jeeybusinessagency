<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationFrontendController extends Controller
{
    //

    public function sectionMat(){
        return view('frontend.sectionMaternelle', [
            'article' => 1
        ]);
     
    }


    public function sectionPri(){
        return view('frontend.sectionMaternelle', [
            'article' => 1
        ]);
     
    }



    public function sectionSec(){
        return view('frontend.sectionMaternelle', [
            'article' => 1
        ]);
     
    }
}