-- Création de la table "arrondissements"
CREATE TABLE upazilas (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  district_id INT,
  population INT,
  area FLOAT,
  FOREIGN KEY (district_id) REFERENCES districts(id)
);

-- Insertions dans la table "arrondissements" pour chaque région
-- Région Dakar
INSERT INTO upazilas (id, name, district_id, population, area)
VALUES
  (1, 'Dakar Plateau', 1, 40000, 2.5),
  (2, 'Guediawaye', 1, 288452, 10),
  (3, 'Parcelles Assainies', 1, 530965, 16),
  (4, 'Yoff', 1, 82700, 5),
  (5, 'Grand Dakar', 1, 189984, 7),
  (6, 'Pikine', 1, 1072740, 53),
  (7, 'Rufisque', 1, 275084, 121),
  (8, 'Bambilor', 1, 95042, 37),
  (9, 'Keur Massar', 1, 253438, 18),
  (10, 'Diamniadio', 1, 57387, 28);

-- Région Thiès
INSERT INTO upazilas (id, name, district_id, population, area)
VALUES
  (11, 'Thiès-Nord', 2, 180000, 25),
  (12, 'Thiès-Sud', 2, 154350, 35),
  (13, 'Tivaouane', 2, 82700, 5),
  (14, 'Mbour', 2, 189984, 7),
  (15, 'Pout', 2, 1072740, 53),
  (16, 'Diourbel', 2, 275084, 121),
  (17, 'Touba', 2, 95042, 37),
  (18, 'Tassette', 2, 253438, 18),
  (19, 'Darou Khoudoss', 2, 57387, 28),
  (20, 'Notto', 2, 57387, 28);

-- Région Kaolack
INSERT INTO upazilas (id, name, district_id, population, area)
VALUES
  (21, 'Guinguinéo', 3, 180000, 25),
  (22, 'Nioro du Rip', 3, 154350, 35),
  (23, 'Kaolack', 3, 82700, 5),
  (24, 'Gossas', 3, 189984, 7),
  (25, 'Ndoffane', 3, 1072740, 53),
  (26, 'Kahone', 3, 275084, 121),
  (27, 'Ndioum', 3, 95042, 37),
  (28, 'Sokone', 3, 253438, 18),
  (29, 'Fatick', 3, 57387, 28),
  (30, 'Birkelane', 3, 57387, 28);
-- Pour la région Saint-Louis
INSERT INTO upazilas (id, name, district_id, population, area)
VALUES
  (31, 'Saint-Louis Nord', 4, 180000, 25),
  (32, 'Saint-Louis Sud', 4, 154350, 35),
  (33, 'Dagana', 4, 82700, 5),
  (34, 'Podor', 4, 189984, 7),
  (35, 'Pété', 4, 1072740, 53),
  (36, 'Médina Sabakh', 4, 275084, 121),
  (37, 'Ndioum', 4, 95042, 37),
  (38, 'Ranérou', 4, 253438, 18),
  (39, 'Linguère', 4, 57387, 28),
  (40, 'Richard Toll', 4, 57387, 28);

-- Pour la région Ziguinchor
INSERT INTO upazilas (id, name, district_id, population, area)
VALUES
  (41, 'Ziguinchor Nord', 5, 180000, 25),
  (42, 'Ziguinchor Sud', 5, 154350, 35),
  (43, 'Bignona', 5, 82700, 5),
  (44, 'Oussouye', 5, 189984, 7),
  (45, 'Sédhiou', 5, 1072740, 53),
  (46, 'Bounkiling', 5, 275084, 121),
  (47, 'Ziguinchor Est', 5, 95042, 37),
  (48, 'Ziguinchor Ouest', 5, 253438, 18),
  (49, 'Kolda', 5, 57387, 28),
  (50, 'Tambacounda', 5, 57387, 28);