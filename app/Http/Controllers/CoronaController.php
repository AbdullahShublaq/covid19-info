<?php

namespace App\Http\Controllers;

use App\Faq;
use App\Vaccine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CoronaController extends Controller
{
    //
    public function index()
    {
        $response = Http::get('https://api.covid19api.com/summary')->json();
        $vaccines = Vaccine::get()->pluck('name');

        $TotalConfirmed = $response['Global']['TotalConfirmed'];
        $NewConfirmed = $response['Global']['NewConfirmed'];
        $TotalRecovered = $response['Global']['TotalRecovered'];
        $TotalDeaths = $response['Global']['TotalDeaths'];

        return view('index', compact('TotalConfirmed', 'NewConfirmed', 'TotalRecovered', 'TotalDeaths', 'vaccines'));
    }

    public function statistics() {
        $response = Http::get('https://api.covid19api.com/summary')->json();
        $result = $response['Countries'];

        return view('statistics', compact('result'));
    }
    public function chart(Request $request) {
        $country = $request->country;
        $cases = Http::get('https://api.covid19api.com/country/'.$country)->json();

        if(isset($cases['message']) && $cases['message'] == 'Not Found'){
            return redirect(url('/statistics'));
        }

        return view('chart', compact('cases', 'country'));
    }

    public function vaccines() {
        $vaccines = Vaccine::all();

        return view('vaccines', compact('vaccines'));
    }

    public function faq() {
        $faqs = Faq::all();

        return view('faq', compact('faqs'));
    }

    public function subscribe() {

        return view('subscribe');
    }
}
