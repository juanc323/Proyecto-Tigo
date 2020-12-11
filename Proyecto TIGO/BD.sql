CREATE TABLE Comentario (
  idComentario INTEGER NOT NULL SERIAL,
  Info_modulo_idInfo_modulo INTEGER NOT NULL,
  Comentario VARCHAR(500) NULL,
  Fecha VARCHAR(10) NULL,
  PRIMARY KEY(idComentario),
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
  idInfo_modulo INTEGER NOT NULL SERIAL,
  Persona_idPersona INTEGER NOT NULL,
  Estado_idEstado INTEGER NOT NULL,
  Modulos_idModulos INTEGER NOT NULL,
  Nombre VARCHAR(200) NULL,
  Nombre_asign VARCHAR(30) NULL,
  PRIMARY KEY(idInfo_modulo),
);

CREATE TABLE Persona (
  idPersona INTEGER NOT NULL SERIAL,
  Nombre VARCHAR(30) NOT NULL,
  Seg_Nom VARCHAR(30) NULL,
  Apellido VARCHAR(30) NOT NULL,
  Seg_Apel VARCHAR(30) NULL,
  Correo VARCHAR(50) NOT NULL,
  PRIMARY KEY(idPersona)
);


