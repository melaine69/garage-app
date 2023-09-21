# Garage V.Parrot

Site web pour le Garage V.Parrot.

## Requirements
- Laravel Framework 10
- PHP +8.2

## Installation

1. Cloner la repo

    ```bash
   git clone git@github.com:melaine69/garage-app.git
   ```

2. Installer toutes les dépendences PHP

    ```bash
   composer install
   ```
   
3. Dupliquer le fichier `.env.example` et le renommer en `.env`

    ```bash
    cp .env.example .env
    ```
   
    3.1 Puis, modifier les valeurs nécessaires pour pouvoir se connecter à la base de donnée :

    ```ini
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
   ```
   
4. Alimenter la base de données :

   ```bash
   php artisan migrate:fresh --seed
   ```
   
5. Produire les ressources :

   ```bash
   npm run build
   ```

6. Lancer le serveur :

   ```bash
   php artisan serve
   ```  
