<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use SKAgarwal\GoogleApi\PlacesApi;

class MealsController extends Controller
{

	function index(){
		$googlePlaces = new PlacesApi(env('PLACES_API_KEY'));
		$response = $googlePlaces->placeAutocomplete('place to eat');

		dd($response);

		// https://maps.googleapis.com/maps/api/place/findplacefromtext/json?input=mongolian%20grill&inputtype=textquery&fields=photos,formatted_address,name,opening_hours,rating&locationbias=circle:2000@47.6918452,-122.2226413&key=' . $this->places_key

		return view('welcome');
	}
}
