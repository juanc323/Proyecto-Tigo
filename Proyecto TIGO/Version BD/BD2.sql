CREATE TABLE Comentario (
  idComentario INTEGER NOT NULL AUTO_INCREMENT,
  Info_modulo_idInfo_modulo INTEGER NOT NULL,
  Comentario VARCHAR(500) NULL,
  Fecha-CreacionComentario VARCHAR(50) NULL,
  PRIMARY KEY(idComentario),
  INDEX Comentario_FKIndex1(Info_modulo_idInfo_modulo)
);

CREATE TABLE Estado (
  idEstado INTEGER NOT NULL,
  Tipo_Modulo VARCHAR(30) NOT NULL,
  PRIMARY KEY(idEstado)
);

CREATE TABLE Info_modulo (
  idInfo_modulo INTEGER NOT NULL AUTO_INCREMENT,
  Tipo_Modulo_Modulo_idTipo_Modulo INTEGER NOT NULL,
  Persona_idPersona INTEGER NOT NULL,
  Estado_idEstado INTEGER NOT NULL,
  Nombre VARCHAR(200) NULL,
  Nombre_asign VARCHAR(30) NULL,
  PRIMARY KEY(idInfo_modulo),
  INDEX Info_FKIndex2(Estado_idEstado),
  INDEX Info_modulo_FKIndex3(Persona_idPersona),
  INDEX Info_modulo_FKIndex3(Tipo_Modulo_Modulo_idTipo_Modulo)
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
  idTipo_Modulo INTEGER NOT NULL,
  Tipo_Modulo VARCHAR(50) NOT NULL,
  PRIMARY KEY(idTipo_Modulo)
);

CREATE TABLE Usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Persona_idPersona INTEGER NOT NULL,
  Usuario VARCHAR(50) NULL,
  Clave VARCHAR(250) NULL,
  PRIMARY KEY(idUsuario),
  INDEX Usuario_FKIndex1(Persona_idPersona)
);

INSERT INTO persona VALUES('','Victor','Alfosno','Rodriguez','Perez','victor@outlook.com');
INSERT INTO USUARIO VALUES('',1,'vic123','12345');
INSERT INTO PERSONA VALUES('','JULIAN','PEREZ','CASTANO','RAMOS','JULIAN@OUTLOOK.COM')
INSERT INTO USUARIO VALUES('',2,'julian123',md5('12345'));


INSERT INTO TIPO_MODULO VALUES(1,'Proyectos');
INSERT INTO TIPO_MODULO VALUES(2,'Desarrollos Menores');
INSERT INTO TIPO_MODULO VALUES(3,'Recetas');
INSERT INTO TIPO_MODULO VALUES(4,'Comerciales');


INSERT INTO ESTADO VALUES(1,'Activo');
INSERT INTO ESTADO VALUES(2,'Cerrado');
INSERT INTO ESTADO VALUES(3,'Cancelado');
INSERT INTO ESTADO VALUES(4,'Suspendido');


INSERT INTO INFO_MODULO VALUES('',1,2,1,'aumento GB','Sebastian Felipe Gomez Perez');
