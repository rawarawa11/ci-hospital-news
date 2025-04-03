create table categories
(
	id        int auto_increment
        primary key,
	cat_title varchar(300) not null,
	cat_slug  varchar(300) not null,
	is_delete int          not null
)
	charset = latin1;

create table posts
(
	id           int auto_increment
        primary key,
	post_title   varchar(250) not null,
	post_cat_id  int          not null,
	post_content text         not null,
	post_slug    varchar(300) not null,
	created_at   datetime     not null,
	is_delete    int          not null,
	thumbnail    varchar(255) null
)
	charset = latin1;

create table users
(
	id        int auto_increment
        primary key,
	username  varchar(60)  not null,
	password  varchar(150) not null,
	full_name varchar(250) not null
)
	charset = latin1;

