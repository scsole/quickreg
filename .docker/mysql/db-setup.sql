CREATE TABLE registrations (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    gender ENUM('female', 'male') NOT NULL,
    dob DATE NOT NULL,
    club VARCHAR(255),
    email_address VARCHAR(254) NOT NULL,
    medical_conditions VARCHAR(255),
    emergency_contact_name VARCHAR(255) NOT NULL,
    emergency_contact_number VARCHAR(40) NOT NULL,
    registration_timestamp DATETIME NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT uc_dame_dob UNIQUE (first_name, last_name, dob)
);

INSERT INTO `registrations` (`first_name`, `last_name`, `gender`, `dob`, `club`, `email_address`, `medical_conditions`, `emergency_contact_name`, `emergency_contact_number`, `registration_timestamp`) VALUES
('James', 'Smith', 'male', '1978-01-18', NULL, 'js@mail.com', NULL, 'Emergency Contact0', '000 123 4567', NOW()),
('John', 'Brown', 'male', '1993-08-10', 'Club1', 'jb@mail.com', NULL, 'Emergency Contact1', '000 111 2222', NOW()),
('Mary', 'Williams', 'female', '1995-04-05', NULL, 'mw@mail.com', NULL, 'Emergency Contact2', '03 222 2222', NOW()),
('Patricia', 'Jones', 'female', '1999-04-01', NULL, 'pg@mail.com', NULL, 'Emergency Contact3', '+64 00 333 2222', NOW()),
('Richard', 'Garcia', 'male', '1983-08-03', 'Club1', 'rg@mail.com', NULL, 'Emergency Contact4', '(000) 222 2222', NOW()),
('Barbara', 'Davis', 'female', '2001-04-06', NULL, 'bd@mail.com', NULL, 'Emergency Contact5', '+64003332999', NOW()),
('Barbra', 'Shea', 'female', '1996-10-01', 'Club2', 'bs@mail.com', NULL, 'Emergency Contact6', '(+64) 021 222 2222 or 0221188934', NOW()),
('Linda', 'Smith', 'female', '2006-08-16', 'Club2', 'ls@mail.com', NULL, 'Emergency Contact7', '+64003332222', NOW());
