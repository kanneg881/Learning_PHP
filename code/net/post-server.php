<?php
foreach ($_POST as $key => $value) {
    print "$key: $value\n";
}
var_dump(file_get_contents('php://input'));
