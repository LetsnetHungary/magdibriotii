<?


    $termekek = function ($info) {

        require("App/Controllers/Termekek.php");

        $category = explode("/", $info["requestedURI"]);

        $controller = new Termekek();
        $controller->find($category[1]);
    };