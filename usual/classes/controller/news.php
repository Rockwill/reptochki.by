<?php

class Controller_News extends Controller_Main
{
    public function action_index(){
        $this->request->redirect('/news/list');
    }
    public function action_list(){
        $this->template->scripts = array();
        $news = new Model_News();
        $news = $news->getList();
        $this->template->content = View::factory('news/list')->bind('news',$news);
    }

}
