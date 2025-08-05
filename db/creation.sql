DROP DATABASE IF EXISTS `ThesisHubDb`;

CREATE DATABASE `ThesisHubDb`;

USE `ThesisHubDb`;

-- Departments
DROP TABLE IF EXISTS `departments`;

CREATE TABLE
    `departments` (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `dept_name` VARCHAR(50) NOT NULL,
        `faculty_head` VARCHAR(50) NOT NULL,
        `email` VARCHAR(50) NOT NULL
    );

-- Students
DROP TABLE IF EXISTS `students`;

CREATE TABLE
    `students` (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `username` VARCHAR(50) NOT NULL,
        `email` VARCHAR(50) NOT NULL,
        `phone` VARCHAR(15) NOT NULL,
        `password` VARCHAR(50) NOT NULL,
        `department_id` INT NOT NULL,
        FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
    );

-- Tutors
DROP TABLE IF EXISTS `tutors`;

CREATE TABLE
    `tutors` (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `first_name` VARCHAR(50) NOT NULL,
        `last_name` VARCHAR(50) NOT NULL,
        `email` VARCHAR(50) NOT NULL,
        `specialization` VARCHAR(50),
        `department_id` INT NOT NULL,
        FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
    );

-- Projects
DROP TABLE IF EXISTS `projects`;

CREATE TABLE
    `projects` (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `title` VARCHAR(50) NOT NULL,
        `project_description` VARCHAR(250),
        `registration_date` DATETIME NOT NULL,
        `project_status` ENUM (
            'in progress',
            'completed',
            'under review',
            'approved',
            'rejected'
        ) NOT NULL,
        `student_id` INT NOT NULL,
        FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
    );

-- Project_Tutors
DROP TABLE IF EXISTS `project_tutors`;

CREATE TABLE
    `project_tutors` (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `project_id` INT NOT NULL,
        `tutor_id` INT NOT NULL,
        `tutor_role` VARCHAR(50) NOT NULL,
        FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
    );

-- Documents
DROP TABLE IF EXISTS `documents`;

CREATE TABLE
    `documents` (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `doc_name` VARCHAR(50) NOT NULL,
        `file_path` VARCHAR(250) NOT NULL,
        `upload_date` DATETIME NOT NULL,
        `doc_status` ENUM ('under review', 'approved', 'rejected') NOT NULL,
        `project_id` INT NOT NULL,
        FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
    );

-- Comments
DROP TABLE IF EXISTS `comments`;

CREATE TABLE
    `comments` (
        `id` INT PRIMARY KEY AUTO_INCREMENT,
        `comment_text` VARCHAR(500) NOT NULL,
        `upload_date` DATETIME NOT NULL,
        `document_id` INT NOT NULL,
        `tutor_id` INT NOT NULL,
        FOREIGN KEY (`document_id`) REFERENCES `documents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
        FOREIGN KEY (`tutor_id`) REFERENCES `tutors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
    );