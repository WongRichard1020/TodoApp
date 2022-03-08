<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable=['title', 'status']; //fields na ilalagay sa database?
}
