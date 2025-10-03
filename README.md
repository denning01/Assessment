
# PHP Assessment

This project contains solutions to different PHP and SQL tasks organized into **separate files** for clarity and easy testing.  
Each task demonstrates specific concepts in PHP programming, database handling, and applied logic.

---

## 📂 Project Structure

.
├── task1.php # Task 1: Include vs Require, Session vs Cookie
├── task2.php # Task 2: Functions & Loan Repayment Calculation
├── task3.php # Task 3: Arrays & Logic (highest, lowest, average, filter)
├── task4.sql # Task 4: SQL Queries (JOINs, first disbursed loan, Gmail users)
├── task5.php # Task 5: Date & Applied Logic (today, tomorrow, repayment check)
└── README.md # Documentation (this file)



## 📝 Task Breakdown

### **Task 1: Include, Require, Session, Cookie**
- Explains difference between `include` and `require` in PHP.
- Demonstrates how cookies and sessions are used with real-world examples.
- File: `task1.php`

---

### **Task 2: Functions & Loan Calculation**
- Defines a `loanRepayment()` function.
- Calculates total repayment with an interest rate.
- Uses **default interest rate (10%)** when not provided.
- Tested with two calls:  
  - `loanRepayment(5000)` → uses default 10%  
  - `loanRepayment(5000, 15)` → uses 15%  
- File: `task2.php`

---

### **Task 3: Arrays & Logic**
- Given loan amounts `[2000, 1500, 3000, 500, 4500]`.
- Finds:
  - Highest loan
  - Lowest loan
  - Average loan
- Prints only loans above 2000 using a loop.
- File: `task3.php`

---

### **Task 4: Database & SQL**
- Explains difference between `INNER JOIN` and `LEFT JOIN`.
- SQL queries:
  - First loan disbursed for each client.
  - Users with Gmail accounts (`@gmail.com`).
- File: `task4.sql`

---

### **Task 5: Date & Applied Logic**
- Gets today’s date in `YYYY-MM-DD` format.
- Gets tomorrow’s date.
- Checks if a repayment date equals tomorrow and prints **"Repayment is tomorrow."**
- File: `task5.php`

---

## 🚀 How to Run

1. Make sure you have **PHP installed** (`php -v` to check).
2. Navigate to the project directory in your terminal.
3. Run each PHP file using:

   ```bash
   php task1.php
   php task2.php
   php task3.php
   php task5.php
For SQL queries (task4.sql):

Import or run queries inside your database client (e.g., MySQL, PostgreSQL).

✅ Notes
Each task is self-contained in its own file.

Comments are included in all files for easy understanding.

This structure makes it easy for reviewers to check each task independently.

