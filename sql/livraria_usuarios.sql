USE db_livraria;
CREATE TABLE tbl_usuario
(
	cd_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nm_usuario VARCHAR(80) NOT NULL,
    ds_email VARCHAR(90) NOT NULL,
    ds_senha VARCHAR(14),
    ds_status BOOLEAN NOT NULL,
    ds_endereco VARCHAR(80) NOT NULL,
    ds_cidade VARCHAR(30) NOT NULL,
    no_CEP CHAR(9) NOT NULL
)
DEFAULT CHARSET UTF8;

insert into tbl_usuario
values
(default, "Omaldo Malandro", 'omaldo@gmail.com', 'malandro', 1, 'Casa da Maria', 'São Paulo', '05510-000'),
(default, "Elma Maria", 'elmam@gmail.com', 'eumesmo', 0, 'Em Casa', 'Rio de Janeiro', '07105-510'),
(default, "Paulo Plinio", 'paulinho@hotmail.com', 'paulinhooloko', 0, 'Cidade Alta', 'São Paulo', '05708-444');