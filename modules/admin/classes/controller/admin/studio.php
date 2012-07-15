<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Studio extends Controller_Admin_Admin
{

    public $template = 'layout';

    public function action_index()
    {
        $this->request->redirect('/admin/studio/list');
    }


    public function action_list(){
        $user_id = Auth::instance()->get_user()->id;
        $studios = new Model_Studio();
        $studios = $studios->get_list_for_admin($user_id);
        $content = View::factory('admin/studio/list')->bind('studios',$studios);
        $this->template->content = $content;

    }
    public function action_edit(){
        $id = $this->request->param('id');

        $info = Model::factory('studio')->get_by_id($id);
        $this->template->headstring = '<script type="text/javascript" src="/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>';
        if($post = $this->request->post()){
            Model::factory('studio')->update($post,$id);
            $this->request->redirect('/admin/studio/list');
        }
        $content = View::factory('admin/studio/edit')->bind('studio',$info);
        $this->template->content = $content;
    }


}