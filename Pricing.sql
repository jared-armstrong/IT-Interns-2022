CREATE TABLE pricing (
    PRICE_TYPE nvarchar(10) NOT NULL;
    ITEM_NUM nvarchar(15) ;
    PRODUCT_NAME nvarchar(50);
    PRICE_GROUP nvarchar(5);
    CURRENCY_AMOUNT money;
    EFFECTIVE_DATE date;
    /* Determine the foreign and primary key based on what we see in D365 */
)

/* Don't freak out that these are on two different DBs, I just wanted
to see them side by side to see relationships - Jared 6/15 */