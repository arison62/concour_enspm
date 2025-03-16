INSERT INTO regions(nom_regions) VALUES
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

INSERT INTO departements(nom_departement, region_id) VALUES
('Djérem',1), 
('Faro-et-Déo',1), 
('Mayo-Banyo',1), 
('Mbéré',1), 
('Vina',1)

('Haute-Sanaga',2), 
('Lekié',2),
('Mbam-et-Inoubou',2),
('Mbam-et-Kim',2),
('Méfou-et-Afamba',2),
('Méfou-et-Akono',2),
('Mfoundi',2),
('Nyong-et-Kéllé',2),
('Nyong-et-Mfoumou',2),
('Nyong-et-So\'o',2)

('Boumba-et-Ngoko',3), 
('Haut-Nyong',3),
('Kadey',3),
('Lom-et-Djérem',3)

('Diamaré',4), 
('Logone-et-Chari',4),
('Mayo-Danay',4),
('Mayo-Kani',4),
('Mayo-Sava',4),
('Mayo-Tsanaga',4)

('Moungo',5), 
('Nkam',5),
('Sanaga-Maritime',5),
('Wouri',5)

('Bénoué',6), 
('Faro',6),
('Mayo-Louti',6),
('Mayo-Rey',6)

('Boyo', 7),
('Bui', 7),
('Donga-Mantung', 7),
('Menchum', 7),
('Mezam', 7),
('Momo', 7),
('Ngo-Ketunjia', 7)

('Bamboutos', 8),
('Haut-Nkam', 8),
('Hauts-Plateaux', 8),
('Koung-Khi', 8),
('Menoua', 8),
('Mifi', 8),
('Ndé', 8),
('Noun', 8)

('Dja-et-Lobo', 9),
('Mvila', 9),
('Océan', 9),
('Vallée-du-Ntem', 9)

('Fako', 10),
('Koupé-Manengouba', 10),
('Lebialem', 10),
('Manyu', 10),
('Meme', 10),
('Ndian', 10)
('Etranger', 11);

INSERT INTO nationalites(code, libelle) VALUES
('CMR', 'Camerounais'),
('ETR', 'Etranger')

INSERT INTO cycles(code_cycles, nom_cycles) VALUES
('NIV1', 'Niveau 1'),
('NIV3', 'Niveau 3');

INSERT INTO parcours(code_parcours, nom_parcours) VALUES
('INFOTEL', 'Informatique et Telecommunications'),
('ENREN', 'Energie renouvelables'),
('GC', 'Genie Civil'),
('GTC', 'Genie textile et Cuir'),
('HME', 'Hydraulique et Maitrise des Eaux'),
('AGEP', 'Agriculture, Elevage et Produits Derives'),


INSERT INTO exam_centers(nom_centre, adresse, departement_id) VALUES
('Maroua', 'College de l\'espoir', 20),
('Douala', 'Lycee technique de Douala BASSA', 29),
('Yaounde', 'Universite de Yaounde 1', 28),
('Dschang', 'Universite de Dschang', 45);

