<?php
// 路徑與網域參數為 null 時，表示不把路徑或網域資訊放進 cookie
setcookie(
    'shortUserID',
    'ralph',
    0,
    null,
    null,
    true,
    true);
