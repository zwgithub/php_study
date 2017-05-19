//创建数据库
create database shop;

//需要为关键字添加反引号
create database `database`;

//查看数据库
show databases;

//部分查找
show databases like 'mysql%';

//删除数据库
drop database test1111;

//创建表
create table if not exists class (name varchar(10),address varchar(20))charset utf8;

//显示表
show tables;

//查询以 c 开头的数据表
show tables like 'c%';

//查看表的创建语句
show create table class;

//查看表字段
desc class;

//增加一个字段
alter table class add column gender varchar(10);

//新增一个 id 字段放在最前面
alter table class add id int first;


