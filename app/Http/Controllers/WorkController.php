<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ServicesCategory;
use App\Mail\SendWork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
class WorkController extends Controller
{
    
    
    public function index()
    {
      $categories = ServicesCategory::get();
      return view('work', [
        'categories'=>$categories,
        ]);
      
      
    }

    public function send_work(Request $request){
      $contact_email = settings('contact.email');
      $form_data = $request->only(['name','email','number','service','company','website','describe','have','time-start','time-stop','terms']);
      $validationRules = [
          'name'    => ['required','min:3'],
          'email'   => ['required','email'],         
          'number'    => ['required','min:3'],
          'company'    => ['required','min:3'],
          'terms'   => ['required'],
          
      ];

      $validationMessages = [
        'name.min'=>'Name is required',
        'email.email'=>'Please insert a valid email',
        'number.min'=>'Please insert your phone number',
        'company.min'=>'Please insert your company/idea',
        'terms.required'=>'Please accept our terms',

    ];
      $validator = Validator::make($form_data, $validationRules,$validationMessages);
      if ($validator->fails())
          return ['success' => false, 'error' => $validator->errors()->all()];  
      else{ 
          Mail::to(strip_tags($contact_email))->send(new SendWork($request->all()));

          return ['success' => true,'successMessage'=> __('site.message')];
      }      
  }
}