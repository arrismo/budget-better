<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class PagesController extends Controller{

    var $resultStr;

	public function p3(Request $request)	{
        $city = $request->input('city');
        // echo $city;
		return view('page_3', ["city"=>$city]);
    }
    
    public function extractNums(String $priceStr){
        // priceStr ex: €14 

        // $resultStr;
        $nums = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $letters = str_split($priceStr);

        foreach ($letters as $char){
            # if current character is in list of numbers
            if(array_search($char, $nums)){
                # add to resulting string 
                $resultStr = $resultStr . $char;
            }
        }

        return $resultStr;
    }

	public function p4($city) {
        // start scrappinng data from website
		$goutteClient = new Client();
        $guzzleClient = new GuzzleClient(array(
            'timeout' => 60,
            'verify' => false
        ));
        $goutteClient->setClient($guzzleClient);

        echo 'https://www.expatistan.com/cost-of-living/' . strtolower(strval($city));
        $crawler = $goutteClient->request('GET', 'https://www.expatistan.com/cost-of-living/' . strtolower(strval($city)));
        $prices = array();
        $crawler->filter('.city-1')->each(function ($node) {
            global $prices;
            $nodeText = $node->text();

            // replace all the commas 
            $noCommas = str_replace(",", "", $node->text()."\n");
            
            // // replace all non ascii chars like $
            // $noDollarSigns = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $noCommas);
            // echo $noDollarSigns;

            $numStr = $this->extractNums($noCommas);
            echo $numStr;
            echo "<script>console.log($numStr)</script>";

            // add float version to array
            $prices[] = floatval($numStr);
            
            // log to console for debugging
            echo "<script>console.log($floatFinal)</script>";
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
