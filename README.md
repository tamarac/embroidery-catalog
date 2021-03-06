# Descripton
In the system it is possible to make the operations of creation, editing, product listing and product recovery by ID. The product context is applied in a generic way and can be used in various ways, but in this system we have the Seeders of types and materials containing items for manual work such as embroidery, of which the name's project was given.

Obs: In the Product, We can register with price end cost_price, but when inserting itens on route `/product/productMaterials` the prices are calculate automaticale.

## Project Configs
 - Laravel 6
 - docker and docker-compose
 - PHP 7.4

## Run project
 - `docker exec -it catalog-php composer install`
 - `docker-compose up -d`
 - `docker exec -it catalog-php php artisan migrate --seed`

## Run Tests
- Create database `testing`;
- Execute: `docker exec -it catalog-php php vendor/bin/phpunit`.

## Endpoints:

ACTION |            ROUTE             |                                    FIELDS                                     |         RETURN
------ | ---------------------------- | ----------------------------------------------------------------------------- | ----------------------
GET    | `/product/{productId}`       | Int productId                                                                 | Product Object
GET    | `/products`                  | -                                                                             | Product Object List
GET    | `/product/mostExpensive`     | -                                                                             | Price value
PUT    | `/product/{productId}`       | Int productId, String name, Text Description, Double price, Double cost_price | Product Object
POST   | `/product`                   | Int productId, String name, Text Description, Double price, Double cost_price | Product Object
POST   | `/product/productMaterials` | Int product_id, INT material_id                                                | ProductMaterial Object