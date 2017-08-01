<?php
	class Subscribe extends CoreApp\Controller {

		public function __construct() {
			parent::__construct(__CLASS__);
			$this->model = $this->loadModel(__CLASS__);
		}
		public function subscribe(){
			$this->model->uploadSub(); //nem kell jelölni, hogy array??
		}

		/*
		public function modelDidLoad() {
			echo "<br> model loaded<br> ";
		}

		public function viewRenderEnded() {
			echo "<br>render ended";
		}
		*/
	}
?>
