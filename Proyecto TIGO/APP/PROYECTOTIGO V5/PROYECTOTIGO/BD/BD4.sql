CREATE TABLE Comentario (
  idComentario INTEGER NOT NULL AUTO_INCREMENT,
  Info_Fallas_Fixes_idInfo_Fallas_Fixes INTEGER NOT NULL,
  Info_Requerimiento_idInfo_Requerimiento INTEGER NOT NULL,
  Comentario VARCHAR(500) NULL,
  FechaCreacionComentario VARCHAR(50) NULL,
  PRIMARY KEY(idComentario)
);

CREATE TABLE Estado (
  idEstado INTEGER NOT NULL,
  Tipo_Modulo VARCHAR(30) NOT NULL,
  PRIMARY KEY(idEstado)
);

CREATE TABLE Info_Fallas_Fixes (
  idInfo_Fallas_Fixes INTEGER NOT NULL AUTO_INCREMENT,
  Persona_idPersona INTEGER NOT NULL,
  Estado_idEstado INTEGER NOT NULL,
  Tipo_Modulo_idTipo_Modulo VARCHAR(50) NOT NULL,
  Nombre VARCHAR(200) NULL,
  Nombre_Asign VARCHAR(30) NULL,
  Identificador INTEGER NULL,
  PRIMARY KEY(idInfo_Fallas_Fixes)
);

CREATE TABLE Info_Requerimiento (
  idInfo_Requerimiento INTEGER NOT NULL AUTO_INCREMENT,
  Tipo_Modulo_Modulo_idTipo_Modulo VARCHAR(50) NOT NULL,
  Persona_idPersona INTEGER NOT NULL,
  FechaCreacion timestamp,
  Estado_idEstado INTEGER NOT NULL,
  Descripcion VARCHAR(250) NOT NULL, 
  Nombre VARCHAR(200) NULL,
  Nombre_asign VARCHAR(30) NULL,
  Identificador INTEGER NULL,
  PRIMARY KEY(idInfo_Requerimiento)
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
  idUsuario INTEGER NOT NULL AUTO_INCREMENT,
  Persona_idPersona INTEGER NOT NULL,
  Usuario VARCHAR(50) NULL,
  Clave VARCHAR(250) NULL,
  PRIMARY KEY(idUsuario)
);

INSERT INTO ESTADO VALUES(1,'Activo');
INSERT INTO ESTADO VALUES(2,'Cerrado');
INSERT INTO ESTADO VALUES(3,'Cancelado');
INSERT INTO ESTADO VALUES(4,'Suspendido');

INSERT INTO TIPO_MODULO VALUES('Proyectos');
INSERT INTO TIPO_MODULO VALUES('Desarrollos Menores');
INSERT INTO TIPO_MODULO VALUES('Recetas');
INSERT INTO TIPO_MODULO VALUES('Comerciales');

INSERT INTO PERSONA VALUES('','Julian','','Rodriguez','','Jc@hotmail.com');
INSERT INTO USUARIO VALUES('',1,'julid1',md5('12345'));