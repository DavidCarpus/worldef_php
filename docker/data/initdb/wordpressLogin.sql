CREATE DATABASE wordpress1;
CREATE USER wordpressuser@localhost IDENTIFIED BY 'wordpressPassword';
GRANT ALL PRIVILEGES ON wordpress1.* TO wordpressuser@localhost;
FLUSH PRIVILEGES;
