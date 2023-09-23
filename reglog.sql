CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

create table Search
 ( id int(10), Name varchar(30), Available_Slot int(10), Available_Pitch varchar(30),primary key (id));

insert into search values 
  ( 1,'Aburi',7,'Touring Caravan Pitch and Tent Pitch'),
  ( 2,'Ho',5,'Touring Caravan Pitch only'), 
  ( 3,'Tagbo',2,'Motorhome Pitch');