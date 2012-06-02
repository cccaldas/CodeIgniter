<?php 

	function request_get($url) {
		return file_get_contents($url);
	}

	function request_post($url, $data=null){
		$handler = curl_init($url);
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, 1);
		if(isset($data)){
			$params = "";
			foreach($data as $key => $value){
				$params .= urlencode($key).'='.urlencode($value).'&';
			}
			curl_setopt($handler, CURLOPT_POSTFIELDS,  $params);
			curl_setopt($handler, CURLOPT_POST, 1);
		}
		$result = curl_exec($handler);
		curl_close($handler);
		return $result;
	}

?>