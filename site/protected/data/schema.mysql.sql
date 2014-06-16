CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL,
    status BOOLEAN NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE tbl_project (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    creator_id INTEGER NOT NULL,
    create_time INTEGER NOT NULL,
	update_time INTEGER,
    title VARCHAR(256) NOT NULL,
    summary VARCHAR(512) NOT NULL,
    facility VARCHAR(128) NOT NULL,
    authors VARCHAR(256) NOT NULL,
    authors_training_level VARCHAR(128) NOT NULL,
    authors_training_affil VARCHAR(128) NOT NULL,
    mentors VARCHAR(256),
    filepath VARCHAR(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO tbl_user (username, password, email, status) VALUES ('admin', '$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U.obZRUut4BoC', 'admin@admin.com', 1);
INSERT INTO tbl_user (username, password, email, status) VALUES ('test1', 'pass1', 'test1@example.com', 0);
INSERT INTO tbl_user (username, password, email, status) VALUES ('test2', 'pass2', 'test2@example.com', 0);
INSERT INTO tbl_user (username, password, email, status) VALUES ('test3', 'pass3', 'test3@example.com', 0);

INSERT INTO tbl_project (creator_id, create_time, update_time, title, summary, facility, authors, authors_training_level, authors_training_affil, mentors, filepath) VALUES (3, 1230952187, 1230952187, 'Improving Resident Acess to QI Training', 'Grant funded, Website improvements through utilization of a computer programmer.', 'Madison VA', 'Dr. David Meyers', 'Staff MD', 'UWHC', 'Dr. Robert Holland', 'temp.txt');
INSERT INTO tbl_project (creator_id, create_time, update_time, title, summary, facility, authors, authors_training_level, authors_training_affil, mentors, filepath) VALUES (2, 1730952171, 1730956171, 'Test Title', 'This is a test project.', 'UWM', 'Dr. James Green', 'Resident', 'UWH', 'Dr. Robert Holland', 'temp2.txt');


