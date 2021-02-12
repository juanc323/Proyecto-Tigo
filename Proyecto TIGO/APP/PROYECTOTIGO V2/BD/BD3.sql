CREATE TABLE Comentario (
  idComentario INTEGER NOT NULL AUTO_INCREMENT,
  Info_modulo_idInfo_modulo INTEGER NOT NULL,
  Comentario VARCHAR(500) NULL,
  FechaCreacionComentario VARCHAR(50) NULL,
  PRIMARY KEY(idComentario)
);

CREATE TABLE Estado (
  idEstado VARCHAR(30) NOT NULL,
  PRIMARY KEY(idEstado)
);

CREATE TABLE Info_modulo (
  idInfo_modulo INTEGER NOT NULL AUTO_INCREMENT,
  Tipo_Modulo_Modulo_idTipo_Modulo VARCHAR(50) NOT NULL,
  Persona_idPersona INTEGER NOT NULL,
  FechaCreacion timestamp,
  Estado_idEstado VARCHAR(50) NOT NULL,
  Descripcion VARCHAR(250) NOT NULL, 
  Nombre VARCHAR(200) NULL,
  Nombre_asign VARCHAR(30) NULL,
  PRIMARY KEY(idInfo_modulo)
);

CREATE TABLE Persona (
  idPersona INTEGER NOT NULL AUTO_INCREMENT,
  Nombre VARCHAR(30) NOT NULL,
  Seg_Nom VARCHAR(30) NULL,
  Apellido VARCHAR(30) NOT NULL,
  Seg_Apel VARCHAR(30) NULL,
  Correo VARCHAR(50) NOT NULL,
  PRIMARY KEY(idPersona)
);

CREATE TABLE Tipo_Modulo (
  idTipo_Modulo VARCHAR(50) NOT NULL,
  PRIMARY KEY(idTipo_Modulo)
);

CREATE TABLE Usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Persona_idPersona INTEGER NOT NULL,
  Usuario VARCHAR(50) NULL,
  Clave VARCHAR(250) NULL,
  PRIMARY KEY(idUsuario)
);

INSERT INTO persona VALUES('','Victor','Alfosno','Rodriguez','Perez','victor@outlook.com');
INSERT INTO USUARIO VALUES('',1,'vic123','12345');
INSERT INTO PERSONA VALUES('','Julian','Perez','Castano','Ramos','Julian@outlook.com');
INSERT INTO USUARIO VALUES('',1,'julian123',md5('12345'));


INSERT INTO TIPO_MODULO VALUES('Proyectos');
INSERT INTO TIPO_MODULO VALUES('Desarrollos Menores');
INSERT INTO TIPO_MODULO VALUES('Recetas');
INSERT INTO TIPO_MODULO VALUES('Comerciales');


INSERT INTO ESTADO VALUES(1,'Activo');
INSERT INTO ESTADO VALUES(2,'Cerrado');
INSERT INTO ESTADO VALUES(3,'Cancelado');
INSERT INTO ESTADO VALUES(4,'Suspendido');


INSERT INTO INFO_MODULO VALUES('','Proyectos',2,1,'XXXXXXXXXXXXXXXXXXXXXXXXXXXXX','aumento GB','Sebastian Felipe Gomez Perez');
