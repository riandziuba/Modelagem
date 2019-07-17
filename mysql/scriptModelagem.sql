create database projeto;
  use projeto;

  
  create table `local`(
	id int auto_increment primary key,
    descricao varchar(100)
  );
  create table nivel(
	id int auto_increment primary key,
    descricao varchar(100)
  );
  
  create table tipo (
	id int auto_increment primary key,
    descricao varchar(100)
  );
  
  create table secao(
	id int auto_increment primary key,
    descricao varchar(100)
  );
  
   create table trabalho (
    id int primary key auto_increment,
    titulo varchar(200) not null unique,
    instituicao varchar(200),
    secao int,
    `local` int,
    palavraspasse varchar(200) not null,
    nivel int,
    tipo int,
    ano int,
    resumo varchar(1000),
    link varchar(500),
    foreign key (`local`) references `local`(id),
    foreign key (nivel) references nivel(id),
    foreign key (tipo) references tipo(id),
    foreign key (secao) references secao(id)
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
  
  CREATE TABLE livros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    autor VARCHAR(150),
    sobre VARCHAR(1000),
    link VARCHAR(200),
    foto VARCHAR(100)
);
  
  insert into `local` 
  values(null, 'Revista'),
	    (null, 'Evento'),
        (null, 'Livro'),
        (null, 'Repositório'),
        (null, 'Outros');
        
insert into tipo 
  values(null, 'Tese'),
	    (null, 'Dissertação'),
        (null, 'TC'),
        (null, 'Artigo'),
        (null, 'Livro'),
        (null, 'Capitulo de Livro'),
        (null, 'Atividades para sala'),
        (null, 'Produto Educacional'),
        (null, 'Relatório');
        
insert into nivel 
  values(null, 'Ensino Superior'),
	    (null, 'Formação de professores'),
        (null, 'Educação básica');
        
insert into secao 
  values(null, 'Pesquisa Empírica'),
	    (null, 'Dicussão Teórica'),
        (null, 'Revisão de Literatura/Mapeamentos'),
        (null, 'Relato de Experiência'),
        (null, 'Outros');
  
