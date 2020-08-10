<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function html_email(Request $request) {
      // $user = new User;
      $msg = $request->getContent();
      $data = array('name'=>'ME','msg'=>$msg[0]);


      Mail::send('mail', $data, function($message) {
         $message->to('budgetbetter1@gmail.com', 'BudgetBetter')->subject
            ('Email sent from website');
         $message->from('abc@email.com', 'meeee');
      });

      echo "HTML Email Sent. Check your inbox.";
   }    
}
