<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 29/04/2015
 * Time: 11:55
 */

namespace CodeEducation\Cliente;


class ClienteTest extends \PHPUnit_Framework_TestCase
{
    public function testVerificaSeSetNomeEstaFuncionando()
    {
        $cliente = new Cliente();
        $cliente->setNome("Clezer");

        $this->assertEquals("Clezer",$cliente->getNome());
    }
    public function testVerificaSeSetGetEmail()
    {
        $cliente = new Cliente();
        $cliente->setEmail("Clezer@isonhei.com");

        $this->assertEquals("Clezer@isonhei.com",$cliente->getEmail());
    }

    public function testVeificaSeEmailColocadoEInvalido()
    {
        $cliente = new Cliente();
        $cliente->setEmail("Clezer@isonhei.com");
    }
}