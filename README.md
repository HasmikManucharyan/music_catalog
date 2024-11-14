# Project Setup Guide

This document provides instructions for setting up the project locally using Docker.

## Steps to Set Up and Run the Project

1. **Clone the Project from GitHub to Your Local Machine:**
   ```bash
   git clone <repository-url>
   cd <project-directory>
2. **Create a Database: Ensure your MySQL or PostgreSQL database is set up and running.**

3. **Update the database credentials in the .env file with the appropriate database name, username, and password.**
4. **Update Configuration Files:**

Dockerfile: Ensure the Dockerfile is correctly configured for your application’s needs.
docker-compose.yml: Update the services, ports, and volumes as required.
.env File: Update the .env file with your database connection details and any other required environment variables.
5. **Build and Start the Containers: Run the following command to build and start the containers:**

bash
Копировать код
docker-compose up --build
This command will:

Build the Docker images.
Start all the services defined in docker-compose.yml.
6. **Run Migrations to Set Up the Database Tables: Once the containers are up and running, execute the database migrations to create the required tables by running the following command:**

bash
Копировать код
docker-compose exec app php artisan migrate
This will set up the necessary database structure.

7. **Seed the Database with Test Data: To add test data to the database, run the following command:**

bash
Копировать код
docker-compose exec app php artisan db:seed
This command will populate your database with sample data as defined in the seeders.

8. **Open the API Documentation: After the application is running and seeded, you can access the API documentation by opening your browser and navigating to:**

bash
Копировать код
http://localhost:8000/api/documentation
Note: If you are using a different port for your application, update 8000 with the correct port number as specified in your docker-compose.yml file.
