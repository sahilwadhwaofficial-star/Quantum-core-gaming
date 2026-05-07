# ⚙️ Installation & Setup Guide

## 📌 Requirements

* A local server environment such as:

  * WAMP (recommended)
  * XAMPP / LAMP / MAMP
* PHP & MySQL support

---

## 📁 1. File Installation

1. Start your WAMP server.

2. Extract the ZIP file:

   ```
   DWD_Assignment_4_SAHIL_ABHISHEK.zip
   ```

3. Place the extracted files inside your `www` directory:

   ```
   C:\wamp64\www\
   ├── SS6-Quantum-Core-Gaming-main\   (Main project folder)
   └── setup.php                      (Database setup script)
   ```

---

## 🗄️ 2. Database Setup

1. Open your browser and go to:

   ```
   http://localhost/setup.php
   ```

2. This script will automatically:

   * Create the **quantum_gaming** database
   * Create required tables:

     * users
     * registrations
     * orders
     * products
   * Insert dummy product data

3. Once you see:

   ```
   Database setup is complete!
   ```

   ✅ Setup is finished

4. ⚠️ **Important:** Delete `setup.php` after setup for security reasons.

---

## 🌐 3. Run the Website

Open the project in your browser:

```
http://localhost/SS6-Quantum-Core-Gaming-main/
```

---

## 🧪 4. How to Test (Recommended Flow)

### 🔹 Step 1: Register

* Go to the **Register** page
* Create a new user account

---

### 🔹 Step 2: Login

* Login using your newly created credentials

---

### 🔹 Step 3: Test Features

* 🎮 Go to **Games (game1.php)**

  * Register for **Quantum PlayFest**
  * Use your username as *Gamer Tag*

* 🛒 Go to another game (e.g., **game2.php**)

  * Click **BUY NOW**
  * Enter your username as *Gamer Tag*

---

### 🔹 Step 4: Check Profile

* Click on **Profile** in the navigation bar

✔ You will see:

* Event registrations
* Purchase history

👉 This confirms:

* Data is stored correctly
* Dynamic user data is working

---

## 📌 Notes

* This project is built for academic purposes
* Uses a simple PHP + MySQL architecture
* No external frameworks used

## 🌐 Live Demo

🔗 **Live Website:**
http://quantum-core-gaming.great-site.net/

🧪 **Test Credentials (Optional):**

* You can register a new account
* Or use your own credentials to test full functionality

> ⚠️ Note: Hosted on free hosting, so slight delays may occur.

---
