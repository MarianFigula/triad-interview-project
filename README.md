# Triad interview project in Laravel

## Project Overview

The project is designed as part of an interview process for TRIAD.
It is a single page web application using Laravel with design provided
from Figma.

## Features

- Form submission of project which will be reviewed
- File upload functionality for user's project
- Validation for user inputs both on the frontend and backend
- Success page to confirm successful submissions
- Inserting inputs into database to **users** table

### Users table columns

- *id* - user id
- *name* - user name
- *email* - user email
- *project_description* - description of project
- *agreed* - if users agreed with terms
- *file_path* - path of uploaded file (**actual file is stored 
in project public folder `public\storage\uploads`**)
- *created_at* - when the row was created
- *updated_at* - when the row was updated

## Technologies

- Laravel
- Laragon - for creating Laravel project and running MySQL
- Blade
- MySQL
- Javascript
- CSS


## Installation

1. Clone the repository
```bash
git clone https://github.com/MarianFigula/triad-interview-project.git
cd <project-directory>
```
2. Install dependencies
```bash
composer install
npm install
```
3. Copy configuration from `environment.example` file to your `.env`

But the config is default.

4. Generate application key
```bash
php artisan key:generate
```

5. Run migrations
```bash
php artisan migrate
```

6. Start the local development server
```bash
php artisan serve
```
7. Start a development server that watches 
for file changes and automatically reloads the application

```bash
npm run dev
```

## File Structure
- `app/Http/Controllers` - Contains the controllers for 
handling requests and responses.
- `app/Http/Requests` - Custom request classes for validating
form submissions.
- `app/Http/Models` - Model to put into database 
(only `User` in our case).
- `resources/views` - Blade templates for rendering HTML.
- `public/images` - Contains the public app images used from Figma.

## Routes
### 1. `GET / `(Review Page)

   **Controller**: `ReviewController@index`

   **Description**: The route loads the main review 
   form page where users can submit their reviews.

   **Named Route:** `review.index`
### 2. `POST /` (Submit Review)
   **Controller:** `ReviewController@store`

   **Description:** The route handles the 
   form submission of the review. It processes and stores 
   the review details in the database.

   **Named Route:** `review.store`
### 3. `GET /success` (Success Page)
   **Controller**: `SuccessController@index`

   **Description**: The route is responsible for loading a 
   success page, which is only accessible after a successful
   form submission. 
   It should not be publicly accessible through navigation.

   **Named** Route: `success`

## Validation

### Frontend Validation
Implemented using JavaScript to ensure that user
inputs are validated before submission. This includes
checks for empty fields, valid email formats, and file uploads.

### Backend Validation
Utilizes custom request classes (`StoreReviewRequest`)
to validate user inputs on the server-side, ensuring data 
integrity before storing it in the database.
