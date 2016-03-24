<?php

namespace Tesis\ApiBundle\Services;

class CheckAlfaService
{
    /**
     * Checkalfa soap service, check if a user is alfa
     * @param string $namelogin 
     * @param string $password
     * @return mixed
     */
    public function checkalfa($namelogin, $password)
    {
        return true;
    }
}