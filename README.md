
## About Project

  

This project is basically a Quiz app. It consists roles of admin and candicate. Admin can login, create quiz test & approve / reject candidates. Candidate can register & participate any quiz test. Candidates have to be approved by admin to participate in any quiz test. 

## Necessary Softwares to install

  

Before using the system you need to install couple of softwares such as PHP >=8.0 , MySQL & Composer.
For php & mysql go to https://www.apachefriends.org/ and download the xampp application for your system ( windows / linux/ mac ). Go to https://getcomposer.org/ for downloading composer. After installing the necessary softwares follow the instructions to make the application live.

  

## How to make the app live ?
<b>Step # 1</b>
Clone the git repository & cd into the <b>laravel-test-quiz-app</b> folder. Install composer inside it like the following.
  

```
git clone https://github.com/tanvirasifkhan/laravel-test-quiz-app.git
cd laravel-test-quiz-app
composer install
```

<b>Step # 2</b>
Create <code>.env</code> file and copy all the environment variables from  <code>.env.example</code> file to <code>.env</code>. After that change your database configuration and then create a database called <b>quiz</b>.
  

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=quiz
DB_USERNAME=root
DB_PASSWORD=
```
<b>Step # 3</b>
First generate security key then run the migration for creating tables and then run the application by following the below commands
  

```
php artisan key:generate
php artisan migrate
php artisan serve
```
  Congratulation , your application is live now :)

### Creating default admin
Run the following command to create the default admin with email : <b>admin@gmail.com</b> and password: <b>admin</b> credentials.
  ```
php artisan db:seed --class=DatabaseSeeder
```
Now you can login into the system as administrator.

## How the application works ?

<b># Admin Panel</b>

Admin will login into the system. Admin can see the list of all the registered candidate list. Mark any candidate as  <b>approved/rejected</b>. Also admin can delete , edit, view detail of any candidate.
Admin can create new quiz with question and options and view detail of any quiz. Admin has some dashboard statistics.

<b># Candidate Panel</b>
Candidate has to register first. Every candidate is registered with <code>pending</code> status. After getting registered candidate will be redirected to the login page with a success message.Note that , candidate will not be able to do anything if the status is <b>pending/rejected</b>. After getting approved by admin candidates 
can do their stuffs such as quiz participation list ( quizes he participated ), take participate any quiz test. Basically candidate can choose any quiz test to participate. After participation candidate can see the result wheather he <b>passed/failed</b>. Candidate also has some dashboard statistics as well.

<b>So, this is the way the application works. Thanks</b>