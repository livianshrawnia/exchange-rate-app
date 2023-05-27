<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRate;
use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExchangeRateController extends Controller
{
    public function index()
    {
    	$currencies = Currency::pluck('code', 'name')->toArray();
    	$exchangeRate = ExchangeRate::orderBy('timestamp', 'desc')->first();
        return view('exchange_rate.index', compact('exchangeRate','currencies'));
    }

    public function fetchRate(Request $request)
    {
        $validatedData = $request->validate([
            'from_currency' => 'required',
            'to_currency' => 'required',
        ]);

        $fromCurrency = $validatedData['from_currency'];
        $toCurrency = $validatedData['to_currency'];

        $response = Http::withOptions(['verify' => false])->get('https://api.exchangerate-api.com/v4/latest/'.$fromCurrency);
        $data = json_decode($response->getBody());

        $exchangeRate = $data->rates->$toCurrency;

        ExchangeRate::create([
            'from_currency' => $fromCurrency,
            'to_currency' => $toCurrency,
            'rate' => $exchangeRate,
            'timestamp' => now(),
        ]);

        return redirect()->back()->with('success', 'Exchange rate fetched successfully.');
    }

    public function showHistory()
    {
        $history = ExchangeRate::orderBy('timestamp', 'desc')->paginate(10);

        return view('exchange_rate.history', compact('history'));
    }
}
