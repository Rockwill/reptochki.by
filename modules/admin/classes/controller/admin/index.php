<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Template
{

    public $template = 'layout';

    public function action_index()
    {
        $this->request->redirect('/admin/index/login');
    }

    public function before()
    {
        parent::before();
        $this->template->menu = '';
    }

    public function action_login()
    {
        if (Auth::instance()->get_user()) {
            $this->request->redirect('/admin/studio/list');
        }
        if ($post = $this->request->post()) {
            $login = $post['login'];
            $password = $post['password'];
            if (Auth::instance()->login($login, $password)) {
                $this->request->redirect('/admin/');
            } else {
                $errors = 'Неверная пара логин/пароль';
            }
        }
        if (Auth::instance()->logged_in('admin')) {
            $this->request->redirect('/admin/unisender');
        }
        $content = View::factory('index/login')
            ->bind('errors', $errors);
        $this->template->content = $content;
    }

    public function action_logout()
    {
        if (Auth::instance()->logged_in()) {
            Auth::instance()->logout();
        }
        $this->request->redirect('/');
    }

    public function  action_registration()
    {
        $hash = $this->request->param('hash');

        $user = DB::select()
            ->from('invites')
            ->join('studios')->on('invites.studio_id', '=', 'studios.id')
            ->where('invites.code', '=', $hash)
            ->execute()
            ->as_array();
        if (!count($user) || !is_array($user)) {
            throw new Kohana_HTTP_Exception_403('что-то не так, друг');
        } else {
            $user_info = array_shift($user);
        }
       ;
        if ($post = $this->request->post()) {
            $confirmation = Model_User::get_password_validation($post);
            if ($confirmation->check()) {
                try {
                    $values = array(
                        'username' => $user_info['email'],
                        'email' => $user_info['email'],
                        'password' => $post['password'],
                        'password_confirm' => $post['password'],
                    );

                   $user = ORM::factory('user')->create_user($values, array('username', 'email', 'password'));

                    $user->add('roles', ORM::factory('role', array('name' => 'login')));
                    $user->add('roles',ORM::factory('role',array('name' => 'admin')));

                    DB::insert('user_studio',array('user_id','studio_id'))
                        ->values(array($user->id,$user_info['studio_id']))
                        ->execute();
                    $_POST = array();
                    $user->save();
                    Auth::instance()->login($user->email,$post['password']);
                    DB::delete('invites')->where('code','=',$hash)->execute();

                    $success = 'true';
                    $this->request->redirect('/admin/');

                } catch (ORM_Validation_Exception $e) {

                    // Set errors using custom messages
                    $errors = $e->errors('models');
                }


            } else {
                $errors = $confirmation->errors('validation');
            }
        }


        $this->template->content = View::factory('index/register')
            ->set('email', $user_info['email'])
            ->set('studio', $user_info['title'])
            ->bind('errors', $errors);
    }
}