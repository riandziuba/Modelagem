use projeto;
 
-- create table livros(
-- 	id int auto_increment primary key,
--     titulo varchar(100),
--     autor varchar(150),
--     sobre varchar(1000),
--     link varchar(200),
--     foto varchar(100)
--   );

insert into livros 
values (null, 'Matemática Para os Anos Iniciais', 'Edvonete Souza de Alencar e Etienne Lautenschlager', 
		  'livro Modelagem Matemática Para os Anos Iniciais, obra organizada pelas professoras Edvonete Souza de
          Alencar e Etienne Lautenschlager. Direcionado para professores e educadores da área de Matemática e até de
          outras áreas também, pois as propostas educacionais aqui apresentadas podem ser muito úteis para outras
          disciplinas escolares.', 'https://www.livrariascuritiba.com.br/modelagem-matematica-nos-anos-iniciais-autores-lv349871/p?idsku=118219&gclid=EAIaIQobChMIjoaHtPXu4QIVkwqRCh0EdQiAEAYYASABEgKOHvD_BwE', 'img/Livros/1.jpg'),
	   (null, 'MODELAGEM MATEMÁTICA: TEORIA E PRÁTICA', 'Rodney Carlos Bassanezi', 
		  'Neste livro, Rodney Carlos Bassanezi mostra, com exemplos práticos, como a modelagem matemática pode ser
          aplicada no ensino.', 'https://editoracontexto.com.br/autores/rodney-carlos-bassanezi/modelagem-matematica.html', 'img/Livros/2.jpg'),
	   (null, 'Modelagem Na Educação Matemática E Ciência', 'Maria Salett Biembegut', 
		  'Neste livro, a autora apresenta uma reflexão advinda de três décadas de trabalho com “modelagem na educação
          em
          Ciências e Matemática”. Trata-se de um método de ensino aliado à pesquisa , que permite ser utilizado não
          apenas
          na disciplina de Matemática , mas em todas as disciplinas da Educação Básica.', 'https://www.saraiva.com.br/modelagem-na-educacao-matematica-e-ciencia-9373150.html?pac_id=123134&gclid=EAIaIQobChMIifvfqPvu4QIVFgeRCh20FQsTEAYYAyABEgJ_V_D_BwE', 'img/Livros/4.jpg'),
	   (null, 'MODELAGEM MATEMÁTICA: perspectivas, experiências, reflexões e teorizações', 'Celia Finck Brandt, Dionísio Burak e Tiago Emanuel Klüber', 
		  'Para além de um novo título, esse novo livro avança em questões pertinentes ao tema e, ao agregar os
          capítulos,
          permite efetuar reflexões mais robustas do ponto de vista de cada núcleo. Com isso, esperamos que essa obra
          traga as devidas contribuições a todos os interessados na prática e na pesquisa em Modelagem.', 'http://www.abeu.org.br/farol/abeu/catalogo-unificado/item/eduepg/modelagem-matematica-perspectivas-experiencias-reflexoes-e-teorizacoes-2-ed-revista-e-ampliada/34309/', 'img/Livros/6.jpg'),
	   (null, 'Educação Estatística - Teoria e prática em ambientes de modelagem matemática', 'Celso Ribeiro Campos, Maria Lúcia Lorenzetti Wodewotzki, Otávio Roberto Jacobini', 
		  'este livro traz ao leitor um estudo minucioso sobre a Educação Estatística e oferece elementos fundamentais
          para o ensino e a aprendizagem em sala de aula dessa disciplina, que vem se difundindo e já integra a grade
          curricular dos ensinos fundamental e médio.', 'https://grupoautentica.com.br/autentica/livros/educacao-estatistica-teoria-e-pratica-em-ambientes-de-modelagem-matematica/668', 'img/Livros/7.jpg'),
	   (null, 'Modelagem em Educação Matemática', 'João Frederico da Costa de Azevedo Meyer, Ademir Donizeti Caldeira, Ana Paula dos Santos
          Malheiros', 
		  'Esta obra mostra como esta disciplina pode funcionar como uma estratégia na qual o aluno ocupa lugar central
          na
          escolha de seu currículo.
          Os autores também apresentam aqui a trajetória histórica da Modelagem e provocam discussões sobre suas
          relações,
          possibilidades e perspectivas em sala de aula, sobre diversos paradigmas educacionais e sobre a formação de
          professores.', 'https://grupoautentica.com.br/autentica/livros/educacao-estatistica-teoria-e-pratica-em-ambientes-de-modelagem-matematica/668', 'img/Livros/8.jpg'),
		(null, 'Práticas de modelagem matemática na educação matemática: Relatos de experiências e propostas
          pedagógicas', 'Lourdes Maria Werle de Almeida, Jussara de Loiola Araújo, Eleni Bisognin', 
		  'Tendo como foco a formação de professores, ações em sala de aula, tecnologias de informática, a Modelagem
          Matemática em espaços extracurriculares e a Modelagem Matemática na perspectiva da Educação Matemática
          Crítica,
          a obra representa uma valiosa contribuição para repensar e construir um novo sentido para o ensino e a
          aprendizagem da Matemática.', 'https://www.jstor.org/stable/10.7476/9788572166508', 'img/Livros/9.png'),
		(null, 'Modelagem Matemática em Foco', 'Lourdes Maria Werle de Almeida', 
		  'Este livro é uma coletânea formada por sete capítulos, cujos autores relatam pesquisas e práticas da
          modelagem
          matemática na perspectiva da Educação Matemática, originadas no âmbito de um grupo de pesquisa - GRUPEMAT - em
          atuação desde 2002. O que cada capítulo pretende é sinalizar que fazer modelagem matemática na sala de aula é
          possível e pode ser bem agradável, tanto para quem ensina quanto para quem aprende.', 'https://www.amazon.com.br/Modelagem-Matem%C3%A1tica-Lourdes-Maria-Almeida/dp/8539905337', 'img/Livros/10.jpg'),
		(null, 'MODELAGEM MATEMÁTICA NO ENSINO', 'Maria Salett Biembengut, Nelson Hein', 
		  'A Modelagem matemática busca traduzir situações reais para uma linguagem matemática, para que através dela se
          possa melhor compreendê-las, prevê-las e simular possíveis acontecimentos. Neste livro, dois grandes
          especialistas levam para o dia-a-dia da sala de aula as várias possibilidades de trabalho com este conceito.', 'https://editoracontexto.com.br/autores/maria-salett-biembengut/modelagem-matematica-no-ensino.html', 'img/Livros/11.png'),
		(null, 'MODELAGEM MATEMÁTICA NA EDUCAÇÃO BÁSICA', 'Karina Pessôa da Silva, Lourdes Werle de Almeida, Rodolfo Eduardo Vertuan', 
		  'As aplicações da Matemática visualizadas por atividades de Modelagem requerem um comportamento ativo de
          professores e alunos na própria definição de problemas. Este livro proporciona aos professores oportunidades
          de
          acesso às diferentes possibilidades de integração de atividades de Modelagem Matemática às aulas, bem como a
          outras atividades já desenvolvidas.', 'https://editoracontexto.com.br/autores/lourdes-werle-de-almeida/modelagem-matematica-na-educacao-basica.html', 'img/Livros/13.jpg'),
		(null, 'ENSINO-APRENDIZAGEM COM MODELAGEM MATEMÁTICA', 'Rodney Carlos Bassanezi', 
		  'Este livro é uma proposta completa de ensino-aprendizagem de matemática. O leitor poderá aventurar-se na
          construção de seus próprios modelos, utilizando-se da variedade de exemplos apresentados. É uma obra dinâmica
          que pode ser aplicada em diversas situações, tais como - texto complementar para disciplinas específicas,
          material para desenvolvimento de programas de iniciação científica, subsídio para programas de capacitação e
          aperfeiçoamento de professores ou simplesmente, para estudos individuais.', 'https://editoracontexto.com.br/autores/rodney-carlos-bassanezi/ensino-aprendizagem-com-modelagem-matematica.html', 'img/Livros/14.png');
	  
	