<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.7.7
 */

/**
 * Database `xforce`
 */

/* `xforce`.`adquirido` */
$adquirido = array(
  array('ID_PEDIDO' => 'PEDIDO1','ID_CLIENTE' => 'CLIENTE1'),
  array('ID_PEDIDO' => 'PEDIDO2','ID_CLIENTE' => 'CLIENTE2'),
  array('ID_PEDIDO' => 'PEDIDO3','ID_CLIENTE' => 'CLIENTE3'),
  array('ID_PEDIDO' => 'PEDIDO4','ID_CLIENTE' => 'CLIENTE10'),
  array('ID_PEDIDO' => 'PEDIDO5','ID_CLIENTE' => 'CLIENTE4'),
  array('ID_PEDIDO' => 'PEDIDO6','ID_CLIENTE' => 'CLIENTE5'),
  array('ID_PEDIDO' => 'PEDIDO7','ID_CLIENTE' => 'CLIENTE6'),
  array('ID_PEDIDO' => 'PEDIDO8','ID_CLIENTE' => 'CLIENTE8'),
  array('ID_PEDIDO' => 'PEDIDO9','ID_CLIENTE' => 'CLIENTE9'),
  array('ID_PEDIDO' => 'PEDIDO10','ID_CLIENTE' => 'CLIENTE12')
);

/* `xforce`.`aduana` */
$aduana = array(
  array('ID_ADUANA' => 'ADU1','UBICACION' => 'GUAYAQUIL','TELEFONO' => '2987347','ID_PUERTO' => 'PUERTO1'),
  array('ID_ADUANA' => 'ADU10','UBICACION' => 'GUAYAQUIL','TELEFONO' => '2985670','ID_PUERTO' => 'PUERTO10'),
  array('ID_ADUANA' => 'ADU2','UBICACION' => 'MANTA','TELEFONO' => '2934207','ID_PUERTO' => 'PUERTO2'),
  array('ID_ADUANA' => 'ADU3','UBICACION' => 'QUITO','TELEFONO' => '2920181','ID_PUERTO' => 'PUERTO3'),
  array('ID_ADUANA' => 'ADU4','UBICACION' => 'CUENCA','TELEFONO' => '2983342','ID_PUERTO' => 'PUERTO7'),
  array('ID_ADUANA' => 'ADU5','UBICACION' => 'LOJA','TELEFONO' => '2931234','ID_PUERTO' => 'PUERTO8'),
  array('ID_ADUANA' => 'ADU6','UBICACION' => 'IBARRA','TELEFONO' => '2929876','ID_PUERTO' => 'PUERTO6'),
  array('ID_ADUANA' => 'ADU7','UBICACION' => 'GUAYAQUIL','TELEFONO' => '2983427','ID_PUERTO' => 'PUERTO9'),
  array('ID_ADUANA' => 'ADU8','UBICACION' => 'MANTA','TELEFONO' => '2935640','ID_PUERTO' => 'PUERTO4'),
  array('ID_ADUANA' => 'ADU9','UBICACION' => 'QUITO','TELEFONO' => '2922340','ID_PUERTO' => 'PUERTO5')
);

/* `xforce`.`almacena` */
$almacena = array(
  array('ID_BODEGA' => 'BOD1','ID_PEDIDO' => 'PEDIDO1'),
  array('ID_BODEGA' => 'BOD2','ID_PEDIDO' => 'PEDIDO2'),
  array('ID_BODEGA' => 'BOD3','ID_PEDIDO' => 'PEDIDO3'),
  array('ID_BODEGA' => 'BOD4','ID_PEDIDO' => 'PEDIDO4'),
  array('ID_BODEGA' => 'BOD5','ID_PEDIDO' => 'PEDIDO5'),
  array('ID_BODEGA' => 'BOD6','ID_PEDIDO' => 'PEDIDO6'),
  array('ID_BODEGA' => 'BOD7','ID_PEDIDO' => 'PEDIDO7'),
  array('ID_BODEGA' => 'BOD8','ID_PEDIDO' => 'PEDIDO8'),
  array('ID_BODEGA' => 'BOD9','ID_PEDIDO' => 'PEDIDO9'),
  array('ID_BODEGA' => 'BOD10','ID_PEDIDO' => 'PEDIDO10')
);

/* `xforce`.`barco` */
$barco = array(
  array('ID_BARCO' => 'B1','NUM_BARCO' => '8345'),
  array('ID_BARCO' => 'B10','NUM_BARCO' => '3458'),
  array('ID_BARCO' => 'B2','NUM_BARCO' => '7568'),
  array('ID_BARCO' => 'B3','NUM_BARCO' => '2008'),
  array('ID_BARCO' => 'B4','NUM_BARCO' => '5663'),
  array('ID_BARCO' => 'B5','NUM_BARCO' => '1112'),
  array('ID_BARCO' => 'B6','NUM_BARCO' => '4432'),
  array('ID_BARCO' => 'B7','NUM_BARCO' => '7742'),
  array('ID_BARCO' => 'B8','NUM_BARCO' => '8900'),
  array('ID_BARCO' => 'B9','NUM_BARCO' => '1355')
);

