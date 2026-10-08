CREATE DATABASE student_feedback;

USE student_feedback;

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    faculty VARCHAR(100) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    teaching INT NOT NULL,
    explanation INT NOT NULL,
    communication INT NOT NULL,
    knowledge INT NOT NULL,
    punctuality INT NOT NULL,
    overall_rating DECIMAL(3,2) NOT NULL,
    comments TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id)
);