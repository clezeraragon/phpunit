<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 29/04/2015
 * Time: 09:40
 */

namespace CodeEducation;


class MathTest extends \PHPUnit_Framework_TestCase
{
 public function testVerificaSeOTipoDaClasseEstaCorreto()
 {
     $this->assertInstanceOf("CodeEducation\Math",new \CodeEducation\Math());
 }

    /**
     * @return array
     */
    public function somaProvider()
    {
        return [
            [2,2,4],
            [10,10,20],
            [10,15,25],
            [15,15,30],
            [10,2,12],
            [5,7,12]
        ];
    }

    /**
     * @dataProvider somaProvider
     */
    public function testVerificaSeConsegueSomarComProvider($x,$y,$resultado)
    {
        $math = new \CodeEducation\Math();
        $res = $math->soma($x,$y);
        $this->assertEquals($resultado,$res);
    }
//    public function testVerificaSeConsegueSomar()
//    {
//        $math = new \CodeEducation\Math();
//        $resultado = $math->soma(10,12); // deve dar 22
//        $this->assertEquals(22,$resultado);
//    }


    /**
     * @expectedException InvalidArgumentException
     */
    public function testVerificaSeConsegueSomarQuandoValorNaoNumerico()
    {
        $math = new \CodeEducation\Math();
        $resultado = $math->soma(10,"isso é um teste");

    }

}