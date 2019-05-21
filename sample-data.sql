INSERT INTO items (description, unit, unit_price, quantity)
VALUES ('HP Deskjet', 'ream', 50, 10),
('IBM Laptop', 'box', 50, 10), ('Item Three', 'piece', 50, 10),
('Acer Mouse', 'ream', 50, 10),
('A4Tech Keyboard', 'ream', 50, 10);

INSERT INTO suppliers (company_name, name, address, email)
VALUES ('LBC', 'Gerard Anthony Germo', 'Address One, Block 2', 'myemail@gmail.com'),
('ABC', 'John Bajao', 'Address Three, Block 55', 'yourname@gmail.com');

INSERT INTO purchase_orders (supplier_id, order_date)
VALUES ('1', '04-23-2019'),
('2', '05-22-2019');

INSERT INTO purchase_order_details (item_id, prder_id, quantity, estimate_cost)
VALUES ( 1, 1, 25, 35),
( 4, 1, 60, 75),
( 3, 1, 10, 100),

( 2, 2, 20, 10),
( 2, 2, 35, 70),
( 2, 2, 15, 35),
( 2, 2, 70, 20);

