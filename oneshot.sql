create database oneshot;

CREATE TABLE fotos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(15) NOT NULL,
    apellido VARCHAR(15) NOT NULL,
    numero_foto VARCHAR(12) NOT NULL,
    telefono VARCHAR(20),
    digital TINYINT(1) NOT NULL
);

SELECT * FROM fotos;
