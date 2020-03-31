<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GlobalController extends Controller
{
    public function index()
	{
	    
	    $positif_global = Http::get('https://api.kawalcorona.com/positif');
	    $sembuh_global = Http::get('https://api.kawalcorona.com/sembuh');
	    $meninggal_global = Http::get('https://api.kawalcorona.com/meninggal');
	    $global = Http::get('https://api.kawalcorona.com/');
	    $positif = $positif_global->json();
	    $sembuh = $sembuh_global->json();
        $meninggal = $meninggal_global->json();
        $global_country = $global->json();
	    return view('global.index',compact('positif','sembuh','meninggal','global_country'));
	}
}
