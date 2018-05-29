<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="POST" action="catalog.php">
    <label>
        <input type="text" name="product_id">
    </label>
    <label>
        <select name="category">
            <option value="ovenmitt">鍋架</option>
            <option value="fryingpan">平底鍋</option>
            <option value="torch">廚房火炬</option>
        </select>
    </label>
    <input type="submit" name="submit">
</form>
</body>
</html>
這裡是提交的值：

product_id： <?= $_POST['product_id'] ?? '' ?>
<br>
category：<?= $_POST['category'] ?? '' ?>