/* `xforce`.`bodega` */
$bodega = array(
  array('ID_BODEGA' => 'BOD1','NUM_BODEGA' => '30','CAPACIDAD' => '400 Carros','ID_ADUANA' => 'ADU1'),
  array('ID_BODEGA' => 'BOD10','NUM_BODEGA' => '19','CAPACIDAD' => '40 Carros','ID_ADUANA' => 'ADU2'),
  array('ID_BODEGA' => 'BOD2','NUM_BODEGA' => '45','CAPACIDAD' => '1000 Carros','ID_ADUANA' => 'ADU5'),
  array('ID_BODEGA' => 'BOD3','NUM_BODEGA' => '10','CAPACIDAD' => '320 Carros','ID_ADUANA' => 'ADU3'),
  array('ID_BODEGA' => 'BOD4','NUM_BODEGA' => '35','CAPACIDAD' => '450 Carros','ID_ADUANA' => 'ADU4'),
  array('ID_BODEGA' => 'BOD5','NUM_BODEGA' => '11','CAPACIDAD' => '100 Carros','ID_ADUANA' => 'ADU8'),
  array('ID_BODEGA' => 'BOD6','NUM_BODEGA' => '12','CAPACIDAD' => '312 Carros','ID_ADUANA' => 'ADU9'),
  array('ID_BODEGA' => 'BOD7','NUM_BODEGA' => '89','CAPACIDAD' => '560 Carros','ID_ADUANA' => 'ADU10'),
  array('ID_BODEGA' => 'BOD8','NUM_BODEGA' => '23','CAPACIDAD' => '105 Carros','ID_ADUANA' => 'ADU7'),
  array('ID_BODEGA' => 'BOD9','NUM_BODEGA' => '55','CAPACIDAD' => '135 Carros','ID_ADUANA' => 'ADU6')
);

/* `xforce`.`carro` */
$carro = array(
  array('ID_CARRO' => 'CARRO1','NUM_CARRO' => '234','CILINDRAJE' => '3','COLOR' => 'AZUL','ANO' => '2018','ID_ENVIO' => 'ENV1'),
  array('ID_CARRO' => 'CARRO10','NUM_CARRO' => '980','CILINDRAJE' => '3','COLOR' => 'AZUL','ANO' => '2019','ID_ENVIO' => 'ENV10'),
  array('ID_CARRO' => 'CARRO11','NUM_CARRO' => '111','CILINDRAJE' => '2','COLOR' => 'ROJO','ANO' => '2018','ID_ENVIO' => 'ENV9'),
  array('ID_CARRO' => 'CARRO12','NUM_CARRO' => '553','CILINDRAJE' => '3.5','COLOR' => 'NEGRO','ANO' => '2019','ID_ENVIO' => 'ENV8'),
  array('ID_CARRO' => 'CARRO13','NUM_CARRO' => '672','CILINDRAJE' => '3','COLOR' => 'AZUL','ANO' => '2018','ID_ENVIO' => 'ENV8'),
  array('ID_CARRO' => 'CARRO14','NUM_CARRO' => '879','CILINDRAJE' => '2','COLOR' => 'ROJO','ANO' => '2019','ID_ENVIO' => 'ENV1'),
  array('ID_CARRO' => 'CARRO15','NUM_CARRO' => '442','CILINDRAJE' => '3.5','COLOR' => 'NEGRO','ANO' => '2018','ID_ENVIO' => 'ENV2'),
  array('ID_CARRO' => 'CARRO16','NUM_CARRO' => '112','CILINDRAJE' => '3','COLOR' => 'AZUL','ANO' => '2019','ID_ENVIO' => 'ENV3'),
  array('ID_CARRO' => 'CARRO17','NUM_CARRO' => '776','CILINDRAJE' => '2','COLOR' => 'ROJO','ANO' => '2018','ID_ENVIO' => 'ENV9'),
  array('ID_CARRO' => 'CARRO18','NUM_CARRO' => '983','CILINDRAJE' => '3.5','COLOR' => 'NEGRO','ANO' => '2019','ID_ENVIO' => 'ENV4'),
  array('ID_CARRO' => 'CARRO19','NUM_CARRO' => '449','CILINDRAJE' => '3','COLOR' => 'AZUL','ANO' => '2019','ID_ENVIO' => 'ENV6'),
  array('ID_CARRO' => 'CARRO2','NUM_CARRO' => '256','CILINDRAJE' => '2','COLOR' => 'ROJO','ANO' => '2018','ID_ENVIO' => 'ENV2'),
  array('ID_CARRO' => 'CARRO20','NUM_CARRO' => '564','CILINDRAJE' => '2','COLOR' => 'ROJO','ANO' => '2019','ID_ENVIO' => 'ENV7'),
  array('ID_CARRO' => 'CARRO3','NUM_CARRO' => '345','CILINDRAJE' => '3.5','COLOR' => 'NEGRO','ANO' => '2018','ID_ENVIO' => 'ENV3'),
  array('ID_CARRO' => 'CARRO4','NUM_CARRO' => '222','CILINDRAJE' => '3','COLOR' => 'AZUL','ANO' => '2018','ID_ENVIO' => 'ENV4'),
  array('ID_CARRO' => 'CARRO5','NUM_CARRO' => '348','CILINDRAJE' => '2','COLOR' => 'ROJO','ANO' => '2018','ID_ENVIO' => 'ENV5'),
  array('ID_CARRO' => 'CARRO6','NUM_CARRO' => '455','CILINDRAJE' => '3.5','COLOR' => 'NEGRO','ANO' => '2017','ID_ENVIO' => 'ENV3'),
  array('ID_CARRO' => 'CARRO7','NUM_CARRO' => '897','CILINDRAJE' => '3','COLOR' => 'AZUL','ANO' => '2018','ID_ENVIO' => 'ENV10'),
  array('ID_CARRO' => 'CARRO8','NUM_CARRO' => '134','CILINDRAJE' => '2','COLOR' => 'ROJO','ANO' => '2017','ID_ENVIO' => 'ENV6'),
  array('ID_CARRO' => 'CARRO9','NUM_CARRO' => '159','CILINDRAJE' => '3.5','COLOR' => 'NEGRO','ANO' => '2018','ID_ENVIO' => 'ENV7')
);

