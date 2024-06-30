<?php

namespace App\Enums;

use App\Traits\BaseEnum;

enum Roles: string
{
    use BaseEnum;

    const SUPER_ADMIN = 'super-admin';
}
