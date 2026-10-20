
<?php
session_start();

if (!isset($_SESSION["carrinho"])) {
    $_SESSION["carrinho"] = array();
}

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];

    if ($id >= 1 && $id <= 6) {
        if (isset($_SESSION["carrinho"][$id])) {
            $_SESSION["carrinho"][$id]++;
        } else {
            $_SESSION["carrinho"][$id] = 1;
        }
    }
}

header("Location: index.php");
exit;
?>
