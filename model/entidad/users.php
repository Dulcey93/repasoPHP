<?php
   class users extends connect{
      public $user;
      protected $pwd;
      public $data;
      public function __construct($user, $pwd,$path){
         parent::__construct($path);
         $this->user = $user;
         $this->pwd = $pwd;
         $this->data = $this->getData()[__CLASS__];
      }
      public function getUser(){
         $listUser = array_combine(array_column($this->data, 'user'), array_column($this->data, 'pwd'));
         $listIndex = array_combine(array_column($this->data, 'user'), array_keys($this->data));
         return ($listUser[$this->user] ?? null) == $this->pwd
         ? $this->data[$listIndex[$this->user]] 
         : ["succes"=> "Error"];  
      }
   }
?>

