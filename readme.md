### Artisan Command

- php artisan make:controller PageController
- php artisan make:model Post -m
- php artisan make:model Post --migration
- php artisan migrate
- php artisan make:auth
- php artisan serve
- php artisan serve --port=3000
- php artisan make:middleware AuthWare
- php artisan db:seed --class=PostSeeder
- php artisan db:seed
- php artisan migrate:reset 
- php artisan migrate
- php artisan migrate:fresh
- php artisan migrate:fresh --seed

```
php artisan make:controller Backend/PostController -r
```

### Git 

git init
git add .
git commit -m "sample crud"
git remote add origin https://github.com/bm-member/bm-blog-2.git
git push -u origin master

### Installation 

- git clone https://github.com/bm-member/bm-blog-2.git
- copy .env.example .env
- config db setting 
- composer install
- php artisan key:generate
- php artisan migrate
- php artisan serve
- done.