/* `xforce`.`cliente` */
$cliente = array(
  array('ID_CLIENTE' => 'CLIENTE1','NOMBRE' => 'ANTONIO','APELLIDO' => 'BOLIVAR','EMPRESA' => 'GENERAL MOTORS','DIRECCION' => 'QUITO','TELEFONO' => '996126793'),
  array('ID_CLIENTE' => 'CLIENTE10','NOMBRE' => 'FRANK','APELLIDO' => 'BOLANOS','EMPRESA' => 'GENERAL MOTORS','DIRECCION' => 'QUITO','TELEFONO' => '982930282'),
  array('ID_CLIENTE' => 'CLIENTE11','NOMBRE' => 'SEBASTIAN','APELLIDO' => 'PEREZ','EMPRESA' => 'PARTICULAR','DIRECCION' => 'LOJA','TELEFONO' => '982729200'),
  array('ID_CLIENTE' => 'CLIENTE12','NOMBRE' => 'DIEGO','APELLIDO' => 'HIDALGO','EMPRESA' => 'GREAT WALL','DIRECCION' => 'QUITO','TELEFONO' => '998392029'),
  array('ID_CLIENTE' => 'CLIENTE13','NOMBRE' => 'PEDRO','APELLIDO' => 'CORONEL','EMPRESA' => 'GENERAL MOTORS','DIRECCION' => 'TULCAN','TELEFONO' => '988920191'),
  array('ID_CLIENTE' => 'CLIENTE14','NOMBRE' => 'RAMIRO','APELLIDO' => 'VEGA','EMPRESA' => 'PARTICULAR','DIRECCION' => 'MACHALA','TELEFONO' => '996111232'),
  array('ID_CLIENTE' => 'CLIENTE15','NOMBRE' => 'PAUL','APELLIDO' => 'VERA','EMPRESA' => 'GREAT WALL','DIRECCION' => 'PUYO','TELEFONO' => '996188631'),
  array('ID_CLIENTE' => 'CLIENTE16','NOMBRE' => 'GABRIELA','APELLIDO' => 'BOLIVAR','EMPRESA' => 'GENERAL MOTORS','DIRECCION' => 'QUITO','TELEFONO' => '996152457'),
  array('ID_CLIENTE' => 'CLIENTE17','NOMBRE' => 'DIANA','APELLIDO' => 'CAICEDO','EMPRESA' => 'PARTICULAR','DIRECCION' => 'CUENCA','TELEFONO' => '996156332'),
  array('ID_CLIENTE' => 'CLIENTE18','NOMBRE' => 'DANIELA','APELLIDO' => 'SAENZ','EMPRESA' => 'GREAT WALL','DIRECCION' => 'QUITO','TELEFONO' => '2147483647'),
  array('ID_CLIENTE' => 'CLIENTE19','NOMBRE' => 'MELISSA','APELLIDO' => 'BALZAR','EMPRESA' => 'GENERAL MOTORS','DIRECCION' => 'ESMERALDAS','TELEFONO' => '996188890'),
  array('ID_CLIENTE' => 'CLIENTE2','NOMBRE' => 'MARIA','APELLIDO' => 'COBOS','EMPRESA' => 'PARTICULAR','DIRECCION' => 'QUITO','TELEFONO' => '996126793'),
  array('ID_CLIENTE' => 'CLIENTE20','NOMBRE' => 'NICOLE','APELLIDO' => 'CASAS','EMPRESA' => 'PARTICULAR','DIRECCION' => 'MACHALA','TELEFONO' => '996778832'),
  array('ID_CLIENTE' => 'CLIENTE3','NOMBRE' => 'FELIPE','APELLIDO' => 'SANDOVAL','EMPRESA' => 'GREAT WALL','DIRECCION' => 'GUAYAQUIL','TELEFONO' => '996126793'),
  array('ID_CLIENTE' => 'CLIENTE4','NOMBRE' => 'EDUARDO','APELLIDO' => 'LOMA','EMPRESA' => 'GENERAL MOTORS','DIRECCION' => 'QUITO','TELEFONO' => '996122223'),
  array('ID_CLIENTE' => 'CLIENTE5','NOMBRE' => 'JOSE','APELLIDO' => 'CABRERA','EMPRESA' => 'PARTICULAR','DIRECCION' => 'QUITO','TELEFONO' => '996120098'),
  array('ID_CLIENTE' => 'CLIENTE6','NOMBRE' => 'ANDRES','APELLIDO' => 'SANCHEZ','EMPRESA' => 'GREAT WALL','DIRECCION' => 'CUENCA','TELEFONO' => '996124531'),
  array('ID_CLIENTE' => 'CLIENTE7','NOMBRE' => 'PABLO','APELLIDO' => 'POZO','EMPRESA' => 'GENERAL MOTORS','DIRECCION' => 'AMBATO','TELEFONO' => '996112313'),
  array('ID_CLIENTE' => 'CLIENTE8','NOMBRE' => 'GUSTAVO','APELLIDO' => 'LOPEZ','EMPRESA' => 'PARTICULAR','DIRECCION' => 'QUITO','TELEFONO' => '998134892'),
  array('ID_CLIENTE' => 'CLIENTE9','NOMBRE' => 'MANUEL','APELLIDO' => 'ARAUZ','EMPRESA' => 'GREAT WALL','DIRECCION' => 'MANTA','TELEFONO' => '996129088')
);

