<?
	// Replace with your API key
	$api_key = "IBZzdLmM2yCYaXjgTZ6x";
	
	$currency1 = 'USD';
	$currency2 = 'EUR';
	
	$currency1 = 'EUR';
	$currency2 = 'GBP';
	
	$url = "https://www.amdoren.com/api/currency.php?api_key=$api_key&from=$currency1&to=$currency2";
	
	$ch = curl_init();  
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	$json_string = curl_exec($ch);
	$parsed_json = json_decode($json_string);

	$error = $parsed_json->error;
	$error_message = $parsed_json->error_message;
	$amount = $parsed_json->amount;
	
?>
