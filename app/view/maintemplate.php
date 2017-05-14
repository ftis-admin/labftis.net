<?php
Namespace View;
class MainTemplate extends \Template{
    public function serve($location, $mime = NULL, array $hive = NULL, $ttl = 0){
        \F3::set('page.content', $location);
        echo parent::render('index.html', $mime, $hive, $ttl);
    }
}