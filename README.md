# Job Title Master Data

This Laravel project manages job title master data, allowing users to add, edit, and delete job titles with associated department names.

## Features

- View a list of job titles with relevant details.
- Add new job titles along with job codes and department names.
- Edit existing job titles.
- Delete job titles.

## Getting Started

### Prerequisites

Make sure you have the following installed:

- PHP
- Composer
- Laravel
- Database (e.g., MySQL, SQLite)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/fitridra/job-masterdata.git
2. Navigate to the project directory:

   ```bash
   cd job-masterdata
3. Install dependencies:

   ```bash
   composer install
4. Copy the .env.example file to .env and configure your database settings:

   ```bash
   cp .env.example .env
5. Generate the application key:

   ```bash
   php artisan key:generate
6. Run migrations to create the necessary tables:

   ```bash
   php artisan migrate
7. Serve the application:

   ```bash
   php artisan serve
8. Run database seeder to populate sample data:

   ```bash
   php artisan db:seed   
9. Access the application at http://localhost:8000.

## Usage

- Visit [http://localhost:8000](http://localhost:8000) to view the list of job titles.
- Add new job titles by clicking on "Add New Data."
- Edit or delete existing job titles by clicking on the respective actions.

## Routes

- **/**: View all job titles.
- **/create**: Add a new job title.
- **/edit/{id}**: Edit a specific job title.
- **/destroy/{id}**: Delete a specific job title.