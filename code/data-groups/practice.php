<?php
/**
 * Created by PhpStorm.
 * User: Jackson
 * Date: 2018/5/12
 * Time: 上午1:16
 */

/** @var array $census 城市前 10 名人口 */
$census = [
    '新北市' => 3986382,
    '臺中市' => 2792164,
    '高雄市' => 2775935,
    '臺北市' => 2680218,
    '桃園市' => 2196349,
    '臺南市' => 1885882,
    '彰化縣' => 1280528,
    '屏東縣' => 828654,
    '雲林縣' => 689098,
    '新竹縣' => 552877,
];
/** @var int $totalPopulation 總人口 */
$totalPopulation = 0;
?>
<table>
    <tr>
        <th>城市</th>
        <th>人口</th>
    </tr>
    <?php
    asort($census);

    foreach ($census as $city => $population) {
        $totalPopulation += $population;
        ?>
        <tr>
            <td><?= $city ?></td>
            <td><?= $population ?></td>
        </tr>
    <?php } ?>
    <tr>
        <td>總人口</td>
        <td><?= $totalPopulation ?></td>
    </tr>
</table>

<table>
    <tr>
        <th>城市</th>
        <th>人口</th>
    </tr>
    <?php
    ksort($census);

    foreach ($census as $city => $population) {
        $totalPopulation += $population;
        ?>
        <tr>
            <td><?= $city ?></td>
            <td><?= $population ?></td>
        </tr>
    <?php } ?>
</table>
