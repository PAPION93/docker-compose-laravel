## Laravel Project

### env 환경설정
APP_DEBUG : 운영환경에서는 false로 시스템정보 노출하지 않아야 한다.

'timezone' => 'Asia/Seoul'  
> Default : UTC 이므로 변경해야 한다.  

'locale' => 'ko'  


### Model 생성
```
$ php artisan make:model Post
$ php artisan make:model Author
```


### DB Migration 생성
```
$ php artisan make:migration create_posts_table
$ php artisan make:migration create_authors_table
```

### 마이그레이션과 롤백 그리고 초기화
```
php artisan migrate
php artisan migrate:rollback
php artisan migrate:reset
php artisan migrate:refresh
```
