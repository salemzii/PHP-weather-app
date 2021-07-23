kabir kabir dalha
FCP/CSC/18/1081
******************
<?php

function getCityData($city_name){
    $api_key = '629f28411519658fa67ff1385f2d5bac';
    $url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;
    $weather_data = json_decode(file_get_contents($url), true);

    echo"$city_name, $weather_data";
    print_r($weather_data);
}
getCityData('kano');

?>