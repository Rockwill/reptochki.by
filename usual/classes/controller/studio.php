<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Studio extends Controller_Main {

    public function action_list()
    {
        $this->template->page_title = 'Реп.точки Минска';
        $this->template->scripts = array(
            'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
            'http://api-maps.yandex.ru/2.0/?load=package.standard&lang=ru-RU',
            '/js/main.js',
            '/js/bootstrap-collapse.js',
            '/js/bootstrap-transition.js'
        );
        if( !$studios = Cache::instance()->get('studios')){
        $studio = new Model_Studio();
        $studios = $studio->get_list();
        Cache::instance()->set('studios',$studios);
        }
        $content = View::factory('test/list')->bind('studios',$studios);
        $this->template->content = $content;
    }

    public function action_detail()
    {
        $this->template = View::factory('test/template');
        $this->template->page_title = 'Реп.точки Минска';
        $this->template->back = true;
        $this->template->scripts = array(
            'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
        );
        $id = $this->request->param('id');
        $studio = new Model_Studio();
        $studio = $studio->get_by_id($id);
        $this->template->page_title = isset($studio['title']) ? $studio['title'] : 'Ошибка' ;
        $content = View::factory('studio/detail')->bind('studio',$studio);
        $this->template->content = $content;
    }
    public function action_markers(){
        if( !$markers = Cache::instance()->get('markers')){
        $studio = new Model_Studio();
        $markers = $studio->get_markers();
        $markers = json_encode($markers);
            Cache::instance()->set('markers',$markers);
        }
        echo $markers;
        die();
    }
    public function action_test(){
        $this->template = View::factory('test/templates');
        $this->template->page_title = 'Реп.точки Минска';
        $studio = new Model_Studio();
        $studios = $studio->get_list();
        $content = View::factory('test/list')->bind('studios',$studios);
        $this->template->content = $content;
    }
}
