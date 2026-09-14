# 🩸 Blood Bank Management System

<div align="center">
  <strong>A comprehensive healthcare management platform for blood donation tracking and management</strong>
</div>

---

## 📋 Overview

**Blood Bank** is a full-stack web application built with **PHP** and **MySQL** as a 5th-semester academic project. It provides a complete solution for managing blood donations, donors, inventory, and requests in a healthcare facility.

### 🎯 Project Purpose
This project demonstrates the ability to build end-to-end web applications with:
- User authentication and role-based access
- Database design and management
- Server-side processing with PHP
- Responsive web interface

---

## 🛠️ Technology Stack

| Component | Technology |
|-----------|-----------|
| **Backend** | PHP 7+ |
| **Database** | MySQL |
| **Frontend** | HTML5, CSS3, JavaScript |
| **Architecture** | MVC Pattern |

---

## 📁 Project Structure

```
Blood-Bank/
├── index.php              # Landing/home page
├── About-Us.php          # About page
├── Blood-Bank.php        # Blood donation info page
├── Contact.php           # Contact form page
├── header.php            # Reusable header component
├── footer.php            # Reusable footer component
├── Admin/                # Admin dashboard & management
├── DataBase/             # Database configuration & SQL scripts
└── images/               # Asset images
```

---

## ✨ Key Features

✅ **User Management**
- User registration and login
- Role-based access control (Admin, Donor, Patient)
- User profile management

✅ **Blood Inventory Management**
- Track blood type availability
- Real-time stock updates
- Low stock alerts

✅ **Donation Tracking**
- Register new blood donors
- Record donation history
- Medical screening forms

✅ **Blood Request System**
- Request blood for patients
- Track request status
- Hospital integration

✅ **Admin Dashboard**
- System-wide analytics
- User management
- Inventory reports
- Request management

---

## 🚀 Installation & Setup

### Prerequisites
- PHP 7.0 or higher
- MySQL Server
- Apache Web Server (or similar)
- Browser with JavaScript enabled

### Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/Muhammad-Tabish-123/Blood-Bank.git
   cd Blood-Bank
   ```

2. **Database Setup**
   - Navigate to `DataBase/` directory
   - Import SQL file into MySQL:
     ```sql
     mysql -u [username] -p [database_name] < blood_bank.sql
     ```
   - Update database credentials in configuration file

3. **Configure PHP Settings**
   - Update database connection details in `DataBase/` config file
   - Ensure PHP has write permissions to required directories

4. **Run the Application**
   - Place folder in web root (htdocs for XAMPP)
   - Access via: `http://localhost/Blood-Bank/index.php`

---

## 📖 Usage Guide

### For Donors
1. **Register** - Create a new account
2. **Login** - Sign in to your dashboard
3. **Donate** - Fill donation form and schedule appointment
4. **View History** - Check past donation records

### For Patients/Requesters
1. **Login** - Access your account
2. **Request Blood** - Submit blood request with medical details
3. **Track Status** - Monitor request fulfillment
4. **Notifications** - Receive updates on availability

### For Administrators
1. **Dashboard** - View system statistics
2. **Manage Users** - Add/edit/remove users
3. **Inventory Control** - Update blood stock
4. **Report Generation** - Create system reports

---

## 💾 Database Schema

The system uses normalized MySQL tables for:
- **Users** - User accounts and authentication
- **Donors** - Donor information and medical history
- **BloodInventory** - Blood type stock tracking
- **Donations** - Donation records
- **BloodRequests** - Patient blood requests
- **Transactions** - Audit trail

---

## 🎓 Learning Outcomes

This project demonstrates proficiency in:
- ✅ PHP backend development
- ✅ MySQL database design and queries
- ✅ User authentication systems
- ✅ Form handling and validation
- ✅ Session management
- ✅ HTML/CSS for UI
- ✅ Full-stack web development workflow

---

## 🔧 Technical Highlights

### Backend Logic
- Server-side form validation
- Secure database operations
- Session-based authentication
- Error handling and logging

### Database
- Normalized schema design
- Foreign key relationships
- Data integrity constraints
- Query optimization

### Frontend
- Responsive design
- Form validation (client & server)
- User-friendly interface
- Navigation system

---

## 📝 Notes & Considerations

- This is an **academic project** designed for learning purposes
- Database credentials should be stored in environment variables in production
- Implement SSL/HTTPS for sensitive data transmission
- Add password encryption (bcrypt) for enhanced security
- Consider implementing caching for improved performance

---

## 🚦 Project Status

✅ **Complete** - Fully functional for academic use

---

## 👤 Author

**Muhammad Tabish**  
GitHub: [@Muhammad-Tabish-123](https://github.com/Muhammad-Tabish-123)

---

## 📚 Related Repositories

- [Mobile-Store](https://github.com/Muhammad-Tabish-123/Mobile-store-my-version) - E-commerce platform
- [Ajax-Practice](https://github.com/Muhammad-Tabish-123/Ajax-Practice) - AJAX implementation
- [PHP Backend Projects](https://github.com/Muhammad-Tabish-123?tab=repositories&q=php)

---

*Last Updated: September 14, 2026*