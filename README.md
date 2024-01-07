Hello, this is the task that has been given to me. Due to the time I started to learn, I have not learned all the code and logic, so I can't make the rating functions, but for your consideration, I have made several features such as CRUD, and also I can't make a lot of fake data entry on my program, because it won't load due to lack of storage on my laptop.

How to run my program
1. Run Composer Install
2. Copy env.example -> .env
3. Configure Database
4. PHP artisan key:generate
5. PHP artisan migrate
6. PHP artisan DB:seed
7. PHP artisan serve

In case you wanted to test my program with thousands of fake data
1. Go to DatabaseSeeder.php
2. edit the User::factory(100)->create(); , Category::factory(100)->create(); , Post::factory(200)->create();
3. edit the number inside the ()
   
