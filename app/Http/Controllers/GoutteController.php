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
        $crawler->filter('.price')->each(function ($node) {
            $noCommas = str_replace(",", "", $node->text()."\n");
            print "no commas";
            print "\n";
            print  $noCommas ;
            print "\n";
            print $noCommas[2];
            print "\n";
            $noSigns = floatval(ltrim($noCommas, $noCommas[0]));
            print $noSigns;
        });
    }
}