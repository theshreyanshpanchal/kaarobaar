<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleGroup extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function roles()
    {
        return $this->hasMany(Role::class);
    }
}
