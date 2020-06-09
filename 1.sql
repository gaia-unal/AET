CREATE TABLE direccion
(
  id integer NOT NULL,
  url character varying(255) NOT NULL,
  rp double precision NOT NULL,
  rpp double precision NOT NULL,
  fecha date NOT NULL,
  iduser integer,
  CONSTRAINT direccion_pkey PRIMARY KEY (url)
);

CREATE TABLE porcentaje
(
  promedio double precision NOT NULL,
  pp double precision NOT NULL,
  categoria character varying(255) NOT NULL,
  url character varying(255) DEFAULT NULL::character varying,
  CONSTRAINT porcentaje_url_fkey FOREIGN KEY (url)
      REFERENCES direccion (url) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE tabla
(
  categoria integer NOT NULL,
  idpregunta integer NOT NULL,
  ce integer NOT NULL,
  cec integer NOT NULL,
  tc double precision,
  url character varying(255) DEFAULT NULL::character varying,
  CONSTRAINT tabla_url_fkey FOREIGN KEY (url)
      REFERENCES direccion (url) MATCH SIMPLE
      ON UPDATE NO ACTION ON DELETE NO ACTION
);
