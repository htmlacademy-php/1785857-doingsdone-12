CREATE DATABASE taskcontrol;
DEFAULT CHARACTER SET utf8;
DEFAULT COLLATE utf8_general_ci;
USE taskcontrol;

CREATE TABLE projects (
  id INT AUTO_INCREMENT PRIMARY KEY,
  project VARCHAR(64),
  task_id INT,
  FOREIGN KEY (task_id) REFERENCES tasks (id),
);

CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_add TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  status BOOLEAN DEFAULT 0,
  task VARCHAR(255),
  file_url VARCHAR(2083),
  deadline DATE(),
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  date_register DATETIME(),
  email VARCHAR(128) NOT NULL UNIQUE,
  name VARCHAR(64) NOT NULL,
  password CHAR(64),
  project_id INT,
  task_id INT,
  FOREIGN KEY (project_id) REFERENCES projects (id),
  FOREIGN KEY (task_id) REFERENCES tasks (id),
);

CREATE INDEX deadline ON tasks(deadline);
CREATE INDEX status ON tasks(status);
CREATE UNIQUE INDEX email ON users(email);
CREATE INDEX name ON users(name);
