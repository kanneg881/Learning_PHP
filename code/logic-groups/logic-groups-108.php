<?php
if (restaurantCheck(15.22, 8.25, 15) < 20) {
    print '少於20元，我可以支付現金。';
} else {
    print '太貴了，我需要我的信用卡。';
}