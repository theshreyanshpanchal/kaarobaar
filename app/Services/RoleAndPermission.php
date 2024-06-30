<?php

namespace App\Service;

use App\Models\Role;
use App\Models\User;

class RoleAndPermission
{
    public function assignRoleAndPermissionToUser($user, $roleName)
    {

        $role = Role::where('name', $roleName)->first();

        $permissions = $role->permissions;

        $user->assignRole($role);

        $user->givePermissionTo($permissions);

        return true;
    }

    public function syncPermissionsToRoleUsers($role)
    {

        $roleName = $role->name;

        $permissions = $role->permissions;

        $users = User::role($roleName)->get();

        if ($users->count()) {

            foreach ($users as $user) {

                $user->syncPermissions($permissions);

            }

        }

        return true;
    }
}
