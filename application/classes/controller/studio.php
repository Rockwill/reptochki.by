<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Studio extends Controller_Main {

    public function action_list()
    {
        $this->template->page_title = 'Реп.точки Минска';
        $studio = new Model_Studio();
        $studios = $studio->get_list();
        $content = View::factory('studio/list')->bind('studios',$studios);
        $this->template->content = $content;
    }

    public function action_detail()
    {
        $this->template->back = true;
        $id = $this->request->param('id');
        $studio = new Model_Studio();
        $studio = $studio->get_by_id($id);
        $this->template->page_title = isset($studio['title']) ? $studio['title'] : 'Ошибка' ;
        $content = View::factory('studio/detail')->bind('studio',$studio);
        $this->template->content = $content;
    }

}
