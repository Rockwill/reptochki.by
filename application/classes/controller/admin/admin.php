<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Admin extends Controller_Template {

    public function before(){
        parent::before();
        if(!$user = Auth::instance()->get_user()){
            $this->request->redirect('/admin/login/');
        }
        if($id = $this->request->param('id')){
            $studio = new Model_Studio();
            $owner_id = $studio->get_owner($id);
            if($user->id != $owner_id){
                die('no access!');
            }
        }
    }

}