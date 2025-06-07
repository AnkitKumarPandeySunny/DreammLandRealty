CREATE DATABASE IF NOT EXISTS dreammland_db;

USE dreammland_db;

CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    username VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user',
    profile_picture VARCHAR(255) DEFAULT 'https://plus.unsplash.com/premium_vector-1683141132250-12daa3bd85cf?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWFufGVufDB8fDB8fHww',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- ==============================  
-- 📥 DATA INSERTION (COMPLETE)  
-- ==============================  
-- DEFAULT PASSWORD: "IQBOLSHOH" (HASHED FOR SECURITY)  
-- ==============================  

INSERT INTO
    users (
        first_name,
        last_name,
        email,
        username,
        password,
        role
    )
VALUES
    (
        'admin',
        'admin',
        'admin@gmail.com',
        'admin',
        '52be5ff91284c65bac56f280df55f797a5c505f7ef66317ff358e34791507027',
        'admin'
    )

