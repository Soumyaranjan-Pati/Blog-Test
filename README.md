# Blog-Test

Here I created a Blog_Test project, which is developed on PHP, Laravel 9. Here I developed this project related to my assigned task, Here I covered all points except recapcha. I already tried with local, but getting issue that's why i removed. Other than that all points covered like- mail send, DB tranjaction, relation, Event, Listener, Jobs & Queue etc.

#Project Setup:
1. Create a DB named as "lara_blog_test"
2. Run below command for migrate
-> php  artisan migrate

3. Run your application
->php artisan serve

4. Register a user first, after that you need to run the seeder command. [Note: Here we inserting Blog data by seeded, but there is a relation between users and blogs.]

5. Run below command for insert fake data for Admin and Blog
-> php artisan db:seed

6. After registation, you need to verify your mail[ Here I used Mailtrap]

7. After verify your mail it redirect you to login page, Once you login, then you can see all blogs[ Here I used One to Many relations]
Note: if you want to add more blogs for Id=2 & ID=3, then just go to database/seeder/BlogSeeder and uncoment cthe given code and run seeder command

Summery for User: First user can register, then need to validate his/her mail, then Login, then Logout


# Admin:
1. For Admin I created a Seeder for inserting a single  data.
2. Here I used guard" for separate to User and Admin
3. For Admin first need to register/login
4. Admin can Add/Edit/Delete a USER[ Note: If Admin create a USER, then bydefault users status & is_verified value is 1. Once user created, then user got a mail with it's [UserName & Password] as credential. After that User can login using same credentials.
5. DBTransaction used over Userdata insertion.
Summery for Admin: Admin can register/Login/Logout, also add/edit/delete a user
