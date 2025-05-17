# Fitness Class Tracker

## Project Overview

**Fitness Class Tracker** is a basic Laravel web application that helps a gym manage its fitness classes. The system allows staff to add, view, update, and delete class details like name, instructor, time, and capacity. It is part of the **CHT2520 Advanced Web Programming** module at the University of Huddersfield.

---

## Scenario

The project is based on a small gym that needs a way to manage its class schedule. Staff can:

- Add new classes
- Edit existing class details
- Delete classes that are no longer needed

It is a simple system meant for internal use, not for public bookings.

---

## Technologies Used

- Laravel 11  
- PHP  
- MySQL  
- Blade Templating  
- Plain CSS (no frameworks or JavaScript used)  
- phpMyAdmin (for managing the database)

---

## Features

###  Required Features

- **CRUD Operations** – Create, read, update, and delete fitness classes
- **Single Table** – All data is stored in one table: `classes`
- **Basic Styling** – Simple CSS for layout and readability on desktop
- **Validation** – Laravel form validation with feedback messages

###  Extra Features

- **Search** – Find classes by name or instructor
- **Pagination** – Results are split into pages
- **User Feedback** – Clear error messages on form errors

---

## How to Run the Project

1. Clone the project from GitHub
2. Run: composer install
3. Create a new database -> fitness tracker
4. Run php artisan key:generate
5. Run the migration: php artisan migrate
6. Start the server: php artisan serve

## Challenges and Learning
Adding search and pagination without JavaScript or external libraries was a good learning experience. I used Laravel's query builder and pagination tools. I also made sure validation errors are clearly shown to users, which improved usability.

Project Files
1. app/Models/FitnessClass.php – Model for the classes table

2. app/Http/Controllers/FitnessClassController.php – CRUD + search + pagination

3. resources/views/classes/ – Blade views (index, create, edit)

4. routes/web.php – Routes for all actions

4. database/migrations/ – Migration for the classes table (no seeders)



