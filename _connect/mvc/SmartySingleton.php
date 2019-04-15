<?php

include_once '../vendor/smarty/smarty/libs/Smarty.class.php';

class SmartySingleton{

    private static  $instance;

    private function __construct() {}

    private function __clone() {}

    private function __wakeup() {}

    static public function instance($modulo){
        $temDir = "../$modulo/view";
        $comDir ="../$modulo/view/compile";
        $cacDir ="../$modulo/view/cache";

        if( !isset( self::$instance ) ){

            $smarty = new Smarty;

            $smarty->setTemplateDir($temDir);
            $smarty->setCompileDir($comDir);
            $smarty->setConfigDir('../_connect/mvc');
            $smarty->setCacheDir( $cacDir );
            $smarty->caching = 0;
           // $smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;

            $smarty->debugging = false;
            self::$instance = $smarty;
            
        }else{
            self::$instance->setTemplateDir($temDir);
            self::$instance->setCompileDir($comDir);
            self::$instance->setCacheDir($cacDir);
        }

        return self::$instance;
    }



}