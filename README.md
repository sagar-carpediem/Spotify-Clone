# 🎵 Spotify-Themed Login & Registration Web App

This is a **simple login and registration project** built using **HTML, CSS, PHP, and MySQL**, styled in **Spotify's green and black theme**.

---

## 🌟 Features

- Clean and stylish **Spotify-inspired UI**
- **User registration form** (`signup.html`)
- **User login form** (`login.html`)
- Data saved to **MySQL database** using `register.php`
- User authentication with PHP (`login.php`)
- Redirects user to **home page (`index.html`)** after login

---

## 🛠 Technologies Used

- **HTML5** – Forms and page structure  
- **CSS3** – Styling (`style.css` & `login_style.css`)  
- **PHP** – Backend login/registration logic  
- **MySQL** – Storing user data via phpMyAdmin (XAMPP)

---

## 📁 File List

📦 spotify-login/
├── index.html → Home page after login
├── login.html → Login form
├── signup.html → Registration form
├── login.php → PHP code to validate login
├── register.php → PHP code to store user data
├── style.css → Styling for index.html
├── login_style.css → Styling for login/signup forms
└── README.md → Project information


---

## 🧪 Setup Instructions (Using XAMPP)

1. 📂 Copy the project folder into `C:/xampp/htdocs/`
2. 🧩 Start Apache and MySQL in XAMPP
3. 🌐 Visit `http://localhost/spotify-login/signup.html` in your browser
4. 🛠️ Create a MySQL database:

```sql
CREATE DATABASE spotify;

USE spotify;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(100)
);

👨‍💻 Author
Sagar Dabhi
📧 dabhisagar2005@gmail.com
🎓 Web Development Student
