Enter password: *******
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 123
Server version: 8.0.19 MySQL Community Server - GPL

Copyright (c) 2000, 2020, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.


mysql> use etudiant;
Database changed
mysql> create table etudiant1(
    -> id_etudiant int primary key auto_increment,
    -> nom_etudiant varchar(50),
    -> email_etudiant varchar(70));
Query OK, 0 rows affected (0.09 sec)

mysql> desc etudiant1;
+----------------+-------------+------+-----+---------+----------------+
| Field          | Type        | Null | Key | Default | Extra          |
+----------------+-------------+------+-----+---------+----------------+
| id_etudiant    | int         | NO   | PRI | NULL    | auto_increment |
| nom_etudiant   | varchar(50) | YES  |     | NULL    |                |
| email_etudiant | varchar(70) | YES  |     | NULL    |                |
+----------------+-------------+------+-----+---------+----------------+
3 rows in set (0.02 sec)


mysql> insert into etudiant1 values(1,'ziad','ziad@gmail.com'),
    -> (2,'saad','saad@gmail.com'),
    -> (3,'othman','othman01@gmail.com'),
    -> (4,'zineb','zineb@gmail.com'),
    -> (5,'mikel','mikel@gmail.com');
Query OK, 5 rows affected (0.01 sec)
Records: 5  Duplicates: 0  Warnings: 0

mysql>