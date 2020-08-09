<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function html_email(Request $request) {
      // $user = new User;
      $name = $request['name'];
      $email = $request['email'];
      $msg = $request['msg'];
      dd($email);
      print($email);
      // $user->save();

      // Mail::send('mail', $data, function($message) {
      //    $message->to('budgetbetter1@gmail.com', 'BudgetBetter')->subject
      //       ('Email sent from website');
      //    $message->from($email, $name);
      // });

      // echo "HTML Email Sent. Check your inbox.";
   }    
}
