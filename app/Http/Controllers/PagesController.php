<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
       public function index(){
           $data = array(
                'title'  => 'home',
                'bg_img' => 'home.jpg',
            );
            
           return view('pages.index')->with($data);
       }
       
        public function about(){ 
            $data = array(
                'title'  => 'about',
                'bg_img' => 'about.jpg',
            );
            
            return view('pages.about')->with($data);// with (the name that we will send the var with, var name here in this fn)
       }
       
        public function service(){
           $data = array(//Associated array key and values  --- keys treated as variables
               'title'      => 'Service',
               'services'   => ['Nutrition Programme', 'WorkOut Routines', 'supplement'],
               'images'     => [
                                'https://images.pexels.com/photos/793759/pexels-photo-793759.jpeg?                  auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260',
                                
                                'https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260',
                                
                                'https://images.pexels.com/photos/33355/capsule-pill-health-medicine.jpg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260'
                               ]
           );
           return view('pages.service')->with($data) ;
       }
}
