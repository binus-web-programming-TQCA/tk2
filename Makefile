run:
	php artisan cache:clear
	php artisan serve
migrate:
	php artisan migrate:refresh --seed
	php artisan db:seed --class=MahasiswaTableSeeder
