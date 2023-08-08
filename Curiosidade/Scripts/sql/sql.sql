CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `nivel_educacao` varchar(100) DEFAULT NULL,
  `area_interesse` varchar(100) DEFAULT NULL,
  `experiencia_questionarios` varchar(100) DEFAULT NULL,
  `dispositivo_usado` varchar(50) DEFAULT NULL,
  `sistema_operacional` varchar(50) DEFAULT NULL,
  `preferencias_notificacao` varchar(100) DEFAULT NULL,
  `acessibilidade` varchar(100) DEFAULT NULL,
  `data_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
);

CREATE TABLE categorias(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome TEXT,
);

CREATE TABLE perguntas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    imagem VARCHAR(255),
    conteudo TEXT,
    autor int,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    categoria int,
    status ENUM('aberta', 'fechada') DEFAULT 'aberta',
    
    FOREIGN KEY (autor) REFERENCES usuarios(id),
    FOREIGN KEY (categoria) REFERENCES categorias(id)
);