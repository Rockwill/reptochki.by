<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User{

    public static function get_password_validation($values){
        return Validation::factory($values)
            ->rule('password', 'min_length', array(':value', 8))
            ->rule('password_confirm', 'matches', array(':data', ':field', 'password'))
            ->labels(array(
                    'password' =>  'Пароль'
        ));
    }
}