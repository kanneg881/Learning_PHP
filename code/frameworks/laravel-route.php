<?php
Route::get('/show', function () {
    /** @var DateTime $now 現在時間 */
    $now = new DateTime();
    /** @var array $items 項目 */
    $items = ["炸土豆", "煮土豆", "烤土豆",];

    return view('show_menu', [
        'when' => $now,
        'what' => $items,
    ]);
});
