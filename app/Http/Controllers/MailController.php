<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   // public function basic_email() {
   //    $data = array('name'=>"User", 'msg'=>"helooo");
   
   //    Mail::send(['text'=>'mail'], $data, function($message) {
   //       $message->to('budgetbetter1@gmail.com', 'BudgetBetter')->subject
   //          ('Laravel Basic Testing Mail');
   //       $message->from('example@gmail.com','User');
   //    });
   //    echo "Basic Email Sent. Check your inbox.";
   // }

   public function html_email() {
      $data = array('name'=>"User", 'msg'=>"helooo");

      Mail::send('mail', $data, function($message) {
         $message->to('budgetbetter1@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('budgetbetter1@gmail.com','Virat Gandhi');
      });
      echo "HTML Email Sent. Check your inbox.";
   }    

}
