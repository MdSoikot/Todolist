<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
  protected $table="todolist";
  protected $fillable=['name','email','password'];
  
}
