drop database if exists test;
create database test;
use test;
create table users(
	id int  primary key auto_increment comment '编号',
	username varchar(50) unique comment '姓名',
	password varchar(50) default '123456' comment '密码',
	address varchar(50) comment '地址',
	email varchar(50) comment '邮箱'
)default charset=utf8;

insert into users values
(null,'Franklee','123','HanDan','franklee33@qq.com'),
(null,'Lifei',default,'HanDan','lifei@qq.com'),
(null,'Lifayy',default,'HengShui','lifayy@qq.com');