About

Ova aplikacija zamišljena je kao jednostava oglasnik (za usluge, poslove, robu). Korisnici mogu pregledavati oglase, a ukoliko sami žele objaviti oglas moraju se registrirati. Registrirani korisnici imaju pristup panelu u kojemu mogu uređivati i brisati oglase koje su prethodno objavili. Oglasi su na naslovnici poredani temporalno, a mogu se pretraživati putem tražilice ili
klikom na oznaku oglasa (filtrira sve oglase s istom oznakom).

Prerequistites

XAMPP (Apache,Mysql), Composer, PHP ^8

How to run

1. Unpack to XAMP/htdocs
2. inside the project run: composer install
3. inside the .env file connect to your newly created database.
   Example: DB_DATABASE=myDatabaseName
4. To import tables and dummy data run: php artisan migrate --seed
5. If you can't display uploaded images run: php artisan storage:link 
5. To open the project in browser enable apache and mysql and run: php artisan serve


Folder structure

Kontroleri i modeli -> App/Http
Routes u istoimenom folderu
Frontend-> resources/views
Table migrations and dummy data->database/migrations & database/factories

To add
WYSIWYG editor za poruke i općenito sustav za komunikaciju između usera
Različite kategorije oglasa i filter za iste
Prijava preko društvenih mreža
Prijava korisničkim imenom ili mailom
Mogućnost primanja maila svaki puta kada se u nekoj kategoriji doda oglas


FFOS students - Bilonić, Šarić, Silika - Projektni rad - IT
