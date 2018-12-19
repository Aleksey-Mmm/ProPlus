<?php
/**
 * класс сущности "сотрудник"
 * User: Alex
 * Date: 17.12.2018
 * Time: 20:41
 */

namespace app\entities;


class Sotrudnik
{
    private $id;
    private $fam;
    private $name;
    private $otch;
    private $email;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFam()
    {
        return $this->fam;
    }

    /**
     * @param mixed $fam
     */
    public function setFam($fam)
    {
        $this->fam = $fam;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getOtch()
    {
        return $this->otch;
    }

    /**
     * @param mixed $otch
     */
    public function setOtch($otch)
    {
        $this->otch = $otch;
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
        $this->email = $email;
    }
}