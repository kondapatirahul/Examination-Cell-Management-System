# Examination Cell Management System

## Overview

The Examination Cell Management System is a web-based application developed as a Diploma Final Year Project. It helps educational institutions manage examination-related activities such as student records, classes, subjects, examination results, and schedules through an admin panel while allowing students to view their results online.

## Features

* Admin Login
* Dashboard
* Add and Manage Classes
* Add and Manage Students
* Add and Manage Results
* Examination Schedule Management
* Student Result Search
* View Student Results
* Logout

## Technology Stack

### Frontend

* HTML
* CSS
* JavaScript

### Backend

* PHP

### Database

* MySQL

### Server

* Apache (XAMPP)

## Requirements

* XAMPP (Apache + MySQL)
* PHP 7.x or later
* MySQL
* Modern Web Browser

## Installation

1. Install XAMPP.
2. Start Apache and MySQL.
3. Copy the project folder into:

   ```
   C:\xampp\htdocs\
   ```
4. Open phpMyAdmin.
5. Create a database named:

   ```
   srms
   ```
6. Import the SQL file located in the project's `SQL` folder.
7. Open the browser and visit:

   ```
   http://localhost/srms-master2/
   ```

## Login

Use the credentials stored in the imported database.

## Folder Structure

```
css/
images/
SQL/
login.php
dashboard.php
init.php
...
```

## Future Improvements

* Responsive Design
* Password Hashing
* Prepared Statements
* PDF Result Export
* Email Notifications

## License

This project was developed as part of a Diploma Final Year academic project.
