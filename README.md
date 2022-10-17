
## Installation

Clone the repository on your local then run
- composer install
- set up the env. file, just set the connection with your database
- run "php artisan migrate:refresh --seed" (if you copy and paste this command from here it might not work, just type it)
- npm install
- npm run dev 
- php artisan serve
- click on the link provided
- it might ask you to generate the App Key, just click on “Generate App Key” on the right hand side of the browser window
and refresh the page
- click on login

"npm install and npm run dev" above are needed to compile the front end after creating the Breeze scaffolding, the authentication
feature I have decided to use.

The project is unfinished, I could have completed it if I had a bit of more time, but I tried to stick with the time limit
even if I took 5 more minutes to complete a bit more of the "edit" part.
If I had more time I have done way better: graphically, tide up the code a bit more, finished to develop the uncompleted 
parts.

## Factories:
As instructed I have developed a seeder which trigger a factory creating 5 users, I have started creating a factory to 
populate the item_todos table with dummy data but as it was taking too long I had to interrupt, it does not work at the moment but 
feel free to have a look at the unfinished work.

## How it works
If the above instructions are followed, you should be able to see the login page, in order to access pick any 
email created randomly by the seeder in your database and use "password" as password. 

## What's been created
Factories, Seeder, the Controller, Migrations and Models have been created as requested. I managed only to create the add 
item form feature, I had started to develop the edit and the policy but then the time was up. The policy is not working 
as desired just because I had not enough time to set it up properly, I am sure if I had a few more minutes I could have 
made it work properly. 

## Env. file
The env file does not have particular settings, just set up the database connection. 





