<?php

use Illuminate\Support\Facades\Auth;

// For add'active' class for activated route nav-item
function active_class($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

// // For checking activated route
// function is_active_route($path) {
//     return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
// }

// For add 'show' class for activated route collapse
function show_class($path)
{
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

// Define the helper function is_active_route
if (!function_exists('is_active_route')) {
    function is_active_route($path)
    {
        return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
    }
}


if (!function_exists('check_permission')) {
    function check_permission($permission_name)
    {
        $auth_user =  Auth::user();

        if (!$auth_user) {
            return false;
        }

        if ($auth_user->hasPermissionTo($permission_name)) {
            return true;
        }
        return false;
    }
}
