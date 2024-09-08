<?php

namespace App\Http\Controllers;

use App\Models\TextWidget;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SiteController
{
    //
    public function about(){
        $widget = TextWidget::query()
        ->where("key","=","about-page")

        ->where("active","=",true)->first();
        if(!$widget){
            throw new NotFoundHttpException();
        }
        return view("about",["widget"=>$widget]);
    }
}
