<?php

namespace cwkj\Kuaidi;

use think\facade\Cache;
use think\facade\Db;


class Duanxin {

	
    public function __construct() {
        $this->EBusinessID = config('set_dx.EBusinessID');
        $this->AppKey = config('set_dx.AppKey');
     
    }

    public function kuaidiniao() {
       
    }

   

}
