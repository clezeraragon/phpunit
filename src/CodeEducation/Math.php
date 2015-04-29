<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 29/04/2015
 * Time: 09:38
 */

namespace CodeEducation;


use SebastianBergmann\RecursionContext\InvalidArgumentException;

class Math {

    public function  soma($x,$y)
    {
        if(!is_numeric($x)|| !is_numeric($y))
            throw new \InvalidArgumentException("os valores tem que ser numericos");
        return $x + $y;
    }
}