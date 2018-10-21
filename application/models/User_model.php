<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 18/10/20
 * Time: 下午2:49
 */
class User_model extends CI_Model
{
    public function save($name,$password){
        $data = array(
            'name' => $name,
            'password' => $password,
        );
        $query = $this->db->insert('t_user', $data);
        return $query;
    }
    public function get_user_by_name_amd_pwd($name,$password){
        $query = $this->db->get_where('t_user',array(
            'name'=>$name,
            'password'=>$password
        ));
        return $query->row();
    }
}