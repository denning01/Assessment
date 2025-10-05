
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



## 
## 

## REACT

## 
# REACT-Tasks

This project contains five React components that demonstrate core React concepts such as state, events, conditional rendering, lists, forms, and props. Each task is implemented in a separate component for clarity and modularity.

## Table of Contents
1. [Project Setup](#project-setup)
2. [Components](#components)
3. [How to Run](#how-to-run)
4. [Usage](#usage)

---

## Project Setup

This project was created using **Vite** with React. Ensure you have Node.js and npm installed.

1. Clone the repository:
   ```bash
   git clone <your-repo-link>
   cd REACT-Tasks
Install dependencies:

bash
Copy code
npm install
Start the development server:

bash
Copy code
npm run dev
Open the URL provided in your terminal (usually http://localhost:5173) to view the app.

Components
1. CounterButton.jsx – Task 1: Counter Button
Displays a count starting from 0.

Increments the count by 1 each time the button is clicked.

2. ConditionalRendering.jsx – Task 2: Conditional Rendering
Displays "Hello, Guest!" if the user is not logged in.

Displays "Welcome, [username]!" if the user is logged in.

Includes a toggle button to simulate login/logout.

3. FruitsList.jsx – Task 3: Rendering Lists
Renders an array of fruits (Apple, Banana, Mango, Orange) as an unordered list (<ul>).

4. GreetingForm.jsx – Task 4: Handling Input (Forms)
Contains an input field and a button.

User types their name and clicks the button to display a greeting: "Hello, [name]!".

5. Header.jsx – Task 5: Props (Passing Data)
A simple header component that receives a title prop and displays it inside an <h1> tag.

How to Run
Ensure dependencies are installed (npm install).

Run the development server:

bash
Copy code
npm run dev
Open the app in your browser.

Interact with each component to test its functionality:

Increment the counter in CounterButton

Toggle login in ConditionalRendering

View the fruit list in FruitsList

Type your name and click Greet in GreetingForm

See the dynamic header in Header

