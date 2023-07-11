create database projets4;

use projets4;

create table identifiant (
    ididentifiant int primary key not null auto_increment,
    email varchar(50) unique,
    motdepasse varchar(50),
    isadmin varchar(10)
);

create table genre(
    idgenre int primary key not null auto_increment,
    nomgenre varchar(30)
);

create table utilisateur(
    idutilisateur int primary key not null auto_increment,
    ididentifiant int,
    nom varchar(50),
    prenom varchar(50),
    idgenre int,
    datedenaissance date,
    taille double,
    poids double,
    foreign key(ididentifiant) references identifiant(ididentifiant),
    foreign key(idgenre) references genre(idgenre)
);

create table objectif(
    idobjectif int not null auto_increment primary key,
    nomobjectif varchar(50)
);

create table platregime(
    idplatregime int not null auto_increment primary key,
    idobjectif int,
    plat varchar(50),
    calorie double,
    prix double,
    foreign key(idobjectif) references objectif(idobjectif)
);

create table sportregime(
    idsportregime int not null auto_increment primary key,
    idobjectif int,
    sport varchar(50),
    calorieperdue double,
    foreign key(idobjectif) references objectif(idobjectif)
);

CREATE TABLE portemonnaie(
    idPorteMonnaie int primary key not null auto_increment,
    idutilisateur int,
    Monnaie varchar,
    foreign key(idutilisateur) references utilisateur(idutilisateur)
);

insert into identifiant(email,motdepasse,isadmin) values ('mahrasamisoa@gmail.com','mahefa','false');
insert into identifiant(email,motdepasse,isadmin) values ('admin@gmail.com','admin','true');

insert into genre(nomgenre) values ('HOMME');
insert into genre(nomgenre) values ('FEMME');

insert into utilisateur(ididentifiant,nom,prenom,idgenre,datedenaissance,taille,poids) values (1,'RASAMISOA','Mahefa',1,'2004-01-01',175,70);
insert into utilisateur(ididentifiant,nom,prenom,idgenre,datedenaissance,taille,poids) values (2,'TEST','admin',1,'2005-02-10',170,80);

insert into objectif(nomobjectif) values ('Perte de poid');
insert into objectif(nomobjectif) values ('Prise de poid');

insert into platregime(idobjectif,plat,calorie) values (1,'Salade verte',100);
insert into platregime(idobjectif,plat,calorie) values (1,'Riz avec legume saute',250);
insert into platregime(idobjectif,plat,calorie) values (1,'Salade de pate',200);
insert into platregime(idobjectif,plat,calorie) values (2,'Humberger',500);
insert into platregime(idobjectif,plat,calorie) values (2,'Pizza',1100);
insert into platregime(idobjectif,plat,calorie) values (2,'Lasagne',950);


insert into sportregime(idobjectif,sport,calorieperdue) value (1,'marathon',500);
insert into sportregime(idobjectif,sport,calorieperdue) value (1,'musculation',400);
insert into sportregime(idobjectif,sport,calorieperdue) value (1,'natation',300);
insert into sportregime(idobjectif,sport,calorieperdue) value (1,'tennis',500);