<?php
/**
 * Created by PhpStorm.
 * User: criminal
 * Date: 9/03/15
 * Time: 19:49
 */

namespace Acme;


class TestNewClass {


    function __construct(){
    }

    function youStink($message){
        if(isset($message)){
            echo $message;
        }
    }

}