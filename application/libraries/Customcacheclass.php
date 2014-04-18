<?php
/**
 * Created by PhpStorm.
 * User: mince
 * Date: 4/18/14
 * Time: 3:34 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customcacheclass {

    var $dir = '';
    var $value = '';
    public function __construct()
    {
        $this->dir = dirname(__FILE__)."/cache_dir/";
    }

    public function set_value($v){
        $this->value = $v;
    }

    public function get_value(){
        return $this->value;
    }
    public function __destruct(){
        file_put_contents($this->dir."cache.php", $this->value, FILE_APPEND);
    }
}

