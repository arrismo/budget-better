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
        $arr = = [];
        $crawler->filter('.price')->each(function ($node) {
            // replace all the commas 
            $noCommas = str_replace(",", "", $node->text()."\n");
            
            // replace all non ascii chars like $
            $noDollarSigns = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $noCommas);
            
            // convert it to foat
            $floatFinal = floatval($noDollarSigns);

            $arr[] = $floatFinal;

            // convert to float
            echo "<script>console.log($floatFinal)</script>";
        });

        $first = $arr[0];
        // here here 
        echo "<script>console.log($first)</script>";
    }
}