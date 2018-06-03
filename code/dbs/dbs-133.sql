# 取回所名稱是 D 開頭的資料列
SELECT *
FROM dishes
WHERE dish_name LIKE 'D%';

# 取回所有名稱叫 Fried Cod 或 Fried Bod 或 Fried Nod... 等的資料列
SELECT *
FROM dishes
WHERE dish_name LIKE 'Fried _od';
