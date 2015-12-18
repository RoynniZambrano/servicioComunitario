<?php

namespace Tesis\ApiBundle\Services;

class DeleteService
{
    /**
     * Delete soap service, delete a record in database
     * @param string $tablename
	 * @param string $id     
     * @return mixed
     */
    public function delete($tablename, $id){
    	return "No se ha encontrado el registro:".$id ." en la Tabla: ".$tablename;
    }
}