<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Subject extends Model
{
    use HasApiTokens;
    protected $guarded= [];
    protected $table = 'subjects';
}
