<?php
if (strlen(trim($_POST['zipCode'])) != 5) {
    print "請輸入長度為5個字的郵政區號。";
}