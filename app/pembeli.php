<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $primaryKey = 'id_pembeli';
    protected $table = 'pembeli';
    protected $guarded = [];
}
