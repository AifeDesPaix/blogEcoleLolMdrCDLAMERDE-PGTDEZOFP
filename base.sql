drop TABLE IF EXISTS Utilisateur;
CREATE TABLE Utilisateur
(
  id_user int AUTO_INCREMENT PRIMARY KEY,
  nom varchar(30) UNIQUE NOT NULL,
  mdp varchar(50) UNIQUE NOT NULL,
  mail varchar(50) UNIQUE NOT NULL
);

INSERT INTO Utilisateur (nom, mdp, mail) VALUES ('connard', 'd944c282ee6ed52067cf17d37131942c', 'connard@connard.con');
INSERT INTO Utilisateur (nom, mdp, mail) VALUES ('jesus', 'd944c282ee6ed52067cf17d37131942c', 'jesus@connard.con');
INSERT INTO Utilisateur (nom, mdp, mail) VALUES ('suceur', 'd944c282ee6ed52067cf17d37131942c', 'suceur@connard.con');


drop TABLE IF EXISTS Article;
CREATE TABLE Article
(
  id_article int AUTO_INCREMENT PRIMARY KEY,
  id_user int NOT NULL,
  titre varchar(50) NOT NULL,
  texte varchar(600) NOT NULL,
  image varchar(120),
  FOREIGN KEY (id_user) REFERENCES Utilisateur(id_user)
);

INSERT INTO Article (id_user, titre, texte, image) VALUES (1, 'lol', 'mdr');
