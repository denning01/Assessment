/*
 Task 4: Database & SQL
 ----------------------

 a) Difference between INNER JOIN and LEFT JOIN
 ----------------------------------------------
 - INNER JOIN: Returns only rows where there is a match in both tables.
 - LEFT JOIN: Returns all rows from the left table, and the matching rows 
   from the right table. If no match exists, NULLs are returned for the right table.
*/




/*
 b) SQL query to get the first loan disbursed for each client
    Table: loan_requests (id, user_id, amount, status, disbursed_at)
    Approach: Use ROW_NUMBER() to rank disbursed loans per user and pick the first.
*/
SELECT id, user_id, amount, status, disbursed_at
FROM (
    SELECT lr.*,
           ROW_NUMBER() OVER (PARTITION BY user_id ORDER BY disbursed_at ASC) AS rn
    FROM loan_requests lr
    WHERE status = 'disbursed'
) ranked
WHERE rn = 1;


/*
 c) SQL query to return full name and email of users 
    whose email ends with @gmail.com
    Table: users (id, first_name, last_name, email)
*/
SELECT CONCAT(first_name, ' ', last_name) AS full_name, email
FROM users
WHERE email LIKE '%@gmail.com';
