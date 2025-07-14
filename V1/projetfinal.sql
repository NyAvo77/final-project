create database emprunt;
use emprunt;

create table emprunt_membre(
    id_membre INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    dtn DATE NOT NULL,
    genre VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    ville VARCHAR(50) NOT NULL,
    mdp VARCHAR(255) NOT NULL,
    image_profil VARCHAR(255) NOT NULL
);

create table emprunt_categorie(
    id_categorie INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom_categorie VARCHAR(50) NOT NULL
);

create table emprunt_objet(
    id_objet INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom_objet VARCHAR(50) NOT NULL,
    id_categorie INT NOT NULL,
    id_membre INT NOT NULL,
    FOREIGN KEY (id_categorie) REFERENCES emprunt_categorie(id_categorie)
);

create table emprunt_image_objet(
    id_image INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_objet INT NOT NULL,
    nom_image VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_objet) REFERENCES emprunt_objet(id_objet)
);

create table emprunt_emprunt(
    id_emprunt INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_objet INT NOT NULL,
    id_membre INT NOT NULL,
    date_emprunt DATE NOT NULL,
    date_retour DATE NOT NULL,
    FOREIGN KEY (id_objet) REFERENCES emprunt_objet(id_objet),
    FOREIGN KEY (id_membre) REFERENCES emprunt_membre(id_membre)
);