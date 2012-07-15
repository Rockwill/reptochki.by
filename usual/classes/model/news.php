<?php
class Model_News {
    public function get_by_id($id){
        $result = DB::select()
            ->from('news')
            ->join(
            array(
                DB::select('id','title')
                    ->from('studios'),
                'studio'
            ),'left')
            ->on('studio.id','=','news.studio_id')
            ->where('news.id','=',$id)
            ->execute()
            ->as_array();
        return array_shift($result);
    }
    public function getList(){
        $result = DB::select()
            ->from('news')
            ->join(
            array(
                DB::select('id',array('title','studio'))
                    ->from('studios'),
                'studio'
            ),'left')
            ->on('studio.id','=','news.studio_id')
            ->execute()
            ->as_array();
        return $result;
    }
    public function add(){
        $user_id = Auth::instance()->get_user()->id;

    }
    public function edit(){

    }
    public function delete($id){
        $user_id = Auth::instance()->get_user()->id;
        DB::delete('news')
            ->where('id','=',$id)
            ->execute();
    }
    public function get_for_studio(){

    }
}