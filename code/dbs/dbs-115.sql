# 刪除價格比10高的菜
DELETE FROM dishes
WHERE price > 10.00;

# 刪除菜名叫 "核桃小圓麵包" 的紀錄
DELETE FROM dishes
WHERE dish_name = '核桃小圓麵包';
