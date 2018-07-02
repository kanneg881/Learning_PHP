<p> 在 <?= $when->format('g:i a') ?>，這裡是可提供的：</p>
<ul>
    <?php foreach ($what as $item) { ?>
        <li><?= $this->escapeHtml($item) ?></li>
    <?php } ?>
</ul>
