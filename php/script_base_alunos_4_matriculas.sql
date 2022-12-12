/*
Modelo para criar a tabela matriculas
*/

CREATE TABLE matriculas ( 
  id_matricula int AUTO_INCREMENT, 
  id_aluno int NOT NULL, /* ID da alunos que está sendo matriculado em uma turma */
  id_turma int NOT NULL, /* ID da turma onde o aluno está sendo matriculado */
  data timestamp NOT NULL,
  PRIMARY KEY (id_matricula) 
);
ALTER TABLE matriculas ADD CONSTRAINT fk_alunos FOREIGN KEY (id_aluno) REFERENCES alunos (id_aluno);
ALTER TABLE matriculas ADD CONSTRAINT fk_turmas FOREIGN KEY (id_turma) REFERENCES turmas (id_turma);
ALTER TABLE matriculas ADD CONSTRAINT uk_matriculas UNIQUE (id_aluno, id_turma);


