<?php

require_once __DIR__ . '/pdo.php';

/**CREATE UN USER ET RENSEIGNER email, password, token
    $post = [
    'email'=>'tryingnewuser',
    'password'=>'UserQuotes2',
    'token'=>'tok_ID'
    ]; // ça on s'imagine que ça vient d'un formulaire et ça a été néttoyé pour XSS

    $sql = 'INSERT INTO user(email, password, token)
    VALUES (:email, :password, :token)';
    $q = $pdo->prepare($sql);
    $q->bindValue(':email', $post['email']);
    $q->bindValue(':password', $post['password']);
    $q->bindValue(':token', $post['token']);
    $retour = $q->execute();
*/

/**READ DEPUIS UNE TABLE
    function findAll(PDO $pdo): array
    {
    $sql = 'SELECT * FROM user';
    $q = $pdo->query($sql);
    return $q->fetchAll();
    }
*/

/**UPDATE UN USER ET MODIFIER mdp
    $post['password'] = 'jesuiscrypteenhash';

    $sql = 'UPDATE user SET
    password  = :password,
    updated_at  = NOW()
    WHERE id = :id';
    $q = $pdo->prepare($sql);
    $q->bindValue('password', $post['password'], PDO::PARAM_STR);
    $q->bindValue('id', 20, PDO::PARAM_INT);
    $success = $q->execute();
*/

/**DELETE UN USER BY ID
$get['id'] = 21; // ça on s'imagine que ça vient d'un formulaire et ça a été néttoyé pour XSS
$sql = 'DELETE FROM users WHERE id=?';
$q = $pdo->prepare($sql);
$success = $q->execute([$get['id']]); 
*/