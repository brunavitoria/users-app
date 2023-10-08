/*
    Este script criará o banco de dados e as tabelas necessárias para o funcionamento do sistema.
    Para executar o script, basta executar o comando abaixo:
        mysql -u root -p < database/usersappDB.sql
    Após criar o banco de dados e as tabelas, o script também irá inserir alguns dados de teste para que o sistema possa ser testado.
*/

CREATE DATABASE IF NOT EXISTS usersapp;

USE usersapp;

CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    employment_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
