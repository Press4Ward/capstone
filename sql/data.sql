--This file will keep SQL test data 

INSERT INTO charities 
  (name, street, town, state, zip, password, charityType_ID, latitude, longitude)
VALUES 
  ('Test Place', '3333 Buford Dr', 'Buford', 'GA', 30519, 'test', 1, 2, 3);

INSERT INTO CharityType 
  (type_name)
VALUES 
  ('Education');

INSERT INTO itemCategories
  (category_name)
VALUES 
  ('Yard/Garden Item');

--Item Categories that were inserted into the itemcategories table 
Household 
Kids Toys
kids clothes
books
small appliance
women's clothing 
men's clothing
women shoes
men's shoes 
Pet item 
yard/garden item'


INSERT INTO CharityType
  (type_name)
VALUES 
  ('Research / Public Policy');

Animals      
arts/culture   --kids toys
community development  --kids toys id=4
Education --kids toys id = 1
Environment 
Health
Human and Civil Rights
Human Services 
International --kids toys
Religion --kids toys
Research / Public Policy

INSERT INTO charityAndItemsTable
  (charityType_ID, itemCategory_ID)
VALUES (3, 2)