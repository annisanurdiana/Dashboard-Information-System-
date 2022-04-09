<?php
$str = "http://localhost/CRUD/subjek/subjek_update.php/../../uploads/619e801d34191-1637777437.png";
echo(explode("../uploads/", $str)[1]);