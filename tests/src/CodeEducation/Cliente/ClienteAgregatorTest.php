<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 29/04/2015
 * Time: 12:39
 */

namespace CodeEducation\Cliente;


class ClienteAgregatorTest  extends \PHPUnit_Framework_TestCase
{
    public function testVerificaFuncionamentoDoClienteAgregator()
    {
        $cliente = $this->getMock('\CodeEducation\Cliente\Cliente',array("getNome"));
        $cliente->expects($this->any()) // estipular quantas vezes ele vai rodar
        ->method("getNome")
            ->willReturn("clezer aragon");

        $cliente2 = $this->getMock('\CodeEducation\Cliente\Cliente',array("getNome"));
        $cliente2->expects($this->any()) // estipular quantas vezes ele vai rodar
        ->method("getNome")
            ->willReturn("clezer aragon ramos");
//        $cliente = new Cliente();
//        $cliente->setEmail("clezer@isonhei.com.br");
//        $cliente->setNome("clezer aragon");
//
//        $cliente2 = new Cliente();
//        $cliente2->setEmail("clezer@isonhei.com.br");
//        $cliente2->setNome("clezer aragon ramos");

        $agregador = new ClienteAgregator();
        $agregador->addCliente($cliente);
        $agregador->addCliente($cliente2);

        $clientes = $agregador->getCliente();
        $this->assertEquals("clezer aragon",$clientes[0]->getNome());
        $this->assertEquals("clezer aragon ramos",$clientes[1]->getNome());


    }

}