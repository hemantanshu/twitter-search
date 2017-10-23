<?php

include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setToken("PqupvwXOFxDejyBOoibHqA", "9oL7gbAwgBywijbD6HGgEVG6mbiyh12Hz5CjpqtcyM");
$value = ["q" => "ahmed khan"];
echo "
<pre>";
print_r($search->search($value));
echo "</pre>";