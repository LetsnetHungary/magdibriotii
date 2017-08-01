<?

    class Termekek_Model extends CoreApp\Model {

        public function __construct() {
            parent::__construct();
        }

        public function termeklekeres($category){
          return scandir("assets/images/viragcsoportok/$category");
        }

    }
