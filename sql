CREATE DATABASE Inspire Foundation Group;

CREATE table registration
(
  user_id INT;
  first_name VARCHAR 50;
  last_name VARCHAR 50;
  password VARCHAr 50;
  email VARCHAR 150;
  contact NUMBER 12;
  user_type VARCHAR 20;
  PRIMARY KEY(user_id)
);

CREATE table student_information
(
  user_id INT;
  school_report VARCHAR 50;
  biography VARCHAr 50;
  Maths VARCHAR 50;
  Accounting NUMBER 50;
  Science VARCHAR 50;
  ICT VARCHAR 50;
  ict_mark number 2;
  accounting_mark number 2;
  science_mark number 2;
  maths_mark number 2;
  grade number 2;
  facility VARCHAR 50;
  school VARCHAR 50
);

CREATE table marks
(
  user_id INT;
  course VARCHAR 50;
  assessment VARCHAR 50;
  mark number 2;
  comment VARCHAR 150
);
