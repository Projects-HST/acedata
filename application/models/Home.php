<?php

Class Home extends CI_Model
{

  public function __construct()
  {
      parent::__construct();

  }

       function uploadresume($name,$email,$postedjob,$experience,$location,$phone,$address,$appliedon,$userFileName)
       {
         $sql="INSERT INTO careers (name,email,postedjob,experience,location,phone,address,appliedon,resume) VALUES ('$name','$email','$postedjob','$experience','$location','$phone','$address','$appliedon','$userFileName')";
         $result=$this->db->query($sql);
         return "success";
       }
       function contactus($name,$email,$subject,$message,$senton)
       {
         $sql="INSERT INTO contactus (name,email,subject,message,senton) VALUES ('$name','$email','$subject','$message','$senton')";
         $result=$this->db->query($sql);
         return "success";
       }




}
?>
