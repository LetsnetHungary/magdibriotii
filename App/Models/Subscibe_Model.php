<?php

class Subscribe_Model extends CoreApp\Model {
  public function __construct() {
      parent::__construct();
  }

  public function uploadSub(){
    $first_name = "valami"; //$_POST['first_name'];
    $last_name = "valami"; //$_POST['last_name'];
    $email = "test3@email.com"; //$_POST['email'];
    $time_subbed = date("Y.m.d H:i"); //date("Y.m.d");

    if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name)) {
      echo "invalid characters!";
      return;
    }

    $db = $this->database->PDOConnection(CoreApp\AppConfig::getData("database=>subscription"));

//check if he/she has already subscribed
    $stmt = $db->prepare("SELECT * FROM `subscription` WHERE email = :email");
    $stmt->execute(array(
      ":email" => $email
    ));
    $exists = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if (count($exists) != 0) {
      echo "You have already subscribed";
      return;
    }
//end of existing sub checking

    $stmt = $db->prepare("INSERT INTO `subscription`(`first_name`, `last_name`, `email`, `sub_time`) VALUES (:first_name, :last_name, :email, :time_sent)");
    $stmt->execute(array(
      ":first_name" => $first_name,
      ":last_name" => $last_name,
      ":email" => $email,
      ":time_sent" => $time_subbed
    ));
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}
