<?php

function getDistance($addressFrom, $addressTo, $unit = ''){
    // Google API key
    $accessToken = 'pk.eyJ1IjoiZ2Fib2xlYWwxMjMiLCJhIjoiY2p3MjJ4Mnp5MHNmNzQzb2RkeTZkdm5yZCJ9.QU-Uj98qEWcwwlnKGVgLzQ';
    
    // Change address format
    $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
    $formattedAddrTo     = str_replace(' ', '+', $addressTo);
    
    // Geocoding API request with start address
    $geocodeFrom = file_get_contents('https://api.mapbox.com/geocoding/v5/mapbox.places/'.$formattedAddrFrom.'.json?access_token='.$accessToken);
    $outputFrom = json_decode($geocodeFrom);
    if(!empty($outputFrom->error_message)){
        return $outputFrom->error_message;
    }
    
    // Geocoding API request with end address
    $geocodeTo = file_get_contents('https://api.mapbox.com/geocoding/v5/mapbox.places/'.$formattedAddrTo.'.json?access_token='.$accessToken);
    $outputTo = json_decode($geocodeTo);
    if(!empty($outputTo->error_message)){
        return $outputTo->error_message;
    }
    
    // Get latitude and longitude from the geodata
    $latitudeFrom = $outputFrom->features[0]->geometry->coordinates[0];
    $longitudeFrom = $outputFrom->features[0]->geometry->coordinates[1];

    $latitudeTo    = $outputTo->features[0]->geometry->coordinates[0];

    $longitudeTo   = $outputTo->features[0]->geometry->coordinates[1];;
    
    // Calculate distance between latitude and longitude
    $theta    = $longitudeFrom - $longitudeTo;
    $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    $dist    = acos($dist);
    $dist    = rad2deg($dist);
    $miles    = $dist * 60 * 1.1515;
    
    // Convert unit and return distance
    $unit = strtoupper($unit);
    if($unit == "K"){
        return round($miles * 1.609344, 2).' km';
    }elseif($unit == "M"){
        return round($miles * 1609.344, 2).' meters';
    }else{
        return round($miles, 2).' miles';
    }
}

//Two Address
$address_1 = 'Cypress Hills, Brooklyn, NY, USA';
$address_2 = 'Ozone Park, Queens, NY, USA';

$distance = getDistance($address_1, $address_2, "K");
echo $distance;
?>