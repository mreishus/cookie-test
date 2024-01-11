<?php
$serializedArray = serialize(['key1' => 'value1', 'key2' => 'value2']);
setcookie('SerializedArray', $serializedArray);

$jsonEncodedArray = json_encode(['key1' => 'value1', 'key2' => 'value2']);
setcookie('JsonEncodedArray', $jsonEncodedArray);

setcookie('ArrayLike[a]', 'value1');
setcookie('ArrayLike[b]', 'value2');

setcookie('ArrayLike2[a]', 'value1');
setcookie('ArrayLike2[b]', 'value2');

setcookie('ArrayLike3[a]', 'value1');
setcookie('ArrayLike3[b]', 'value2');

setcookie('ArrayLike4[a]', 'value1');
setcookie('ArrayLike4[b]', 'value2');

$urlEncodedString = urlencode('a[]=value1&a[]=value2');
setcookie('UrlEncodedString', $urlEncodedString);

$base64EncodedArray = base64_encode(serialize(['key1' => 'value1', 'key2' => 'value2']));
setcookie('Base64EncodedArray', $base64EncodedArray);

echo "Cookies have been set. Visit 2.php to see what they are.\n";
echo "Link: <a href='2.php'>2.php</a>\n";
