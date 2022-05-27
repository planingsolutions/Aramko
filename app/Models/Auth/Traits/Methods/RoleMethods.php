<?php

namespace App\Models\Auth\Traits\Methods;

trait RoleMethods
{
    /**
     * @return mixed
     */
    public function isAdmin()
    { 

       
            if ($this->name == 'Administrator')
            {
                return $this->name === config('access.users.admin_role');
                // return $data->name;

            }
            elseif($this->name == 'super_admin'){
                return $this->name === config('access.users.adminn_role');

            }
            
        


    }

    
}
