<?php

class UserModel extends CI_Model{
    public function __construct(){
        parent::__construct();

    }
    public function user_login($user, $pass){
/*
    $result= $this->db->select('*')
                ->from('tb_user')
                ->where('username',$user)
                ->where('password',md5($pass))
                ->get()
*/
    $result = $this ->db-> where('username',$user)
                ->where('password',md5($pass))
                ->get('tb_user');
    $dataUser =$result->result();
    return $dataUser;
    }
}