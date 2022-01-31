<?php

namespace app\classes;

class Example
{
    public $student = [];
    public $student2 = [];
    public $city = 'Dhaka';

    public function __construct()
    {
        echo 'Hello World';
    }

    public function index(){
        //$this->student = [10,20,'BITM',10.20,true,false];
        //echo $this->student[4];
        //foreach($this->student as $item){
           // echo $item.' ';
       //foreach($this->student as $key => $item){
       //echo ' index no-'.$key.' value-'.' '.$item.'<br/>';
        $this->student2=[
            0=>[
                'name'  => 'Hasib',
                'email' => '1hasibulkabir@gmail.com',
                'mobile'=> [
                    'mobile1' => '010345',
                    'mobile2' => '011552',
                ],
            ],
            1=>[
                'name'  => 'Zaid',
                'email' => 'zaidulkabir@gmail.com',
                'mobile'=> [
                    'mobile1' => '010345',
                    'mobile2' => '011552',
                ],
            ],
            2=> 'BITM',
            4=>[
                'name'  => 'rahim',
                'email' => 'rahim@gmail.com',
                'mobile'=> [
                    'mobile1' => '010345',
                    'mobile2' => '011552',
                ],
            ],
        ];
        echo '<pre>';
        //print_r($this->student2);
        var_dump($this->student2);
        //echo $this->student2[1]['name'];
//        foreach($this->student2 as $key=>$item){
//            if ($key == 0){
//                echo $item['name'].' '.$item['email'].' '.$item['mobile'].'<br/>';
//                break;
//            }
//        }
//        foreach ($this->student2 as $key=>$item){
//            if(is_array($item)){
//                foreach ($item as $value){
//                    if(is_array($value)){
//                        foreach ($value as $v_value){
//                            echo $v_value.'<br/>';
//                        }
//                    }
//                    else{
//                        echo $value.'<br/>';
//                    }
//
//                }
//            }
//            else{
//                echo $item.'<br/>';
//            }
//        }

        }

}