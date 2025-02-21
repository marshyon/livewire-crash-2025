a book model, migration and factory is created with

```bash
sail artisan make:model Book -fm
sail artisan make:seeder BookSeeder
```

which creates tne following

```
   INFO  Model [app/Models/Book.php] created successfully.  

   INFO  Factory [database/factories/BookFactory.php] created successfully.  

   INFO  Migration [database/migrations/2025_02_21_164936_create_books_table.php] created successfully.  
```

```
   INFO  Seeder [database/seeders/BookSeeder.php] created successfully.  
```


a bookList component in livewire is created with

```bash
sail artisan livewire:make BookList
```

this creates 2 files for us

```
COMPONENT CREATED  🤙

CLASS: app/Livewire/BookList.php
VIEW:  resources/views/livewire/book-list.blade.php
```

each of the above files will need updated as in this branch and then a migration and seed will need to be run


```bash
sail artisan migrate --seed
```

running this will dislay an ugly list of books unless you add the css a found in `app.css` ( those found after the 3 tailwind directives at the top of the file ) curtesy of NetNinjas crash course

