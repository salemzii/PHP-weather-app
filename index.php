<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Weather App</title>
</head>
<body>
    <div class="card">
        <div class="search">
          <form style="width:100%;" name="searchform" method="POST" action="index.php">
            <input type="text" class="search-bar" id="query" name="query" value="" placeholder="Search" />
            <button type="submit" value="submit" name="submit">
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1.5em"
                width="1.5em" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
                </path>
              </svg>
            </button>
        </form>
        </div>
        <?php
          if(isset($_POST['query'])){
            $city = $_POST['query'];
          }else{
            $city = 'Nairobi';
          }
          $api_key = '629f28411519658fa67ff1385f2d5bac';
          $url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$api_key;
          $weather_data = json_decode(file_get_contents($url), true);
          $icon = $weather_data['weather'][0]['icon'];
        ?>
        <div class="weather loading">
          <h1 class="city"><?php echo $city ?></h2>
          <h2 class="temp">Temperature: <?php echo $weather_data['main']['temp'] - 273.15 ?></h1>
          <div class="flex">
            <img src="https://openweathermap.org/img/wn/".$icon alt="" class="icon" />
          </div>
          <div class="description">Description: <?php echo $weather_data['weather'][0]['description'] ?></div>
          <div class="humidity">Humidity: <?php echo  $weather_data['main']['humidity'] ?>%</div>
          <div class="wind">Wind speed: <?php echo $weather_data['wind']['speed'] ?></div>
        </div>
      </div>
      <div>
        <?php
            $cities = array();
            $cities[0] = 'kano';
            $cities[1] = 'dutse';
            $cities[2] = 'Lagos';
            $cities[3] = 'London'; 
            foreach($cities as $city): 
              $api_key = '629f28411519658fa67ff1385f2d5bac';
              $url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$api_key;
              $weather_data = json_decode(file_get_contents($url), true);
            ?>
              <div class="city-name">
                <h2><?php echo $city ?></h2>
                <h3 class="temperat"><?php echo ($weather_data['main']['temp'] - 273.15)  ?></h3>
              </div>
            <?php endforeach; ?>                
      </div>
</body>
</html>