CREATE TABLE Comentario (
  idComentario INTEGER NOT NULL AUTO_INCREMENT,
  Info_modulo_idInfo_modulo INTEGER NOT NULL,
  Comentario VARCHAR(500) NULL,
  FechaCreacionComentario VARCHAR(50) NULL,
  PRIMARY KEY(idComentario)
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
  idTipo_Modulo INTEGER NOT NULL,
  Tipo_Modulo VARCHAR(50) NOT NULL,
  PRIMARY KEY(idTipo_Modulo)
);

CREATE TABLE Usuario (
  idUsuario INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Persona_idPersona INTEGER NOT NULL,
  Usuario VARCHAR(50) NULL,
  Clave VARCHAR(250) NULL,
  PRIMARY KEY(idUsuario)
);

INSERT INTO PERSONA VALUES('','Julian','David','Ozorio','Perez','jd@outlook.com');
INSERT INTO USUARIO VALUES('',1,'Julyd19','12345');
INSERT INTO PERSONA VALUES('','Santiago','Felipe','Guzman','Torres','abcd@outlook.com')
INSERT INTO USUARIO VALUES('',2,'santiago20',md5('12345'))
