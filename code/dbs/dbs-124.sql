# 取回價格高於 5.00 的菜名
SELECT
  dish_name,
  price
FROM dishes
WHERE price > 5.00;

# 取回菜名叫 "核桃小圓麵包" 的價格
SELECT price
FROM dishes
WHERE dish_name = '核桃小圓麵包';

# 取回價格高於 5.00 而且低等於 10.00 的菜名
SELECT dish_name
FROM dishes
WHERE price > 5.00 AND price <= 10.00;

# 取回價格高於 5.00 而且低等於 10.00 或是名叫 "核桃小圓麵包" (不管價格)
# 的菜名跟價格
SELECT
  dish_name,
  price
FROM dishes
WHERE (price > 5.00 AND price <= 10.00)
      OR dish_name = '核桃小圓麵包';
