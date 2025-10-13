CREATE TABLE IF NOT EXISTS quotes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  author VARCHAR(63),
  message TEXT
);

INSERT INTO quotes (author, message) VALUES
('Albert Einstein', 'La vie, cest comme une bicyclette, il faut avancer pour ne pas perdre léquilibre.'),
('Oscar Wilde', 'Soyez vous-meme, les autres sont deja pris.');

CREATE TABLE IF NOT EXISTS recipe (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(63),
  description TEXT,
  time INT
);

INSERT INTO recipe (`title`, `description`, `time`) VALUES
('Les Misérables Lasagnes', 'Des couches et des couches... comme les chapitres d’un roman de Victor Hugo. Pâtes, sauce tomate, béchamel et larmes de joie quand c’est enfin gratiné. À la première bouchée, on se sent moins misérable.', 75),
('Tartare de Camus', 'Un plat absurde mais savoureux : bœuf cru, jaune d’œuf et réflexion existentielle. Se déguste froid, avec une pincée d’absurde et un zeste d’indifférence au monde. À servir avec une "Peste" de moutarde !', 25),
('À la recherche du flan perdu', 'Un dessert proustien : doux, nostalgique, et terriblement vanillé. Chaque cuillère déclenche une madeleine de souvenirs. À savourer lentement, le temps retrouvé viendra tout seul.', 50);