create database emprunt;
use emprunt;

create table emprunt_membre(
    id_membre INT  AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) ,
    dtn DATE ,
    genre VARCHAR(10) ,
    email VARCHAR(100) ,
    ville VARCHAR(50) ,
    mdp VARCHAR(255) ,
    image_profil VARCHAR(255) 
);

create table emprunt_categorie(
    id_categorie INT  AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(50) 
);

create table emprunt_objet(
    id_objet INT  AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(50) ,
    id_categorie INT ,
    id_membre INT ,
    FOREIGN KEY (id_categorie) REFERENCES emprunt_categorie(id_categorie)
);

create table emprunt_image_objet(
    id_image INT  AUTO_INCREMENT PRIMARY KEY,
    id_objet INT ,
    nom_image VARCHAR(255) ,
    FOREIGN KEY (id_objet) REFERENCES emprunt_objet(id_objet)
);

create table emprunt_emprunt(
    id_emprunt INT  AUTO_INCREMENT PRIMARY KEY,
    id_objet INT ,
    id_membre INT ,
    date_emprunt DATE ,
    date_retour DATE ,
    FOREIGN KEY (id_objet) REFERENCES emprunt_objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES emprunt_membre(id_membre)
);

INSERT INTO emprunt_membre (nom, dtn, genre, email, ville, mdp)
VALUES 
  ( 'Marie','1995-03-15', 'Femme', 'marie@email.com', 'Paris', 'marie'),
  ('Alice', '1990-05-12', 'Femme', 'alice@email.com', 'Paris', 'alice'),
  ('Bob', '1985-11-23', 'Homme', 'bob@email.com', 'Lyon', 'bob'),
  ('Claire', '1992-07-08', 'Femme', 'claire@email.com', 'Marseille', 'claire');

INSERT INTO emprunt_categorie (nom_categorie)
VALUES 
  ('Livres'),
  ('Jeux'),
  ('Outils'),
  ('Électronique');

INSERT INTO emprunt_objet (nom_objet, id_categorie, id_membre)
VALUES
  ('Livre A', 1, 1), ('Livre B', 1, 1), ('Jeu A', 2, 1), ('Jeu B', 2, 1), ('Outil A', 3, 1), ('Outil B', 3, 1), ('Électronique A', 4, 1), ('Électronique B', 4, 1), ('Livre C', 1, 1), ('Jeu C', 2, 1),
  ('Livre D', 1, 2), ('Livre E', 1, 2), ('Jeu D', 2, 2), ('Jeu E', 2, 2), ('Outil C', 3, 2), ('Outil D', 3, 2), ('Électronique C', 4, 2), ('Électronique D', 4, 2), ('Livre F', 1, 2), ('Jeu F', 2, 2),
  ('Livre G', 1, 3), ('Livre H', 1, 3), ('Jeu G', 2, 3), ('Jeu H', 2, 3), ('Outil E', 3, 3), ('Outil F', 3, 3), ('Électronique E', 4, 3), ('Électronique F', 4, 3), ('Livre I', 1, 3), ('Jeu I', 2, 3),
  ('Livre J', 1, 4), ('Livre K', 1, 4), ('Jeu J', 2, 4), ('Jeu K', 2, 4), ('Outil G', 3, 4), ('Outil H', 3, 4), ('Électronique G', 4, 4), ('Électronique H', 4, 4), ('Livre L', 1, 4), ('Jeu L', 2, 4);

INSERT INTO emprunt_emprunt (id_objet, id_membre, date_emprunt, date_retour)
VALUES
  (1, 2, '2025-07-01', '2025-07-10'),
  (2, 3, '2025-07-02', '2025-07-11'),
  (3, 4, '2025-07-03', '2025-07-12'),
  (4, 1, '2025-07-04', '2025-07-13'),
  (5, 2, '2025-07-05', '2025-07-14'),
  (6, 3, '2025-07-06', '2025-07-15'),
  (7, 4, '2025-07-07', '2025-07-16'),
  (8, 1, '2025-07-08', '2025-07-17'),
  (9, 2, '2025-07-09', '2025-07-18'),
  (10, 3, '2025-07-10', '2025-07-19');

