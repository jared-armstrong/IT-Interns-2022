CREATE TABLE Product{
      /*
-- Simple CREATE TABLE Syntax (common if not using options)
CREATE TABLE
    { ?????.schema_name.Product | schema_name.Product | Product }
    ( { <column_definition> } [ ,...n ] )
[ ; ]
*/

    /* Identification */
    SKUID int() PRIMARY KEY NOT NULL AUTO_INCREMENT,
    Prod_Desc nvarchar(25),
    department nvarchar(25),
    VendorSKU nvarchar(25),

    /* Design Information */
    vendor nvarchar(25),
    team nvarchar(25),
    brand nvarchar(25),
    style nvarchar(25),
    logoApp nvarchar(25),
    logoPlace nvarchar(25),
    playerName nvarchar(25),
    material1 nvarchar(25),
    material_1_percent int(),
    material2 nvarchar(25),
    material_2_percent int(),
    material3 nvarchar(25),
    material_3_percent int(),
  

  /*Pricing*/
    TaxGroup nchar(50),
    PZ1 decimal (10.2),
    PZ2 decimal (10.2),
    PZ3 decimal (10.2),
    PZ4 decimal (10.2),
    PZ5 decimal (10.2),
    PZ6 decimal (10.2),
    PZ40 decimal (10.2),
    PZ41 decimal (10.2),
    PZ42 decimal (10.2),
    PZ43 decimal (10.2),
    PZ44 decimal (10.2),
  


    /* Source Info*/
    packaging nvarchar(25),
    ReplenBy nchar(1), 
    weight float(, 2) NOT NULL ,
    convey bit NOT NULL, 
    origin nvarchar(25),
    gender nchar(1) NOT NULL,
    kidProduct BIT NOT NULL,
    keyword1 nchar(5) NOT NULL,
    keyword2 nchar(4) NOT NULL,


    /* JDA ID TREE */



    JDA-domain nvarchar(25),
    JDA-subDiv nvarchar(10),
    JDA-Dep nvarchar(15),
    JDA-subDep nvarchar(15),
    JDA-class nvarchar(15),
    JDA-subClass nvarchar(15),

}

CREATE TABLE Pricing{
  SKUID int() PRIMARY KEY NOT NULL,
  Retail_Markdown nchar(8),
  Effectivedate date(),
  PZ1 decimal(10.2),
  PZ2 decimal(10.2),
  PZ3 decimal(10.2),
  PZ4 decimal(10.2),
  PZ5 decimal(10.2),
  PZ6 decimal(10.2),
  PZ40 decimal(10.2),
  PZ41 decimal(10.2),
  PZ42 decimal(10.2),
  PZ43 decimal(10.2),
  PZ44 decimal(10.2),
}

CREATE TABLE UPC_Upload{
  UPC int() PRIMARY KEY NOT NULL,
  SKU int() FOREIGN KEY,
  Size nvarchar(5),
  VendorSku int(),
  vendor nvarchar(4),
}