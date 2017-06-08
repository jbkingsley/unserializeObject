<?php
namespace SlightPHP;

final class Cache_MemcacheObject{
    var $v;
    var $t;
    function __construct($value){
        $this->v = $value;
        $this->t = time();
    }
}