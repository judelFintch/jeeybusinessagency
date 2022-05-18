<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

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