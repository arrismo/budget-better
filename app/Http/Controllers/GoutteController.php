<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use GuzzleHttp\Client as GuzzleClient;

class GoutteController extends Controller
{
    public function doWebScraping()
    {
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
            
            // convert to float
            // echo "<script>console.log($floatFinal)</script>";
        });

        global $prices;

        $foodSum = $prices[1] + $prices[3] + $prices[4] + $prices[5] + $prices[6] + $prices[7] + $prices[8] + $prices[9];
        // echo $foodSum;

        $housingSum = $prices[18] +  $prices[19] +  $prices[20] +  $prices[23];
        // echo $housingSum;

        $spendSum =  $prices[43] +  $prices[47] +  $prices[51] +  $prices[25];
        // echo $spendSum;

        $travelSum =  $prices[31];
        // echo $travelSum;

        $otherSum =  $prices[33] +  $prices[36] +  $prices[37] +  $prices[38] +  $prices[39] +  $prices[40];
        // echo $otherSum;
    }
}