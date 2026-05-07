# Expense Tracker

A web-based personal finance management system designed to help users track their income, expenses, debts, and savings. This project provides a centralized dashboard to monitor financial health through detailed analysis and reminders.

## 🚀 Features

* **User Authentication:** Secure registration and login system with profile management.
* **Transaction Management:** Add and track Expenses, Income, Borrowing (Debts), and Lending.
* **Multi-Wallet Support:** Manage multiple wallets or accounts to organize funds.
* **Budgeting:** Set and monitor monthly or category-specific budgets.
* **Reminders:** Create and view reminders for upcoming bills or payments.
* **Categorization:** Custom categories for better organization of transactions.
* **Financial Analysis:** Visual representation and analysis of spending habits.
* **Dashboard:** A comprehensive overview of current balances, recent transactions, and financial status.

## 🛠️ Tech Stack

* **Backend:** PHP
* **Database:** MySQL
* **Frontend:** HTML5, CSS3, JavaScript
* **Server Environment:** XAMPP / WAMP / LAMP

## 📋 Installation & Setup

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/ashokkhichi010/Expense-Tracker.git
    ```

2.  **Set up the Database:**
    * Open **phpMyAdmin**.
    * Create a new database named `expense_tracker`.
    * Import the `expense_tracker.sql` file located in the root directory of the project.

3.  **Configure Connection:**
    * Navigate to the `include/` folder.
    * Ensure the database configuration (host, username, password) in the connection script matches your local server settings.

4.  **Run the Project:**
    * Move the project folder to your server's root directory (e.g., `htdocs` for XAMPP).
    * Open your browser and navigate to `http://localhost/Expense-Tracker/index.php`.

## 📂 Project Structure

* `JS/` & `css/`: Frontend assets and styling.
* `include/`: Core logic and database connection files.
* `add...php`: Individual modules for adding different transaction types.
* `analysis.php`: Script for generating financial reports.
* `dashboard.php`: The main landing page after login.
* `expense_tracker.sql`: The database schema file.

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to check the [issues page](https://github.com/ashokkhichi010/Expense-Tracker/issues).
