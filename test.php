<?php

$ch = curl_init();
for ($i=0; $i<100000; $i++) {
if ($i % 100 === 0 ) { echo "Request Number $i"; }

$headerHandle = fopen('php://temp/maxmemory:32768', 'w+b');
$bodyHandle = fopen('php://temp', 'w+b');
curl_setopt($ch, CURLOPT_URL, 'https://repo.packagist.org/p2/dummy/sprykertest.json?r='.$i);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_2_0);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
curl_setopt($ch, CURLOPT_TIMEOUT, 300);
curl_setopt($ch, CURLOPT_WRITEHEADER, $headerHandle);
curl_setopt($ch, CURLOPT_FILE, $bodyHandle);
curl_setopt($ch, CURLOPT_ENCODING, "");
curl_setopt($ch, CURLOPT_PROTOCOLS, CURLPROTO_HTTP | CURLPROTO_HTTPS);
curl_exec($ch);

if (curl_getinfo($ch, CURLINFO_RESPONSE_CODE) !== 404 || curl_error($ch) !== '' || curl_errno($ch) !== 0) {
rewind($headerHandle);
$headers = explode("\r\n", rtrim(stream_get_contents($headerHandle)));
rewind($bodyHandle);
$body = stream_get_contents($bodyHandle);

var_dump('Failed at request '.$i);
var_dump(curl_errno($ch), curl_error($ch));
var_dump($headers, $body);
break;
}

fclose($bodyHandle);
fclose($headerHandle);
}
curl_close($ch);