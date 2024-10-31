CREATE DATABASE pawsitive;

CREATE TABLE adoption_application (
    application_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    pet_id INT NOT NULL,
    application_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('Pending', 'Approved', 'Rejected') DEFAULT 'Pending',
    comments TEXT,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE,
    FOREIGN KEY (pet_id) REFERENCES pets(pet_id) ON DELETE CASCADE
);

CREATE TABLE donations (
    donation_id INT PRIMARY KEY AUTO_INCREMENT,
    donor_name VARCHAR(100),
    donor_email VARCHAR(100),
    amount DECIMAL(10, 2) NOT NULL,
    donation_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    message TEXT
);

CREATE TABLE pets (
    pet_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    species ENUM('Dog', 'Cat', 'Other') NOT NULL,
    breed VARCHAR(50),
    age INT,
    size ENUM('Small', 'Medium', 'Large'),
    color VARCHAR(50),
    temperament VARCHAR(255),
    health_status VARCHAR(255),
    adoption_fee DECIMAL(10, 2),
    status ENUM('Available', 'Adopted', 'On Hold') DEFAULT 'Available',
    description TEXT,
    img_url VARCHAR(255),  -- Changed from photo BLOB to img_url VARCHAR
    owner_id INT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (owner_id) REFERENCES users(user_id) ON DELETE SET NULL
);

CREATE TABLE adopted_pets (
    adopted_pet_id INT PRIMARY KEY AUTO_INCREMENT,
    pet_id INT NOT NULL,
    user_id INT NOT NULL,
    adoption_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('Active', 'Inactive') DEFAULT 'Active',
    comments TEXT,
    FOREIGN KEY (pet_id) REFERENCES pets(pet_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15),
    address VARCHAR(255) NOT NULL,
    zip_code VARCHAR(10),
    role ENUM('admin', 'user') DEFAULT 'user',
    img_url VARCHAR(255),  -- Changed from photo BLOB to img_url VARCHAR
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
