# CodeX Blog

CodeX Blog is a Laravel-based blogging platform that allows users to create, update, and delete blog posts. The platform features a modern and professional design with a focus on ease of use and functionality.

## Features

- **Create, Update, Delete Posts**: Admins can easily manage blog posts through a user-friendly interface.
- **Rich Text Editor**: Integrated CKEditor for creating and editing posts with rich text formatting.
- **Responsive Design**: The platform is fully responsive and works seamlessly on all devices.
- **Bootstrap Integration**: Utilizes Bootstrap for a modern and consistent design.
- **Image Upload**: Supports image uploads for blog posts.
- **Search Functionality**: Users can search for posts using the search bar.

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/yourusername/codex-blog.git
    cd codex-blog
    ```

2. Install dependencies:
    ```bash
    composer install
    npm install
    ```

3. Set up the environment file:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. Configure your database in the `.env` file.

5. Run migrations:
    ```bash
    php artisan migrate
    ```

6. Serve the application:
    ```bash
    php artisan serve
    ```

## Usage

- **Admin Panel**: Access the admin panel at `/admin` to manage blog posts.
- **Home Page**: View all blog posts on the home page.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request.

## License

This project is licensed under the MIT License.
