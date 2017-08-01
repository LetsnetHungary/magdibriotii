<?php
	class Request extends CoreApp\Controller {

		public function __construct() {
			parent::__construct(__CLASS__);
			$this->model = $this->loadModel(__CLASS__);
			// $this->model->productUpload();
		}

		public function upload(){
			$this->model->uploadMessage();
			$this->model->sendMail();
			print("Az üzenetet sikeresen elküldte!");
			/* itt irányítjuk át emberünket a thanks oldalra (megköszönni, hogy jelentkezett) */
			header("location: /Index");
		}
	}
?>
