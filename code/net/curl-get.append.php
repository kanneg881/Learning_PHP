<?php
if (curl_errno($curl) !== 0) {
    print "cUrl 錯誤：" . curl_error($curl);
}
