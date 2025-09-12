<?php

require_once("get-proxy.php");// au lycée pour faire des requêtes https vous avons besoin d'indiquer le proxy


    //fonction qui retourne dans un tableau asociatif les 20 films les plus populaires 
    function popularMovies(){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }
      function topRated(){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/top_rated?api_key=$key&language=fr-FR";
        $response = getProxy($url);         
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }
      function genreMovies($arg){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/discover/movie?api_key=$key&language=fr-FR&with_genres=$arg";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result['results'];
      }
      function infoMovies($id){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/movie/$id?api_key=$key&language=fr-FR";
        $response = getProxy($url);
        //$response = file_get_contents("https://api.themoviedb.org/3/movie/popular?api_key=$key&language=fr-FR");
       
        $result = json_decode($response, true);
        return $result;
      }
      function video (){
      $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
    $url = "https://api.themoviedb.org/3/movie/939243/videos?api_key=$key&language=fr-FR";
    $response = getProxy($url);
    //$response = file_get_contents("https://api.themoviedb.org/3/movie/939243/videos?api_key=$key&language=fr-FR");
    $result = json_decode($response, true);
    return $result;
      }

      function searchActeurs($query){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/search/person?api_key=$key&query=$query";
        $response = getProxy($url);
        $result = json_decode($response, true);
        return $result['results'];
      }
      function searchFilms($query){
        $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
        $url = "https://api.themoviedb.org/3/search/movie?api_key=$key&query=$query";
        $response = getProxy($url);
        $result = json_decode($response, true);
        return $result['results'];
      }
      function detailsActeurs($id){
      $key = "9e43f45f94705cc8e1d5a0400d19a7b7";
      $url = "https://api.themoviedb.org/3/person/206?api_key=$key&language=fr-FR";
      $response = getProxy($url);
      $result = json_decode($response, true);
      return $result;
      }
?>

