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
- Blade
- MySQL
- Javascript
- CSS
