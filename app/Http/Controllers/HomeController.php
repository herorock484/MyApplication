<?php

namespace App\Http\Controllers;

use App\Models\PoloniexData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index () {

        $response = Http::get('https://poloniex.com/public?command=returnTicker');

        $watching = ['USDT_BTC', 'USDT_ETH', 'BTC_ETH'];

        $tickerData = array_filter(json_decode($response->body(), true), function($val) use($watching) {
            return in_array($val, $watching);
        }, ARRAY_FILTER_USE_KEY);

       $this->storeToDb($tickerData);

        return view('welcome', compact('tickerData'));
    }

    public function storeToDb($tickerData)
    {
        foreach($tickerData as $key => $value)  {
            PoloniexData::create([
                'coin_pair' => $key,
                'last' => $value['last'],
                'highestBid' => $value['highestBid'],
                'lowestAsk' => $value['lowestAsk']
            ]);
        }
    }
}
