<?php

namespace Database\Seeders;

use Exception;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Permissions extends Seeder
{
    public function run(): void
    {
        try {
            DB::beginTransaction();

            $file = app_path('Docs/roles_&_permissions.json');

            if (file_exists($file)) {

                $content     = file_get_contents($file);

                $content     = json_decode($content);

                $permissions = $content->permissions ?? [];

                if (count($permissions)) {

                    foreach ($permissions as $permission) {

                        $canBeDisabled = $permission->system_default ?? 1;

                        Permission::updateOrCreate([

                            'name' => $permission->name

                        ], [

                            'display' => $permission->display,

                            'description'  => $permission->description,

                            'system_default' => $canBeDisabled,

                        ]);

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
