-- (A) PRODUCTS TABLE
CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- (B) DUMMY DATA
INSERT INTO `products` (`id`, `name`, `status`) VALUES
(1, 'Apple', 1),
(2, 'Beet', 1),
(3, 'Carrot', 0),
(4, 'Dill', 1),
(5, 'Eggplant', 1),
(6, 'Feijoa', 0),
(7, 'Grape', 0),
(8, 'Hazelnut', 1),
(9, 'Icaco', 1),
(10, 'Jalapeno', 1);