Running the project:

Install PHP 8.1 and composer
1. Clone the repository:
     git clone https://github.com/matejapodboj/blog_assignment.git
     and move to your directory(cd your_folder)

2. Install dependencies with:
     composer install

3. Set up the environment:
   - Create .env file in root of a project
   - Create mysql database and connect laravel app with it. I used xampp to run sql server, and created blog_assignment table.
   - Example of mine database env variables:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3307
   DB_DATABASE=blog_assignment
   DB_USERNAME=root
   DB_PASSWORD=

4. Generate the app key:
     php artisan key:generate

5. Run php artisan config:cache to catch data from env file 

6. Run database migrations:
     php artisan migrate and run seeder with php artisan migrate:fresh --seed

7. Start the server:
     php artisan serve

If there is 404 for endpoint use famous php artisan route:clear php artisan route:cache