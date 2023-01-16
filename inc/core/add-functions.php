<?php

// ==================================================
// Hide ACF
// ==================================================

function blue_acf_show_admin($show) {
    $user = wp_get_current_user();
    $allows = array('BlueOtter');

    if (in_array($user->user_login, $allows))
        return true;

    return false;
}
add_filter('acf/settings/show_admin', 'blue_acf_show_admin');

// ==================================================
// Get loging user role
// ==================================================
function blue_get_current_user_role() {
    if (is_user_logged_in()) {
        $user = wp_get_current_user();
        $roles = (array) $user->roles;
        $role = array_reverse($roles);
        $pop = array_pop($role);
        return $pop;
    } else {
        return false;
    }
}