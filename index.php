<?php
echo "Hello I'am LINE BOT";
<?php$access_token = 'TJ10spbEcjw/fFqN1aLo7WqC5g7xmfA4fd8Vrqap8pZqAo6l1mMtDyxQftghjNS3aHuHqNrOwYxagiKekTXSVEftwoPRDVsSM9hwHZe0fgNo92m7DzX5VJASyrS6VesDQHXcFqEs+86gvRwdPBklAgdB04t89/1O/w1cDnyilFU=';$url = 'https://api.line.me/v1/oauth/verify';$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);$result = curl_exec($ch);curl_close($ch);echo $result;
