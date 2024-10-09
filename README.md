# Grocery-Management-System

Grocery Management system is an application which is used to
purchase products either through store outlet or through online
application. The grocery system has many employees and customers.
Employees of the grocery system maintain the grocery store. Customers
can add the products to their Wishlist or cart of the application.
Customers can purchase the products which are added by them to the
cart. They can select various payment methods and can save their
payment info in the application. If the customer receives any defective
product, they can request refund or return their products. Customers can
also post their reviews and can provide ratings for the purchased goods

Cardinalities:
• Department, Store has many to one relationship.
• Department, Employee has many to many relationship.
• Employee, Salary has one to many relationship.
• Vendor, Salary has one to one relationship.
• Vendor, inventory has many to one relationship.
• Inventory, product has one to many relationship.
• Product, Admin has many to many relationship.
• Product, Category has many to many relationship.
• Customer, orders has one to many relationship.
• Customer, cart has one to one relationship.
• Customer, shipping_address has one to many relationship.
• Customer, Bank has one to many relationship.
• Bank, Transactions has one to many relationship.
• Orders, Reviews has many to many relationship.
• Orders, Payments has one to many relationship.
• Orders, Return_order has many to many relationship.
• Return_order, Refund has many to many relationship

Relational Schema
This Grocery System project contains 22 entities, which are follows
1. Admin Entity
2. Bank Entity
3. Transaction Entity
4. Store Entity
5. Department Entity
6. Employee Entity
7. Salary Entity
8. Vendor Entity
9. Reward Points Amount Entity
10. Category Entity
11. Product Entity
12. Inventory Entity
13. Customer Entity
14. Cart Entity
15. Shipping Address Entity
16. Orders Entity
17. Payments Entity
18. Review Entity
19. Wishlist Entity
20. Return Order Entity
21. Refund Entity
22. Rewards Entity

The relational schema for the above entities is as below:
PK* = Primary Key FK* = Foreign Key
1. Admin
username (PK) – unique identification of admin.
password - password of admin.
2. Bank
account_number (PK)- Unique identification of Bank account
customer_name -Name of the customer
address - Customer address
mobile - Customer mobile number
email - Customer E-Mail
account_type - Account Type of the Customer
card_number - Card Number of the Customer
cvv - Customer CVV No
exp_date - Card Expiry Date
balance - Balance Amount of the Customer
3. Transaction
tid (PK) - Unique identification of Bank Transaction
transaction_date - Date of the Transaction
from_account - Transaction of from account number
to_account - Transaction of to account number
amount - Amount of the Transaction
4. Store
store_Id (PK) - Unique identification of Store
store_name - Name of the Store
location - Location of the Store
mobile - Mobile Number of the Store
5. Department
department_id (PK) - Unique identification of the Department
department_name - Name of the Department
designation - Designation of the Department
salary - Salary of the Department
6. Employee
employee_id (PK) - Unique identification of the Employee
first_name - Employee First Name
last_name - Employee Last Name
gender - Gender of the employee
age - Age of the employee
mobile - Mobile number of the Employee
email - Employee E-Mail
address - Address of the Employee
emp_pic - Employee Picture
department_id - Employee department of the Id
role - Employee role
password - Password of the Employee
7. Salary
salary_id (PK) - Unique identification of the Salary
employee_id - Employee Salary Id
department_id - Name of the department id
salary_date - Employee Salary Date
salary_amount - Employee Salary Amount
8. Vendor
vendor_id (PK) - Unique identification of the vendor id
vendor_name - Name of the Vendor
mobile - Vendor Mobile Number
email - Email of the Vendor
address - Vendor of the Address
supplies - Supplies of the Vendor
9. Reward Points Amount
points_id (PK) - Unique identification of the Reward Points Id
points - Total Reward Points
amount - Total Reward Points Amount
10. Category
category_id (PK) - Unique identification of the Category Id
category_name - Name of the Category
11. Product
product_id (PK) - Unique identification of the Product Id
category_name - Product category name
product_name - Name of the Product
description - Product Description
price - Product Price
product_pic - Picture of the Product
reward_points - Product Total Reward Points
stock_quantity - Total Product Stock Quantity
12. Inventory
inventory_id (PK) - Unique identification of the Inventory Id
product_id - Name of the Product Id
vendor_id - Name of the Vendor Id
stock_quantity - Total Stock Quantity
restock_date - Total Restock Date
13. Customer
customer_id - Unique identification of the Customer Id
first_name - Customer First Name
last_name - Customer Last Name
mobile - Customer Mobile Number
email - Customer E-mail
address - Customer Address
customer_pic - Customer Photo
password - Customer Password
14. Cart
cart_id (PK) - Unique identification of the cart id
customer_id - Name of the Cart Customer Id
product_id - Name of the Product Id
cart_date - Date of the Cart
15. Shipping Address
shipping_id (PK) - Unique identification of the Shipping Id
customer_id - Customer Id of the shipping
shipping_address - Address of the Shipping
mobile - Shipping Mobile
16. Orders
order_id (PK) - Unique identification of the Orders_Id
order_number - Number of the Orders
customer_id - Order of the Customer_Id
product_id - Order of the Product_Id
order_date - Date of the orders
shipping_id - Orders Shipping_id
17. Payments
payment_id (PK) - Unique identification of the Payment_Id
payment_date - Customer payment of the date
order_no - Customer Payment Order No
customer_id - Payment of the Customer Id
order_amount - Payment Order Amount
reward_points_used - Customer Reward Points Used
reward_points_amount - Total Reward Points Amount
final_bill - Payment Final Bill
payment_type - Customer Payment Type
card_type - Card Type of the Customer
card_number - Customer Card Number
payment_status - Payment of the bill Status
18. Reviews
review_id(PK) - Unique Identification of the Review Id
review_date - Customer Review Date
customer_id - Review of the Customer Id
product_id - Review of the Product Id
rating - Rating of the Product
review_comments - Customer to write review of the Comments
19. Wishlist
wishlist_id (PK) - Unique identification of the Wishlist Id
customer_id - Wishlist Customer Id
product_id - Wishlist of the product Id
date_selected - Date of Selected wishlist
20. Return Order
return_id (PK) - Unique Identification of the Product Return Id
customer_id - Return Order of the Customer Id
order_no - Return Product Order No
return_date - Return Date of the Product
reason - Product Return Reason
return_status - Return Order of the Product Return Status
21. Refund
refund_id (PK) - Unique Identification of the Amount Refund Id
refund_date - Refund Amount date
customer_id - Refund Customer Id
order_no - Refund Product Order No
refund_amount - Total Refund Amount of the Customer
refund_type - Type of Refund Amount
refund_status - Refund Amount Status
22. Rewards
reward_id (PK) - Unique Identification of the Reward Id
customer_id - Rewards Customer Id
order_no - Rewards Product Order No
reward_points - Points of the Product Reward Points
