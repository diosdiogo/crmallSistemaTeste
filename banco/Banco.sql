
/*create database sistema;*/

/*use sistema;*/

create table cliente (id int(11) auto_increment primary key not null,
Nome varchar(50) not null,
data_de_nascimento date, 
sexo varchar(1), 
cep varchar(50), 
endereco varchar(255), 
numero int, 
complemento varchar(200), 
bairro varchar(50), 
estado varchar(20), 
cidade varchar(50)
)engine InnoDB;

create table login (id int(11) auto_increment primary key not null,
user varchar(50) not null,
pass varchar(50)not null
)engine InnoDB;

insert into login (user,pass)value('admin','admin');

INSERT INTO `cliente` (`Nome`, `data_de_nascimento`, `sexo`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `estado`, `cidade`) VALUES ('Diogo Cesar', '1987-10-25', 'M', '86800-030', 'Rua Ponta Grossa', '16', 'Casa', 'Centro', 'PR', 'Apucarana');
