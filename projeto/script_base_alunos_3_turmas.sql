/*
Modelo para criar a tabela turmas
*/

CREATE TABLE turmas ( 
  id_turma int AUTO_INCREMENT, 
  codigo_disciplina varchar(3) NOT NULL, /* Abreviatura de 3 letras da disciplina. Ex.: BDO */
  nome_disciplina varchar(50) NOT NULL, /* Nome da disciplina. Ex.: Banco de Dados */
  ano int NOT NULL, /* Ano de oferta da turma */
  id_curso int NOT NULL, /* Curso de oferta da turma */
  PRIMARY KEY (id_turma) 
);
ALTER TABLE turmas ADD CONSTRAINT fk_curso2 FOREIGN KEY (id_curso) REFERENCES cursos (id_curso);


