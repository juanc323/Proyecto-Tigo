CREATE TABLE Comentario (
  idComentario INTEGER NOT NULL AUTO_INCREMENT,
  Info_modulo_idInfo_modulo INTEGER NOT NULL,
  Comentario VARCHAR(500) NULL,
  PRIMARY KEY(idComentario),
  INDEX Comentario_FKIndex1(Info_modulo_idInfo_modulo)
);

CREATE TABLE Estado (
  idEstado INTEGER NOT NULL,
  Activo INTEGER NULL,
  Cerrado INTEGER NULL,
  Cancelado INTEGER NULL,
  Suspendido INTEGER NULL,
  PRIMARY KEY(idEstado)
);

CREATE TABLE Info_modulo (
  idInfo_modulo INTEGER NOT NULL AUTO_INCREMENT,
  Persona_idPersona INTEGER NOT NULL,
  Estado_idEstado INTEGER NOT NULL,
  Modulos_idModulos INTEGER NOT NULL,
  Nombre VARCHAR(200) NULL,
  Nombre_asign VARCHAR(30) NULL,
  PRIMARY KEY(idInfo_modulo),
  INDEX Info_FKIndex1(Modulos_idModulos),
  INDEX Info_FKIndex2(Estado_idEstado),
  INDEX Info_modulo_FKIndex3(Persona_idPersona)
);

CREATE TABLE Modulos (
  idModulos INTEGER NOT NULL,
  Requerimiento INTEGER NOT NULL,
  Procesos INTEGER NOT NULL,
  PRIMARY KEY(idModulos)
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