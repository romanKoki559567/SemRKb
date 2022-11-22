<?php

namespace App\Models;

use App\Core\Model;

class Login extends Model
{
    protected $id;
    protected $p_meno;
    protected $p_helso;

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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPMeno()
    {
        return $this->p_meno;
    }

    /**
     * @param mixed $p_meno
     */
    public function setPMeno($p_meno): void
    {
        $this->p_meno = $p_meno;
    }

    /**
     * @return mixed
     */
    public function getPHelso()
    {
        return $this->p_helso;
    }

    /**
     * @param mixed $p_helso
     */
    public function setPHelso($p_helso): void
    {
        $this->p_helso = $p_helso;
    }


}