/* `xforce`.`empleado` */
$empleado = array(
  array('ID_EMPLEADO' => 'EMP1','NOMBRE' => 'JUAN','APELLIDO' => 'GARCIA','CODIGO' => '1560','CORREO' => 'juangarcia@carport.com','ID_ADUANA' => 'ADU1','ID_FACTURAVENTA' => 'FACTUVENTA1'),
  array('ID_EMPLEADO' => 'EMP10','NOMBRE' => 'LUZ','APELLIDO' => 'CARRERA','CODIGO' => '2223','CORREO' => 'luzcarrera@carport.com','ID_ADUANA' => 'ADU10','ID_FACTURAVENTA' => 'FACTUVENTA9'),
  array('ID_EMPLEADO' => 'EMP11','NOMBRE' => 'ANDREA','APELLIDO' => 'NARVAEZ','CODIGO' => '4678','CORREO' => 'andreanarvaez@carport.com','ID_ADUANA' => 'ADU6','ID_FACTURAVENTA' => 'FACTUVENTA7'),
  array('ID_EMPLEADO' => 'EMP12','NOMBRE' => 'ARIANNA','APELLIDO' => 'OSORIO','CODIGO' => '9000','CORREO' => 'ariannaosorio@carport.com','ID_ADUANA' => 'ADU9','ID_FACTURAVENTA' => 'FACTUVENTA7'),
  array('ID_EMPLEADO' => 'EMP13','NOMBRE' => 'PABLO','APELLIDO' => 'GARATE','CODIGO' => '4423','CORREO' => 'pablogarate@carport.com','ID_ADUANA' => 'ADU8','ID_FACTURAVENTA' => 'FACTUVENTA10'),
  array('ID_EMPLEADO' => 'EMP14','NOMBRE' => 'ISABELA','APELLIDO' => 'ORTEGA','CODIGO' => '6674','CORREO' => 'isabelaortega@carport.com','ID_ADUANA' => 'ADU2','ID_FACTURAVENTA' => 'FACTUVENTA2'),
  array('ID_EMPLEADO' => 'EMP15','NOMBRE' => 'DIANA','APELLIDO' => 'RUIZ','CODIGO' => '7754','CORREO' => 'dianaruiz@carport.com','ID_ADUANA' => 'ADU7','ID_FACTURAVENTA' => 'FACTUVENTA3'),
  array('ID_EMPLEADO' => 'EMP2','NOMBRE' => 'ANDRES','APELLIDO' => 'PEREZ','CODIGO' => '2180','CORREO' => 'andresperez@carport.com','ID_ADUANA' => 'ADU2','ID_FACTURAVENTA' => 'FACTUVENTA1'),
  array('ID_EMPLEADO' => 'EMP3','NOMBRE' => 'DAVID','APELLIDO' => 'YANEZ','CODIGO' => '5559','CORREO' => 'davidyanez@carport.com','ID_ADUANA' => 'ADU3','ID_FACTURAVENTA' => 'FACTUVENTA3'),
  array('ID_EMPLEADO' => 'EMP4','NOMBRE' => 'MANUEL','APELLIDO' => 'DONOSO','CODIGO' => '3455','CORREO' => 'manueldonoso@carport.com','ID_ADUANA' => 'ADU1','ID_FACTURAVENTA' => 'FACTUVENTA10'),
  array('ID_EMPLEADO' => 'EMP5','NOMBRE' => 'JHON','APELLIDO' => 'MARTINEZ','CODIGO' => '1290','CORREO' => 'jhonmartinez@carport.com','ID_ADUANA' => 'ADU7','ID_FACTURAVENTA' => 'FACTUVENTA2'),
  array('ID_EMPLEADO' => 'EMP6','NOMBRE' => 'ANDY','APELLIDO' => 'CAIZA','CODIGO' => '9977','CORREO' => 'andycaiza@carport.com','ID_ADUANA' => 'ADU4','ID_FACTURAVENTA' => 'FACTUVENTA4'),
  array('ID_EMPLEADO' => 'EMP7','NOMBRE' => 'SOFIA','APELLIDO' => 'GUERRERO','CODIGO' => '4633','CORREO' => 'sofiaguerrero@carport.com','ID_ADUANA' => 'ADU6','ID_FACTURAVENTA' => 'FACTUVENTA5'),
  array('ID_EMPLEADO' => 'EMP8','NOMBRE' => 'DANIELA','APELLIDO' => 'CASAS','CODIGO' => '4543','CORREO' => 'danielacasas@carport.com','ID_ADUANA' => 'ADU5','ID_FACTURAVENTA' => 'FACTUVENTA6'),
  array('ID_EMPLEADO' => 'EMP9','NOMBRE' => 'TEO','APELLIDO' => 'ORTIZ','CODIGO' => '6464','CORREO' => 'teoortiz@carport.com','ID_ADUANA' => 'ADU8','ID_FACTURAVENTA' => 'FACTUVENTA8')
);

/* `xforce`.`envio` */
$envio = array(
  array('ID_ENVIO' => 'ENV1','NUM_ENVIO' => '545','DETALLE' => 'Autos Marca DONGFENG'),
  array('ID_ENVIO' => 'ENV10','NUM_ENVIO' => '122','DETALLE' => 'Autos Marca HAGYU'),
  array('ID_ENVIO' => 'ENV2','NUM_ENVIO' => '545','DETALLE' => 'Autos Marca CHERRY'),
  array('ID_ENVIO' => 'ENV3','NUM_ENVIO' => '545','DETALLE' => 'Autos Marca GREATWALL'),
  array('ID_ENVIO' => 'ENV4','NUM_ENVIO' => '198','DETALLE' => 'Autos Marca KIA'),
  array('ID_ENVIO' => 'ENV5','NUM_ENVIO' => '467','DETALLE' => 'Autos Marca MORTU'),
  array('ID_ENVIO' => 'ENV6','NUM_ENVIO' => '900','DETALLE' => 'Autos Marca XIAO'),
  array('ID_ENVIO' => 'ENV7','NUM_ENVIO' => '230','DETALLE' => 'Autos Marca FENG'),
  array('ID_ENVIO' => 'ENV8','NUM_ENVIO' => '431','DETALLE' => 'Autos Marca TEA'),
  array('ID_ENVIO' => 'ENV9','NUM_ENVIO' => '678','DETALLE' => 'Autos Marca MITSUBISHI')
);

