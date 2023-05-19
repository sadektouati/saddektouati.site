set names utf8;

drop TABLE Produit ;
drop TABLE Fournisseur ;
drop TABLE Categorie ;

CREATE TABLE Fournisseur (
    	id int primary key not null,
    	nom varchar(50) not null, 
	    pays varchar(50) not null
);
CREATE TABLE Categorie (
	id int primary key not null,
    nom varchar(50) not null
);
CREATE TABLE Produit (
    	id int primary key not null,
    	nom varchar(50) not null,
    	prix int not null,
    	idFournisseur int not null,
	    idCategorie int not null,
    	FOREIGN KEY (idFournisseur) references Fournisseur(id),    
    	FOREIGN KEY (idCategorie) references Categorie(id)    
);

INSERT INTO `Categorie` (`id`, `nom`) VALUES
(1, 'Jeux vidéos et consoles'),
(2, 'Électronique, télévision, etc.');

INSERT INTO `Fournisseur` (`id`, `nom`, `pays`) VALUES
(1, 'Sony', 'Japon'),
(2, 'Nintendo', 'Japon'),
(3, 'Microsoft', 'USA'),
(4, 'Vizio', 'USA'),
(5, 'Samsung', 'Corée du Sud');

INSERT INTO `Produit` (`id`, `nom`, `prix`, `idFournisseur`, `idCategorie`) VALUES
(1, 'Switch', 400, 2, 1),
(2, 'PS5', 700, 1, 1),
(3, 'Bravia 50 pouces', 1000, 1, 2),
(4, 'QLED 8K TV ', 4000, 5, 2),
(5, 'Xbox Series X', 700, 3, 1),
(6, 'Xbox Series S', 500, 3, 1);

-- Trouver les requêtes pour :
-- a) Afficher le nom du produit, le prix du produit ainsi que le nom de son fournisseur pour tous les produits.
select produit.nom nom_produit, prix, fournisseur.nom nom_fournisseur from produit join fournisseur on idFournisseur = fournisseur.id;

-- b) SANS FAIRE DE JOINTURE, afficher l’ID de chaque fournisseur et le prix moyen de ses produits.
select idFournisseur as id, avg(prix) prix_moyen from produit group by idFournisseur;

-- c) Afficher le nom de chaque catégorie ainsi que le prix moyen des produits de cette catégorie.
select Categorie.nom nom_categorie, avg(prix) prix_moyen from produit join Categorie on idCategorie=categorie.id group by idCategorie; 

-- d) Afficher le nom de chaque pays et le prix moyen des produits qui viennent de ce pays, ordonné par ordre alphabétique de pays.
select pays, avg(prix) prix_moyen from produit join fournisseur on idFournisseur = fournisseur.id group by pays order by pays;

-- e) Afficher le nom des fournisseurs dont le prix moyen des produits est plus grand que 100$.
select fournisseur.nom from produit join fournisseur on idFournisseur = fournisseur.id group by idFournisseur having avg(prix) > 100;

-- f) Afficher le nom de chaque pays et le nombre de produits qui viennent de ce pays, mais seulement pour les pays d’où viennent au moins 2 produits dans votre inventaire.
select pays, count(*) nombre_produit from produit join fournisseur on idFournisseur = fournisseur.id group by pays having count(*) >= 2;

-- g) Afficher chaque catégorie de produit ainsi que le prix du produit le plus cher qui appartient à cette catégorie, ordonnée par prix maximum ascendant.
select Categorie.nom nom_categorie, max(prix) prix_max from produit join Categorie on idCategorie=categorie.id group by categorie.nom order by 2; 

-- h) Afficher le nom des fournisseurs dont le nombre de produits qui sont d'un prix de moins de 
-- 1000$ est plus grand que 2, ordonné par nombre de produits de moins de 1000$ descendant.
select fournisseur.nom from produit join fournisseur on idFournisseur = fournisseur.id where prix < 1000 group by idFournisseur having count(*) > 2 order by count(*) desc;

-- Un petit extra qui ne compte pas pour les curieux: 
-- Afficher le nom de chaque fournisseur ainsi que le nom et le prix de leur produit le plus dispendieux. C’est pas une facile!!! ;)
select fournisseur.nom, produit.nom, produit.prix from fournisseur join (select nom, max(prix) as prix_max, idFournisseur from produit group by idFournisseur) as produit on idFournisseur = fournisseur.id;
select (select nom from fournisseur where id=idFournisseur) nom_fournisseur, nom nom_produit, max(prix) as prix_max from produit group by idFournisseur;
