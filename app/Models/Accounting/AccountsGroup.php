<?php

namespace App\Models\Accounting;

use Illuminate\Database\Eloquent\Model;

class AccountsGroup extends Model
{
    protected $table    = 'accounts_groups';
    public $primaryKey  = 'id';
    public $timestamps  = true;
    protected $fillable 	= array('name','head_id'); 
    protected $guarded   	= ['_token'];
    public static $rules 	= [
        'name' 				=> 'required|max:100|unique:accounts_groups', 
        'head_id' 	=> 'required|exists:head_groups,id', 
    ]; 
}
