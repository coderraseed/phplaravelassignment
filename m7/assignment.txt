
--Create a data base use this SQL query
CREATE DATABASE xyzcorp;
--================================================ ============================

--To select the data base use this SQL query
USE xyzcorp;
--================================================ ============================

--to create table use this SQL query
CREATE TABLE departments (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  manager VARCHAR(255)
);

--================================================ ============================

-- now create another table 
CREATE TABLE employees (
  id INT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  age INT,
  salary DECIMAL(10, 2),
  department_id INT,
  FOREIGN KEY (department_id) REFERENCES departments(id)
);
--================================================ ============================
--Use the employees table to answer the following questions:
--a. Write a query to select all columns and rows from the employees table.

--SELECT * FROM employees;: This command selects all columns and rows from the employees table. The * is a shorthand notation for "select all columns".
SELECT * FROM employees;

--This query will return all the columns and rows from the employees table. The * in the SELECT statement is a shorthand for selecting all columns from the table.

--================================================ ============================

--b. Write a query to select only the name and salary columns of all employees with a salary greater than 50000.

SELECT name, salary
FROM employees
WHERE salary > 50000;

--This query uses the SELECT statement to specify the name and salary columns to retrieve. The FROM clause specifies the employees table. The WHERE clause filters the results to only include employees with a salary greater than 50000.

--================================================ ============================


--c. Write a query to calculate the average salary of all employees.
SELECT AVG(salary) AS avg_salary
--This query uses the AVG aggregate function to calculate the average of the salary column from the employees table. The AS keyword is used to rename the result column as avg_salary.

--================================================ ============================

--d. Write a query to count the number of employees who work in the "Marketing" department.
FROM employees;
SELECT COUNT(*) AS num_employees
FROM employees
WHERE department_id = (
SELECT id
        FROM departments
        WHERE name = 'Marketing'
);
--This query uses a subquery to retrieve the id of the Marketing department from the departments table. The outer query then counts the number of employees whose department_id matches the retrieved id. The AS keyword is used to rename the result column as count
--================================================ ============================

--e. Write a query to update the salary column of the employee with an id of 1001 to 60000.
UPDATE employees SET salary = 60000 WHERE id = 1001;
--This query uses the UPDATE statement to update the salary column of the employees table. The SET keyword specifies the new value of the salary column. The WHERE clause is used to filter the update to only the employee with an id of 1001.


--================================================ ============================
--f. Write a query to delete all employees whose salary is less than 30000.
DELETE FROM employees WHERE salary < 30000;
--This query uses the DELETE statement to delete rows from the employees table. The WHERE clause is used to filter the deletion to only employees whose salary is less than 30000.

--================================================ ============================
--================================================ ============================

--Use the departments table to answer the following questions:
--a. Write a query to select all columns and rows from the departments table.
SELECT * FROM departments;
--This query will return all columns and rows from the departments table.

--================================================ ============================

--b. Write a query to select only the name and manager columns of the "Finance" department.
SELECT name, manager FROM departments WHERE name = 'Finance';

--This query uses the SELECT statement to specify the name and manager columns to retrieve. The FROM clause specifies the departments table. The WHERE clause filters the results to only include the Finance department.--

--================================================ ============================

--c. Write a query to calculate the total number of employees in each department.
SELECT departments.name, COUNT(*) AS num_employees 
FROM employees 
JOIN departments ON employees.department_id = departments.id 
GROUP BY departments.name;

--This query uses an INNER JOIN to combine the employees and departments tables on the department_id and id columns, respectively. The GROUP BY clause groups the result set by department name and the COUNT function is used to count the number of employees in each department.

--================================================ ============================

--d. Write a query to insert a new department called "Research" with a manager named "John Doe"
INSERT INTO departments (name, manager) VALUES ('John Doe', 'Research ');

--This query uses the INSERT INTO statement to insert a new row into the departments table. The VALUES clause specifies the values to insert into the name and manager columns, respectively.
