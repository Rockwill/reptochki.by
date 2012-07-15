<?php defined('SYSPATH') or die('No direct script access.');

class Model_Studio {

    public function get_list_for_admin($user_id){
        $result = DB::select('*')
            ->from('user_studio')
            ->join('studios')
            ->on('user_studio.studio_id','=','studios.id')
            ->where('user_studio.user_id','=',$user_id)
            ->execute()
            ->as_array();
        return $result;
    }
    public function update($post,$studio_id){
        DB::update('studios')
            ->where('id','=',$studio_id)
            ->set(
            array(
                'title' => $post['title'],
                'meta'  => $post['meta'],
                'description' => $post['description'],
                'phones' => $post['phones'],
                'adress' => $post['adress'],
                'schedule' => $post['schedule'],
                'lat' => $post['lat'],
                'lon' => $post['lon'],
            )
        )->execute();
    }
    public function get_markers(){
        $result = DB::select('id','title','lat','lon','phones')
            ->from('studios')
            ->order_by('sort_index','DESC')
            ->execute()
            ->as_array();
        foreach($result as $id => $row){
            $result[$id]['phones'] = str_replace(array("\n","\r"),'',str_replace('"','\'',$row["phones"]));
        }
        return $result;
    }


    public function get_list()
    {
        $result = DB::select('id','title','meta','lat','lon','phones','description','adress','schedule')
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