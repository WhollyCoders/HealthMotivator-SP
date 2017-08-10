<?php
class MessagesController{
  public $connection;
  public $Message;

  public function __construct($connection){
    $this->connection = $connection;
    $this->Message = new Message($this->connection);
  }

  public function index(){
    return $this->Message->get_all_messages();
  }
  public function show($id){
    return $this->Message->get_message_by_id($id);
  }
  public function _new(){}
  public function edit(){}
  public function create(){}
  public function update(){}
  public function delete(){}

  public function get_records(){
    $this->Message->get_all_messages();
    return $this->Message->records;
  }



}

 ?>
