CREATE TABLE IF NOT EXISTS acumcred (
  MATRICULA int(11) default NULL,
  MES varchar(15) default NULL,
  ANO smallint(6) default NULL,
  MONTO decimal(13,2) default NULL,
  RECIBO varchar(1) default NULL,
  FECHA date default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS hdebcred (
  NUM_LIQ int(11) default NULL,
  FECHA date default NULL,
  LEGAJO double default NULL,
  IMPORTE decimal(15,2) default NULL,
  PAT varchar(1) default NULL,
  CODMOV smallint(6) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS hist_liq (
  MATRICULA int(11) default NULL,
  CARPETA int(11) default NULL,
  MONTO decimal(13,2) default NULL,
  FECHA date default NULL,
  DESCRIPCIO varchar(40) default NULL,
  NUM_LIQ int(11) default NULL,
  FECHA_L date default NULL,
  AMGHI decimal(13,2) default NULL,
  CPSM decimal(13,2) default NULL,
  IBRUT decimal(13,2) default NULL,
  HOSP decimal(13,2) default NULL,
  TIPODES varchar(40) default NULL,
  IVA21 decimal(13,2) default NULL,
  IVA10 decimal(13,2) default NULL,
  CODLIQUI varchar(2) default NULL,
  NETO decimal(13,2) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS medicos (
  ACTIVO varchar(1) default NULL,
  MATRICULA int(11) default NULL,
  CATEGORIA varchar(1) default NULL,
  APYNOM varchar(45) default NULL,
  DIRECCION varchar(45) default NULL,
  TELEFON1 varchar(14) default NULL,
  TELEFON2 varchar(14) default NULL,
  TIPO_DOCU varchar(3) default NULL,
  NUM_DOCU varchar(8) default NULL,
  CUIT varchar(13) default NULL,
  ING_BRUT varchar(12) default NULL,
  TIPORESP varchar(2) default NULL,
  TIPO_LIQ varchar(1) default NULL,
  AMGHI decimal(5,2) default NULL,
  CPSM decimal(5,2) default NULL,
  IBRUT decimal(5,2) default NULL,
  HOSPITALV decimal(5,2) default NULL,
  AMGHIVEXT decimal(5,2) default NULL,
  HOSPITALP decimal(5,2) default NULL,
  CODHTAL smallint(6) default NULL,
  CODHTAL1 smallint(6) default NULL,
  CODHTAL2 smallint(6) default NULL,
  CODHTAL3 smallint(6) default NULL,
  CODHTAL4 smallint(6) default NULL,
  CODHTAL5 smallint(6) default NULL,
  CODHTAL6 smallint(6) default NULL,
  SUC smallint(6) default NULL,
  CTA int(11) default NULL,
  DIG tinyint(4) default NULL,
  TIPOCTA tinyint(4) default NULL,
  CLAVE varchar(8) default NULL,
  EMAIL varchar(35) default NULL,
  IMPCONSEXT varchar(1) default NULL,
  DPTO varchar(25) default NULL,
  SERVICIO varchar(25) default NULL,
  ESCALAFON varchar(15) default NULL,
  CERTIFICAD enum('T','F') default NULL,
  RETENCIONE enum('T','F') default NULL,
  CONSULTORI enum('T','F') default NULL,
  ESPECIALID varchar(30) default NULL,
  CONSULTA decimal(10,2) default NULL,
  ANOTACIONE longtext,
  NUMAMP int(11) default NULL,
  SOCIO varchar(8) default NULL,
  SH char(1) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS retiene (
  MATRICULA int(11) default NULL,
  NUM_LIQ int(11) default NULL,
  FECHA date default NULL,
  TOTAL decimal(13,2) default NULL,
  AMGHI decimal(13,2) default NULL,
  CPSM decimal(13,2) default NULL,
  HOSP decimal(13,2) default NULL,
  ING_BRUT decimal(13,2) default NULL,
  GANANCIAS decimal(13,2) default NULL,
  ACREDITA decimal(13,2) default NULL,
  DESCUENT decimal(13,2) default NULL,
  COBRADO decimal(13,2) default NULL,
  PAT varchar(1) default NULL,
  CERTIFI bigint(20) default NULL,
  IVA21 decimal(13,2) default NULL,
  IVA10 decimal(13,2) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;