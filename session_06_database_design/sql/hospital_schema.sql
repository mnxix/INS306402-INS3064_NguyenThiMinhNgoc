CREATE TABLE Patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    birth_date DATE,
    phone VARCHAR(20)
);

CREATE TABLE Doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    specialization VARCHAR(100)
);

CREATE TABLE Appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    doctor_id INT,
    appointment_date DATETIME,
    FOREIGN KEY (patient_id) REFERENCES Patients(id),
    FOREIGN KEY (doctor_id) REFERENCES Doctors(id)
);

CREATE TABLE Treatments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_id INT,
    description TEXT,
    cost DECIMAL(10,2),
    FOREIGN KEY (appointment_id) REFERENCES Appointments(id)
);