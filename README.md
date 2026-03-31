# Api-Movies (MovieDB API)

## Présentation

Api-Movies est une application web développée en PHP dans le cadre du BTS SIO option SLAM.

Le projet utilise l’API **The Movie Database (TMDb)** afin de récupérer et afficher dynamiquement des informations sur les films et les acteurs.

L’application permet :
- d’afficher des films par genre
- de consulter les détails d’un film
- de rechercher des films et des acteurs
- d’afficher des informations détaillées (affiche, résumé, popularité, etc.)

---

## Objectifs du projet

Ce projet m’a permis de :

- Comprendre le fonctionnement d’une API REST
- Manipuler des données JSON en PHP
- Construire des requêtes HTTP vers une API externe
- Créer une interface dynamique avec PHP + HTML
- Gérer des paramètres dans l’URL (GET)

---

## Fonctionnalités principales

### 🎬 Affichage des films
- Affichage des films populaires
- Affichage des films les mieux notés
- Affichage des films par genre (Action, Science-Fiction, etc.)

👉 Le genre est passé dans l’URL via un paramètre `id` :contentReference[oaicite:2]{index=2}

---

### 📄 Détails d’un film
- Affichage de l’affiche du film
- Titre
- Résumé
- Durée
- Popularité
- Date de sortie
- Titre original
- Slogan

👉 Les données sont récupérées via une requête API et stockées dans un tableau PHP :contentReference[oaicite:3]{index=3}

---

### 🔎 Recherche de films et d’acteurs
- Formulaire de recherche
- Recherche via méthode GET
- Affichage des résultats dynamiques

👉 Exemple : `searchFilms.php?query=sonic` :contentReference[oaicite:4]{index=4}

---

### 🎥 Bande annonce
- Bouton permettant d’accéder à une page vidéo
- Intégration d’une vidéo YouTube via iframe :contentReference[oaicite:5]{index=5}

---

## Technologies utilisées

### Back-end
- PHP

### Front-end
- HTML / CSS
- Bootstrap

### API
- The Movie Database (TMDb)

### Autres
- JSON (échange de données)
- HTTP (requêtes API)

---

## Fonctionnement technique

### 🔹 Requêtes API

Les données sont récupérées via des fonctions PHP :

```php
function genreMovies($arg){
    $url = "https://api.themoviedb.org/3/discover/movie?...";
    $response = getProxy($url);
    $result = json_decode($response, true);
    return $result['results'];
}


👉 La réponse de l’API est en JSON, puis convertie en tableau PHP.

🔹 Paramètres GET

Les pages utilisent des paramètres dans l’URL :

$id = $_GET['id'];

👉 Permet d’afficher :

un genre spécifique
un film spécifique
une recherche
🔹 Affichage dynamique

Les données sont affichées avec PHP :

echo $info['title'];

👉 Utilisation de tableaux associatifs pour afficher les données.

🔹 Boucles

Affichage des films avec :

foreach($genres as $movie)

👉 Permet de parcourir les résultats de l’API.

Structure du projet

/api-movies
 ├── index.php
 ├── genreMovies.php
 ├── information.php
 ├── searchFilms.php
 ├── searchActeurs.php
 ├── functions.php
 ├── video.php
 └── assets/


Notions importantes
API REST

Une API permet de récupérer des données depuis un serveur externe via une URL.

JSON

Format de données utilisé par l’API pour transmettre les informations.

GET vs POST
GET → données dans l’URL (recherche)
POST → données sécurisées (formulaires sensibles)
Réalisation

Ce projet a été réalisé en autonomie dans le cadre des travaux pratiques du BTS SIO.

Améliorations possibles
Ajout d’un système de favoris
Pagination des résultats
Design amélioré
Passage en architecture MVC
Sécurisation des requêtes

Auteur

Sahazaniaina Randrianasolo
BTS SIO option SLAM

Conclusion

Ce projet m’a permis de découvrir concrètement l’utilisation d’une API dans une application web, ainsi que la gestion de données dynamiques en PHP. Il constitue une première approche du développement web connecté à des services externes.
