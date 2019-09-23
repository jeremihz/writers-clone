<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Document extends Model
{
    use HasApiTokens;
    protected $guarded= [];
    protected $table = 'document_types';
}
