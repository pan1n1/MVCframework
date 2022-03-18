drop database if exists framework;
create database framework;
use framework;


create table Countries(
	id int(10) UNSIGNED NOT NULL auto_increment,
    name varchar(300) NOT null,
    capitalCity varchar(300) not null,
    continent enum('Afrika', 'Azie', 'Oceanië', 'Europa', 'Noord-Amerika', 'Zuid-Amerika') NOT NULL,
    population int(10) UNSIGNED NOT NULL,
    PRIMARY KEY (id)
    ) engine = InnoDB CHARSET = latin1;
