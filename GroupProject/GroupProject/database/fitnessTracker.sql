CREATE TABLE Order_History(
  customer_ID INTEGER NOT NULL AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50),
  address VARCHAR(50) NOT NULL,
  card_number INTEGER(16) NOT NULL,
  expiration_date INTEGER(4) NOT NULL,
  purchase_amount FLOAT(8,2) NOT NULL,
  authorized BOOLEAN DEFAULT 0,
  shipped BOOLEAN DEFAULT 0,
  date_ordered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  date_shipped TIMESTAMP DEFAULT 0,
  PRIMARY KEY (customer_ID)
);

CREATE TABLE Product(
  part_number INTEGER NOT NULL,
  description VARCHAR(50) NOT NULL,
  in_stock INTEGER,
  PRIMARY KEY (part_number, description)
);
