<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Admin_Admin {
    public function action_index(){

    }

    public function action_login(){
        if($post = $this->request->post()){
            $login = $post['login'];
            $password = $post['password'];
            if(Auth::instance()->login($login,$password)){
               $this->request->redirect('/admin/');
            }else{
                $message = 'Неверная пара логин/пароль';
            }
        }
        $content = View::factory('admin/login')
        ->bind('message',$message);
        $this->template->content = $content;
    }
    public function action_logout(){

    }
    public function action_register(){

    }
    public function action_pswdchange(){

    }
    public function action_noaccess(){

    }

}