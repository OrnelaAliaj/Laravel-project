<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
class employee extends Model
{
    
    public function setNameAttribute($value)
     {
         return $this->attributes['name']=ucfirst($value);
        
     }
     public function setSurnameAttribute($value)
     {
         return $this->attributes['surname']=ucfirst($value);
        
     }

}
