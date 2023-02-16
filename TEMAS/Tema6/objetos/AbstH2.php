<?php
require_once('./AbstH1.php');
 class AbstH2 extends AbstH1{
    public function soy2(){
        echo 'Soy 2';
        print_r($this);
    }
}