<?php



$key = "dict.1.1.20220322T074019Z.32cc3f485a620e2d.747711175b04ff76b1d7349c25f1035054057420";
$word = 'work';
$url = "https://dictionary.yandex.net/api/v1/dicservice.json/lookup?key=$key&lang=en-ru&text=$word";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$response = curl_exec($ch);
$data = json_decode ($response, 1);
curl_close($ch);


echo '<pre>';
print_r($data);
echo '</pre>';








?>