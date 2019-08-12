<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 08.08.2019
 * Time: 16:50
 */

namespace Model;


class Kompass
{
    private $grad;

    public function __construct()
    {
        $this->grad = 0;
    }

    /**
     * @return int
     */
    public function getGrad()
    {
        return $this->grad;
    }

    /**
     * @param int $grad
     */
    public function setGrad($grad)
    {
        $this->grad = $grad;
    }


}