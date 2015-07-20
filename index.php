<?php
/**
 * Created by Ivo Stefanov
 * Date: 5/1/15
 * Time: 2:34 AM
 */

require __DIR__ . '/vendor/autoload.php';

use DCI\Users\Admin;
use DCI\Users\User;
use DCI\Users\UserTypes;

$user = new User(2, 'John', UserTypes::ADMIN);
if ($user->getType() === UserTypes::ADMIN) {
    $admin = Admin::getFromContext($user);
    var_dump($admin, $user);
}
