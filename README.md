# 📝 Blogging System

A simple web-based Blogging System that allows users to register, log in, create blog posts, and view published posts through a clean and user-friendly interface.

## 📌 Project Overview

The Blogging System is a web application developed using **HTML, CSS, PHP, and MySQL**.

The system provides basic blogging functionality where users can create accounts, securely log in, publish posts, and view available blog posts.

The project demonstrates the integration of a frontend interface with a PHP backend and MySQL database.

## ✨ Features

* 👤 User registration
* 🔐 User login and logout
* 📝 Create and publish blog posts
* 📖 View published posts
* 🏠 Welcome page for logged-in users
* 📧 Contact page
* ℹ️ About page
* ⭐ Features page
* 🎨 Responsive and user-friendly interface
* 🗄️ MySQL database connectivity

## 🛠️ Technologies Used

* **HTML5** — Web page structure
* **CSS3** — Styling and layout
* **PHP** — Server-side programming
* **MySQL** — Database management
* **XAMPP/WAMP** — Local development environment

## 📂 Project Structure

```text
blogging-system/
│
├── .gitignore
│
├── index.html
├── about.html
├── contact.html
├── features.html
├── login-form.html
├── post-form.html
├── register-form.html
│
├── css/
│   ├── blog.css
│   ├── forms.css
│   └── style.css
│
└── php/
    ├── db.php
    ├── login.php
    ├── logout.php
    ├── register.php
    ├── save_post.php
    ├── view_posts.php
    └── welcome.php
```

## 🔄 Application Flow

```text
User
  ↓
Registration
  ↓
Login
  ↓
Welcome Page
  ↓
Create Blog Post
  ↓
Save Post
  ↓
View Published Posts
```

## 🗄️ Database

The application uses a MySQL database named:

```text
blogging_system
```

The PHP backend connects to the database through:

```text
php/db.php
```

The database stores information required for user authentication and blog posts.

## ▶️ How to Run the Project

### 1. Install XAMPP or WAMP

Install a local PHP development environment such as **XAMPP** or **WAMP**.

### 2. Start the required services

Start:

* Apache
* MySQL

### 3. Copy the project

Place the project inside your server's web directory.

For XAMPP:

```text
htdocs/
└── blogging-system/
```

For WAMP:

```text
www/
└── blogging-system/
```

### 4. Create the database

Open **phpMyAdmin** and create:

```text
blogging_system
```

Create the required tables for users and blog posts.

### 5. Configure the database

The database connection is handled in:

```text
php/db.php
```

The default local configuration is:

```php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "blogging_system";
```

Update these values if your local MySQL configuration is different.

### 6. Run the application

Open your browser and navigate to:

```text
http://localhost/blogging-system/
```

## 🎯 Objective

The main objective of this project is to develop a simple blogging platform while demonstrating how **HTML, CSS, PHP, and MySQL** can work together to create a database-driven web application.

## 🚀 Future Enhancements

* User profile management
* Edit and delete blog posts
* Blog categories
* Search functionality
* Comments and likes
* Image upload for posts
* Admin dashboard
* Post pagination
* Improved authentication and security
* Responsive mobile design

## 👨‍💻 Author

**Yuva Ramcharan Sunkireddy**

Computer Science and Engineering

## 📄 License

This project is created for educational and learning purposes.
