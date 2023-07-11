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
    numero varchar(12),
    intitule varchar(35)
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

create table Num_pointage_piece (
    idnumpointagepiece int primary key auto_increment,
    reference varchar(10),
    significations varchar(35)
);

create table Mois (
    idmois int primary key auto_increment,
    numMois varchar(5),
    mois varchar(30)
);

create table Journal (
    idjournal int primary key auto_increment,
    idcode_journal int,
    idmois int,
    jour int,
    num_piece int,
    ref_piece varchar(35),
    num_compte int,
    ecriture varchar(35),
    devise varchar(20),
    quantite int,
    montant_devise double,
    debit decimal,
    credit decimal,
    foreign key (idcode_journal) references Code_journal(idcode_journal),
    foreign key (idmois) references Mois(idmois)
);


create table Balance (
    idbalance int primary key auto_increment,
    num_compte int,
    intitule varchar(35),
    debit decimal,
    credit decimal
);

create table Grand_Livre (
    num_compte int,
    date varchar(10),
    num_piece int,
    ref_piece varchar(35),
    ecriture varchar(35),
    debit decimal,
    credit decimal
);

alter table Grand_Livre modify column date date;

create table Unite (
    idunite int primary key auto_increment,
    unite varchar(40)
);

create table Facture (
    idfacture int primary key auto_increment,
    date_facture date,
    idcompte_tiers int,
    ref_bc varchar(40),
    objet varchar(40),
    foreign key(idcompte_tiers) references Compte_tiers(idcompte_tiers)
);

create table DetailFacture (
    iddetailFacture int primary key auto_increment,
    idfacture int,
    designation varchar(50),
    idunite int,
    nombre int,
    prix_unitaire decimal(65,2),
    montant_ht decimal(65,2),
    foreign key(idfacture) references Facture(idfacture),
    foreign key(idunite) references Unite(idunite)
);

create table Taxe (
    idtaxe int primary key auto_increment,
    taux double
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
insert into Compte_tiers(idcompte_generaux,numero,intitule) values (6,'20710',"Fonds1");
insert into Compte_tiers(idcompte_generaux,numero,intitule) values (6,'20720',"Fonds2");
insert into Compte_tiers(idcompte_generaux,numero,intitule) values (6,'20730',"Fonds3");


insert into Code_journal(code,intitule) values ('AC','Achats');
insert into Code_journal(code,intitule) values ('AN','A nouveau');
insert into Code_journal(code,intitule) values ('BN','Banque BNI');
insert into Code_journal(code,intitule) values ('BO','Banque BOA');
insert into Code_journal(code,intitule) values ('CA','Caisse');
insert into Code_journal(code,intitule) values ('OB','Opérations diverses');
insert into Code_journal(code,intitule) values ('VL','Ventes locales');
insert into Code_journal(code,intitule) values ('VE',"Ventes à l'exportation");

insert into Num_pointage_piece(reference,significations) values ('AC/','Avoir client');
insert into Num_pointage_piece(reference,significations) values ('AF/','Avoir fournisseur');
insert into Num_pointage_piece(reference,significations) values ('BE/',"Bordereau d'escompte");
insert into Num_pointage_piece(reference,significations) values ('CH/','Chèque');
insert into Num_pointage_piece(reference,significations) values ('FC/','Facture client');
insert into Num_pointage_piece(reference,significations) values ('FF/','Facture fournisseur');
insert into Num_pointage_piece(reference,significations) values ('LC/','Lettre de change');
insert into Num_pointage_piece(reference,significations) values ('PC/','Pièce de caisse');
insert into Num_pointage_piece(reference,significations) values ('RL/','Relevé');
insert into Num_pointage_piece(reference,significations) values ('SA/','Salaire');
insert into Num_pointage_piece(reference,significations) values ('VI/','Virement');

insert into Mois(numMois,mois) values ('01','JANVIER');
insert into Mois(numMois,mois) values ('02','FEVRIER');
insert into Mois(numMois,mois) values ('03','MARS');
insert into Mois(numMois,mois) values ('04','AVRIL');
insert into Mois(numMois,mois) values ('05','MAI');
insert into Mois(numMois,mois) values ('06','JUIN');
insert into Mois(numMois,mois) values ('07','JUILLET');
insert into Mois(numMois,mois) values ('08','AOUT');
insert into Mois(numMois,mois) values ('09','SEPTEMBRE');
insert into Mois(numMois,mois) values ('10','OCTOBRE');
insert into Mois(numMois,mois) values ('11','NOVEMBRE');
insert into Mois(numMois,mois) values ('12','DECEMBRE');

insert into Unite(unite) values ('KG');
insert into Unite(unite) values ('LITRE');


CREATE OR REPLACE VIEW deviseEquiv AS SELECT Devise.iddevise, Devise.nom, Equivalence.idequivalence, Equivalence.equivalence FROM Devise JOIN Equivalence ON Devise.iddevise = Equivalence.iddevise;