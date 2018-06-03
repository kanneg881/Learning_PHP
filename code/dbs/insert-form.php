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
            <?php } ?>
        <tr>
            <td>菜名：</td>
            <td><?= $form->input('text', ['name' => 'dish_name']) ?></td>
        </tr>
        <tr>
            <td>價格：</td>
            <td><?= $form->input('text', ['name' => 'price']) ?></td>
        </tr>
        <tr>
            <td>辣：</td>
            <td><?= $form->input('checkbox', [
                    'name' => 'is_spicy',
                    'value' => '是',
                ]) ?> 是
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <?= $form->input('submit', ['name' => 'save', 'value' => '送出']) ?>
            </td>
        </tr>
    </table>
</form>
