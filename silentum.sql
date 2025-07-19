CREATE DATABASE IF NOT EXISTS silentum_db;
USE silentum_db;

-- Create bookings table
CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  checkin DATE NOT NULL,
  checkout DATE NOT NULL,
  guests INT NOT NULL,
  package VARCHAR(100) NOT NULL,
  message TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);