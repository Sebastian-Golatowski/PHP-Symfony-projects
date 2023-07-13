# task-api

## To run this project, please follow these steps. If you encounter any difficulties while starting the project, feel free to contact me at s.golatowski5@gmail.com

In CMD
Clone the repository:
```
git clone https://github.com/Sebastian-Golatowski/symofny-todo.git
```

Navigate to the project directory:
```
cd symfony-todo
```

Then to Symfony directory
```
cd Symfony
```

Install the required dependencies:
```
composer install
```

Once the dependencies are installed, you need to create the database:
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

Now, the only thing left is to start the server:
```
symfony server:start -d
```

Now without closing this CMD open new one in cloned repository
and go to Vue directory
```
cd Vue
```

Install the required dependencies:
```
npm install
```

Finally, open your web browser and enter the following in the address bar: 127.0.0.1:5173