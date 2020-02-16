# Drescripton
No sistema e possivel realizar as operaçoes de criacao, ediçao, listagem de produtos e recuperaçao de produto por ID.
O contexto de produto e aplicado de forma gen'erica e pode ser utilizado de varias formas, porem, neste sistema temos as Seeders de types e materials das quais contem itens para trabalhos manuais como bordado, do qual se deu o nome do projeto.

## Project Configs
 - Laravel 6
 - docker and docker-compose
 - PHP 7.2

## Run project
 - `docker-compose up -d`
 - `php artisan migrate --seed`

## ROTAS:
ACTION |            ROUTE             |                                    FIELDS                                     |         Return
------ | ---------------------------- | ----------------------------------------------------------------------------- | ----------------------
GET    | `/product/{productId}`       | Int productId                                                                 | Product Object
GET    | `/products`                  | -                                                                             | Product Object List
GET    | `/product/mostExpensive`     | -                                                                             | Price value
PUT    | `/product/{productId}`       | Int productId, String name, Text Description, Double price, Double cost_price | Product Object
POST   | `/product`                   | Int productId, String name, Text Description, Double price, Double cost_price | Product Object
POST   | `'/product/productMaterials` | Int product_id, INT material_id                                               | ProductMaterial Object