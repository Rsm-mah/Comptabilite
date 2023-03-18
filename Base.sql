create database gestioncompta;

\c gestioncompta;

--TSY IZY
------------------------------------------------------------
create table NIF (
    id_nif int primary key auto_increment,
    numero varchar(40),
    chemin varchar(150)
);

create table NS (
    id_ns int primary key auto_increment,
    numero varchar(40),
    chemin varchar(150)
);

create table NRCS (
    id_nrcs int primary key auto_increment,
    numero varchar(40),
    chemin varchar(150)
);
-------------------------------------------------------

create table Devise (
    iddevise int primary key auto_increment,
    nom varchar(30)
);

create table Equivalence (
    idequivalence int primary key auto_increment,
    iddevise int,
    equivalence double,
    foreign key (iddevise) references Devise(iddevise)
);

create table Entreprise (
    nom varchar(50),
    nom_dirigeant varchar(150),
    objet varchar(150),
    siege varchar(100),
    email varchar(40),
    mot_de_passe varchar(30),
    telephone varchar(30),
    nb_employe int,
    date_creation date,
    date_debut date,
    numero_nif varchar(20), 
    chemin_nif varchar(100),
    numero_ns varchar(20),
    chemin_ns varchar(100),
    numero_nrcs varchar(20),
    chemin_nrcs varchar(100),
    devise_tenu_compte int,

    foreign key (devise_tenu_compte) references Devise(iddevise)
    
);



create table Caract_compta (
    idcaract_compta int primary key auto_increment,
    debutExCompta date,
    finExoCompta date,
    iddevise int,
    devise_equivalence varchar(30),
    foreign key (iddevise) references Devise(iddevise)
);

create table Compte_generaux (
    idcompte_generaux int primary key auto_increment,
    numero varchar(10),
    intitule varchar(35)
);

create table Compte_tiers (
    idcompte_tiers int primary key auto_increment,
    idcompte_generaux int,
    numero varchar(10),
    intitule varchar(35),
    foreign key (idcompte_generaux) references Compte_generaux(idcompte_generaux)
);

create table Code_journal (
    idcode_journal int primary key auto_increment,
    code varchar(10),
    intitule varchar(35)
);


create table Utilisateur (
    idutilisateur int primary key auto_increment,
    mail varchar(60),
    mot_de_passe varchar(30)
);


insert into Devise(nom) values('Ariary');
insert into Devise(nom) values('Euro');
insert into Devise(nom) values('Dollars');

insert into Equivalence(iddevise, equivalence) values(1, 1.0);
insert into Equivalence(iddevise, equivalence) values(2, 3800.0);
insert into Equivalence(iddevise, equivalence) values(3, 4000.0);


insert into Utilisateur(mail, mot_de_passe) values('rakoto@gmail.com', 'azerty');
insert into Utilisateur(mail, mot_de_passe) values('rabe@gmail.com', 'azerty');

insert into Compte_generaux(numero, intitule) values('10000', 'Capital et reserves');
insert into Compte_generaux(numero, intitule) values('10100', 'Capital');
insert into Compte_generaux(numero, intitule) values('10200', 'Fonds fiduciaires');
insert into Compte_generaux(numero, intitule) values('20000', 'Immobilisation incorporelles');
insert into Compte_generaux(numero, intitule) values('20100', "Frais d 'etablissement");
insert into Compte_generaux(numero, intitule) values('20700', "Fonds commercial");


insert into Compte_tiers(idcompte_generaux,numero,intitule) values (2,'10110','Capital souscrit - non appelé');
insert into Compte_tiers(idcompte_generaux,numero,intitule) values (2,'10120','Capital souscrit - appelé, non versé');
insert into Compte_tiers(idcompte_generaux,numero,intitule) values (2,'10130','Capital souscrit - appelé, versé');
insert into Compte_tiers(idcompte_generaux,numero,intitule) values (5,'20110','Frais de constitution');
insert into Compte_tiers(idcompte_generaux,numero,intitule) values (5,'20120','Frais de premier établissement');
insert into Compte_tiers(idcompte_generaux,numero,intitule) values (5,'20130',"Frais d'augmentation de capital");


insert into Code_journal(code,intitule) values ('AC','Achats');
insert into Code_journal(code,intitule) values ('AN','A nouveau');
insert into Code_journal(code,intitule) values ('BN','Banque BNI');
insert into Code_journal(code,intitule) values ('BO','Banque BOA');
insert into Code_journal(code,intitule) values ('CA','Caisse');
insert into Code_journal(code,intitule) values ('OB','Opérations diverses');
insert into Code_journal(code,intitule) values ('VL','Ventes locales');
insert into Code_journal(code,intitule) values ('VE',"Ventes à l'exportation");


CREATE OR REPLACE VIEW deviseEquiv AS SELECT Devise.iddevise, Devise.nom, Equivalence.idequivalence, Equivalence.equivalence FROM Devise JOIN Equivalence ON Devise.iddevise = Equivalence.iddevise;