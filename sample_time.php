<?
	// Replace with your API key
	$api_key = "IBZzdLmM2yCYaXjgTZ6x";
	
	$location1 = 'New York';
	$location2 = 'London';
	
	$location1 = urlencode($location1);
	$location2 = urlencode($location2);
	
	$time = '2016-12-25 21:30';
	$time = urlencode($time);
	
	$url = "https://www.amdoren.com/api/time.php?api_key=$api_key&from=$location1&time=$time&to=$location2";

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
	$diff = $parsed_json->diff;
	$diff_hr = $parsed_json->diff_hr;
	
	echo "$error: $error_message<br>";
	echo "$time<br>";
	echo "$diff, $diff_hr<br>";

?>
