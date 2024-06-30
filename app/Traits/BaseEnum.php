<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait BaseEnum
{
    public static function values(): array
    {
        return collect(self::cases())->pluck('value')->toArray();
    }

    public static function name(int $id, bool $formatted = false): string
    {
        $case = self::tryFrom($id);

        if ($formatted) { return Str::title(Str::replace('_', ' ', $case->name)); }

        return $case->name;

    }
}
