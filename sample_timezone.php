<?
	// Replace with your API key
	$api_key = "IBZzdLmM2yCYaXjgTZ6x";
	
	$location = 'New York';
	$location = urlencode($location);
	
	$url = "https://www.amdoren.com/api/timezone.php?api_key=$api_key&loc=$location";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$error_message = $parsed_json->error_message;
	$time = $parsed_json->time;
	$timezone = $parsed_json->timezone;
	$offset = $parsed_json->offset;
	$daylight_savings = $parsed_json->daylight_savings;
	
	echo "$error: $error_message<br>";
	echo "$time<br>";
	echo "$timezone<br>";
	echo "$offset<br>";
	echo "$daylight_savings<br>";

?>
