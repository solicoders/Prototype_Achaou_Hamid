# base de données

##  Lignes de commande utilisées

### créer une migration and model filier and groupe
- filier
    ```bash
    php artisan make:model Filier -m
    ```
- groupe
    ```bash
    php artisan make:model Groupe -m
    ```
### exécuter la migration
```bash
php artisan migrate
```
## Le MLD de la base de données
```bash
npm install admin-lte@^3.2 --save
```

## Le MLD de la base de données
  - Filier (Id,nom,descriptione,Date_de_création,Date_de_modification,references)
  - Groupe (Id,nom,description,Date_de_création,Date_de_modification,references)
