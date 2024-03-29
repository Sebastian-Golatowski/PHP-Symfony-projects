# blog-MVC

## To run this project, please follow these steps. If you encounter any difficulties while starting the project, feel free to contact me at s.golatowski5@gmail.com
#### To run this project on your machine, you will need to have the following software installed:
#### Composer
#### Node.js
#### Symofny CLI 
#### Some database server

In CMD
Clone the repository:
```
git clone https://github.com/Sebastian-Golatowski/symfony-blog.git
```

Navigate to the project directory:
```
cd symfony-blog
```

Install the required dependencies:
```
composer install
```

Next, run:
```
npm install
```

After the installation is complete, run:
```
npm run build
```

Once the dependencies are installed, you need to create the database (you might need to change "DATABASE_URL" in .env file)::
```
symfony console doctrine:database:create
```

Now, you need to create the tables in the database:
```
symfony console doctrine:migrations:migrate
```

After executing this command, the following prompt will appear:
```
 WARNING! You are about to execute a migration in database "blogsymf" that could result in schema changes and data loss. 
 Are you sure you wish to continue? (yes/no) [yes]:
```
press ENTER

To add some initial data to the project, run:
```
symfony console doctrine:fixtures:load
```

After running this command, the following prompt will appear:
```
 Careful, database "blogsymf" will be purged. Do you want to continue? (yes/no)
```
Type "yes" and press ENTER.



Now, the only thing left is to start the server:
```
symfony server:start -d
```

Finally, open your web browser and enter the following in the address bar: 127.0.0.1:8000

Account details:
Admin account:
Username: user1
Password: 123

User account:
Username: user2
Password: 123