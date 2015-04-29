<?php
/**
 * Created by PhpStorm.
 * User: Ramos
 * Date: 29/04/2015
 * Time: 11:10
 */

namespace CodeEducation\Mail;


use CodeEducation\Cliente\Cliente;


class Mail
{

    private $from;
    private $to;
    private $subject;
    private $message;

    private $cliente;

    /**
 * @return mixed
 */
public function getCliente()
{
    return $this->cliente;
}/**
 * @param mixed $cliente
 */
public function setCliente(Cliente $cliente)
{
    $this->cliente = $cliente;
}

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }
     public function send()
    {
      echo "enviou o email";
        return true;
    }

}