<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;


class InfoController extends Controller
{
    public function index()
	{
	    $response_province = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
	    $response_nasional = Http::get('https://api.kawalcorona.com/indonesia');
	    $provinsi = $response_province->json();
        $indonesia = $response_nasional->json();
	    return view('corona.index',compact('indonesia','provinsi'));
	}
	public function chart()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        
        $labels = $suspects->flatten(1)->pluck('Provinsi');
        $data   = $suspects->flatten(1)->pluck('Kasus_Posi');
        $colors = $labels->map(function($item) {
            return $rand_color = '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Kasus Positif', 'pie', $data)->backgroundColor($colors);

        return view('chart.index', [
            'chart' => $chart,
        ]);
    }
}
