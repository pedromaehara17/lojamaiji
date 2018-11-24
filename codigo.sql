create database lojamaiji;

use lojamaiji;

create table usuario(
id INT auto_increment,
nome varchar(60),
email varchar(60),
sexo varchar(60),
dia varchar(2),
mes varchar(2),
ano varchar(4),
cpf varchar(20),
cep varchar(20),
rua varchar(900),
telefone varchar(15),
municipio varchar(60),
estado varchar(2),
senha varchar(20),
confsenha varchar(20),
primary key(id)
)ENGINE=InnoDB;

create table categoria(
idcategoria INT auto_increment,
nomecategoria varchar(60),
primary key(idcategoria)
)ENGINE=InnoDB ;
INSERT INTO categoria(nomecategoria)
VALUES ("hqs"),
("infantis"),
("nacionais");

create table produto(
idproduto INT auto_increment,
nomeproduto varchar(60),
categoria varchar(60),
preco double(10,2),
descricao varchar(700),
quantidade varchar(5),
imagem varchar(60),
primary key(idproduto)
)ENGINE=InnoDB ;


INSERT INTO produto(nomeproduto,categoria,preco,descricao,quantidade,imagem)
VALUES ("Notas de Liberdade", 'nacionais', 14.00, 'Mariana vive lutando pelo direito de ser ela mesma: um tanto desbocada, livre e maluquinha. Sofia está descobrindo o mundo, aprendendo a amar e, mais que tudo, aprendendo como é perder alguém que se ama. Luiza está naquela fase de olhar para trás e ver se a vida valeu a pena. O sucesso é mesmo tudo na vida? Três mulheres muito diferentes em busca da mesma coisa: seu lugar no mundo. Em “Notas de liberdade”, Fred dá voz a essas personagens e nos leva a mergulhar no mundo de cada uma – e, por reflexo, no nosso próprio mundo também. O que elas conversam com o teto do quarto antes de dormir? Quais são seus sonhos, seus medos, suas dores? O que afinal realmente importa?', '30', 'liberdade.png'),
("Batman - A Corte Das Corujas", 'hqs', 39.99, 'Após sua espécie chegar à beira da extinção, finalmente novos Homo superior começam a surgir, mas, com Charles Xavier morto e seus discípulos divididos em duas facções inimigas, as coisas não vão bem para os X-Men. E, desde a inusitada chegada da equipe original — que o Fera trouxe do passado para tentar botar um fim no impasse atual —, a tensão entre a Escola Jean Grey para Estudos Avançados e a nova equipe liderada por Ciclope está cada vez maior.', '50', 'batman.jpg'),
("O Poder da Ação Para Crianças", 'infantis', 40.99, 'Turma da Mônica e Paulo Viera se reúnem no Bairro do Limoeiro para ensinar pais, mães e crianças sobre autorresponsabilidade! Mais de 40 milhões de pessoas já conhecem Paulo Vieira e tiveram sua vida transformada pelos ensinamentos dele. Agora ele pediu a ajuda da turminha mais famosa do Brasil para mostrar a todas as crianças que a vida pode e deve ser incrível, completa e cheia de conquistas!', '20', 'monica.jpg'),
("Guerra Infinita", 'hqs', 71.99, 'O Universo Pode Ser Salvo, Destruído… Ou Ambos! Em Desafio Infinito, Adam Warlock retornou triunfalmente da morte e ajudou os heróis a frustrar os planos genocidas de Thanos. Mas sua pior faceta, o impiedoso Magus, veio logo atrás, com sede de vingança contra o Titã Louco e o próprio Warlock. Para obtê-la, o vilão cria um exército composto por versões maléficas dos maiores heróis da Terra, dando início a um violento confronto de proporções cósmicas! Acompanhe a segunda parte da mais célebre trilogia da Casa das Ideias, pelas mãos do arquiteto do Infinito, Jim Starlin, com arte de Ron Lim, Tom Raney, Angel Medina e Shawn MacManus.', '30', 'guerrainfinita.jpg'),
("Eu Tenho Sérios Poemas Mentais", 'nacionais', 36.99, 'Antes de mais nada eu gostaria de pedir licença ao seu coração, pois sinto que a relação que vamos criar a partir de agora é muito forte. Eu escrevi neste livro as poesias sobre os lugares mais íntimos em mim, aqueles lugares que são tão profundos que até eu mesmo só consigo visitar às vezes... Estou me apresentando para você como sou, sem rosto, sem voz e sem cheiro. Apenas ideias. E tudo o que sou são ideias.', '20', 'problema.jpg'),
("Diário De Um Banana - Vol. 12 - Apertem Os Cintos", 'infantis', 92.99, 'O feriado de fim de ano é sempre um estresse. E para fugir dessa loucura, a família Heffley decide passar o Natal em um resort paradisíaco. Mas o que era para ser um feriadão relaxado acaba se transformando num terrível pesadelo.', '80', 'banana.jpg'),
("Wolverine - Col. Histórica Marvel - Vol. 6", 'hqs', 16.99, 'A ganância de um grupo que alega existir uma cura para o câncer numa espécie animal quase extinta em Madripoor o coloca em confronto direto com o Caolho, o que o leva à raiz do problema no Japão! Depois, de volta ao Ocidente, Logan se envolve numa perseguição a um assassino nas montanhas canadenses… onde diferentes tipos de predadores espreitam! E ainda: um confronto com Lady Letal! (Wolverine 31-37)', '70', 'wolverine.jpg'),
("O Cortiço - Col. Clássicos da Literatura - Versão Escolar", 'nacionais', 9.99, 'Rio de Janeiro, século XIX. Se esse cenário lhe traz a mente reis, princesas e bondes, prepare-se para mergulhar em um retrato diferente da sociedade brasileira naquela época, composto de inúmeros personagens que, juntos, representam apenas as mazelas sociais, mas mostram até onde a vileza humana é capaz de chegar.', '10', 'cortico.jpg'),
("Casa Das Estrelas - O Universo Pelo Olhar Das Crianças", 'infantis', 10.00, 'o longo dos anos, Javier Naranjo, professor e poeta colombiano, coletou defi nições que seus alunos do curso primário davam a palavras, objetos, ideias, pessoas, lugares e sentimentos. Os pequenos verbetes, reunidos no grande sucesso Casa das estrelas, oscilam entre o poético, o lúdico, o melancólico e o revelador.', '55', 'estrelas.jpg'),
("Demolidor - Homem Sem Medo - Ed. Especial", 'hqs', 75.99, 'Uma chama arde profundamente em Matt Murdock. Ele foi criado por seu pai, um boxeador em decadência com uma última chance de fazer algo de bom - uma chance que lhe custou a vida. Ridicularizado e atormentado pelas outras crianças enquanto crescia, Matt teve sua vida irremediavelmente alterada quando, ao salvar um idoso, perdeu a visão ao ser atingido por materiais radioativos. A compensação? Uma vontade inquebrantável e uma inteligência aguçada, que ajudaram a dar foco aos supersentidos com os quais Matt foi abençoado pelo acidente. Testemunhe a magistral origem do Homem Sem Medo na visão dos lendários Frank Miller e John Romita Jr.!', '30', 'demolidor.jpg'),
("Dom Casmurro - Col. Biblioteca do Estudante", 'nacionais', 86.99, 'Maior escritor brasileiro de todos os tempos, Joaquim Maria Machado de Assis (1839-1908) é o autor deste "Dom Casmurro". Editado pela primeira vez em 1900, o romance foi escrito e pensado para ser publicado originalmente em livro, e não em capítulos nos jornais. Concebido com o cuidado de uma obra-prima, Dom Casmurro é um dos mais importantes e representativos romances da literatura universal, um clássico que não se pode deixar de ler.', '50', 'domcasmurro.jpg'),
("A Seleção - Série A Seleção - Vol. 1 - Brochura", 'infantis', 35.50, 'Para trinta e cinco garotas, a “Seleção” é a chance de uma vida. Num futuro em que os Estados Unidos deram lugar ao Estado Americano da China, e mais recentemente a Illéa, um país jovem com uma sociedade dividida em castas, a competição que reúne moças entre dezesseis e vinte anos de todas as partes para decidir quem se casará com o príncipe é a oportunidade de escapar de uma realidade imposta a elas ainda no berço. ', '10', 'selecao.jpg');


create table cupom(
idcupom INT auto_increment, 
nomecupom varchar(60),
valorcupom DECIMAL(6,2),
primary key(idcupom)
)ENGINE=InnoDB;

create table pedido(
idpedido INT auto_increment,
id INT NOT NULL,
dtpedido DATE,
cpf VARCHAR(15),
cep VARCHAR (9),
municipio VARCHAR(100),
estado VARCHAR(3),
rua VARCHAR(100),
total DOUBLE,
FOREIGN key(id) REFERENCES usuario(id),
primary key(idpedido)
)ENGINE=InnoDB ;


create table itempedido(
iditempedido INT auto_increment,
idpedido INT NOT NULL,
idproduto INT NOT NULL,
quantidade INT NOT NULL,
FOREIGN KEY(idpedido) REFERENCES pedido(idpedido),
primary key(iditempedido)
)ENGINE=InnoDB ;

