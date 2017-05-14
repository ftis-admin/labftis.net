<?php
Namespace Controller;
class Home {
    function index($f3){
        \View\MainTemplate::instance()->serve('page/index.html');
    }
}