<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/3ded77a9f9ecd18e/astronomy/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $hour = $parsed_json->{'moon_phase'}->{'current_time'}->{'hour'};
  $minute = $parsed_json->{'moon_phase'}->{'current_time'}->{'minute'};
  echo "Di Australia memliki perbedaan fase bulan ${hour} jam  ${minute} menit";
?>
<p>
<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/14252955f15867ff/almanac/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $ac = $parsed_json->{'almanac'}->{'airport_code'};
  $f = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'F'};
  $c = $parsed_json->{'almanac'}->{'temp_high'}->{'normal'}->{'C'};
    echo "Di San Francisco memiliki almanac sebagai berikut :<br>
  Airport Code : ${ac}<br>
  Suhu Fahrenheit : ${f}<sup>o</sup><br>
  Suhu Celcius : ${c}<sup>o</sup>";
?>