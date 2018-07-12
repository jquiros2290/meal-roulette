<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use SKAgarwal\GoogleApi\PlacesApi;

class MealsController extends Controller
{

	function index(){
		$googlePlaces = new PlacesApi(env('PLACES_API_KEY'));
		$response = $googlePlaces->textSearch('lunch in dallas', ['location' => '32.7767, 96.7970', 'radius' => '10']);
		$results = [];
		$random_results = [];

		foreach($response['results'] as $result){
			array_push($results, $result);
		}

		$x = array_rand($results, 7);

		for ($i = 0; $i < count($x); $i++) {
			$y = $x[$i];
		    array_push($random_results, $results[$y]);
		} 

		$data['random_results'] = $random_results;



		return view('welcome', $data);
	}

	function find_meal(Request $request){

		$meal =  $request->meal;
		$city = $request->city; 

		$googlePlaces = new PlacesApi(env('PLACES_API_KEY'));
		$response = $googlePlaces->textSearch($meal .' in ' . $city);

		$results = [];
		$random_results = [];

		foreach($response['results'] as $result){
			array_push($results, $result);
		}

		$x = array_rand($results, 7);

		for ($i = 0; $i < count($x); $i++) {
			$y = $x[$i];
		    array_push($random_results, $results[$y]);
		} 

		return $random_results;
	}

}
