<?php defined('SYSPATH') or die('No direct script access.');


Route::set('registration', 'registration/<hash>')
    ->defaults(array(
    'directory'  => 'admin',
    'controller' => 'index',
    'action'     => 'registration',
));

Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))')
    ->defaults(array(
    'directory'  => 'admin',
    'controller' => 'index',
    'action'     => 'index',
));


