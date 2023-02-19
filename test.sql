
-- Урок 4. Основы бэкенда: PHP и MySQL
-- Задача №2: создать БД, состоящую из одной таблицы (информация об одногруппниках) с четырьмя полями (добавить поле «Адрес»): id, name, age, address.

-- create
CREATE TABLE EMPLOYEE (
id INTEGER PRIMARY KEY,
name TEXT NOT NULL,
age TEXT NOT NULL,
address TEXT NOT NULL
);
-- insert
INSERT INTO EMPLOYEE VALUES (0001, 'Артем', '23', 'Москва');
INSERT INTO EMPLOYEE VALUES (0002, 'Лена', '19', 'Анадырь');
INSERT INTO EMPLOYEE VALUES (0003, 'Петр', '20', 'Барнаул');
INSERT INTO EMPLOYEE VALUES (0004, 'Олег', '45', 'Москва');
INSERT INTO EMPLOYEE VALUES (0005, 'Алифтина', '21', 'Благовещенск');
INSERT INTO EMPLOYEE VALUES (0006, 'Валера', '18', 'Москва');
INSERT INTO EMPLOYEE VALUES (0007, 'Ольга', '25', 'Москва');

-- fetch 
SELECT * FROM EMPLOYEE WHERE address = 'Москва';
