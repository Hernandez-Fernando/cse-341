CREATE DATABASE poolway;

\c poolway


CREATE TABLE users (
    userId SERIAL PRIMARY KEY,
    displayName VARCHAR(20) NOT NULL,
    username VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE customers (
    customerId SERIAL PRIMARY KEY,
    firstName VARCHAR(40) NOT NULL,
    lastName VARCHAR(40) NOT NULL,
    address VARCHAR(100) NOT NULL,
    city VARCHAR(30) NOT NULL,
    state VARCHAR(30) NOT NULL,
    zcode VARCHAR(5) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    email VARCHAR(80) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE pools (
    poolId SERIAL PRIMARY KEY,
    customerId INT REFERENCES customers (customerId),
    displayName VARCHAR(40) NOT NULL,
    address VARCHAR(100) NOT NULL,
    city VARCHAR(30) NOT NULL,
    state VARCHAR(30) NOT NULL,
    zcode VARCHAR(5) NOT NULL,
    status VARCHAR(10) NOT NULL,
    lastVacuum DATE,
    lastBackwash DATE
);

CREATE TABLE reports (
    reportId SERIAL PRIMARY KEY,
    poolId INT REFERENCES pools (poolId),
    reportDate DATE NOT NULL,
    timeIn TIME NOT NULL, 
    timeOut TIME NOT NULL,
    chlorReading INT NOT NULL,
    phReading FLOAT NOT NULL,
    caReading INT NOT NULL,
    haReading INT NOT NULL,
    vacuum BOOLEAN,
    backwash BOOLEAN,
    notes VARCHAR(255)
);