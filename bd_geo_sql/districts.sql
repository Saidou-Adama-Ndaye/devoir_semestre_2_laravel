-- Création de la table "regions"
CREATE TABLE districts (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  population INT,
  area FLOAT
);

-- Insertions dans la table "regions"
INSERT INTO districts (id, name, population, area)
VALUES
  (1, 'Dakar', 3644825, 547),
  (2, 'Thiès', 1572815, 648),
  (3, 'Kaolack', 1124826, 312),
  (4, 'Saint-Louis', 1119204, 19),
  (5, 'Ziguinchor', 581608, 726);
