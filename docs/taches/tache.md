---
layout: default
chapitre: Taches backend
order: 12
---

# Taches backend

![tach backend](./images/backend_text_1.jpg){:width="700px"}

<!-- note -->

Dans la section consacrée à la gestion des tâches, notre objectif est de créer une plateforme qui garantira une gestion efficiente de celles-ci, tout en mettant en lumière notre expertise en Laravel pour la partie backend. Ce tach nous offrira l'occasion de concrétiser nos compétences en développement back-end, tout en adoptant une approche professionnelle et efficace dans la gestion de nos tâches.

## Les command


installer composer

```bash
composer install
```

Création de namespace taches dans controller et le fichier tachesController

```bash
php artisan make:controller taches\tacheController
```
Création de namespace taches dans model et le fichier tach avec le migration

```bash
php artisan make:model taches\tach -m
```

Création de namespace taches dans request et le fichier tachRequest pour valider les inputs

```bash
php artisan make:request taches\tachRequest
```

Création de repositories dossier

```bash
mkdir Repositories
```

Création de fichier de AppBaseRepository.php

```bash
echo > AppBaseRepository.php
```

Création de fichier de tachRepository.php

```bash
echo > tachRepository.php
```

Création de tachesSeeder seeder

```bash
php artisan make:seeder taches/tachesSeeder
```

Command pour inserer taches info sur base donnée en utilisant seeders

```bash
php artisan db:seed --class=Database\Seeders\taches\tachesSeeder
```


<!-- new slide -->