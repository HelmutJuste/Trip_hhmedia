<?php
/**
 * Created by PhpStorm.
 * User: sesso
 * Date: 06/05/2017
 * Time: 22:29
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{

    public function index($long, $lat)
    {
        session(['lat_end' => $lat]);
        session(['long_end' => $long]);

        return view('welcome', ['export'=>$lat]);
    }
    public function api(Request $request){
        $lat_begin = $request->input('latitude');
        $long_begin = $request->input('longitude');
        $lat_end = session('lat_end');
        $long_end = session('long_end');

        echo $this->calculdistance($long_begin, $lat_begin, $long_end, $lat_end). " km";
    }

    public function calculdistance($longi_depart, $lati_depart, $longi_arriv, $lati_arriv)
    {
        // Calcul de la distance en degrés
        $degrees = rad2deg(acos((sin(deg2rad($lati_depart))*sin(deg2rad($lati_arriv))) + (cos(deg2rad($lati_depart))*cos(deg2rad($lati_arriv))*cos(deg2rad($longi_depart-$longi_arriv)))));

        // Conversion de la distance en degrés à l'unité choisie (kilomètres)
        $distance = $degrees * 111.13384; // 1 degré = 111,13384 km, sur base du diamètre moyen de la Terre (12735 km)
        return $distance;

    }




}