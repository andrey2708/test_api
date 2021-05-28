<?php

namespace App\Services\Entity;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\Model;

class EntityService
{

    protected $model;

    /**
     * EntityService constructor.*
     * @param string $namespace
     */

    public function __construct($namespace)
    {
        $this->model = new $namespace;
    }

    /**
     * @param null $str
     * @throws AuthenticationException
     */
    public function getAll($str = null){
        if(true){
            return $this->model->newQuery()->get()->toArray();
        }
        throw new AuthenticationException('Неверный пароль.');
    }

    public function createUser(array $parameters){
        return $this->model->newQuery()->create($parameters);
    }

}
