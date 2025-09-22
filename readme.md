# Sistema de Estoque com Sessões

Este projeto inclui funcionalidades CRUD e autenticação de usuários para manter a segurança das páginas. <br>
Requisitos:
  1. Servidor Local: XAMPP
  2. SGBD: MySQL
  3. PHP 7.4+ ou 8.x

<h2> Como rodar o projeto </h2>

1. <b> Crie o banco SQL </b> <br>
   <code>
      CREATE DATABASE desafio_avanti;
   </code>
2. <b> Crie as tabelas </b> <br>
   <code>
      CREATE TABLE produtos (
	      id_produto INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
        nome_produto VARCHAR(155) NOT NULL,
        preco_produto DECIMAL(10, 2) NOT NULL
   		quantidade_produto INTEGER NOT NULL,
   		sku_produto VARCHAR(155) NOT NULL,
   		fornecedor_produto VARCHAR(155) NOT NULL,
   		descricao_produto VARCHAR(155) NOT NULL	
      );

     CREATE TABLE usuario (
	    id_usuario INTEGER NOT NULL AUTO_INCREMENT UNIQUE,
      nome_usuario VARCHAR(155) NOT NULL,
      login_usuario VARCHAR(155) NOT NULL unique,
      senha_usuario VARCHAR(155) NOT NULL
     );
   </code>
4. <b> Insira um usuário para realizar autenticação no sistema </b> <br>
   <code>
    INSERT INTO usuario VALUES (0, 'admin', 'admin', '$2y$10$oB3NC2fWM2xmj52/9lo2ZuvUoTegKVqLuDncW12A4NzK83.e8R0.6');
   </code>
5. <b>Acesse "http://localhost/desafio-avanti/public/login.php", informe "admin" nos campos de usuário e senha e fique a vontade para avaliar! </b>
