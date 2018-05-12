<?php
/** @var string $fish 魚 */
$fish = '低音，鯉魚，梭子魚，比目魚';
/** @var array $fishList 魚清單 */
$fishList = explode('，', $fish);
print "第二條魚是$fishList[1]";