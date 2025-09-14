Download xampp
start apache and my sql

download github files
rename the folder to perfered name
drag and drop into htdocs

type local http://localhost/phpmyadmin/
create a new data base called logindb
create a table called users (plural very important or it won't work)

  1	id Primary	int(11)
  2	name	varchar(128)	utf8mb4_general_ci	
  3	email Index	varchar(255)	utf8mb4_general_ci	
  4	password_hash	varchar(255)	utf8mb4_general_ci	

  if you have changed the name of the database or table you will need to change it in the code

  
