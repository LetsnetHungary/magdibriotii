<?php
    class Request_Model extends CoreApp\Model {
      public function __construct() {
          parent::__construct();
          // print_r($_POST);
      }

      public function uploadMessage(){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['message'];
        $time_sent = date("Y.m.d H:i");

        // check if the characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name) || !preg_match("/^[a-zA-Z]*$/", $subject) || !preg_match("/^[a-zA-Z]*$/", $content)) {
          echo "invalid characters have been used!";
          return;
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo "email address incorrect";
          return;
        }

        $db = CoreApp\DB::init(CoreApp\AppConfig::getData("database=>messages"));

        $stmt = $db->prepare("INSERT INTO `messages`(`first_name`, `last_name`, `email`, `content`, `time`, `subject`) VALUES (:first_name, :last_name, :email, :content, :time_sent, :subject)");
        $stmt->execute(array(
          ":first_name" => $first_name,
          ":last_name" => $last_name,
          ":email" => $email,
          ":content" => $content,
          ":time_sent" => $time_sent,
          ":subject" => $subject
        ));
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

      }
      public function sendMail(){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $content = $_POST['message'];
        $time_sent = date("Y.m.d");


        $owner_mail = "mag.briotii@gmail.com";
        //$content = str_replace("\n", " ", $content); // ide 3 paraméter kell, hogy mire cseréljen, az is ;)
        $ending = "\n\n" . "Sent by " . $last_name . " " . $first_name . "; email cím: " . $email . "\n" . $time_sent;
        $msg = $content . $ending;
        mail($owner_mail, $subject, $msg);

      }

      /*

      public function productUpload() {

        $db = CoreApp\DB::init("viragbolt");
        print_r($db);

        for ($i=1; $i < 21; $i++) {
          $stmt = $db->prepare("INSERT INTO products (category_id, product_id, product_name) VALUES ('koszoruk', 'koszoru_$i', 'KOSZORÚ $i')");
          $stmt->execute();
          $stmt = $db->prepare("INSERT INTO products (category_id, product_id, product_name) VALUES ('kulonlegessegek', 'kulonglegesseg_$i', 'KÜLÖNLEGESSÉG $i')");
          $stmt->execute();

        }
      }

      */

    }