/* `xforce`.`factura_compra` */
$factura_compra = array(
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA1','ID_CARRO' => 'CARRO1','NUM_FACTURACOMPRA' => '800','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU1','CANTIDAD' => '5','VALORUNITARIO' => '50000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA10','ID_CARRO' => 'CARRO1','NUM_FACTURACOMPRA' => '214','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU8','CANTIDAD' => '3','VALORUNITARIO' => '5000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA2','ID_CARRO' => 'CARRO5','NUM_FACTURACOMPRA' => '244','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU2','CANTIDAD' => '4','VALORUNITARIO' => '5000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA3','ID_CARRO' => 'CARRO6','NUM_FACTURACOMPRA' => '128','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU3','CANTIDAD' => '3','VALORUNITARIO' => '7000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA4','ID_CARRO' => 'CARRO3','NUM_FACTURACOMPRA' => '700','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU6','CANTIDAD' => '2','VALORUNITARIO' => '12000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA5','ID_CARRO' => 'CARRO2','NUM_FACTURACOMPRA' => '349','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU4','CANTIDAD' => '1','VALORUNITARIO' => '155000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA6','ID_CARRO' => 'CARRO7','NUM_FACTURACOMPRA' => '311','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU5','CANTIDAD' => '2','VALORUNITARIO' => '15000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA7','ID_CARRO' => 'CARRO4','NUM_FACTURACOMPRA' => '788','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU9','CANTIDAD' => '3','VALORUNITARIO' => '35000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA8','ID_CARRO' => 'CARRO6','NUM_FACTURACOMPRA' => '200','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU10','CANTIDAD' => '6','VALORUNITARIO' => '27000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURACOMPRA' => 'FACTUCOMPRA9','ID_CARRO' => 'CARRO3','NUM_FACTURACOMPRA' => '566','FECHA_FACTURACOMPRA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU7','CANTIDAD' => '7','VALORUNITARIO' => '4500.00','IMPUESTOS' => '0.12','TOTAL' => '0.00')
);

/* `xforce`.`factura_venta` */
$factura_venta = array(
  array('ID_FACTURAVENTA' => 'FACTUVENTA1','ID_CARRO' => 'CARRO1','NUM_FACTURAVENTA' => '305','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU1','CANTIDAD' => '5','VALORUNITARIO' => '5000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA10','ID_CARRO' => 'CARRO5','NUM_FACTURAVENTA' => '322','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU10','CANTIDAD' => '5','VALORUNITARIO' => '5000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA2','ID_CARRO' => 'CARRO1','NUM_FACTURAVENTA' => '450','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU2','CANTIDAD' => '5','VALORUNITARIO' => '5000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA3','ID_CARRO' => 'CARRO4','NUM_FACTURAVENTA' => '125','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU3','CANTIDAD' => '6','VALORUNITARIO' => '2000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA4','ID_CARRO' => 'CARRO5','NUM_FACTURAVENTA' => '333','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU4','CANTIDAD' => '4','VALORUNITARIO' => '3500.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA5','ID_CARRO' => 'CARRO3','NUM_FACTURAVENTA' => '776','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU5','CANTIDAD' => '2','VALORUNITARIO' => '15000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA6','ID_CARRO' => 'CARRO2','NUM_FACTURAVENTA' => '281','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU6','CANTIDAD' => '1','VALORUNITARIO' => '45000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA7','ID_CARRO' => 'CARRO7','NUM_FACTURAVENTA' => '561','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU7','CANTIDAD' => '5','VALORUNITARIO' => '30000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA8','ID_CARRO' => 'CARRO3','NUM_FACTURAVENTA' => '900','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU8','CANTIDAD' => '6','VALORUNITARIO' => '6000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00'),
  array('ID_FACTURAVENTA' => 'FACTUVENTA9','ID_CARRO' => 'CARRO2','NUM_FACTURAVENTA' => '111','FECHA_FACTURAVENTA' => '0000-00-00 00:00:00','ID_ADUANA' => 'ADU9','CANTIDAD' => '7','VALORUNITARIO' => '4000.00','IMPUESTOS' => '0.12','TOTAL' => '0.00')
);

