# 將菜名 Eggplant with Chili Sauce 改為辣的
UPDATE dishes
SET is_spicy = 1
WHERE dish_name = '茄子配辣椒醬';

# General Tso's Chicken 降價啦
UPDATE dishes
SET price = price - 1
WHERE dish_name = 'Tso\'s 雞肉';
