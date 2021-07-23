<?php
    $cities = 'Lagos';
    $api_key = '629f28411519658fa67ff1385f2d5bac';
   // $url = 'https://api.openweathermap.org/data/2.5/weather?q='.$cities.'&appid='.$api_key;
    $my_url = 'https://salem.pythonanywhere.com';

    $weather_data = file_get_contents($my_url);

    echo "<pre>";
    print_r($weather_data);

?>

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th scope="col">City</th>
        <th scope="col">Temperature in Farenheit</th>
        <th scope="col">Temperature in Celcius</th>
        <th scope="col">Humidity</th>
        <th scope="col">Description</th>
        <th scope="col">Icon</th>            
        </tr>
    </thead>
</table>



//<?php
    if(isset($_POST['submit_btn'])){
        //your code
       header('Location:yourHTMLFile.html?status=success');//redirect to your html with status
    }
?>



<div class="city-name">
          <h2>Lagos</h2>
          <h3 class="temperat">35°C</h3>
        </div>