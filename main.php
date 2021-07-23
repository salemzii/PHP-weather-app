<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
</head>
<body>

    <p> Build Weather Analyzer With Php And OpenWeatherApi </p>
    <?php
        $city = 'Lagos';
        $cities = array();
        $cities[0] = 'kano';
        $cities[1] = 'dutse';
        $cities[2] = 'Lagos';
        $cities[3] = 'London';

        $city_data = array();

        $api_key = '629f28411519658fa67ff1385f2d5bac';

        foreach($cities as $city){

            $url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$api_key;
            $weather_data = json_decode(file_get_contents($url), true);
            array_push($city_data, array($weather_data["main"]['temp'], $weather_data["main"]['temp'] - 273.15, $weather_data['main']['humidity'], $weather_data['weather'][0]['description'], $weather_data['weather'][0]['icon']));
            echo "<pre>";
            print_r($weather_data);
        }
        //echo "<h3>(($city_data[0][3]))</h3>";
    ?>
    
</body>
</html>