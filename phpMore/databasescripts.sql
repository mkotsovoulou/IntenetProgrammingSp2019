DROP TABLE `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `img` VARCHAR(45) NULL,
  `price` DECIMAL(10,2) NULL,
  `paypal` VARCHAR(45) NULL,
  `sizes` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
               
insert into products values (102, "Mike the Frog Shirt, Black",  "img/shirts/shirt-102.jpg", 20,
                             "SXKPTHN2EES3J", "S/M/L/XL" );
insert into products values (103, "Mike the Frog Shirt, Blue", "img/shirts/shirt-103.jpg", 22,                                            "7T8LK5WXT5Q9J", "S/M");
insert into products values (104, "Logo Shirt, Green", "img/shirts/shirt-104.jpg", 18,                                           "YKVL5F87E8PCS", "M/L");             
               
               
CREATE TABLE IF NOT EXISTS `pusers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `is_admin` CHAR(1) NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB;

insert into pusers (email, password, is_admin) values ('mkotsovoulou@acg.edu', 'a123', 'Y');
insert into pusers (email, password)           values ('user@acg.edu', 'user');