<?php
/*
      CRAFTED WITH AWESOMENESS BY:
       _        _                      _
      | |      | |                    | |
      | |      | | COPYRIGHT (c) 2017 | |
      | | _____| | _____  ___  ___  __| |
      | |/ / _ \ |/ / _ \/ __|/ _ \/ _` |
      |   <  __/   <  __/\__ \  __/ (_| |
      |_|\_\___|_|\_\___||___/\___|\__,_|

      labftis.net Project
      
      Kekesed<iam@kekesed.id>
      https://www.kekesed.id/
*/

array_map(function($inc){require_once 'app/' . $inc;}, [
    "vendor/autoload.php",
    "config.php",
    "app.php"
]);
F3::run();
// that's it. no need to worry.
?>