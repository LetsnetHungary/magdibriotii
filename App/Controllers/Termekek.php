<?

    class Termekek extends CoreApp\Controller {

        public function __construct() {
            parent::__construct();
            $this->loadModel(__CLASS__);
        }
        public function find($category) {
          $products = $this->model->termeklekeres($category);
          $this->viewInit("Termekek");
          $this->view->category = $category;
          $this->view->products = $products;
          $this->viewRender("Termekek");
        }

    }
