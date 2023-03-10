<?php
/**
 *Note:
 *2023/3/10-17:22
 *Author: Alfred
 *Email: silentwolf_wp@163.com
 */

namespace Alfred\Test\Common;


class Test
{

    public function index(){
        echo 'hello boy';
    }
    public function check(){
        if(in_array($_SERVER['HTTP_HOST'],['www.findwp.cn'])){
            echo '非授权域名www.findwp.cn访问';die;
        }
    }
}