<?php

namespace App\Enums;

use App\Traits\BaseEnum;

enum RoleGroups: string
{
    use BaseEnum;

    const ADMINISTRATOR = 'administrator';
}
