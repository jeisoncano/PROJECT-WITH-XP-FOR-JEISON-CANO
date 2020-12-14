<?php
class registro_Model extends CI_Model {

    public function addUser($userData){

        /* $registro = array(
            'name'=>'jeison ferney cano rendon',
            'Email'=>'jeisonblak@hotmail.com',
            'cellphone'=>3136328369,
            'password'=>'gabrielacanofernandez'

        );  */

        $this->db->insert("registro",$userData);
        /* $this->db->query("INSERT INTO registro (name,Email,cellphone,password)VALUES('{$registro['name']}','{$registro['Email']}',{$registro['cellphone']},'{$registro['password']}')"); */

    }

    public function updateUser(){
        
    }

    public function listUser(){
        
    }

    public function deleteUser(){
        
    }

}
?>