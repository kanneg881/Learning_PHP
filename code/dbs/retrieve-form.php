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
            <td><?= $form->input('text', ['name' => 'dishName']) ?></td>
        </tr>
        <tr>
            <td>最低價格：</td>
            <td><?= $form->input('text', ['name' => 'minPrice']) ?></td>
        </tr>
        <tr>
            <td>最高價格：</td>
            <td><?= $form->input('text', ['name' => 'maxPrice']) ?></td>
        </tr>
        <tr>
            <td>辣：</td>
            <td><?= $form->select($GLOBALS['spicyChoices'], ['name' => 'isSpicy']) ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <?= $form->input('submit', [
                    'name' => 'search',
                    'value' => '搜尋'
                ]) ?></td>
        </tr>
    </table>
</form>
