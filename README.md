# Discuss – Q\&A Platform in PHP

A beginner-friendly platform where users can post questions and respond to others using PHP and MySQL.

---

## 🚀 Overview

Discuss is a lightweight web application designed to simulate the core features of a QnA forum like StackOverflow. The project demonstrates backend CRUD operations, user authentication, dynamic content rendering, and session management using PHP and MySQL.

---

## ✨ Features

* User registration and login system (session-based authentication)
* Post questions and answers with full **CRUD (Create, Read, Update, Delete)** functionality
* Role-based access control handled within a single users table
* Session and cookies management for maintaining user states

---

## 🛠️ Tech Stack

* **Frontend:** HTML5, CSS3
* **Backend:** PHP (Core PHP)
* **Database:** MySQL
* **Version Control:** GitHub
* **Development Environment:** XAMPP / LAMP / WAMP

---

## 🧻 Installation & Usage

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/singla25/php-project-discuss.git
   ```
2. **Setup Localhost:**

   * Use XAMPP, LAMP, or WAMP to run Apache and MySQL.
3. **Database Configuration:**

   * Create a database named `discuss_db` in **phpMyAdmin**.
   * Import the `schema.sql` file provided.
4. **Edit Database Credentials in config.php:**

   ```php
   $dbHost = 'localhost';
   $dbUsername = 'root';
   $dbPassword = '';
   $dbName = 'discuss_db';
   ```
5. **Run the Application:**

   * Visit `http://localhost/project-folder` in your web browser.

---

## 🔪 Demo & Screenshots

*Include screenshots of UI: Login Page, Question Feed, Answer Page, etc.*

---

## ✅ Future Enhancements

* Real-time commenting using WebSockets
* Advanced search and tag filtering
* Email notifications for replies and upvotes
* Full-text search functionality for questions and answers

---

## 📄 License

This project is developed for educational purposes only and is not intended for commercial use.

---

## 👨‍💻 About the Author

Created by **Sahil Singla**, a passionate full-stack PHP developer. This project helped strengthen skills in backend logic, session handling, and building interactive web applications.
