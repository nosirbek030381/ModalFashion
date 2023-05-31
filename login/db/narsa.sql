CREATE TABLE images (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  malumot TEXT,
  sana DATE,
  image_name VARCHAR(255),
  mime_type VARCHAR(255),
  image_data LONGBLOB
);
