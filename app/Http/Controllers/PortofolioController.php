<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Portofolio;
use App\ServicesCategory;

class PortofolioController extends Controller
{
    
    



  /*
  Am categorie la fiecare pagina
  in controller am sa tin intr-o variabila categoria paginii mele
  si in variabila allPortofolios o sa bag si un where, categoria este categoria curenta
  */


  public function portofolios()
  {
    $portofolio = Portofolio::get();
    $categorii = ServicesCategory::get();

    return view('portofolio',[
      
      'categorii'=>$categorii,
      'portofolio' =>$portofolio,
    ]);
    
  }


  // Si la portofoliu o sa fie fix pe structura de galeria cu categorii
    public function portofolio_detail($url_slug){
        $allPortofolios = Portofolio::get();
      
      

        foreach ($allPortofolios as &$portofoliu) {
            $portofoliosLinks = $portofoliu->id;
          
          
        }
//         dd($portofoliosLinks);

        $portofolio = Portofolio::where('id',$url_slug)->firstOrFail();
        $previous = Portofolio::where('id', '<', $portofolio->id)->orderBy('id','desc')->first();
        $next = Portofolio::where('id', '>', $portofolio->id)->orderBy('id','asc')->first();
        if($next!=NULL){
          $nextLink = $next->id;  
        }else{
        $nextLink = 0;
      }
      if($previous!=NULL){
          $prevLink = $previous->id;    
        }else{
        $prevLink = 0;
      }
        
        
      if($portofolio != null){
          if($portofolio->images){
            $portofolio->images = json_decode($portofolio->images, true);
            $portofolio->mobile_images = json_decode($portofolio->mobile_images, true);
          }
        
      } else{
        $nextLink = null;
        $prevLink = null;
      }

       
        // dd($nextLink);
        

        return view ('portofolio-detail',[
            'portofolio'=> $portofolio,
            'nextLink'=> $nextLink,
            'prevLink'=> $prevLink,
        ]);

    }
}