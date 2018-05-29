<?php
if (strlen($_POST['email']) == 0) {
   $errors[] = "您必須輸入一個電子郵件地址。";
}
