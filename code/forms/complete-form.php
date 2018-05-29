<form method="POST" action="<?= $form->encode($_SERVER['PHP_SELF']) ?>">
    <table>
        <?php if ($errors) { ?>
            <tr>
                <td>您需要更正以下錯誤：</td>
                <td>
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?= $form->encode($error) ?></li>
                        <?php } ?>
                    </ul>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <td>你的名字：</td>
            <td><?= $form->input('text', ['name' => 'name']) ?></td>
        </tr>

        <tr>
            <td>尺寸：</td>
            <td>
                <?= $form->input('radio', ['name' => 'size', 'value' => '小']) ?> 小 <br>
                <?= $form->input('radio', ['name' => 'size', 'value' => '中']) ?> 中 <br>
                <?= $form->input('radio', ['name' => 'size', 'value' => '大']) ?> 大 <br>
            </td>
        </tr>

        <tr>
            <td>選擇一項甜點：</td>
            <td><?= $form->select($GLOBALS['sweets'], ['name' => 'sweet']) ?></td>
        </tr>

        <tr>
            <td>選擇兩道主菜：</td>
            <td>
                <?= $form->select($GLOBALS['mainDishes'], [
                    'name' => 'mainDish',
                    'multiple' => true
                ]) ?>
            </td>
        </tr>

        <tr>
            <td>你想要你的訂單送出嗎？</td>
            <td>
                <?= $form->input('checkbox', ['name' => 'delivery', 'value' => '是']) ?> 是
            </td>
        </tr>

        <tr>
            <td>
                輸入任何特殊說明。<br>
                如果您希望送出您的訂單，請在此處填寫您的地址：
            </td>
            <td><?= $form->textarea(['name' => 'comments']) ?></td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <?= $form->input('submit', ['value' => 'Order']) ?>
            </td>
        </tr>

    </table>
</form>
