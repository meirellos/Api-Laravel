#C -> Controller
#F -> Factory
#M -> Migration

#Criação model
#pa make:model Invoice -cfm

#Migrate
#php artisan migrate

#Tinker
#php artisan tinker
#\App\Models\User::factory(10)->create();
#\App\Models\Invoice::factory(10)->create();

#Dando rollback e migrando novamente as tabelas.
#php artisan migrate:fresh

#php artisan db:seed