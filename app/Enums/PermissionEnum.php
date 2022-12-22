<?php

namespace App\Enums;

enum PermissionEnum: string
{
    /**
     * As a convention add the permission case as MODEL_ABILITY
     * model should be singular, and ability separated by (.)
     */
    //case HORIZON_ACCESS                 = 'horizon.access';
    //case TELESCOPE_ACCESS               = 'telescope.access';

    //case ACTIVITY_LOGS_VIEW_ANY         = 'activity_logs.view_any';
    //case ACTIVITY_LOGS_VIEW             = 'activity_logs.view';

    # ROLE
    case ROLE_VIEW_ANY                  = 'role.view_any';
    case ROLE_VIEW                      = 'role.view';
    case ROLE_CREATE                    = 'role.create';
    case ROLE_UPDATE                    = 'role.update';
    case ROLE_DELETE                    = 'role.delete';
    case ROLE_SEARCH                    = 'role.search';
    case ROLE_VIEW_PERMISSIONS          = 'role.view_permissions';
    case ROLE_UPDATE_PERMISSIONS        = 'role.update_permissions';

    # USER
    case USER_VIEW_ANY                  = 'user.view_any';
    case USER_VIEW                      = 'user.view';
    case USER_CREATE                    = 'user.create';
    case USER_UPDATE                    = 'user.update';
    case USER_DELETE                    = 'user.delete';

    public static function values(): array
    {
        return array_map(function (PermissionEnum $case) {
            return $case->value;
        }, self::cases());
    }

    public static function groupedPermissions(): array
    {
        $permissions = array_combine(self::values(), array_values(self::values()));
        $groupedPermissions = [];

        foreach ($permissions as $i => $value) {
            $temp = &$groupedPermissions;

            foreach (explode('.', $i) as $key) {
                $temp = &$temp[$key];
            }
            $temp = $value;
        }
        return $groupedPermissions;

        //$groupedPermissions = [];
        //foreach (self::values() as $value) {
        //    $temp = &$groupedPermissions;
        //    foreach (explode('.', $value) as $key) {
        //        $temp = &$temp[$key];
        //    }
        //    $temp = $value;
        //}
        //return $groupedPermissions;
    }
}
