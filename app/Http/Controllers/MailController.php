<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function html_email(Request $request) {
      // $user = new User;
      $name = $request->input('name');
      $email = $request->input('email');
      $msg = $request->input('message');
      $data = array('name'=>$name,'msg'=>$msg, 'email'=>$email);


      Mail::send('mail', $data, function($message) {
         $message->to('budgetbetter1@gmail.com', 'BudgetBetterTeam')->subject
            ('Email sent from BB website');
         $message->from('budgetbetter1@gmail.com', 'BudgetBetterServer');
      });

      echo "HTML Email Sent. Check your inbox.";
   }    
}
