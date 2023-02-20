Here I created a Blog_Test project, which is developed on PHP, Laravel 9. Here I developed this project related to my assigned task, Here I covered all points except recapcha. I already tried with local, but getting issue that's why i removed. Other than that all points covered like- mail send, DB tranjaction, relation, Event, Listener, Jobs & Queue etc. Also runed on http://laravel-test.local/ vertual host

#Project Setup:

Create a DB named as "lara_blog_test"

Run below command for migrate -> php artisan migrate

Run your application ->php artisan serve

Register a user first, after that you need to run the seeder command. [Note: Here we inserting Blog data by seeded, but there is a relation between users and blogs.]

Run below command for insert fake data for Admin and Blog -> php artisan db:seed

After registation, you need to verify your mail[ Here I used Mailtrap]

After verify your mail it redirect you to login page, Once you login, then you can see all blogs[ Here I used One to Many relations] Note: if you want to add more blogs for Id=2 & ID=3, then just go to database/seeder/BlogSeeder and uncoment cthe given code and run seeder command

Summery for User: First user can register, then need to validate his/her mail, then Login, then Logout

Admin:
For Admin I created a Seeder for inserting a single data.
Here I used guard" for separate to User and Admin
For Admin first need to register/login
Admin can Add/Edit/Delete a USER[ Note: If Admin create a USER, then bydefault users status & is_verified value is 1. Once user created, then user got a mail with it's [UserName & Password] as credential. After that User can login using same credentials.
DBTransaction used over Userdata insertion. Summery for Admin: Admin can register/Login/Logout, also add/edit/delete a user