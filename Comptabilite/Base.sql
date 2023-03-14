create database gestioncomptable;

\c gestioncomptable;

create table NIF (
    idNIF serial,
    numero int,
    chemin varchar(50)
);

create table NS (
    idNS serial,
    numero int,
    chemin varchar(50)
);

create table NRCS (
    idNRCS serial,
    numero int,
    chemin varchar(50)
);

create table Utilisateur (
    idutilisateur serial,
    nom varchar(30),
    prenom varchar(30),
    mail varchar(30),
    mot_de_passe varchar(30)
);

create table Entreprise (
    nom varchar(30),
    objet varchar(30),
    siege varchar(30),
    email varchar(30),
    mot_de_passe(30),
    telephone varchar(30),
    telecopie varchar(30),
    date_creation date,
    date_debut date,
    nom_dirigeant varchar(30),
    nombre_employe int,
    idNIF int,
    idNS int,
    idNRCS int,
    Tenu_de_compte int,
    Devise_equivalence int,
    foreign key (idNIF) references NIF(idNIF),
    foreign key (idNS) references NS(idNS),
    foreign key (idNRCS) references NRCS(idNRCS)
);

create table Devise (
    iddevise serial primary key,
    nom varchar(30)
);

create table Equivalence (
    idequivalence serial,
    iddevise int,
    equivalence double precision,
    foreign key (iddevise) references Devise(iddevise)
);

create table Caract_compta (
    idcaract_compta
    debutExCompta date,
    finExoCompta date,
    iddevise int,
    devise_equivalence varchar(30),
    foreign key (iddevise) references Devise(iddevise)
);

create table Compte_generaux (
    idcompte_generaux serial primary key,
    numero int,
    intitule varchar(40)
);

create table Compte_tiers (
    idcompte_tiers serial,
    idcompte int,
    numero int,
    intitule varchar(40),
    foreign key (idcompte) references Compte(idcompte)
);

create table Code_journal (
    idcode_journal serial,
    code varchar(10),
    intitule varchar(30)
);



