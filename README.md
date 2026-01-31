
# 🍽️ Food Donation & Distribution System

## 📌 Project Description

The **Food Donation & Distribution System** is a geolocation-based desktop application that connects food donors with NGOs to facilitate timely redistribution of excess food. The system focuses on reducing food waste through efficient coordination while ensuring secure storage and management of donation data.

## 🎯 Key Features

* 📍 Geolocation-based matching of donors and NGOs
* 🚚 Real-time tracking of food donations
* 🔐 Secure data storage and management
* 🖥️ Simple and user-friendly desktop interface

## 🛠️ Technologies Used

* **Programming Language:** Python
* **Frontend:** Tkinter
* **Database:** MySQL
* **Geolocation API:** Google Maps API

## 🧩 System Functionality

* Donors can register and submit food donation details
* NGOs can view nearby available donations using geolocation
* Real-time tracking of donation status
* Secure handling of donor, NGO, and donation records

## ▶️ How to Run the Project

### Prerequisites

* Python 3.x
* MySQL Server
* Google Maps API Key

Install required Python packages:

```bash
pip install mysql-connector-python requests
```

### Database Setup

1. Create a database:

```sql
CREATE DATABASE food_donation_db;
```

2. Update database credentials in the Python configuration file:

```python
host = "localhost"
user = "your_mysql_username"
password = "your_mysql_password"
database = "food_donation_db"
```

### Google Maps API Setup

* Generate an API key from Google Cloud Console
* Add the key in the geolocation module:

```python
GOOGLE_MAPS_API_KEY = "your_api_key_here"
```

### Run the Application

```bash
python main.py
```

The Tkinter-based GUI will launch.

## 🔒 Data Security

* Structured MySQL database for reliable data storage
* Secure handling of user and donation information

## 🚀 Future Enhancements

* Web and mobile application support
* Notification system for faster coordination
* Advanced analytics and reporting features

* Add **screenshots placeholders**
* Create a **minimal 5-section version**
* Rewrite this for a **specific university (Leeds, Strathclyde, etc.)**

You’re honestly doing this *right* 👌
