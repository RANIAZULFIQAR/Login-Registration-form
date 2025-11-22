
# 📌 PHP Registration & Login System (File-Based)

This is a simple PHP project that demonstrates how to build a basic **user registration and login system** using a plain text file (`users.txt`) as storage.
It’s perfect for beginners who want to learn:

* Handling forms in PHP
* Validating user input
* Reading/writing files
* Creating a basic authentication flow

No database is required — everything is stored in a single text file.

---

## 🚀 Features

* ✔ Register with username & password
* ✔ Validation rules:

  * Username must contain **alphabets only**
  * Password must include **both letters and numbers**
* ✔ Prevents duplicate usernames
* ✔ Login system with simple verification
* ✔ Clean and minimal front-end design (HTML + CSS)
* ✔ Fully functional using only PHP's built-in server

---

## 📁 Project Structure

```
/auth-system
│
├── register.php
├── register_save.php
├── login.php
├── login_check.php
├── welcome.php
└── users.txt
```

* **users.txt** stores users in this format:
  `username:password`

---

## 💻 How to Run the Project

### 1. Make sure PHP is installed

Check using:

```sh
php -v
```

### 2. Start the PHP server

Open a terminal inside your project folder and run:

```sh
php -S localhost:8000
```

### 3. Open the app in your browser

* Registration page → [http://localhost:8000/register.php](http://localhost:8000/register.php)
* Login page → [http://localhost:8000/login.php](http://localhost:8000/login.php)

---

## 📝 How It Works

### 🔹 Registration

* User enters username + password
* System validates:

  * Username = only alphabets
  * Password = must contain letters + numbers
* System checks if username already exists
* If valid → saves to `users.txt`

### 🔹 Login

* Compares input with saved entries in `users.txt`
* If a match is found → redirects to `welcome.php`


## 📜 License

This project is free to use, modify, and learn from.
Feel free to fork and improve it in your own way!

