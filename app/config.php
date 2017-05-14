<?php
$f3 = F3::instance();
$f3->mset([
    "AUTOLOAD" => "app/",
    "UI"=>"app/ui/",
    "TEMP"=>"app/tmp/",
]);