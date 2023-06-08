CREATE TABLE pizzaOrder(
    id int not null auto_increment
    delivery boolean not null,
    address varchar(255) not null,
    names varchar(255) not null,
    size varchar(255) not null,
    toppings boolean not null,
    PRIMARY KEY (id)
);

/* creates the table with the variables delivery, address, names, size 
and toppings*/