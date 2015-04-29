<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 29/04/2015
 * Time: 11:04
 */

namespace CodeEducation\Cliente;


use SebastianBergmann\RecursionContext\InvalidArgumentException;

class Cliente {

    private $nome;
    private $email;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $res = filter_var($email,FILTER_VALIDATE_EMAIL);
        if(!$res){
            throw new InvalidArgumentException();
        }
        $this->email = $email;
    }


}