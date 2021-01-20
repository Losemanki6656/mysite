<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['idvacan', 'first_name','last_name','middle_name','dataroj','malumot','institut','xarbiy','mestoroj','telnomer','pass_seriya','pass_number','ans_cout'];
}
