INSERT INTO PRODUCTO (Nom_pro, Prec_pro, Desc_pro, img_pro, estado_pro, fecha_ingreso, CAT_Nom_cat) VALUES 
	('Ensalada de frutas',4500,'Ensalada de frutas','ensalada.jpg',1,'2018-05-16 00:00:00','Ensaladas'),
	('Jugo de Guayaba',2500,'Jugo de Guayaba','Jugos.jpg',1,'2018-05-16 00:00:00','Jugos'),
	('Postre 3 Leches',3300,'Postre 3 Leches','Postres.jpg',1,'2018-05-16 00:00:00','Postres');

INSERT INTO CATEGORIADELPRODUCTO VALUES
	('Ensaladas',1),
	('Jugos',1),
	('Postres',1);

INSERT INTO PROVEEDOR (idPROVEEDOR,Nom_provee,Estado_provee,Telefono_provee,Direccion_provee) VALUES
	(1,'Goku',1,70000,'KameHouse');

INSERT INTO Ingredientes (Nom_ing, Valor_ing, cant_existente, stock_max, stock_min, estado_ing, peso_ing, PROVEEDOR_idPROVEEDOR) VALUES
	('1','Papaya',1000,80,80,50,1,18,1),
	('2','Melon',1000,80,80,50,1,18,1),
	('3','Fresa',1000,80,80,50,1,18,1),
	('4','Banano',1000,80,80,50,1,18,1),
	('5','Piña',1000,80,80,50,1,18,1),
	('6','Guayaba',1000,80,80,50,1,18,1),
	('7','Huevos',1000,80,80,50,1,18,1),
	('8','Chocolate',1000,80,80,50,1,18,1),
	('9','Azucar',1000,80,80,50,1,18,1),
	('10','Merengon',1000,80,80,50,1,18,1),
	('11','Crema de Leche',1000,80,80,50,1,18,1),
	('12','Guanabana',1000,80,80,50,1,18,1),
	('13','Manzana',1000,80,80,50,1,18,1);