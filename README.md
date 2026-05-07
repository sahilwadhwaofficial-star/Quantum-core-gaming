Dynamic Web Designing (BCA 203) - Project Submission
Project Name: Quantum Core Gaming Author: Sahil Wadhwa - 01613702024 & Abhishek Bhatnagar - 02813702024 Course: BCA, Semester III M1

Requirements

A WAMP server (or any other Apache/MySQL/PHP server).

1. File Installation

Start your WAMP server.

Place the project folder and the setup script inside your www directory as shown below:
Extract the files from the Zip file i.e DWD_Assignment_4_SAHIL_ABHISHEK.zip  
C:\wamp64\www\
├── SS6-Quantum-Core-Gaming-main\ (The entire website folder)
└── setup.php                  (The database installer)


2. Database Setup

Open your web browser and navigate to:
http://localhost/setup.php

This single script will automatically:

Create the quantum_gaming database.

Create all tables (users, registrations, orders, products).

Insert the dummy product data for the homepage.

Once you see the "Database setup is complete!" message, you are done. You can delete setup.php for security.

3. Run the Website

Navigate to the project's homepage to begin:
http://localhost/SS6-Quantum-Core-Gaming-main/

4. How to Test (Recommended Flow)

Register: Go to the "Register" page and create a new user.

Login: You will be redirected to log in with your new account.

Test Forms:

Go to Games (game1.php) and register for the "Quantum PlayFest". Use your new username as the "Gamer Tag".

Go to any game (e.g., game2.php) and "BUY NOW". Use your new username as the "Gamer Tag".

Check Profile: Click "Profile" in the navigation bar. You will see both your event registration and your purchase history listed, demonstrating the dynamic capture and display of customer data.