/* `xforce`.`forma_pago` */
$forma_pago = array(
  array('ID_PAGO' => 'PAGO1','ID_CARRO' => 'CARRO1','ID_FACTURAVENTA' => 'FACTUVENTA1','EFECTIVO' => 'PAGO EN EFECTIVO $28000','TARJETA' => 'NUMERO DE TARJETA 4892345678901456'),
  array('ID_PAGO' => 'PAGO10','ID_CARRO' => 'CARRO11','ID_FACTURAVENTA' => 'FACTUVENTA10','EFECTIVO' => 'PAGO EN EFECTIVO $222000','TARJETA' => 'NUMERO DE TARJETA 48923468580909'),
  array('ID_PAGO' => 'PAGO11','ID_CARRO' => 'CARRO12','ID_FACTURAVENTA' => 'FACTUVENTA10','EFECTIVO' => 'PAGO EN EFECTIVO $545000','TARJETA' => 'NUMERO DE TARJETA 4892345678901232'),
  array('ID_PAGO' => 'PAGO12','ID_CARRO' => 'CARRO13','ID_FACTURAVENTA' => 'FACTUVENTA9','EFECTIVO' => 'PAGO EN EFECTIVO $464000','TARJETA' => 'NUMERO DE TARJETA 2340983412313211'),
  array('ID_PAGO' => 'PAGO13','ID_CARRO' => 'CARRO4','ID_FACTURAVENTA' => 'FACTUVENTA8','EFECTIVO' => 'PAGO EN EFECTIVO $161000','TARJETA' => 'NUMERO DE TARJETA 9805758697797897'),
  array('ID_PAGO' => 'PAGO14','ID_CARRO' => 'CARRO14','ID_FACTURAVENTA' => 'FACTUVENTA7','EFECTIVO' => 'PAGO EN EFECTIVO $672000','TARJETA' => 'NUMERO DE TARJETA 6786869896676766'),
  array('ID_PAGO' => 'PAGO15','ID_CARRO' => 'CARRO15','ID_FACTURAVENTA' => 'FACTUVENTA6','EFECTIVO' => 'PAGO EN EFECTIVO $427000','TARJETA' => 'NUMERO DE TARJETA 2344564645656546'),
  array('ID_PAGO' => 'PAGO16','ID_CARRO' => 'CARRO19','ID_FACTURAVENTA' => 'FACTUVENTA5','EFECTIVO' => 'PAGO EN EFECTIVO $225000','TARJETA' => 'NUMERO DE TARJETA 9800223234645645'),
  array('ID_PAGO' => 'PAGO17','ID_CARRO' => 'CARRO20','ID_FACTURAVENTA' => 'FACTUVENTA4','EFECTIVO' => 'PAGO EN EFECTIVO $342000','TARJETA' => 'NUMERO DE TARJETA 4892345353453533'),
  array('ID_PAGO' => 'PAGO18','ID_CARRO' => 'CARRO18','ID_FACTURAVENTA' => 'FACTUVENTA3','EFECTIVO' => 'PAGO EN EFECTIVO $42000','TARJETA' => 'NUMERO DE TARJETA 23402234657689000'),
  array('ID_PAGO' => 'PAGO19','ID_CARRO' => 'CARRO17','ID_FACTURAVENTA' => 'FACTUVENTA1','EFECTIVO' => 'PAGO EN EFECTIVO $123000','TARJETA' => 'NUMERO DE TARJETA 2342342342342345'),
  array('ID_PAGO' => 'PAGO2','ID_CARRO' => 'CARRO2','ID_FACTURAVENTA' => 'FACTUVENTA2','EFECTIVO' => 'PAGO EN EFECTIVO $46000','TARJETA' => 'NUMERO DE TARJETA 2340983488763309'),
  array('ID_PAGO' => 'PAGO20','ID_CARRO' => 'CARRO16','ID_FACTURAVENTA' => 'FACTUVENTA2','EFECTIVO' => 'PAGO EN EFECTIVO $124000','TARJETA' => 'NUMERO DE TARJETA 4892456567789789'),
  array('ID_PAGO' => 'PAGO3','ID_CARRO' => 'CARRO3','ID_FACTURAVENTA' => 'FACTUVENTA3','EFECTIVO' => 'PAGO EN EFECTIVO $16000','TARJETA' => 'NUMERO DE TARJETA 9800233247768811'),
  array('ID_PAGO' => 'PAGO4','ID_CARRO' => 'CARRO6','ID_FACTURAVENTA' => 'FACTUVENTA4','EFECTIVO' => 'PAGO EN EFECTIVO $67000','TARJETA' => 'NUMERO DE TARJETA 4892345678903336'),
  array('ID_PAGO' => 'PAGO5','ID_CARRO' => 'CARRO5','ID_FACTURAVENTA' => 'FACTUVENTA5','EFECTIVO' => 'PAGO EN EFECTIVO $467000','TARJETA' => 'NUMERO DE TARJETA 234098323423309'),
  array('ID_PAGO' => 'PAGO6','ID_CARRO' => 'CARRO7','ID_FACTURAVENTA' => 'FACTUVENTA6','EFECTIVO' => 'PAGO EN EFECTIVO $165000','TARJETA' => 'NUMERO DE TARJETA 980022323468811'),
  array('ID_PAGO' => 'PAGO7','ID_CARRO' => 'CARRO8','ID_FACTURAVENTA' => 'FACTUVENTA7','EFECTIVO' => 'PAGO EN EFECTIVO $282000','TARJETA' => 'NUMERO DE TARJETA 489234567890145'),
  array('ID_PAGO' => 'PAGO8','ID_CARRO' => 'CARRO9','ID_FACTURAVENTA' => 'FACTUVENTA8','EFECTIVO' => 'PAGO EN EFECTIVO $462000','TARJETA' => 'NUMERO DE TARJETA 234022342476330'),
  array('ID_PAGO' => 'PAGO9','ID_CARRO' => 'CARRO10','ID_FACTURAVENTA' => 'FACTUVENTA9','EFECTIVO' => 'PAGO EN EFECTIVO $122000','TARJETA' => 'NUMERO DE TARJETA 980023324155756')
);

