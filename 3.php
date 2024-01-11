<?php
// Read and display cookie values

echo "Reading cookies...\n";

// Check if specific cookies are set and display their values
$cookieNames = ['SerializedArray', 'JsonEncodedArray', 'ArrayLike', 'ArrayLike2', 'ArrayLike3', 'ArrayLike4', 'UrlEncodedString', 'Base64EncodedArray'];

echo "<pre>\n";
foreach ($cookieNames as $cookieName) {
    if (isset($_COOKIE[$cookieName])) {
        echo "Value of cookie '{$cookieName}': " . $_COOKIE[$cookieName] . "\n";
    } else {
        echo "Cookie '{$cookieName}' is not set.\n";
    }
}

foreach ( array_keys($_COOKIE) as $cookieName ) {
    echo "Value of cookie '{$cookieName}': " . $_COOKIE[$cookieName] . "\n";
}

$arrayCookieNames = [ 'ArrayLike', 'ArrayLike2', 'ArrayLike3', 'ArrayLike4' ];
foreach ($arrayCookieNames as $arrayCookieName) {
    if (isset($_COOKIE[$arrayCookieName])) {
        echo "\n{$arrayCookieName} cookie values:\n";
        foreach ($_COOKIE[$arrayCookieName] as $key => $value) {
            echo "  Key '{$key}' has value '{$value}'\n";
        }
    } else {
        echo "\n{$arrayCookieName} cookie is not set.\n";
    }
}

print "Start over at 1.php: <a href='1.php'>1.php</a>\n";
