#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: profil
#------------------------------------------------------------

CREATE TABLE profil(
        id_profil Int  Auto_increment  NOT NULL ,
        type      Varchar (50) NOT NULL
	,CONSTRAINT profil_PK PRIMARY KEY (id_profil)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user   Int  Auto_increment  NOT NULL ,
        nom       Varchar (50) NOT NULL ,
        prenom    Varchar (50) NOT NULL ,
        login     Varchar (50) NOT NULL ,
        mdp       Varchar (50) NOT NULL ,
        id_profil Int NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (id_user)

	,CONSTRAINT user_profil_FK FOREIGN KEY (id_profil) REFERENCES profil(id_profil)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: penalite
#------------------------------------------------------------

CREATE TABLE penalite(
        id_penalite Int  Auto_increment  NOT NULL ,
        prix        Float NOT NULL ,
        type        Varchar (50) NOT NULL ,
        date/heure  Datetime NOT NULL
	,CONSTRAINT penalite_PK PRIMARY KEY (id_penalite)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: balance_injure
#------------------------------------------------------------

CREATE TABLE balance_injure(
        id_penalite     Int NOT NULL ,
        id_user         Int NOT NULL ,
        date            Datetime NOT NULL ,
        id_user_balance Varchar (50) NOT NULL
	,CONSTRAINT balance_injure_PK PRIMARY KEY (id_penalite,id_user)

	,CONSTRAINT balance_injure_penalite_FK FOREIGN KEY (id_penalite) REFERENCES penalite(id_penalite)
	,CONSTRAINT balance_injure_user0_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;

