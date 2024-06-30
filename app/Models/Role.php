<?php

namespace App\Models;

use App\Models\RoleGroup;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Models\Role as Model;

class Role extends Model
{
    protected $guarded = ['id'];

    public function roleGroup(): BelongsTo
    {
        return $this->belongsTo(RoleGroup::class);
    }
}
