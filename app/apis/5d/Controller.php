<?php 

class Controller{
    public function index(){
        echo "Hello World, this shit is working !!!";
        echo CacheClient::pull("1");
    }
}