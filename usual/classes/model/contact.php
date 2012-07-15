<?php
class Model_Contact{
    public function add_message($fields){
        $fields = $this->validate($fields);
        if($fields->check()){
            DB::insert('contact',array('title','message','email'))
                ->values(array(
                $fields['title'],
                $fields['message'],
                $fields['email']
            ))->execute();
            return true;
        }else{
            return $fields->errors('validation');
        }
    }
    public function validate($fields){
        $fields = Validation::factory($fields)
        ->rule('title', 'not_empty')
        ->rule('message','not_empty')
        ->rule('email','email')
        ->rule('email','not_empty')
        ->label('title','Заголовок')
        ->label('message','Сообщение')
        ->label('email','e-mail');

        return $fields;
    }
}