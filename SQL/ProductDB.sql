CREATE TABLE Product{










    /* Identification */
    SKUID nvarchar(25) PRIMARY KEY NOT NULL,
    Desc nvarchar(25),
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
    /*
-- Simple CREATE TABLE Syntax (common if not using options)
CREATE TABLE
    { ?????.schema_name.Product | schema_name.Product | Product }
    ( { <column_definition> } [ ,...n ] )
[ ; ]
*/
}







CREATE TABLE ProductChange{

    /* Identification */
    itemNumber nvarchar(25) PRIMARY KEY NOT NULL,
    productName nvarchar(25),
    searchName nvarchar(25),
    imagesSentDateTime nvarchar(25),

    /* Design Information */
    subtype nvarchar(25),
    dimesionGroups nvarchar(25),
    lifeCycleState nvarchar(8),
    

}
CREATE TABLE PriceChange{

    priceType nvarchar(10) NOT NULL,
    itemNumber nvarchar(10) PRIMARY KEY NOT NULL,
    productName nvarchar(30),
    size nvarchar(10),
    priceGroup nvarchar(8)
    currencyCost float(10, 2) NOT NULL,
    EffectiveDate date NOT NULL,
    

}