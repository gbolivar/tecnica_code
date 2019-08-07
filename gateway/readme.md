-- Pasos para hacer las migraciones
php artisan migrate

-- Seeder Pasos para insertar los datos
php artisan db:seed --class=TipoDocumentoSeeder
php artisan db:seed --class=ClienteSeeder 
php artisan db:seed --class=ServicioSeeder

POST: http://localhost:9094/api/suscripcion?servicio=SEA&cliente=N06&fecha=2019-08-10
PUT: http://localhost:9094/api/suscripcion?servicio=SEA&cliente=N06&fecha=2019-08-10

php artisan command:computar 2019-12-12
