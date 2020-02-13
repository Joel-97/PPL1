<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';
     protected $fillable = [
        'companyId', 'companyName', 'companyPhone', 'companyEmail',
         'companyAddress','requiredProfile','companyRequirements' ,
         'companyInfo','companyDescription', 
     ];

}