/* `xforce`.`genera` */
$genera = array(
  array('ID_CLIENTE' => 'CLIENTE1','ID_FACTURACOMPRA' => 'FACTUCOMPRA1'),
  array('ID_CLIENTE' => 'CLIENTE2','ID_FACTURACOMPRA' => 'FACTUCOMPRA2'),
  array('ID_CLIENTE' => 'CLIENTE3','ID_FACTURACOMPRA' => 'FACTUCOMPRA3'),
  array('ID_CLIENTE' => 'CLIENTE4','ID_FACTURACOMPRA' => 'FACTUCOMPRA6'),
  array('ID_CLIENTE' => 'CLIENTE5','ID_FACTURACOMPRA' => 'FACTUCOMPRA5'),
  array('ID_CLIENTE' => 'CLIENTE6','ID_FACTURACOMPRA' => 'FACTUCOMPRA4'),
  array('ID_CLIENTE' => 'CLIENTE7','ID_FACTURACOMPRA' => 'FACTUCOMPRA7'),
  array('ID_CLIENTE' => 'CLIENTE8','ID_FACTURACOMPRA' => 'FACTUCOMPRA8'),
  array('ID_CLIENTE' => 'CLIENTE9','ID_FACTURACOMPRA' => 'FACTUCOMPRA9'),
  array('ID_CLIENTE' => 'CLIENTE10','ID_FACTURACOMPRA' => 'FACTUCOMPRA10')
);

/* `xforce`.`llega` */
$llega = array(
  array('ID_BARCO' => 'B1','ID_PUERTO' => 'PUERTO1'),
  array('ID_BARCO' => 'B2','ID_PUERTO' => 'PUERTO2'),
  array('ID_BARCO' => 'B3','ID_PUERTO' => 'PUERTO3'),
  array('ID_BARCO' => 'B10','ID_PUERTO' => 'PUERTO7'),
  array('ID_BARCO' => 'B9','ID_PUERTO' => 'PUERTO6'),
  array('ID_BARCO' => 'B5','ID_PUERTO' => 'PUERTO5'),
  array('ID_BARCO' => 'B6','ID_PUERTO' => 'PUERTO8'),
  array('ID_BARCO' => 'B7','ID_PUERTO' => 'PUERTO4'),
  array('ID_BARCO' => 'B8','ID_PUERTO' => 'PUERTO10'),
  array('ID_BARCO' => 'B4','ID_PUERTO' => 'PUERTO9')
);

/* `xforce`.`pedido` */
$pedido = array(
  array('ID_PEDIDO' => 'PEDIDO1','CANTIDAD' => '50','CODIGO' => '1456','DETALLE' => 'Vehiculos Tipo SUV'),
  array('ID_PEDIDO' => 'PEDIDO10','CANTIDAD' => '58','CODIGO' => '8876','DETALLE' => 'Vehiculos Tipo SUV'),
  array('ID_PEDIDO' => 'PEDIDO11','CANTIDAD' => '42','CODIGO' => '1424','DETALLE' => 'Vehiculos Tipo Van'),
  array('ID_PEDIDO' => 'PEDIDO12','CANTIDAD' => '90','CODIGO' => '1444','DETALLE' => 'Vehiculos Tipo Camioneta'),
  array('ID_PEDIDO' => 'PEDIDO13','CANTIDAD' => '110','CODIGO' => '1345','DETALLE' => 'Vehiculos Tipo SUV'),
  array('ID_PEDIDO' => 'PEDIDO14','CANTIDAD' => '222','CODIGO' => '1754','DETALLE' => 'Vehiculos Tipo Van'),
  array('ID_PEDIDO' => 'PEDIDO15','CANTIDAD' => '11','CODIGO' => '1454','DETALLE' => 'Vehiculos Tipo Camioneta'),
  array('ID_PEDIDO' => 'PEDIDO16','CANTIDAD' => '77','CODIGO' => '1433','DETALLE' => 'Vehiculos Tipo SUV'),
  array('ID_PEDIDO' => 'PEDIDO2','CANTIDAD' => '10','CODIGO' => '1453','DETALLE' => 'Vehiculos Tipo Van'),
  array('ID_PEDIDO' => 'PEDIDO3','CANTIDAD' => '15','CODIGO' => '1455','DETALLE' => 'Vehiculos Tipo Camioneta'),
  array('ID_PEDIDO' => 'PEDIDO4','CANTIDAD' => '56','CODIGO' => '1459','DETALLE' => 'Vehiculos Tipo SUV'),
  array('ID_PEDIDO' => 'PEDIDO5','CANTIDAD' => '12','CODIGO' => '1451','DETALLE' => 'Vehiculos Tipo Van'),
  array('ID_PEDIDO' => 'PEDIDO6','CANTIDAD' => '55','CODIGO' => '1232','DETALLE' => 'Vehiculos Tipo Camioneta'),
  array('ID_PEDIDO' => 'PEDIDO7','CANTIDAD' => '12','CODIGO' => '1234','DETALLE' => 'Vehiculos Tipo SUV'),
  array('ID_PEDIDO' => 'PEDIDO8','CANTIDAD' => '88','CODIGO' => '1451','DETALLE' => 'Vehiculos Tipo Van'),
  array('ID_PEDIDO' => 'PEDIDO9','CANTIDAD' => '22','CODIGO' => '8887','DETALLE' => 'Vehiculos Tipo Camioneta')
);

