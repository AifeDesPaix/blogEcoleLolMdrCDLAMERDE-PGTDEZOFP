drop TABLE IF EXISTS Utilisateur;

CREATE TABLE Utilisateur
(
  id_user int AUTO_INCREMENT PRIMARY KEY,
  nom varchar(30) UNIQUE NOT NULL,
  mdp varchar(50) UNIQUE NOT NULL,
  mail varchar(50) UNIQUE NOT NULL
);

INSERT INTO Utilisateur (nom, mdp, mail) VALUES ('connard', 'connard', 'connard@connard.con');

drop TABLE IF EXISTS Article;

CREATE TABLE Article
(
  id_article int AUTO_INCREMENT PRIMARY KEY,
  titre varchar(50) NOT NULL,
  texte varchar(600) NOT NULL,
  image varchar(120)
);

UPDATE Utilisateur set mdp = 'd944c282ee6ed52067cf17d37131942c';
