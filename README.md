# Blog API
This is simple and very plain api system to use for blog/cms , 
it provide endpoint for get/set post and alot of thing :D.

### Requirement
- PHP 7.*
- Composer
- npm
- mySQl

### installation
1. clone this repo or load zip
2. run `composer install` to install all dependency in `vendor`
3. run `npm install`
4. fill necessary data in .env file
5. run `php artisan migrate` to migrate al db (make sure you provide DB auth in .env file)

### Endpoint 

use prefix `/api`

POST
- GET `/posts/latest`  Get all post order by create date DESC
- GET `/posts/archive` Get all post order by create date ASC
- POST `/post`         Create new post
- GET `/post/{id}`     Get Specific post by given ID

USER
- GET `/me?api_token=...` Get user profile by token
- POST `/register`        Register user and get user json detail back
- POST `/login`           Login user and get user json detail back
