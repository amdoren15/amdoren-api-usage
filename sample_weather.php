<?
	// Replace with your API key
	$api_key = "IBZzdLmM2yCYaXjgTZ6x";
	
	// New York
	$latitude = 40.7127837;
	$longitude = -74.0059413;
	
	$url = "https://www.amdoren.com/api/weather.php?api_key=$api_key&lat=$latitude&lon=$longitude";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$error_message = $parsed_json->error_message;
	
	echo "$error<br>";
	echo "$error_message<br>";
	
	$forecasts = $parsed_json->forecast;
	
	foreach ($forecasts as $forecast) {
		$date = $forecast->date;
		$avg_c = $forecast->avg_c;
		$min_c = $forecast->min_c;
		$max_c = $forecast->max_c;
		$avg_f = $forecast->avg_f;
		$min_f = $forecast->min_f;
		$max_f = $forecast->max_f;
		$summary = $forecast->summary;
		$icon = $forecast->icon;

		echo "$date<br>";
		echo "$avg_c, $min_c, $max_c<br>";
		echo "$avg_f, $min_f, $max_f<br>";
		echo "$icon: $summary<br>";
	}

?>
