CREATE TABLE Attachment (
    id INT AUTO_INCREMENT NOT NULL,
    name VARCHAR(50) NOT NULL,
    person_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(person_id) REFERENCES Person(id)
) ENGINE = InnoDB;
