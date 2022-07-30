<?php

/**
 * 
 */
class News extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index(){
		
		// $this->load->view('news');
		$apiKey = "f6e367a762aeb06f5aaaa8d383ac3ef3";
		$cityId = "1269750";
		$googleApiUrl = "https://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_VERBOSE, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$response = curl_exec($ch);

		curl_close($ch);
		$data = json_decode($response);
		$currentTime = time();
		
	}
}

?>