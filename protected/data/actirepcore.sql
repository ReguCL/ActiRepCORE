CREATE TABLE Employee (
    id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    departmentId TINYINT UNSIGNED NOT NULL
        COMMENT "CONSTRAINT FOREIGN KEY (departmentId) REFERENCES Department(id)",
    firstName VARCHAR(20) NOT NULL,
    lastName VARCHAR(40) NOT NULL,
    email VARCHAR(60) NOT NULL,
    ext SMALLINT UNSIGNED NULL,
    hireDate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    leaveDate DATETIME NULL,
    INDEX name (lastName, firstName),
    INDEX (departmentId)
)

CREATE TABLE Department (
    id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(40),
    UNIQUE (name)
)