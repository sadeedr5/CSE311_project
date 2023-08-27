CREATE TABLE airlines_list (
  airline_id int(255) NOT NULL AUTO_INCREMENT,
  airlines varchar(255) NOT NULL,
  logo_path varchar(255) NOT NULL,
  PRIMARY KEY(airline_id)
);

CREATE TABLE airport_list (
  airport_id int(255) NOT NULL AUTO_INCREMENT,
  airport varchar(255) NOT NULL,
  logo_path varchar(255) NOT NULL,
  PRIMARY KEY(airport_id)
);

CREATE TABLE flight_list (
  flight_id int(255) NOT NULL AUTO_INCREMENT,
  airline_id int(255) NOT NULL,
  plane_no varchar(255) NOT NULL,
  departure_airport_id int(255) NOT NULL,
  arrival_airport_id int(255) NOT NULL,
  departure_datetime datetime NOT NULL,
  arrival_datetime datetime NOT NULL,
  seats int(255) NOT NULL,
  price int(255) NOT NULL,
  created_date datetime NOT NULL,
  PRIMARY KEY(flight_id),
  FOREIGN KEY (airline_id) REFERENCES airlines_list(airline_id),
  FOREIGN KEY (departure_airport_id) REFERENCES airport_list(airport_id),
  FOREIGN KEY (arrival_airport_id) REFERENCES airport_list(airport_id)
);

CREATE TABLE booked_flight (
  booked_flight_id int(255) NOT NULL AUTO_INCREMENT,
  flight_id int(255) NOT NULL,
  name varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  passport varchar(255) NOT NULL,
  contact varchar(255) NOT NULL,
  PRIMARY KEY(booked_flight_id),
  FOREIGN KEY (flight_id) REFERENCES flight_list(flight_id)
);

CREATE TABLE department (
  department_id int(255) NOT NULL,
  department_name varchar(255) NOT NULL,
  PRIMARY KEY(department_id)
);

INSERT INTO department (department_id, department_name) VALUES (100, 'admin'), (101, 'staff');

CREATE TABLE users (
  user_id int(255) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  address varchar(255) NOT NULL,
  contact varchar(255) NOT NULL,  
  email varchar(255) NOT NULL UNIQUE,
  password varchar(255) NOT NULL,
  department_id int(255) NOT NULL,
  PRIMARY KEY(user_id),
  FOREIGN KEY (department_id) REFERENCES department(department_id)
);

