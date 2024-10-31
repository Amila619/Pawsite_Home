CREATE DATABASE pawsitive;

CREATE TABLE users (
    user_id CHAR(8) PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15),
    address VARCHAR(255) NOT NULL,
    zip_code VARCHAR(10),
    role ENUM('admin', 'user') DEFAULT 'user',
    img_url VARCHAR(255),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE pets (
    pet_id CHAR(8) PRIMARY KEY,
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
    img_url VARCHAR(255),
    owner_id CHAR(8),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (owner_id) REFERENCES users(user_id) ON DELETE SET NULL
);

CREATE TABLE adoption_application (
    application_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id CHAR(8) NOT NULL,
    pet_id CHAR(8) NOT NULL,
    application_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('Pending', 'Approved', 'Rejected') DEFAULT 'Pending',
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

CREATE TABLE adopted_pets (
    adopted_pet_id CHAR(8) PRIMARY KEY,
    pet_id CHAR(8) NOT NULL,
    user_id CHAR(8) NOT NULL,
    adoption_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('Active', 'Inactive') DEFAULT 'Active',
    FOREIGN KEY (pet_id) REFERENCES pets(pet_id) ON DELETE CASCADE,
    FOREIGN KEY (user_id) REFERENCES users(user_id) ON DELETE CASCADE
);

USE pawsitive;


INSERT INTO users (user_id, username, password_hash, email, first_name, last_name, phone_number, address, zip_code, role, img_url)
VALUES 
    ('ui_A1B2C3D4', 'johnsmith', 'hash_password1', 'johnsmith@example.com', 'John', 'Smith', '5551234567', '123 Maple St, Springfield', '62701', 'user', 'public\\images\\upload_users\\ui_A1B2C3D4.jpg'),
    ('ui_E5F6G7H8', 'janesmith', 'hash_password2', 'janesmith@example.com', 'Jane', 'Smith', '5552345678', '456 Oak St, Springfield', '62702', 'admin', 'public\\images\\upload_users\\ui_E5F6G7H8.jpg'),
    ('ui_I9J0K1L2', 'michaelbrown', 'hash_password3', 'michaelbrown@example.com', 'Michael', 'Brown', '5553456789', '789 Pine St, Springfield', '62703', 'user', 'public\\images\\upload_users\\ui_I9J0K1L2.jpg'),
    ('ui_M3N4O5P6', 'sarahjones', 'hash_password4', 'sarahjones@example.com', 'Sarah', 'Jones', '5554567890', '321 Birch St, Springfield', '62704', 'user', 'public\\images\\upload_users\\ui_M3N4O5P6.jpg'),
    ('ui_Q7R8S9T0', 'davidwilson', 'hash_password5', 'davidwilson@example.com', 'David', 'Wilson', '5555678901', '654 Cedar St, Springfield', '62705', 'user', 'public\\images\\upload_users\\ui_Q7R8S9T0.jpg'),
    ('ui_U1V2W3X4', 'lindamiller', 'hash_password6', 'lindamiller@example.com', 'Linda', 'Miller', '5556789012', '987 Elm St, Springfield', '62706', 'user', 'public\\images\\upload_users\\ui_U1V2W3X4.jpg'),
    ('ui_Y5Z6A7B8', 'jamesmartin', 'hash_password7', 'jamesmartin@example.com', 'James', 'Martin', '5557890123', '135 Spruce St, Springfield', '62707', 'user', 'public\\images\\upload_users\\ui_Y5Z6A7B8.jpg'),
    ('ui_C9D0E1F2', 'patriciagarcia', 'hash_password8', 'patriciagarcia@example.com', 'Patricia', 'Garcia', '5558901234', '246 Fir St, Springfield', '62708', 'user', 'public\\images\\upload_users\\ui_C9D0E1F2.jpg'),
    ('ui_G3H4I5J6', 'charleshernandez', 'hash_password9', 'charleshernandez@example.com', 'Charles', 'Hernandez', '5559012345', '357 Willow St, Springfield', '62709', 'user', 'public\\images\\upload_users\\ui_G3H4I5J6.jpg'),
    ('ui_K7L8M9N0', 'danielrodriguez', 'hash_password10', 'danielrodriguez@example.com', 'Daniel', 'Rodriguez', '5550123456', '468 Poplar St, Springfield', '62710', 'user', 'public\\images\\upload_users\\ui_K7L8M9N0.jpg');


INSERT INTO pets (pet_id, name, species, breed, age, size, color, temperament, health_status, adoption_fee, status, description, img_url, owner_id)
VALUES
    ('pi_P1Q2R3S4', 'Max', 'Dog', 'Labrador', 3, 'Large', 'Black', 'Friendly', 'Vaccinated, Healthy', 150.00, 'Available', 'Max is a playful Labrador looking for an active home.', 'public\\images\\upload_pets\\pi_P1Q2R3S4.jpg', 'ui_A1B2C3D4'),
    ('pi_T5U6V7W8', 'Bella', 'Dog', 'Beagle', 2, 'Medium', 'Brown', 'Curious', 'Vaccinated', 100.00, 'Available', 'Bella loves to explore and is great with kids.', 'public\\images\\upload_pets\\pi_T5U6V7W8.jpg', 'ui_E5F6G7H8'),
    ('pi_X9Y0Z1A2', 'Mittens', 'Cat', 'Siamese', 4, 'Small', 'Cream', 'Affectionate', 'Vaccinated, Healthy', 80.00, 'Available', 'Mittens is a sweet Siamese who loves to cuddle.', 'public\\images\\upload_pets\\pi_X9Y0Z1A2.jpg', 'ui_I9J0K1L2'),
    ('pi_B3C4D5E6', 'Coco', 'Dog', 'Poodle', 5, 'Small', 'White', 'Playful', 'Vaccinated, Healthy', 120.00, 'Available', 'Coco is an adorable Poodle with a friendly personality.', 'public\\images\\upload_pets\\pi_B3C4D5E6.jpg', 'ui_A1B2C3D4'),
    ('pi_F7G8H9I0', 'Whiskers', 'Cat', 'Tabby', 2, 'Small', 'Gray', 'Calm', 'Vaccinated', 60.00, 'Available', 'Whiskers is a relaxed Tabby who loves to lounge.', 'public\\images\\upload_pets\\pi_F7G8H9I0.jpg', 'ui_E5F6G7H8'),
    ('pi_J1K2L3M4', 'Rocky', 'Dog', 'German Shepherd', 4, 'Large', 'Black & Tan', 'Loyal', 'Vaccinated, Healthy', 200.00, 'Available', 'Rocky is a strong and loyal companion.', 'public\\images\\upload_pets\\pi_J1K2L3M4.jpg', 'ui_I9J0K1L2'),
    ('pi_N5O6P7Q8', 'Nala', 'Cat', 'Persian', 3, 'Medium', 'White', 'Laid-back', 'Vaccinated', 90.00, 'Available', 'Nala enjoys relaxing in the sun and being pampered.', 'public\\images\\upload_pets\\pi_N5O6P7Q8.jpg', 'ui_A1B2C3D4'),
    ('pi_R9S0T1U2', 'Buddy', 'Dog', 'Golden Retriever', 3, 'Large', 'Golden', 'Friendly', 'Vaccinated, Healthy', 180.00, 'Available', 'Buddy is great with children and loves to play fetch.', 'public\\images\\upload_pets\\pi_R9S0T1U2.jpg', 'ui_E5F6G7H8'),
    ('pi_V3W4X5Y6', 'Simba', 'Cat', 'Maine Coon', 5, 'Large', 'Brown', 'Playful', 'Vaccinated', 150.00, 'Available', 'Simba is a majestic Maine Coon with a playful spirit.', 'public\\images\\upload_pets\\pi_V3W4X5Y6.jpg', 'ui_I9J0K1L2'),
    ('pi_Z7A8B9C0', 'Daisy', 'Dog', 'French Bulldog', 2, 'Small', 'Fawn', 'Affectionate', 'Vaccinated', 200.00, 'Available', 'Daisy is a playful French Bulldog who loves attention.', 'public\\images\\upload_pets\\pi_Z7A8B9C0.jpg', 'ui_A1B2C3D4');


INSERT INTO adoption_application (user_id, pet_id, application_date, status)
VALUES
    ('ui_A1B2C3D4', 'pi_P1Q2R3S4', '2024-10-01 09:00:00', 'Pending'),
    ('ui_E5F6G7H8', 'pi_T5U6V7W8', '2024-10-02 10:30:00', 'Approved'),
    ('ui_I9J0K1L2', 'pi_X9Y0Z1A2', '2024-10-03 11:15:00', 'Pending'),
    ('ui_M3N4O5P6', 'pi_B3C4D5E6', '2024-10-04 14:00:00', 'Rejected'),
    ('ui_Q7R8S9T0', 'pi_F7G8H9I0', '2024-10-05 12:00:00', 'Approved'),
    ('ui_U1V2W3X4', 'pi_J1K2L3M4', '2024-10-06 08:45:00', 'Pending'),
    ('ui_Y5Z6A7B8', 'pi_N5O6P7Q8', '2024-10-07 16:30:00', 'Approved'),
    ('ui_C9D0E1F2', 'pi_R9S0T1U2', '2024-10-08 13:20:00', 'Rejected'),
    ('ui_G3H4I5J6', 'pi_V3W4X5Y6', '2024-10-09 15:00:00', 'Pending');


INSERT INTO adoption_application (user_id, pet_id, application_date, status)
VALUES
    ('ui_A1B2C3D4', 'pi_P1Q2R3S4', '2024-10-01 09:00:00', 'Pending'),
    ('ui_E5F6G7H8', 'pi_T5U6V7W8', '2024-10-02 10:30:00', 'Approved'),
    ('ui_I9J0K1L2', 'pi_X9Y0Z1A2', '2024-10-03 11:15:00', 'Pending'),
    ('ui_M3N4O5P6', 'pi_B3C4D5E6', '2024-10-04 14:00:00', 'Rejected'),
    ('ui_Q7R8S9T0', 'pi_F7G8H9I0', '2024-10-05 12:00:00', 'Approved'),
    ('ui_U1V2W3X4', 'pi_J1K2L3M4', '2024-10-06 08:45:00', 'Pending'),
    ('ui_Y5Z6A7B8', 'pi_N5O6P7Q8', '2024-10-07 16:30:00', 'Approved'),
    ('ui_C9D0E1F2', 'pi_R9S0T1U2', '2024-10-08 13:20:00', 'Rejected'),
    ('ui_G3H4I5J6', 'pi_V3W4X5Y6', '2024-10-09 15:00:00', 'Pending'),
    ('ui_K7L8M9N0', 'pi_Z7A8B9C0', '2024-10-10 10:00:00', 'Approved');


INSERT INTO donations (donor_name, donor_email, amount, donation_date, message)
VALUES
    ('John Doe', 'johndoe@example.com', 50.00, '2024-10-05 09:00:00', 'Thank you for your great work!'),
    ('Jane Smith', 'janesmith@example.com', 100.00, '2024-10-06 14:30:00', 'Happy to support the animals.'),
    ('Michael Brown', 'michaelbrown@example.com', 75.00, '2024-10-07 11:45:00', 'Keep it up!'),
    ('Sarah Johnson', 'sarahj@example.com', 200.00, '2024-10-08 17:20:00', 'Wonderful cause, happy to help!'),
    ('David Wilson', 'davidwilson@example.com', 125.00, '2024-10-09 10:00:00', 'Best wishes to all the pets!'),
    ('Linda Miller', 'lindamiller@example.com', 300.00, '2024-10-10 12:15:00', 'Glad to contribute to such a worthy cause.'),
    ('James Martin', 'jamesmartin@example.com', 50.00, '2024-10-11 09:30:00', 'Hope this helps!'),
    ('Patricia Garcia', 'patriciagarcia@example.com', 150.00, '2024-10-12 14:00:00', 'Thank you for helping the animals.'),
    ('Charles Hernandez', 'charleshernandez@example.com', 175.00, '2024-10-13 15:45:00', 'Supporting the mission wholeheartedly.'),
    ('Daniel Rodriguez', 'danielrodriguez@example.com', 80.00, '2024-10-14 16:00:00', 'Grateful for your efforts.');