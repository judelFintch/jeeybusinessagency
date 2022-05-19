<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OrganizationFrontendController extends Controller
{
    //
    public function sectionMat(){
        return view('frontend.maternelle', [
            'article' => 1
        ]);
    
    }


    public function sectionPri(){
        return view('frontend.primaire', [
            'article' => 1
        ]);
     
    }

    public function sectionSec(){
        return view('frontend.secondaire', [
            'article' => 1
        ]);
    }
}