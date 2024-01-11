<?php

echo "This represents the script that tries to set ArrayLike2 cookie to not be an array.<br>";

echo "ArrayLike2 cookie has been set to not be an array.<br>";
setcookie("ArrayLike2", "value that is not an array", time()+3600, "/");

echo "ArrayLike3, we will attempt to unset:<br>";
setcookie('ArrayLike3', '', -1, '/');

echo "ArrayLike4, we will loop through and unset:<br>";
if (isset($_COOKIE['ArrayLike4']) && is_array($_COOKIE['ArrayLike4'])) {
    foreach ($_COOKIE['ArrayLike4'] as $key => $value) {
        setcookie('ArrayLike4[' . $key . ']', '', -1, '/');
        echo "Unset cookie ArrayLike4[{$key}]<br>";
    }
    echo "Now we can set ArrayLike4 to be a simple value:<br>";
    setcookie('ArrayLike4', 'value that is not an array', time()+3600, '/');
} else {
    echo "ArrayLike4 cookie is not set or is not an array.<br>";
}

echo "Next, visit 3.php: <a href='3.php'>3.php</a><br>";
