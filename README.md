# Todo List Application

This is a Laravel-based Todo List application that allows users to manage their tasks efficiently. Users can register, log in, create, update, and delete their todos, as well as manage their profile information.

## Features

-   User authentication (register, login, logout)
-   Create, read, update, and delete todos
-   Mark todos as completed or incomplete
-   Profile management (update personal information, change password, delete account)
-   Responsive and user-friendly interface built with Tailwind CSS

## Project Structure

The project follows the standard Laravel directory structure. Key directories and files include:

-   **`routes/web.php`**: Defines the application's routes.
-   **`app/Http/Controllers`**: Contains the controllers for handling requests.
-   **`app/Models`**: Contains the Eloquent models for the application.
-   **`resources/views`**: Contains the Blade templates for the frontend.
-   **`database/migrations`**: Contains the database migration files.
-   **`database/factories`**: Contains factories for generating test data.

## Installation

Follow these steps to set up the project locally:

1. Clone the repository:

    ```bash
    git clone <https://github.com/3idey/Todo-App.git>
    cd todo-list
    ```

2. Install dependencies:

    ```bash
    composer install
    npm install
    ```

3. Set up the environment:

    - Copy the `.env.example` file to `.env`:
        ```bash
        cp .env.example .env
        ```
    - Generate the application key:
        ```bash
        php artisan key:generate
        ```
    - Create the SQLite database file:
        ```bash
        touch database/database.sqlite
        ```
    - Update the `.env` file to use the SQLite database:
        ```env
        DB_CONNECTION=sqlite
        DB_DATABASE=/absolute/path/to/database/database.sqlite
        ```
    - Update the `.env` file to use `http://127.0.0.1:8000`:

        ```env
        APP_URL=http://127.0.0.1:8000
        ```

4. Run database migrations and seeders:

    ```bash
    php artisan migrate --seed
    ```

5. Start the development server:

    ```bash
    php artisan serve
    ```

6. Start the Vite development server for assets:
    ```bash
    npm run dev
    ```

## Usage

1. Visit the application in your browser at `http://127.0.0.1:8000`.
2. Register a new account or log in with an existing account.
3. Create, update, and manage your todos.
4. Edit your profile information or change your password.

## Technologies Used

-   **Backend**: Laravel 12
-   **Frontend**: Blade templates, Tailwind CSS
-   **Database**: SQLite (default), with support for other databases
-   **Build Tools**: Vite

## Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes and push them to your fork.
4. Submit a pull request.

## License

This project is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).
