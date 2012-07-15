<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Admin extends Controller_Template{

    public $template = 'layout';

    public function before(){
        parent::before();
        if(!Auth::instance()->logged_in()){
            $this->request->redirect('/admin/');
        }elseif(!Auth::instance()->logged_in('admin')){
            throw new HTTP_Exception_403('Вам сюда нельзя');
        }
    }
}