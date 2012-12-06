create table `products` (
	`product_id` int(11) not null auto_increment,
	`name` varchar(200) not null default '',
	primary key (`product_id`)
) engine=innodb default charset=utf8;

create table `components` (
	`component_id` int(11) not null auto_increment,
	`name` varchar(200) not null default '',
	primary key (`component_id`)
) engine=innodb default charset=utf8;

create table `product_components` (
	`product_id` int(11) not null default 0,
	`component_id` int(11) not null default 0,
	`frequency` int(11) default 0
) engine=innodb default charset=utf8;

alter table product_components
       add constraint foreign key (product_id)
                            references products (product_id) on delete cascade;

alter table product_components
       add constraint foreign key (component_id)
                            references components (component_id) on delete cascade;