/* `xforce`.`posee` */
$posee = array(
  array('ID_PROVEEDOR' => 'P1','ID_ENVIO' => 'ENV1'),
  array('ID_PROVEEDOR' => 'P2','ID_ENVIO' => 'ENV5'),
  array('ID_PROVEEDOR' => 'P3','ID_ENVIO' => 'ENV6'),
  array('ID_PROVEEDOR' => 'P5','ID_ENVIO' => 'ENV2'),
  array('ID_PROVEEDOR' => 'P6','ID_ENVIO' => 'ENV4'),
  array('ID_PROVEEDOR' => 'P7','ID_ENVIO' => 'ENV3'),
  array('ID_PROVEEDOR' => 'P10','ID_ENVIO' => 'ENV7'),
  array('ID_PROVEEDOR' => 'P8','ID_ENVIO' => 'ENV10'),
  array('ID_PROVEEDOR' => 'P9','ID_ENVIO' => 'ENV9'),
  array('ID_PROVEEDOR' => 'P4','ID_ENVIO' => 'ENV8')
);

/* `xforce`.`proveedor` */
$proveedor = array(
  array('ID_PROVEEDOR' => 'P1','EMPRESA' => 'DONGFENG','NOMBRE' => 'DONGFENG','DIRECCION' => 'CHINA','TELEFONO' => '83939','CORREO' => 'dongfengcompany@hotmail.com'),
  array('ID_PROVEEDOR' => 'P10','EMPRESA' => 'HAGYU','NOMBRE' => 'HAGYU','DIRECCION' => 'CHINA','TELEFONO' => '98089','CORREO' => 'HagyuCompany@aaawe.com'),
  array('ID_PROVEEDOR' => 'P2','EMPRESA' => 'CHERRY','NOMBRE' => 'CHERRY','DIRECCION' => 'CHINA','TELEFONO' => '99383','CORREO' => 'cherryvehicles@hotmail.com'),
  array('ID_PROVEEDOR' => 'P3','EMPRESA' => 'GREATWALL','NOMBRE' => 'GREATWALL','DIRECCION' => 'CHINA','TELEFONO' => '45645','CORREO' => 'greatwallcompany@hotmail.com'),
  array('ID_PROVEEDOR' => 'P4','EMPRESA' => 'KIA','NOMBRE' => 'KIA','DIRECCION' => 'CHINA','TELEFONO' => '45765','CORREO' => 'kiaMotors@kia.com'),
  array('ID_PROVEEDOR' => 'P5','EMPRESA' => 'MORTU','NOMBRE' => 'MORTU','DIRECCION' => 'CHINA','TELEFONO' => '45645','CORREO' => 'mortuCars@mors.com'),
  array('ID_PROVEEDOR' => 'P6','EMPRESA' => 'XIAO','NOMBRE' => 'XIAO','DIRECCION' => 'CHINA','TELEFONO' => '67796','CORREO' => 'MotorsXiao@hotmail.com'),
  array('ID_PROVEEDOR' => 'P7','EMPRESA' => 'FENG','NOMBRE' => 'FENG','DIRECCION' => 'CHINA','TELEFONO' => '40045','CORREO' => 'fengCars@hotmail.com'),
  array('ID_PROVEEDOR' => 'P8','EMPRESA' => 'TEA','NOMBRE' => 'TEA','DIRECCION' => 'CHINA','TELEFONO' => '45545','CORREO' => 'Tea@teamotors.com'),
  array('ID_PROVEEDOR' => 'P9','EMPRESA' => 'MITSUBISHI','NOMBRE' => 'MITSUBISHI','DIRECCION' => 'CHINA','TELEFONO' => '49559','CORREO' => 'mitsubishiMotors@hotmail.com')
);

/* `xforce`.`puerto` */
$puerto = array(
  array('ID_PUERTO' => 'PUERTO1','NUM_PUERTO' => '5','ESTACION' => 'Estacion 5'),
  array('ID_PUERTO' => 'PUERTO10','NUM_PUERTO' => '1','ESTACION' => 'Estacion 1'),
  array('ID_PUERTO' => 'PUERTO2','NUM_PUERTO' => '7','ESTACION' => 'Estacion 7'),
  array('ID_PUERTO' => 'PUERTO3','NUM_PUERTO' => '12','ESTACION' => 'Estacion 12'),
  array('ID_PUERTO' => 'PUERTO4','NUM_PUERTO' => '78','ESTACION' => 'Estacion 78'),
  array('ID_PUERTO' => 'PUERTO5','NUM_PUERTO' => '13','ESTACION' => 'Estacion 13'),
  array('ID_PUERTO' => 'PUERTO6','NUM_PUERTO' => '10','ESTACION' => 'Estacion 10'),
  array('ID_PUERTO' => 'PUERTO7','NUM_PUERTO' => '56','ESTACION' => 'Estacion 56'),
  array('ID_PUERTO' => 'PUERTO8','NUM_PUERTO' => '17','ESTACION' => 'Estacion 17'),
  array('ID_PUERTO' => 'PUERTO9','NUM_PUERTO' => '11','ESTACION' => 'Estacion 11')
);

/* `xforce`.`transporte` */
$transporte = array(
  array('ID_BARCO' => 'B1','ID_ENVIO' => 'ENV1'),
  array('ID_BARCO' => 'B2','ID_ENVIO' => 'ENV2'),
  array('ID_BARCO' => 'B3','ID_ENVIO' => 'ENV3'),
  array('ID_BARCO' => 'B7','ID_ENVIO' => 'ENV10'),
  array('ID_BARCO' => 'B6','ID_ENVIO' => 'ENV5'),
  array('ID_BARCO' => 'B8','ID_ENVIO' => 'ENV6'),
  array('ID_BARCO' => 'B9','ID_ENVIO' => 'ENV9'),
  array('ID_BARCO' => 'B10','ID_ENVIO' => 'ENV6'),
  array('ID_BARCO' => 'B5','ID_ENVIO' => 'ENV8'),
  array('ID_BARCO' => 'B4','ID_ENVIO' => 'ENV7')
);
