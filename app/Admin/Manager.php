<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;

class Manager extends Model  implements  \Illuminate\Contracts\Auth\Authenticatable
{
    protected $table='manager';

    use  Authenticatable;
}
