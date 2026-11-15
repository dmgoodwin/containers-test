create database if not exists dev_to;
use dev_to;
create table test(
  id int NOT NULL AUTO_INCREMENT,
  name varchar(255),
  email varchar(255),
  message text,
  PRIMARY KEY (id)
);

