<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 29/04/2015
 * Time: 11:07
 */

namespace CodeEducation\Cliente;

class ClienteAgregator {

    private $clientes = array();

    public function addCliente(Cliente $cliente)
    {
        $this->clientes[] = $cliente;
    }
    public function getCliente()
    {
        return $this->clientes;
    }

}