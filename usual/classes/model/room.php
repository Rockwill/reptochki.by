<?php
class Model_Room{
    private $studio_id;

    private function __construct(){

    }
    public static function factory($studio_id){
        if(!intval($studio_id)){
            throw new Exception('Не указана студия');
        }
        $room = new Model_Room();
        $room->studio_id = $studio_id;
        return $room;
    }

    public function add(array $fields){

        $fields['studio_id'] = $this->studio_id;
        $keys = array_keys($fields);
        $values = array_values($fields);
        $result = DB::insert('rooms',$keys)
            ->values($values)
            ->execute();
        return $result;
    }
    public function edit($id, array $fields){

        $result = DB::update('rooms')
            ->where('id','=',$id)
            ->set($fields)
            ->execute();
        return $result;

    }
    public function delete($id){
        DB::delete('rooms')->where('id','=',$id)->execute();

    }


}