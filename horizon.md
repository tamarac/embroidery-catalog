# Horizon e dependencias.

## Instalar e configurar Redis
- `compose require predis/predis`

Colocar as envs do redis 
```
BROADCAST_DRIVER=log
CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
SESSION_LIFETIME=120

REDIS_CLIENT=predis
REDIS_HOST=
REDIS_PASSWORD=null
REDIS_PORT=6379
```

## Instalar o horizon 
- `composer require laravel/horizon` 
- `php artisan horizon:install` 

- `php artisan vendor:publish --provider="Laravel\Horizon\HorizonServiceProvider"`  

## Executar
- `php artisan horizon `
