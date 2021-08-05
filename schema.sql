CREATE DATABASE taskcontrol
  DEFAULT CHARACTER SET utf8
  DEFAULT COLLATE utf8_general_ci;
USE taskcontrol;

CREATE TABLE projects (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  project VARCHAR(64)
);

CREATE TABLE tasks (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  date_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status BOOLEAN DEFAULT 0,
  task VARCHAR(255),
  file_url VARCHAR(2083),
  deadline DATE,
  project_id INT(10),
  FOREIGN KEY (project_id) REFERENCES projects (id),
  INDEX (deadline),
  INDEX (status)
);

CREATE TABLE users (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  date_register DATETIME(),
  email VARCHAR(128) NOT NULL UNIQUE,
  name VARCHAR(64) NOT NULL,
  password CHAR(64),
  project_id INT(10),
  task_id INT(10),
  FOREIGN KEY (project_id) REFERENCES projects (id),
  FOREIGN KEY (task_id) REFERENCES tasks (id),
  UNIQUE INDEX (email),
  INDEX (name)
);