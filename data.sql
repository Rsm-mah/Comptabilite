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