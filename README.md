# Login & Register Livewire

Login & Register Livewire is a website that provides login and registration features for users, enabling secure and efficient access. Built with Laravel and Livewire, this site offers fast and responsive authentication, delivering a seamless user experience for managing their accounts.

## Tech Stack

- **Laravel 10**
- **MySQL Database**
- **Livewire**
- **Laravel UI**

## Features

- Main features available in this application:
  - Login
  - Register

## Installation

Follow the steps below to clone and run the project in your local environment:

1. Clone repository:

    ```bash
    git clone https://github.com/Akbarwp/Livewire-LogReg.git
    ```

2. Install dependencies use Composer and NPM:

    ```bash
    composer install
    npm install
    ```

3. Copy file `.env.example` to `.env`:

    ```bash
    cp .env.example .env
    ```

4. Generate application key:

    ```bash
    php artisan key:generate
    ```

5. Setup database in the `.env` file:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=logreg_livewire
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. Run migration database:

    ```bash
    php artisan migrate
    ```

7. Run website:

    ```bash
    npm run dev
    php artisan serve
    ```

## Screenshot

- ### **Login page**

<img src="https://github.com/user-attachments/assets/c34a4e38-9365-46f3-88da-519e7dcb9706" alt="Halaman Login" width="" />
<br><br>

- ### **Register page**

<img src="https://github.com/user-attachments/assets/0ef11ef4-72ce-4c6e-88d1-9a6d5d52f450" alt="Halaman Register" width="" />
<br><br>
