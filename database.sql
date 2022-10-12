create table PERSONA (
	ci varchar(20) not null,
	nombreCompleto varchar(100),
	fechaNacimiento date,
	departamento varchar(2),
	primary key(ci)
);

create table ACCESO (
	ci varchar(20) not null,
	usuario varchar(50),
	password varchar(30),
	rol varchar(20),
	primary key (ci),
	foreign key (ci) references PERSONA(ci)
);

create table INSCRIPCION (
	ciEstudiante varchar(20) not null,
	sigla varchar(10),
	nota1 int,
	nota2 int,
	nota3 int,
	notaFinal int,
	primary key (ciEstudiante),
	foreign key (ciEstudiante) references PERSONA(ci)
);

insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441659','Enrique Luis Barra Paredes','2001/05/03','01');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441658','Vladimir Torrez Mamani','2001/05/06','02');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441657','Diego Perez Velazques','2001/05/05','03');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441656','Herenesto Hermogones Melendrez','2001/05/08','04');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441655','Fernando Herrera','2001/12/03','04');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441654','Juan Torre Valdez','2001/11/06','05');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441653','Miguel Angel Duran','2001/03/05','06');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441652','William Barra Paredes','2001/01/12','07');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441651','Rogelio Barra Barra','2000/03/10','08');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441650','Alicia Paredes Vargas','1996/05/05','09');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441640','Angel Vargas Choque','1998/01/06','03');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441641','Jheny Choque Mamani','1998/02/05','04');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441642','Miriam Mamani Mamani','1999/03/03','05');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441643','Ernesto Perez Choque','2005/04/06','03');
insert into PERSONA (ci,nombreCompleto,fechaNacimiento,departamento) VALUES ('8441644','Jose Herrera Perez','2007/05/05','02');

insert into ACCESO (ci, usuario, password, rol) VALUES ('8441659','enrique123','12345678','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441658','vladimir123','22222222','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441657','diego123','87654321','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441656','profe123','11111111','director');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441655','fernando123','12345678','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441654','juan123','22222222','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441653','miguel123','87654321','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441652','william123','11111111','director');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441651','rogelio123','12345678','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441650','alicia123','22222222','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441640','angel123','87654321','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441641','jheny123','11111111','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441642','miriam123','12345678','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441643','ernesto123','22222222','estudiante');
insert into ACCESO (ci, usuario, password, rol) VALUES ('8441644','jose123','22222222','estudiante');


insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441659','INF-111',55,67,60,61);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441658','MAT-111',70,70,70,70);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441657','FIS-111',80,90,75,82);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441655','INF-111',70,76,51,66);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441654','MAT-111',70,69,84,66);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441653','FIS-111',80,91,93,88);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441652','INF-111',55,68,87,70);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441651','MAT-111',70,71,40,60);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441650','FIS-111',80,91,42,71);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441640','INF-111',55,68,55,59);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441641','MAT-111',70,54,59,61);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441642','FIS-111',80,54,98,77);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441643','INF-111',55,78,67,67);
insert into INSCRIPCION (ciEstudiante,sigla,nota1,nota2,nota3,notaFinal) VALUES ('8441644','MAT-111',70,98,87,85);