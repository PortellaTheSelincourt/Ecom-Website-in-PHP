<?php require_once("../../../resources/config.php");


if(isset($_GET['id'])) {


$query = query("DELETE FROM users WHERE user_id = " . escape_string($_GET['id']) . " ");
confirm($query);


set_message("User Deleted");
redirect("../../../public/admin/index.php?users");


} else {

redirect("../../../public/admin/index.php?users");


}

 ?>