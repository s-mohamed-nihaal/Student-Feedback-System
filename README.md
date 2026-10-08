# 🎓 Student Feedback System

A simple web-based **Student Feedback System** developed using **PHP, MySQL, HTML, and CSS**. The system allows students to create an account, log in, submit feedback about faculty and subjects, and provides a way to view submitted feedback.

## 🚀 Features

* 👤 Student Registration
* 🔐 Student Login & Logout
* 🔑 Session-based Authentication
* 📝 Faculty Feedback Form
* ⭐ Rating System
* 💬 Comments and Suggestions
* 📊 View Submitted Feedback
* 🗄️ MySQL Database Integration
* 📄 Feedback stored in a text file
* 🕒 Automatic feedback submission date/time
* 🔒 Basic input protection using `htmlspecialchars()`

## 🛠️ Technologies Used

* **Frontend:** HTML, CSS
* **Backend:** PHP
* **Database:** MySQL
* **Server:** XAMPP / Apache
* **Database Management:** phpMyAdmin

## 📂 Project Structure

```text
Student-Feedback-System/
│
├── index.php
├── signup.php
├── login.php
├── logout.php
├── dashboard.php
├── feedback.php
├── submit_feedback.php
├── view_feedback.php
├── db.php
├── style.css
├── feedback.txt
├── student_feedback.sql
└── README.md
```

## 📋 Main Modules

### 1. Student Registration

Students can create an account by providing their:

* Name
* Email
* Password

The registration details are stored in the MySQL database.

### 2. Student Login

Registered students can log in using their email and password.

PHP sessions are used to maintain the student's login state.

### 3. Student Dashboard

After successful login, the student is redirected to the dashboard where they can access the feedback system.

### 4. Feedback Submission

Students can provide feedback about faculty and subjects using ratings and comments.

The feedback includes areas such as:

* Teaching
* Explanation
* Communication
* Knowledge
* Punctuality
* Overall Rating
* Comments

### 5. View Feedback

Submitted feedback can be retrieved from the database and displayed in a table along with the student's name.

### 6. Feedback File Storage

Feedback information is also stored in `feedback.txt` for simple text-based record keeping.

## 🗄️ Database

The project includes the database file:

```text
student_feedback.sql
```

Import this file into **phpMyAdmin** to create the required database and tables.

The system uses tables such as:

```text
students
feedback
```

The `student_id` in the feedback table is connected to the student's `id` using a foreign key.

## ⚙️ Installation & Setup

### Step 1: Install XAMPP

Download and install XAMPP with:

* Apache
* MySQL
* PHP
* phpMyAdmin

### Step 2: Clone the Repository

```bash
git clone https://github.com/s-mohamed-nihaal/Student-Feedback-System.git
```

Or download the repository as a ZIP file.

### Step 3: Move the Project

Copy the project folder into:

```text
C:\xampp\htdocs\
```

The final location should be:

```text
C:\xampp\htdocs\Student-Feedback-System
```

### Step 4: Start XAMPP

Open XAMPP Control Panel and start:

```text
Apache
MySQL
```

### Step 5: Create the Database

Open:

```text
http://localhost/phpmyadmin
```

Create/import the database using:

```text
student_feedback.sql
```

### Step 6: Check Database Connection

Make sure `db.php` contains the correct MySQL connection details.

Example:

```php
$conn = mysqli_connect("localhost", "root", "", "student_feedback");
```

If your MySQL password or database name is different, update it accordingly.

### Step 7: Run the Project

Open your browser and visit:

```text
http://localhost/Student-Feedback-System/
```

## 🔄 System Flow

```text
Student
   ↓
Register
   ↓
Login
   ↓
Dashboard
   ↓
Submit Feedback
   ↓
MySQL Database
   ↓
View Feedback
```

## 🔐 Security

The project demonstrates basic security practices including:

* PHP sessions for authentication
* Password hashing during registration
* `htmlspecialchars()` when displaying user data
* MySQL foreign-key relationships

> **Note:** For production use, additional security measures such as prepared statements, CSRF protection, stronger validation, and secure session configuration should be implemented throughout the application.

## 🎯 Purpose

This project was developed as a **PHP/MySQL academic project** to demonstrate concepts such as:

* PHP forms
* MySQL database connectivity
* CRUD/database operations
* Sessions
* Cookies
* File handling
* SQL joins
* Authentication
* HTML/CSS integration

## 📸 Screenshots

Add screenshots of your application here:

```text
screenshots/
├── login.png
├── signup.png
├── dashboard.png
├── feedback-form.png
└── feedback-list.png
```

Example:

```markdown
![Login Page](screenshots/login.png)
```

## 👨‍💻 Author

**S. Mohamed Nihaal**

Computer Science Student

## 📜 License

This project is created for educational and academic purposes.
