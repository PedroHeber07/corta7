drop database barbershop;

create database barbershop;

#tabela cadastro de empresa
create table tbempresa(
idempresa int primary key not null auto_increment,
nome varchar(100) not null,
fantasia varchar(100) not null,
emailempresa varchar (100) not null,
foneemp varchar(15) not null,
endemp varchar(100) not null,
bairroemp varchar(50) not null,
cidadeemp varchar(50) not null,
ufemp varchar(2) not null,
cepemp varchar(10) not null,
cnpjemp varchar(11) not null,
fk_usuario int not null,
foreign key(fk_usuario) references usuarios(iduser)
);

#tabela usuários do sistema

create table usuarios(
iduser int primary key,
usuario varchar(50) not null,
email varchar(100) not null unique,
senha varchar(32) not null
);

#tabela clientes do sistema que irão se cadastrar 

create table tbclientes(
id_cliente int primary key auto_increment,
nomecli varchar(100) not null,
endcli varchar(100),
cidadecli varchar(50),
bairrocli varchar(50),
ufcli varchar(2),
cepcli varchar(10),
rgcli varchar (10),
cpfcli varchar(11),
fonecli varchar(50) not null, 
emailcli varchar(50),
fk_empresa int not null,
foreign key(fk_empresa) references tbempresa(idempresa)
);

# tabela categoria de produtos  

create table tbcategoria(
categoriaid int primary key,
nome_categoria varchar(30) not null unique
);

# tabela de produtos 

Create table tbfornecedor(
id_fornecedor int primary key auto_increment,
nome_fornecedor varchar(100),
emailfornecedor varchar (100) not null,
fonefornecedor varchar(15) not null,
cnpjfornecedor varchar(11) not null
);

create table tbestoque(
id_estoque int primary key auto_increment,
nome_estoque varchar(30) not null unique,
fk_empresa int not null,
foreign key(fk_empresa) references tbempresa(idempresa)
);

create table entradaProduto(
id_entradaProduto int not null primary key auto_increment,
data_entrada date,
fk_entrada_func int,
fk_entrada_forn int,
foreign key(fk_entrada_func) references tbfuncionario(id_func),
foreign key(fk_entrada_forn) references tbfornecedor(id_fornecedor)
);

drop table entradaproduto;

create table itemproduto(
id_itemProduto int primary key auto_increment,
item_produto_preco decimal(10,2) not null,
item_produto_quantidade int,
fk_produto int not null,
fk_entradaProduto int not null,
foreign key(fk_produto) references tbprodutos(produtoid),
foreign key(fk_entradaProduto) references entradaProduto(id_entradaProduto)
);

# o inserimento dos produtos que entraram no estoque será feito por lógica

create table tbprodutos(
produtoid int primary key auto_increment,
descricao_pro varchar(100) unique not null,
preco_venda decimal(10,2) not null,
uni_estoque int not null,
fkestoque int not null,
fkcat int not null,
foreign key(fkcat) references tbcategoria(categoriaid),
foreign key(fkestoque) references tbestoque(id_estoque)
);

# tabela funcionários que serão cadastrados  

create table tbfuncionario(
id_func int primary key auto_increment,
nome_func varchar(50) not null,
fone_func varchar(20) not null,
func_nasc date not null,
func_end varchar(100),
func_bairro varchar(50),
func_cidade varchar(50),
func_uf varchar(2),
func_cep varchar(10),
func_cpf varchar(11),
func_rg varchar (10),
func_pis varchar(11),
func_remun decimal(10,2) not null,
fk_empresa int not null,
foreign key(fk_empresa) references tbempresa(idempresa)
);

# tabela de serviços que serão cadastrados 

create table tbservicos(
id_servico int primary key auto_increment,
nome_servico varchar(50),
valor_servico decimal(10,2) not null,
fk_empresa int not null,
foreign key(fk_empresa) references tbempresa(idempresa)
);

#tabela de atendimento
#abertura de comanda

create table tbatendimento(
id_atendimento int primary key auto_increment,
data_abre_atendimento timestamp default current_timestamp,
status_atendimento boolean,
data_fecha_atend datetime,
fk_cliente_atend int not null,
fk_func_atend int not null,
foreign key (fk_cliente_atend) references tbclientes(id_cliente),
foreign key (fk_func_atend) references tbfuncionario(id_func)
);

create table servicos_atendimento(
id_servicos_atendimento int primary key auto_increment,
fk_servico_atend int not null,
fk_atendimento_serv int not null,
foreign key(fk_servico_atend) references tbservicos(id_servico),
foreign key(fk_atendimento_serv) references tbatendimento(id_atendimento)
);


Create table itens_atendimento(
id_itens_atendimento int primary key auto_increment,
quant_produto_atendimento int,
fk_produto_atend int not null,
fk_atendimento int not null,
foreign key(fk_produto_atend) references tbprodutos(produtoid),
foreign key(fk_atendimento) references tbatendimento(id_atendimento)
);


