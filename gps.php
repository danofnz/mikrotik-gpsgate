<?php

// gpsgate server
$server = "127.0.0.1";
$port = "8008";

// Converting DMS ( Degrees / minutes / seconds ) to DMM (NMEA)
function DMStoDMM($deg,$min,$sec)
{
	//return $deg+((($min*60)+($sec))/3600)
	return $deg.($min+(($sec)/60));
}
function KMHtoKNOT($spd)
{
	//return (($spd)/1.852)
	return (($spd)/1.852);
}

// get input
$raw = file_get_contents('php://input');
$data = json_decode($raw);

// check input for all data
if (!empty($data) && is_object($data) && property_exists($data,'imei') && property_exists($data,'lat') && property_exists($data,'lon') && property_exists($data,'alt') && property_exists($data,'spd') && property_exists($data,'bear') && property_exists($data,'date') && property_exists($data,'time') && property_exists($data,'val')){
	// clear variables
	$imei = $lat = $lon = $alt = $spd = $bear = $date = $time = $val = '';
	// set imei
	$imei = $data->imei;
	// the below section splits DMS coordinates apart and converts them to DMM (NMEA) format via above function
	if(preg_match('/^(N|E|W|S)\ (\d+)\ (\d+)\'\ (\d+\.\d+)/',$data->lat,$result)){
		$lat = DMStoDMM($result[2], $result[3], $result[4]);
		$lathem = $result[1];
	}
	// the below section splits DMS coordinates apart and converts them to DMM (NMEA) format via above function
	if(preg_match('/^(N|E|W|S)\ (\d+)\ (\d+)\'\ (\d+\.\d+)/',$data->lon,$result)){
		$lon = DMStoDMM($result[2], $result[3], $result[4]);
		$lonhem = $result[1];
	}
	// the below section splits Altitude and removes 'm'
	if(preg_match('/^(\d+)\.(\d+)/',$data->alt,$result)){
		$alt = $result[1].".".$result[2];
	}
	// the below section converts Speed to Knots via above function
	if(preg_match('/^(\d+)\.(\d+)/',$data->spd,$result)){
		$spd = $result[1].".".$result[2];
		if(!$result[1] == "0"){
			$spd = KMHtoKNOT($spd);
		} else {
			$spd = "0.00";
		}
	}
	// the below section splits Bearing and removes 'deg. True'
	if(preg_match('/^(\d+)\.(\d+)/',$data->bear,$result)){
		$bear = $result[1].".".$result[2];
	}
	// set date
	$date = ($data->date);
	// set time
	$time = ($data->time);
	// the below section converts Valid to 1 (true) or 0
	if(($data->val) == "true"){
		$val = "1";
	} else {
		$val = "0";
	}
	
	// return data to source (mikrotik file gps.php), disable if not wanted
	echo("IMEI: $imei\nLatitude: $lat\nLatitude Hemisphere: $lathem\nLongitude: $lon\nLongitude Hemisphere: $lonhem\nAltitude: $alt (m)\nSpeed: $spd (Knots)\nBearing: $bear (Deg.)\nDate: $date\nTime: $time\nValid: $val\ncURL: http://$server:$port/GpsGate/%3Fcmd=%24FRCMD,$imei,_SendMessage,,$lat,$lathem,$lon,$lonhem,$alt,$spd,$bear,$date,$time,$val\n\n");
	
	$url = "http://$server:$port/GpsGate/%3Fcmd=%24FRCMD,$imei,_SendMessage,,$lat,$lathem,$lon,$lonhem,$alt,$spd,$bear,$date,$time,$val";
	$ch = curl_init($url);
	$result = curl_exec($ch);
	curl_close($ch);
	echo("$result");
}
?>