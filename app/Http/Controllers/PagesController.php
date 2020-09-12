<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class PagesController extends Controller
{
    private $city;

	public function p3(Request $request)
	{
        $this->$city = $request->input('city');
		return view('page_3');
	}

	public function p4() {
        echo $this->$city;

		// start scrappinng data from website
		$goutteClient = new Client();
        $guzzleClient = new GuzzleClient(array(
            'timeout' => 60,
            'verify' => false
        ));
        $goutteClient->setClient($guzzleClient);

        $crawler = $goutteClient->request('GET', 'https://www.expatistan.com/cost-of-living/madrid');
        $prices = array();
        $crawler->filter('.city-1')->each(function ($node) {
            global $prices;

            // replace all the commas 
            $noCommas = str_replace(",", "", $node->text()."\n");
            
            // replace all non ascii chars like $
            $noDollarSigns = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $noCommas);
            
            // convert it to foat
            $floatFinal = floatval($noDollarSigns);

            // add to array
            $prices[] = $floatFinal;
            
            // log to console for debugging
            // echo "<script>console.log($floatFinal)</script>";
        });

        global $prices;

        $foodSum = $prices[1] + $prices[3] + $prices[4] + $prices[5] + $prices[6] + $prices[7] + $prices[8] + $prices[9];
        $housingSum = $prices[18] +  $prices[19] +  $prices[20] +  $prices[23];
		$spendSum =  $prices[43] +  $prices[47] +  $prices[51] +  $prices[25];
        $travelSum =  $prices[31];
        $otherSum =  $prices[33] +  $prices[36] +  $prices[37] +  $prices[38] +  $prices[39] +  $prices[40];
        
		return view('page_4', ["foodSum"=>$foodSum, "housingSum"=>$housingSum, "spendSum"=>$spendSum, "travelSum"=>$travelSum, "otherSum"=>$otherSum]);
	}

	public function sp()
	{
		return view('signup');
	}

	public function db(){
		return view('dashboard');
	}

	public function about(){
		return view('aboutus');
	}

	public function welcome(){
		return view('welcome');
	}

}
