<?php defined('SYSPATH') or die('No direct script access.');

class Model_Studio {


    public function get_list()
    {

        $result = DB::select('id','title','meta')
            ->from('studios')
            ->order_by('sort_index','DESC')
            ->execute()
            ->as_array();
        return $result;
    }
    public function get_by_id($id){
       // $cache = Cache::instance('file');
       // if($result = $cache->get('studio_' . $id)){
        $result = DB::select()
            ->from('studios')
            ->where('id','=',$id)
            ->execute()
            ->as_array();
        //    $cache->set('studio_' . $id,$result);
      //  }
        return $result[0];
    }
    public function get_owner($id){
        $result = DB::select('user_id')
            ->from('studios')
            ->where('id','=',$id)
            ->execute()
            ->as_array();
        if(count($result)){
            return array_shift($result);
        }else{
            return FALSE;
        }
    }
}