<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='tbl_role';
    protected $primaryKey = 'role_id';
    protected $fillable = [
        'role_id', 'title', 'role_permissions',
    ];
    public function users(){
        return $this->belongsToMany('app\Http\Models\User')->withTimestamps();
    }
}
