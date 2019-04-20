# lamp_stack_example

This project containerizes Mysql, PHP and Apache using docker compose

Commands to create database,table in MySQL Container

docker exec -it <db-container-name> /bin/bash #to enter into existing MYSQL conatiner in interactive mode

mysql -uroot -proot_password #to connect the DB provide 'root' is the username and 'root_password' is the password for DB

############Grant privileges to the Database created###################
create database <db_name_you_want_to_create>;
use <db_name_created>;

CREATE TABLE Form_Registration (
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
country VARCHAR(50),
subject VARCHAR(150)
);

############Grant privileges to the Database created###################

GRANT ALL PRIVILEGES ON * . * TO 'sys_admin'@'%';

############MOST IMPORTANT###################
#update the dbname you created in src/welcome.php file

$mysqli=new mysqli('practice-db',getenv("MYSQL_USER"),getenv("MYSQL_PASSWORD"),'<DB_NAME_YOU_HAVE_CREATED>');
