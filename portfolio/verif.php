<?php

// On vérifie que la méthode POST est utilisée
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // On vérifie si le champ "recaptcha-response" contient une valeur
    if(empty($_POST['recaptcha-response'])){
        header('Location: index.php');
    }else{
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=6LdTEpQjAAAAAEp0KWd_naMDVHUSMRoFtim4URmn&response={$_POST['recaptcha-response']}";

            // On vérifie si curl est installé
            if(function_exists('curl_version')){
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_TIMEOUT, 1);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($curl);
            }else{
                // On utilisera file_get_contents
                $response = file_get_contents($url);
            }
            if(empty($response) || is_null($response)){
                header('Location: index.php');
            }else{
                $data = json_decode($response);
                if($data->success){
                    if(
                        isset($_POST['nom']) && !empty($_POST['nom']) &&
                        isset($_POST['sujet']) && !empty($_POST['sujet']) &&
                        isset($_POST['email']) && !empty($_POST['email']) &&
                        isset($_POST['message']) && !empty($_POST['message'])
                    ){
                        // On nettoie le contenu
                        $nom = strip_tags($_POST['nom']);
                        $sujet = strip_tags($_POST['sujet']);
                        $email = strip_tags($_POST['email']);
                        $message = htmlspecialchars($_POST['message']);

                        // Ici vous traitez vos données

                        echo "Message de {$nom} envoyé";
        }
            }else{
                header('Location: index.php');
    }
    }
}else{
    http_response_code(405);
    echo 'Méthode non autorisée';
}