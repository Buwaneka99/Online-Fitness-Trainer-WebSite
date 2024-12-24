# MLB-FITNESS - Online Fitness Trainer

## Project Overview
**MLB-FITNESS** is an online fitness training platform developed by **Group01.1**. This web-based application enables users to maintain their physical health conveniently from home, guided by expert trainers. It is particularly beneficial for individuals with busy schedules who struggle to find time for gym sessions.

The platform offers a **premium feature** that allows users to interact with professional trainers, access personalized workout plans, and track their progress effectively.

The frontend of MLB-FITNESS is built using **HTML**, **CSS**, and **JavaScript**, while the backend is powered by **PHP**. It operates seamlessly on a **XAMPP server**, ensuring reliability and ease of deployment.

---

## Features
- **User Registration and Login**: Users can register, log in, and manage their accounts. Premium memberships unlock additional features.
- **Trainer Dashboard**: Trainers can add workout courses, upload videos, and manage their profiles.
- **Admin Panel**: Admins can add and manage trainers, monitor user payments, and oversee system activities.
- **Premium Membership**: Users can purchase premium packages for more advanced features and secure payment options.
- **Feedback System**: Users can submit feedback about their experience, report issues, or provide suggestions.

---
  
## Table of Contents

```
MPBFitness/                              
 |---Database/
 |     |----Online_Fitness_Trainer.sql   # Database schema
 |---Main
 |     |----connection.php                # Database connection
 |     |----signup_page.php               # User registration page
 |     |----login_page.php                # User login page
 |     |----plan_select_page.html         # Premium plan selection
 |     |----JS/                           # JavaScript scripts
 |---Admin
 |     |----connect.php                   # Admin database connection
 |---Styles/
 |     |----CSS/                          # Stylesheets
 |---images/                              # Image resources
 |---README.md                            # Documentation
```

---

## Installation Instructions
### Step 1: Prerequisites
- **XAMPP Server**: Ensure XAMPP is installed.
- **Web Browser**: Use any modern web browser like **Google Chrome** or **Mozilla Firefox**.

### Step 2: Install XAMPP
1. Download and install **XAMPP** from [Apache Friends](https://www.apachefriends.org/).
2. Start the **Apache** and **MySQL** services from the XAMPP Control Panel.

### Step 3: Clone the Repository
```
git clone https://github.com/Buwaneka99/Online-Fitness-Trainer-WebSite.git
```

### Step 4: Database Setup
1. Open **phpMyAdmin** in your browser:
     ```
     http://localhost/phpmyadmin
     ```
2. Create a new database named `Online_Fitness_Trainer`:
     ```sql
     CREATE DATABASE Online_Fitness_Trainer;
     ```
3. Import the database schema:
   - Go to the `Import` tab in phpMyAdmin.
   - Select the `Online_Fitness_Trainer.sql` file located in the `Database` directory of the cloned repository.
   - Click `Go` to import the tables.
     
### Step 5: Configure Database Connection
1. Open the `connection.php` file in the `Main` folder and update:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "Online_Fitness_Trainer";
     ```
2. Update the `connect.php` file in the `Admin` folder:
     ```php
     $con = new mysqli('localhost', 'root', '', 'Online_Fitness_Trainer');
     ```

### Step 6: Deploy the Application
1. Move the project folder to the `htdocs` directory of your XAMPP installation:
     ```
     C:/xampp/htdocs/mlbfitness
     ```
2. Open your browser and navigate to:
     ```
     http://localhost/mlbfitness
     ```

---

## Usage
1. **User Registration**:
   - Navigate to the **Login Page**.
   - Click the **Register** button.
   - Fill in the required fields and submit the form to create an account.

2. **Login**:
   - Use your registered credentials to log in.

3. **Buy Premium Membership**:
   - After logging in, go to the **Premium Page**.
   - Select a suitable package.
   - Enter payment details and complete the purchase securely.

4. **Trainer Login**:
   - Navigate to the **Trainer Login Page**.
   - Log in with trainer credentials to access the dashboard.

5. **Provide Feedback**:
   - Go to the **Feedback Page**.
   - Enter your feedback and submit it.

---

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP

---

## Contributors

| Contributors  | GitHub Profile                                                      |
|---------------|---------------------------------------------------------------------|
| **Buwaneka**  | [Buwaneka99](https://github.com/Buwaneka99)                         |
| **Janitha**   | [mju-premachandra](https://github.com/mju-premachandra)             |

---

## License
This project is licensed under the **MIT License**. See the **LICENSE** file for details.

---

## Contact
For further assistance or queries, contact:
- **Developer**: Group01.1
- **GitHub Repository**: [MLB-FITNESS](https://github.com/Buwaneka99/Online-Fitness-Trainer-WebSite)

