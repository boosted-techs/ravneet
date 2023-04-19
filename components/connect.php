<?php

   $server = 'localhost';
   $db_user_name = 'root';
   $db_user_pass = 'root';
   $db = "ravneet";

   $conn = new PDO($server, $db_user_name, $db_user_pass, $db);

   function create_unique_id(){
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 20; $i++) {
          $randomString .= $characters[mt_rand(0, $charactersLength - 1)];
      }
      return $randomString;
  }

?>