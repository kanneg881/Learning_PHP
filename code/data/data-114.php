<?php
/** @var string $pageTitle HTML 頁頭標題 */
$pageTitle = '菜單';
/** @var string $meat 肉 */
$meat = '豬肉';
/** @var string $vegetable 蔬菜 */
$vegetable = '豆芽';
print <<<MENU
<html>
<head>
<title>$pageTitle</title>
</head>
<body>
<ul>
<li> 烤$meat
<li> 切片$meat
<li> {$vegetable}燉{$meat}
</ul>
</body>
</html>
MENU;
