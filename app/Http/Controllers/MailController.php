<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function html_email(Request $request) {
<<<<<<< HEAD

      $name = $request->input('name');
      $email = $request->input('email');
      $msg = $request->input('message');
      $data = array('name'=>$name,'msg'=>$msg);

      Mail::send('mail', $data, function() {
         $message->to('budgetbetter1@gmail.com', 'BudgetBetter')->subject
            ('Email sent from website');
         $message->from('website', 'website');
=======
      // $user = new User;
      // $msg = $request->input('name');
      $msg = $request->input('email');
      $data = array('name'=>'ME','msg'=>$msg);


      Mail::send('mail', $data, function($message) {
         $message->to('budgetbetter1@gmail.com', 'BudgetBetter')->subject
            ('Email sent from website');
         $message->from('abc@email.com', 'meeee');
>>>>>>> parent of 10be54d1... should be workinng at this pooint
      });

      echo "HTML Email Sent. Check your inbox.";
   }    
}
