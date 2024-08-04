<?php

namespace App\Enums;

class Role
{
    const Admin = 'admin';
    const Searcher = 'searcher';
    const SuperAdmin = 'super_admin';

    public static function getRoleValue(string $role): int
    {
        if ($role === self::Admin) {
            return 1;
        } elseif ($role === self::Searcher) {
            return 2;
        } else if ($role === self::SuperAdmin) {
            return 3;
        }

        // Default value if the role is not found
        return 0;
    }
}
