#Documentação https://laravel-docs-pt-br.readthedocs.io/en/latest/mail/

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

#Criação de controller utilizando a api. Criamos a pasta chamada Api dentro da Controller, e dentro dela a V1.
#php artisan make:controller Api/V1/InvoiceController --resource
#php artisan make:controller Api/V1/UserController --resource