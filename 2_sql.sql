DELETE FROM categories
WHERE categories.id NOT IN (SELECT products.category_id FROM products)

DELETE FROM products
WHERE products.id NOT IN (SELECT availabilities.product_id FROM availabilities)

DELETE FROM stocks
WHERE stocks.id NOT IN (SELECT availabilities.stock_id FROM availabilities)