DROP DATABASE IF EXISTS construction;

CREATE DATABASE IF NOT EXISTS construction;
USE construction;
# -----------------------------------------------------------------------------
#       TABLE : FACTURE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FACTURE
 (
   ID_FACT INT NOT NULL AUTO_INCREMENT ,
   ID_ADMIN INT NOT NULL,
   LIBELE_FACT VARCHAR(255)NULL  ,
   DATE_FACT VARCHAR(255)NULL
   , PRIMARY KEY (ID_FACT)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE FACTURE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_FACTURE_ADMIN
     ON FACTURE (ID_ADMIN ASC);

# -----------------------------------------------------------------------------
#       TABLE : DEVIS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DEVIS
 (
   ID_DEVIS INT NOT NULL AUTO_INCREMENT ,
   ID_ADMIN INT NOT NULL,
   NOM_CLT VARCHAR(255)NULL  ,
   DESCRPITION_PROJET VARCHAR(255)NULL  ,
   LIEU_SOUHAITE VARCHAR(255)NULL  ,
   CONTACT_CLT VARCHAR(255)NULL  ,
   EMAIL_CLT VARCHAR(255)NULL
   , PRIMARY KEY (ID_DEVIS)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE DEVIS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_DEVIS_ADMIN
     ON DEVIS (ID_ADMIN ASC);

# -----------------------------------------------------------------------------
#       TABLE : COMMANDE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMMANDE
 (
   ID_COM INT NOT NULL AUTO_INCREMENT   ,
   ID_ADMIN INT NOT NULL ,
   NOM_CLT VARCHAR(255)NULL  ,
   PRENOM_CLT VARCHAR(255)NULL  ,
   DESCRIPTION_PROJET VARCHAR(255)NULL  ,
   EMAIL_CLT VARCHAR(255)NULL  ,
   CONTACT_CLT VARCHAR(255)NULL
   , PRIMARY KEY (ID_COM)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE COMMANDE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_COMMANDE_ADMIN
     ON COMMANDE (ID_ADMIN ASC);

# -----------------------------------------------------------------------------
#       TABLE : CONSTRUCTEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONSTRUCTEUR
 (
   ID_CONST INT NOT NULL AUTO_INCREMENT ,
   NOM_CONST VARCHAR(255)NULL  ,
   PRENOM_CONST VARCHAR(255)NULL  ,
   CONTACT_CONST VARCHAR(255)NULL  ,
   EMAIL_CONST VARCHAR(255)NULL
   , PRIMARY KEY (ID_CONST)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : ADMIN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ADMIN
 (
   ID_ADMIN INT NOT NULL AUTO_INCREMENT ,
   NOM_ADMIN VARCHAR(255)NULL  ,
   PRENOM_ADMIN VARCHAR(255)NULL  ,
   CONTACT_ADMIN VARCHAR(255)NULL  ,
   FONCTION_ADMIN VARCHAR(255)NULL  ,
   EMAIL_ADMIN VARCHAR(255)NULL  ,
   PASSWORD_ADMIN VARCHAR(255)NULL
   , PRIMARY KEY (ID_ADMIN)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TERRAIN
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TERRAIN
 (
   ID_TERRAIN INT NOT NULL AUTO_INCREMENT ,
   SITUATION_GEOGRAPHIQUE VARCHAR(255)NULL  ,
   ID_SERV INT NOT NULL
   , PRIMARY KEY (ID_TERRAIN)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE TERRAIN
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_TERRAIN_SERVICES
     ON TERRAIN (ID_SERV ASC);

# -----------------------------------------------------------------------------
#       TABLE : SERVICES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SERVICES
 (
   ID_SERV INT NOT NULL AUTO_INCREMENT ,
   DESCRIPTION_SERV VARCHAR(255)NULL  ,
   IMAGE_SERV VARCHAR(255)NULL  ,
   PRIX_SERV VARCHAR(255)NULL
   , PRIMARY KEY (ID_SERV)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CLIENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CLIENT
 (
   ID_CLT INT NOT NULL AUTO_INCREMENT ,
   NOM_CLT VARCHAR(255)NULL  ,
   PRENOM_CLT VARCHAR(255)NULL  ,
   DAT_NAISS_CLT VARCHAR(255)NULL  ,
   LIEU_DE_RÉSIDENCE_CLT VARCHAR(255)NULL  ,
   CONTACT_CLT VARCHAR(255)NULL  ,
   EMAIL_CLT VARCHAR(255)NULL  ,
   LOGIN_CLT VARCHAR(255)NULL  ,
   PASSWORD_CLT VARCHAR(255)NULL
   , PRIMARY KEY (ID_CLT)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : MAISON
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS MAISON
 (
   ID_MAIS INT NOT NULL AUTO_INCREMENT ,
   NOM_MAIS VARCHAR(255)NULL  ,
   ZONE_FAVORABLE_MAIS VARCHAR(255)NULL  ,
   ID_SERV INT NOT NULL
   , PRIMARY KEY (ID_MAIS)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE MAISON
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_MAISON_SERVICES
     ON MAISON (ID_SERV ASC);

# -----------------------------------------------------------------------------
#       TABLE : CONSULTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CONSULTER
 (
   ID_CLT INT NOT NULL AUTO_INCREMENT ,
   ID_SERV INT NOT NULL
   , PRIMARY KEY (ID_CLT,ID_SERV)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE CONSULTER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_CONSULTER_CLIENT
     ON CONSULTER (ID_CLT ASC);

CREATE  INDEX I_FK_CONSULTER_SERVICES
     ON CONSULTER (ID_SERV ASC);

# -----------------------------------------------------------------------------
#       TABLE : DEMANDER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DEMANDER
 (
   ID_CLT INT NOT NULL AUTO_INCREMENT ,
   ID_DEVIS INT NOT NULL
   , PRIMARY KEY (ID_CLT,ID_DEVIS)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE DEMANDER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_DEMANDER_CLIENT
     ON DEMANDER (ID_CLT ASC);

CREATE  INDEX I_FK_DEMANDER_DEVIS
     ON DEMANDER (ID_DEVIS ASC);

# -----------------------------------------------------------------------------
#       TABLE : VOULOIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS VOULOIR
 (
   ID_CLT INT NOT NULL AUTO_INCREMENT ,
   ID_FACT INT NOT NULL
   , PRIMARY KEY (ID_CLT,ID_FACT)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE VOULOIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_VOULOIR_CLIENT
     ON VOULOIR (ID_CLT ASC);

CREATE  INDEX I_FK_VOULOIR_FACTURE
     ON VOULOIR (ID_FACT ASC);

# -----------------------------------------------------------------------------
#       TABLE : PASSER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PASSER
 (
   ID_CLT INT NOT NULL AUTO_INCREMENT   ,
   ID_COM INT NOT NULL
   , PRIMARY KEY (ID_CLT,ID_COM)
 )
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PASSER
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PASSER_CLIENT
     ON PASSER (ID_CLT ASC);

CREATE  INDEX I_FK_PASSER_COMMANDE
     ON PASSER (ID_COM ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE FACTURE
  ADD FOREIGN KEY FK_FACTURE_ADMIN (ID_ADMIN)
      REFERENCES ADMIN (ID_ADMIN) ;


ALTER TABLE DEVIS
  ADD FOREIGN KEY FK_DEVIS_ADMIN (ID_ADMIN)
      REFERENCES ADMIN (ID_ADMIN) ;


ALTER TABLE COMMANDE
  ADD FOREIGN KEY FK_COMMANDE_ADMIN (ID_ADMIN)
      REFERENCES ADMIN (ID_ADMIN) ;


ALTER TABLE TERRAIN
  ADD FOREIGN KEY FK_TERRAIN_SERVICES (ID_SERV)
      REFERENCES SERVICES (ID_SERV) ;


ALTER TABLE MAISON
  ADD FOREIGN KEY FK_MAISON_SERVICES (ID_SERV)
      REFERENCES SERVICES (ID_SERV) ;


ALTER TABLE CONSULTER
  ADD FOREIGN KEY FK_CONSULTER_CLIENT (ID_CLT)
      REFERENCES CLIENT (ID_CLT) ;


ALTER TABLE CONSULTER
  ADD FOREIGN KEY FK_CONSULTER_SERVICES (ID_SERV)
      REFERENCES SERVICES (ID_SERV) ;


ALTER TABLE DEMANDER
  ADD FOREIGN KEY FK_DEMANDER_CLIENT (ID_CLT)
      REFERENCES CLIENT (ID_CLT) ;


ALTER TABLE DEMANDER
  ADD FOREIGN KEY FK_DEMANDER_DEVIS (ID_DEVIS)
      REFERENCES DEVIS (ID_DEVIS) ;


ALTER TABLE VOULOIR
  ADD FOREIGN KEY FK_VOULOIR_CLIENT (ID_CLT)
      REFERENCES CLIENT (ID_CLT) ;


ALTER TABLE VOULOIR
  ADD FOREIGN KEY FK_VOULOIR_FACTURE (ID_FACT)
      REFERENCES FACTURE (ID_FACT) ;


ALTER TABLE PASSER
  ADD FOREIGN KEY FK_PASSER_CLIENT (ID_CLT)
      REFERENCES CLIENT (ID_CLT) ;


ALTER TABLE PASSER
  ADD FOREIGN KEY FK_PASSER_COMMANDE (ID_COM)
      REFERENCES COMMANDE (ID_COM) ;

