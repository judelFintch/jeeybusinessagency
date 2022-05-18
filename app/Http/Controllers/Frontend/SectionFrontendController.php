<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers;
use Illuminate\Http\Request;

class SectionFrontendController extends Controller
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
