<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role_has_page extends Model
{
    protected $table = 'role_has_pages';
    protected $fillable = ['role_id', 'page_id'];
    public $timestamps = false;

   
}
