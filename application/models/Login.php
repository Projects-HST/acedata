<?php

Class Login extends CI_Model
{

  public function __construct()
  {
      parent::__construct();

  }

       function login($data)
       {

        $condition = "username =" . "'" . $data['user_name'] . "' AND " . "password =" . "'" . $data['user_password'] . "'";

       $this->db->select('*');
       $this->db->from('admin');
       $this->db->where($condition);
       $this->db->limit(1);
       $query = $this->db->get();

       if ($query->num_rows() == 1) {
         foreach ($query->result() as $row)
          {
            $data=  array("username"  => $row->username,"loggedin"  => TRUE, "id" => $row->id,"result"=>1,"type" =>  $row->type);

          }
          $this->session->set_userdata($data);
          return $data;
       } else {

       return false;
       }
       }




}
?>
