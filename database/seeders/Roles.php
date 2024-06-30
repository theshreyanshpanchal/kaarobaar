<?php

namespace Database\Seeders;

use Exception;
use App\Models\Role;
use App\Models\RoleGroup;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Roles extends Seeder
{
    public function run(): void
    {
        try {
            DB::beginTransaction();

            $file = app_path('Docs/roles_&_permissions.json');

            if (file_exists($file)) {

                $content = file_get_contents($file);

                $content = json_decode($content);

                $roles   = $content->roles ?? [];

                if (count($roles)) {

                    foreach ($roles as $role) {

                        $name          = $role->name;

                        $roleGroupName = $role->role_group;

                        $roleGroup     = RoleGroup::where('name', $roleGroupName)->first();

                        $addedRole     = Role::updateOrCreate([

                            'name'          => $name,

                            'role_group_id' => $roleGroup->id

                        ], [

                            'display' => $role->display,

                            'description'  => $role->description,

                        ]);

                        $alreadyAssignedPermissions = $addedRole->permissions->count();

                        if ($alreadyAssignedPermissions == 0) {

                            $rolePermissions = $role->permissions ?? [];

                            if (count($rolePermissions)) {

                                $permissions = Permission::whereIn('name', $rolePermissions)->get();

                                $addedRole->givePermissionTo($permissions);

                            }

                        }

                    }

                }

            }

            DB::commit();

        } catch (Exception $e) {

            Log::error($e);

            DB::rollBack();
        }

    }

}
