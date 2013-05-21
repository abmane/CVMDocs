
/**********Table USERS*************/
DROP SEQUENCE USERS_SEQ;
DROP SEQUENCE FACTURES_SEQ;
DROP SEQUENCE CLIENTS_SEQ;


/**********Table USERS*************/
ALTER TABLE USERS DROP CONSTRAINT IDUSERS;
ALTER TABLE FACTURES DROP CONSTRAINT P_facture_idClient_fk;
ALTER TABLE EA_CLIENTS DROP CONSTRAINT CLIENTS_id_pk;
ALTER TABLE FACTURES DROP CONSTRAINT P_facture_id_pk;


/**********Table USERS*************/
DROP TABLE USERS;
DROP TABLE CLIENTS;
DROP TABLE FACTURES;



/**********Cr�ation de sequence USERS_SEQ*************/
CREATE SEQUENCE USERS_SEQ START WITH 1 INCREMENT BY 1;


/**********Cr�ation de sequence CLIENTS_SEQ*************/
CREATE SEQUENCE CLIENTS_SEQ
MINVALUE 1
MAXVALUE 9999999
INCREMENT BY 1
START WITH 100;
	


/**********Cr�ation de sequence FACTURES_SEQ*************/
CREATE SEQUENCE FACTURES_SEQ
MINVALUE 1
MAXVALUE 9999999
INCREMENT BY 1
START WITH 1;

/**********Table USERS*************/
CREATE TABLE USERS(
	ID 				NUMBER(7) NOT NULL,
	USERNAME		VARCHAR2(30) NOT NULL,
	FIRST_NAME		VARCHAR2(30) NOT NULL,
	PASSWORD		VARCHAR2(150) NOT NULL,
	VISIBILITY 		NUMBER(1) NOT NULL,
	CONSTRAINT IDUSERS UNIQUE (ID)
);


INSERT INTO USERS VALUES (USERS_SEQ.nextval,'Aboubacar','Mane','26716b669d515f63ab1bcfd4cc53cf8dd5895aef',3);
/**********Table CLIENTS*************/
CREATE TABLE CLIENTS (
	id NUMBER(6) NOT NULL,
	nom VARCHAR2(20) NOT NULL,
	prenom VARCHAR2(20) NOT NULL,
	adresse VARCHAR2(50) NOT NULL,
	email VARCHAR2(50) NOT NULL,
	nomCompagnie VARCHAR2(50),
	mdp VARCHAR2(100),
	

	CONSTRAINT CLIENTS_id_pk PRIMARY KEY (id)
);



/**********Table FACTURES*************/
CREATE TABLE FACTURES (
	id NUMBER(6) NOT NULL,
	idClient NUMBER(6) NOT NULL,
	nomCompagine VARCHAR2(20) NOT NULL,
	description VARCHAR2(500),
	dateCreation DATE NOT NULL, 
	TPS NUMBER(4) NOT NULL,
	TVQ NUMBER(4) NOT NULL,
	sousTotal NUMBER(6) NOT NULL,
	total NUMBER(6) NOT NULL,

	CONSTRAINT P_facture_id_pk PRIMARY KEY (id),
	CONSTRAINT P_facture_idClient_fk FOREIGN KEY (idClient) REFERENCES CLIENTS(id)
);



