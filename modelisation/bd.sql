-- ********************************************************
-- * Base de donnee initiale pour la base de donnee       *
-- ********************************************************

INSERT INTO Region (nom) VALUES 
('Adamaoua'), 
('Centre'), 
('Est'), 
('Extrême-Nord'), 
('Littoral'), 
('Nord'), 
('Nord-Ouest'), 
('Ouest'), 
('Sud'), 
('Sud-Ouest'), 
('Etranger');

-- Djérem,Faro-et-Déo,Mayo-Banyo,Mbéré,Vina
INSERT INTO `Departement` (nom,region_id) VALUES 
('Djérem',1), 
('Faro-et-Déo',1), 
('Mayo-Banyo',1), 
('Mbéré',1), 
('Vina',1);

-- Haute-Sanaga
-- Lekié
-- Mbam-et-Inoubou
-- Mbam-et-Kim
-- Méfou-et-Afamba
-- Méfou-et-Akono
-- Mfoundi
-- Nyong-et-Kéllé
-- Nyong-et-Mfoumou
-- Nyong-et-So'o

INSERT INTO `Departement` (nom,region_id) VALUES 
('Haute-Sanaga',2), 
('Lekié',2),
('Mbam-et-Inoubou',2),
('Mbam-et-Kim',2),
('Méfou-et-Afamba',2),
('Méfou-et-Akono',2),
('Mfoundi',2),
('Nyong-et-Kéllé',2),
('Nyong-et-Mfoumou',2),
('Nyong-et-So\'o',2);

-- Boumba-et-Ngoko
-- Haut-Nyong
-- Kadey
-- Lom-et-Djérem

INSERT INTO `Departement` (nom,region_id) VALUES 
('Boumba-et-Ngoko',3), 
('Haut-Nyong',3),
('Kadey',3),
('Lom-et-Djérem',3);

-- Diamaré
-- Logone-et-Chari
-- Mayo-Danay
-- Mayo-Kani
-- Mayo-Sava
-- Mayo-Tsanaga

INSERT INTO `Departement` (nom,region_id) VALUES 
('Diamaré',4), 
('Logone-et-Chari',4),
('Mayo-Danay',4),
('Mayo-Kani',4),
('Mayo-Sava',4),
('Mayo-Tsanaga',4);

-- Moungo
-- Nkam
-- Sanaga-Maritime
-- Wouri

INSERT INTO `Departement` (nom,region_id) VALUES 
('Moungo',5), 
('Nkam',5),
('Sanaga-Maritime',5),
('Wouri',5);

-- Bénoué
-- Faro
-- Mayo-Louti
-- Mayo-Rey

INSERT INTO `Departement` (nom,region_id) VALUES
('Bénoué',6), 
('Faro',6),
('Mayo-Louti',6),
('Mayo-Rey',6);

-- Boyo
-- Bui
-- Donga-Mantung
-- Menchum
-- Mezam
-- Momo
-- Ngo-Ketunjia

INSERT INTO `Departement` (nom,region_id) VALUES
('Boyo', 7),
('Bui', 7),
('Donga-Mantung', 7),
('Menchum', 7),
('Mezam', 7),
('Momo', 7),
('Ngo-Ketunjia', 7);

-- Bamboutos
-- Haut-Nkam
-- Hauts-Plateaux
-- Koung-Khi
-- Menoua
-- Mifi
-- Ndé
-- Noun
INSERT INTO `Departement`(nom, region_id) VALUES
('Bamboutos', 8),
('Haut-Nkam', 8),
('Hauts-Plateaux', 8),
('Koung-Khi', 8),
('Menoua', 8),
('Mifi', 8),
('Ndé', 8),
('Noun', 8);

-- Dja-et-Lobo
-- Mvila
-- Océan
-- Vallée-du-Ntem
INSERT INTO `Departement`(nom, region_id) VALUES
('Dja-et-Lobo', 9),
('Mvila', 9),
('Océan', 9),
('Vallée-du-Ntem', 9);

-- Fako
-- Koupé-Manengouba
-- Lebialem
-- Manyu
-- Meme
-- Ndian
INSERT INTO `Departement` (nom, region_id) VALUES
('Fako', 10),
('Koupé-Manengouba', 10),
('Lebialem', 10),
('Manyu', 10),
('Meme', 10),
('Ndian', 10);

INSERT INTO `Departement`(nom, region_id) VALUES
('Entranger', 11);

UPDATE `Departement`
SET nom='Etranger'
WHERE region_id = 11;

INSERT INTO `Cycle`(nom) VALUES
('Niveau 1'),
('Niveau 3');

INSERT INTO `Parcours`(nom) VALUES
('Informatique et telecommunications'),
('Energie renouvelables'),
('Génie Civil'),
('Hydraulique et Maitrise des Eaux'),
('Agriculture, Elevage et Produits Derives'),
('Sciences Environnementales'),
('Genie textile et Cuir'),
('Meteorologie, Hydrologie et Pedologie'),
('Ingenierie des Arts Numeriques'),
('Ingenierie des Humanites Numeriques');

INSERT INTO `CentreExamen`(nom, adresse) VALUES
('Douala', 'Lycee technique de Douala BASSA'),
('Dschang', ''),
('Garoua', ''),
('Maraou', 'College de l\'espoir'),
('Kousseri', ''),
('Ngaoundere', ''),
('Yaounde', '');

INSERT INTO `DiplomeType`(nom, cycle_id) VALUES
('Baccalaureat Scientifique', 1),
('GCE Advance level in Sciences and Technology', 1),
('Licence Academique', 2),
('Diplome universitaire de technologie', 2)


