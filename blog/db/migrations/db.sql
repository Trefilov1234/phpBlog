<<<<<<< HEAD
CREATE TABLE `users` (
  id int NOT NULL,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `userData` (
  id int NOT NULL,
  userId int NOT NULL,
  profileImg varchar(255) NOT NULL,
  FOREIGN KEY (userId) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `Uploads` (
  id int NOT NULL,
  userId int NOT NULL,
  Text longtext NOT NULL,
  UploadedAt timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  Title varchar(255) NOT NULL,
  Img varchar(255) NOT NULL,
  FOREIGN KEY (userId) REFERENCES users(id)
=======
CREATE TABLE `users` (
  id int NOT NULL,
  username varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `userData` (
  id int NOT NULL,
  userId int NOT NULL,
  profileImg varchar(255) NOT NULL,
  FOREIGN KEY (userId) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `Uploads` (
  id int NOT NULL,
  userId int NOT NULL,
  Text longtext NOT NULL,
  UploadedAt timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  Title varchar(255) NOT NULL,
  Img varchar(255) NOT NULL,
  FOREIGN KEY (userId) REFERENCES users(id)
>>>>>>> master
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;