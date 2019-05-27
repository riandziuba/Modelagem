create database projeto;
  use projeto;

  create table trabalho (
    id int primary key auto_increment,
    titulo varchar(200) not null unique,
    instituicao varchar(200),
    meios int,
    palavraspasse varchar(200) not null,
    nivel int,
    tipo int,
    ano int,
    resumo varchar(1000),
    link varchar(500)
  );

  create table autor (
    id int primary key auto_increment,
    nome varchar(200) not null,
    tipo int
  );

  create table orientador (
    id int primary key auto_increment,
    nome varchar(200) not null,
    tipo int
  );

  create table autordotrabalho (
    codigo int,
    id_autor int,
    id_trabalho int,
    primary key (id_autor, id_trabalho),
    foreign key (id_autor) references autor(id),
    foreign key (id_trabalho) references trabalho(id)
  );    

  create table orientadordotrabalho (
    codigo int,
    id_orientador int,
    id_trabalho int,
    primary key (id_orientador, id_trabalho),
    foreign key (id_orientador) references orientador(id),
    foreign key (id_trabalho) references trabalho(id)
  );
