<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "job_headhunter_app";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_ini = 
    "CREATE TABLE IF NOT EXISTS USER (
    userID INT PRIMARY KEY AUTO_INCREMENT, -- Added AUTO_INCREMENT for convenience
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    contact VARCHAR(255) DEFAULT NULL, -- Explicitly set default NULL
    location VARCHAR(255) DEFAULT NULL, -- Explicitly set default NULL
    description TEXT DEFAULT NULL, -- Explicitly set default NULL
    avatar VARCHAR(255) DEFAULT NULL, -- Explicitly set default NULL
    registrationDate DATETIME NOT NULL,
    groupID VARCHAR(255) NOT NULL,
    companyID INT DEFAULT 1,
    FOREIGN KEY (groupID) REFERENCES USER_GROUP(groupID),
    FOREIGN KEY (companyID) REFERENCES COMPANY(companyID)
    );"; //User table (BCNF)

$user_group_ini =
    "CREATE TABLE IF NOT EXISTS USER_GROUP (
        groupID VARCHAR(255) PRIMARY KEY,
        groupName VARCHAR(255) UNIQUE NOT NULL
    );
    "; //User group table (BCNF)
$user_group_data_ini = "
    INSERT IGNORE INTO USER_GROUP (groupID, groupName) VALUES
        ('admin', 'Administrator'),
        ('company', 'Company User'),
        ('user', 'Registered User')
    ";
$company_ini = 
    "CREATE TABLE IF NOT EXISTS COMPANY (
    companyID INT PRIMARY KEY,
    companyName VARCHAR(255) UNIQUE NOT NULL,
    contactPerson VARCHAR(255) DEFAULT NULL,
    companyEmail VARCHAR(255) UNIQUE NOT NULL,
    companyContact VARCHAR(255) DEFAULT NULL,
    companyLocation VARCHAR(255) DEFAULT NULL,
    companyDescription TEXT DEFAULT NULL,
    registrationDate DATETIME NOT NULL
    )"; //Company table (BCNF)

$company_data_ini = "
INSERT IGNORE INTO COMPANY (companyID, companyName, companyEmail, registrationDate) VALUE
    ('1','ghostCompany', 'a23@gmail.com','1-1-2000')
";

$job_post_ini = 
    "CREATE TABLE IF NOT EXISTS JOB_POST (
    jobID INT PRIMARY KEY AUTO_INCREMENT,
    companyID INT NOT NULL, -- FK to COMPANY
    positionID VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULl,
    requiredDegrees TEXT,
    desiredSkills TEXT,
    deadline DATETIME,
    location VARCHAR(255) NOT NULL,
    candidateAmount INT NOT NULL,
    salary VARCHAR(255) NOT NULL,
    status VARCHAR(255),
    approvalReason TEXT,
    postDate DATETIME NOT NULL,
    jobDescPDF VARCHAR(255),
    FOREIGN KEY (companyID) REFERENCES COMPANY(companyID)
    )"; //Job Post table (BCNF)

$application_ini = 
    "CREATE TABLE IF NOT EXISTS APPLICATION (
        applicationID INT PRIMARY KEY,
        userID INT NOT NULL, -- FK to USER
        jobID INT NOT NULL, -- FK to JOB_POST
        fullName VARCHAR(255) NOT NULL,
        phone VARCHAR(255),
        email VARCHAR(255) NOT NULL,
        resumePDF VARCHAR(255),
        submissionDate DATETIME NOT NULL,
        status VARCHAR(255),
        approvalReason TEXT,
        FOREIGN KEY (userID) REFERENCES USER(userID),
        FOREIGN KEY (jobID) REFERENCES JOB_POST(jobID)
    )"; //Application table (BCNF)

$admin_noti_ini = 
    "CREATE TABLE IF NOT EXISTS ADMIN_NOTIFICATION (
        notificationID INT PRIMARY KEY,
        jobID INT, -- FK to JOB_POST (nullable)
        applicationID INT, -- FK to APPLICATION (nullable)
        notificationType VARCHAR(255) NOT NULL,
        message TEXT,
        notificationDate DATETIME NOT NULL,
        companyID INT, -- FK to COMPANY (nullable)
        FOREIGN KEY (jobID) REFERENCES JOB_POST(jobID),
        FOREIGN KEY (applicationID) REFERENCES APPLICATION(applicationID),
        FOREIGN KEY (companyID) REFERENCES COMPANY(companyID)
    )"; // Admin notifications table (BCNF)

    if ($conn->query($user_group_ini) === TRUE) { //Hold the FK of Table User
        echo "Table User Group created/loaded successfully \n";
        } else {
            echo "Error creating table: " . $conn->error;
        } 
    if ($conn->query($user_group_data_ini) === TRUE) {
            echo "User group data created/loaded successfully \n";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    if ($conn->query($company_ini) === TRUE) {
        echo "Table Company created/loaded successfully \n";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($conn->query($company_data_ini) === TRUE) {
        echo "Company test data created/loaded successfully \n";
    } else {
        echo "Error creating table: " . $conn->error;
    }    
    if ($conn->query($user_ini) === TRUE) {
        echo "Table User created/loaded successfully \n";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($conn->query($job_post_ini) === TRUE) {
        echo "Table Job Post created/loaded successfully \n";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($conn->query($application_ini) === TRUE) {
        echo "Table Application created/loaded successfully \n";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    if ($conn->query($admin_noti_ini) === TRUE) {
        echo "Table Admin Notification created/loaded successfully \n";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
  
?>

