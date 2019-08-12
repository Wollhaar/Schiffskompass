<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 08.08.2019
 * Time: 16:54
 */

namespace Controller;


use Model\Kompass;

class kompassController
{
    public function dreheRuder($grad = null){
        if(!empty($kompass) && !is_a($kompass, 'Kompass')){
            $kompass = new Kompass();
        }
        if(is_int($grad)){
            $kompass->setGrad($grad);
        }

        return $kompass;
    }
}