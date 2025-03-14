<?php
include "header.php";

$pagina = $_GET['pagina'];

switch ($pagina){ 
case 'form': include 'view/form.php' ; break;
case 'list': include 'view/list.php' ; break;
default: include 'view/form.php';
break;
}
include "footer.php";