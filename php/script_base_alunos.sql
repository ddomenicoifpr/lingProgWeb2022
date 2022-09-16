/*
Modelo de base de dados inicial para a implementação do 
*/

CREATE TABLE cursos ( 
  id_curso int AUTO_INCREMENT NOT NULL, 
  nome varchar(70) NOT NULL, 
  PRIMARY KEY (id_curso) 
);

CREATE TABLE alunos (
  id_aluno int AUTO_INCREMENT NOT NULL, 
  nome varchar(70) NOT NULL, 
  idade int NOT NULL,
  estrangeiro varchar(1) NOT NULL, /* (S) Sim ou (N) Não */
  id_curso int NOT NULL, 
  PRIMARY KEY (id_aluno)
);
ALTER TABLE alunos ADD CONSTRAINT fk_curso FOREIGN KEY (id_curso) REFERENCES cursos (id_curso);

/*INSERTs cursos*/
INSERT INTO cursos (nome) VALUES ('Técnico em Desenvolvimento de Sistemas');
INSERT INTO cursos (nome) VALUES ('Tecnólogo em Desenvolvimento de Sistemas');
INSERT INTO cursos (nome) VALUES ('Ciência da Computação');
INSERT INTO cursos (nome) VALUES ('Sistemas de Informação');

