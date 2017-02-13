CREATE TABLE Product (
    id INT AUTO_INCREMENT NOT NULL,
    shipping_id INT DEFAULT NULL,
    UNIQUE INDEX UNIQ_6FBC94267FE4B2B (shipping_id),
    PRIMARY KEY(id),
    FOREIGN KEY(shipping_id) REFERENCES Shipping(id)
) ENGINE = InnoDB;
