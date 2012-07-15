<?php

class Controller_News extends Controller_Main
{
    public function action_index(){
        $this->request->redirect('/news/list');
    }
    public function action_list(){

    }

}
