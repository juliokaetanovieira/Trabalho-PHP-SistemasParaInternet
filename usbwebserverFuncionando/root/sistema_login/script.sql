CREATE TABLE users(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(80) NOT NULL,
    password VARCHAR(40) NOT NULL,
    PRIMARY KEY(id)
) COLLATE=utf8_unicode_ci;


INSERT INTO users(nome, email, password) VALUES
('Usuário 1', 'user1@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498'),
('Usuário 2', 'user2@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498'),
('Usuário 3', 'user3@user.com', '2d29b962490320f821db80cddf6ed4b6e4ac7498');

*Essa senha é um hash SHA-1 de um hash MD5 da string “123mudar”, que coloquei como senha padrão.

Caso deseja confirmar, execute este comando no PHP:

echo sha1(md5('123mudar'));