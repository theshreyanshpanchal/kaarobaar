<?php

namespace Database\Seeders;

use Exception;
use App\Models\RoleGroup;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RoleGroups extends Seeder
{
    public function run(): void
    {
        try {

            DB::beginTransaction();

            $file = app_path('Docs/roles_&_permissions.json');

            if (file_exists($file)) {

                $content    = file_get_contents($file);

                $content    = json_decode($content);

                $roleGroups = $content->role_groups ?? [];

                if (count($roleGroups)) {

                    foreach ($roleGroups as $roleGroup) {

                        RoleGroup::updateOrCreate([

                            'name' => $roleGroup->name

                        ], [

                            'display' => $roleGroup->display,

                            'description'  => $roleGroup->description,

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
