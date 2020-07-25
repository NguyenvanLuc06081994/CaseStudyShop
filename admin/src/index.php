<?php

use App\Controller\CategoryController;

require __DIR__ . "/../vendor/autoload.php";

$categories = new CategoryController();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : "";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php switch ($page) {
    case "list-category":
        $categories->getAllCategory();
        break;
    default:
        $categories->getAllCategory();;
        break;
} ?>
</body>
</html>