CREATE TABLE FlujoProceso
(
    Flujo varchar(3),
    Proceso varchar(3),
    Tipo varchar(1),
    Rol varchar(15),
    ProcesoSiguiente varchar(3),
    Formulario varchar(20)
)

CREATE TABLE FlujoCondicionante
(
    Proceso varchar(2),
    Si varchar(3),
    No varchar(3)
)


insert into FlujoProceso values('F1','P1','I','Usuario','P2','fechahora');
insert into FlujoProceso values('F1','P2','P','Usuario','P3','listadoc');
insert into FlujoProceso values('F1','P3','D','Usuario','P4','presentardoc');
insert into FlujoProceso values('F1','P4','C','Kardex', null,'docaldia');
insert into FlujoProceso values('F1','P5','F','Kardex', null,'notifica');
insert into FlujoProceso values('F1','P6','P','Kardex', 'P7','informa');
insert into FlujoProceso values('F1','P7','P','Kardex', 'P8','anotar');


flujo proceso tipo rol codprocesosiguiente pantalla
F1
P1
I
1E
P2
afecha
F1
P2
P
1E
P3
registrardoc
F1
P3
C
PCE
NULL
revisiondoc
F1
P4
F
PCE
NULL
desahabilitacion
F1
P5
P
PCE
NULL
habilitacion

CREATE TABLE flujocondicionante
(
    Flujo VARCHAR(3),
    Proceso varchar(3),
    Si varchar(3),
    No varchar(3)
)


insert into flujocondicionante values('F1','P3','P5','P4');
insert into flujocondicionante values('F2','P3','P5','P4');
insert into flujocondicionante values('F3','P3','P5','P4');
insert into flujocondicionante values('F4','P3','P5','P4');

-- 20/10/2021

Creamos la tabla docente

CREATE TABLE docente
(
    ci varchar(10),
    namedocente varchar(30)
)

insert into docente values ('33','moyo')


-- 27 de octubre

CREATE TABLE Seguimiento
(
    notramite integer,
    usuario varchar(10),
    flujo varchar(3),
    proceso varchar(3),
    fechaInicio datetime,
    fechaFin datetime
)

create table seguimiento
(
    usuario varchar (10),
    flujo varchar(3),
    proceso varchar(4),
    fechaini date,
    fechafin date
)

insert into seguimiento values(100,'Moises','F1','P1','21-10-13 10:00','21-10-13 12:00');
insert into seguimiento values(100,'Moises','F1','P2','21-10-13 12:00',null);
insert into seguimiento values(101,'German','F1','P1','21-10-13 10:00','21-10-13 12:00');
insert into seguimiento values(101,'German','F1','P2','21-10-13 12:00',null);
insert into seguimiento values(102,'Melany','F1','P1','21-10-13 08:00','21-10-13 10:00');
insert into seguimiento values(102,'Melany','F2','P2','21-10-13 10:00','21-10-13 12:00');


  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Ivan', 'F1',	'P1',	'13-10-21 10:00',	'13-10-21 12:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Ivan', 'F1',	'P2',	'13-10-21 12:00',	'13-10-21 14:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Josue', 'F1',	'P1',	'13-10-21 10:00',	'13-10-21 12:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Josue', 'F1',	'P2',	'13-10-21 12:00',	null);
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Maria', 'F1',	'P3',	'13-10-21 16:00',	'13-10-21 18:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Maria', 'F1',	'P5',	'13-10-21 18:00',	'13-10-21 19:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Mario', 'F1',	'P1',	'13-10-21 08:00',	'13-10-21 10:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Mario', 'F1',	'P2',	'13-10-21 10:00',	null);
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Renan', 'F1',	'P3',	'13-10-21 14:00',	'13-10-21 16:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Renan', 'F1',	'P4',	'13-10-21 16:00',	'13-10-21 18:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Maria', ' F1',	'P3',	'14-10-21 10:00',	'14-10-21 12:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Maria', 'F1',	'P5',	'14-10-21 12:00',	'14-10-21 14:00');
  insert into seguimiento (usuario, flujo, proceso, fechaini, fechafin) values('Yoshua', 'F4',	'P1',	'17-11-21 9:00',	null);





CREATE TABLE usuarios
(
    usuario varchar(10),
    contraseña varchar(10),
    rol varchar(10)
)

insert into usuarios values('Moises','123456','E');
insert into usuarios values('German','123456','E');
insert into usuarios values('Melany','123456','K');

  insert into usuarios values('Maria','123456','PCE');
  insert into usuarios values('Renan','123456','PCE');
  insert into usuarios values('Ivan','123456','1E');
  insert into usuarios values('Josue','123456','1E');
  insert into usuarios values('Yoshua','123456','1E');







insert into seguimiento values(105,'Moises','F2','P1','21-10-27 00:00',null);

CREATE TABLE alumnos
(

)
