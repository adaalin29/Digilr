<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Statice;
use App\Location;
use App\Client;
use App\Portofolio;

use App\ServicesCategory;
use App\Service;
use App\Team;

class IndexController extends Controller
{
    
    
    public function index()
    {
      
      $portofolio = Portofolio::get();
      return view('index', [

        'portofolio'=>$portofolio,

        ]);
      
      
    }

    public function clients()
    {

      $clients = Client::get();
      return view('clients',[
        'clients' =>$clients,
      ]);
      
    }


    public function privacy()
    {
      return view('privacy');
      
    }


    public function team()
    {
      $team = Team::get();
      return view('team',[
        
        'team'=>$team,
      ]);
      
    }

    public function services()
    {
      $categorii = ServicesCategory::get();
      $servicii = Service::with('categories')->get();
      // dd($servicii->categories);
      return view('services',[
        'categorii'=>$categorii,
        'servicii'=>$servicii,

      ]);
      
    }

    public function cookie()
    {
      return view('cookie');
      
    }
    
    
}