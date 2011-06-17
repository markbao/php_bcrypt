# bcrpyt for php

originally written by Andrew Moore on Stack Overflow at
http://stackoverflow.com/questions/4795385/how-do-you-use-bcrypt-for-hashing-passwords-in-php/6337021#6337021


# usage

it's easy. it's nice. and you don't need to store salts. booyah.

    $bcrypt = new Bcrypt(); // default rounds = 8, specify variable to change
    
    $hash = $bcrypt->hash('plaintext_password');
    $hash_check = $bcrypt->verify('plaintext_password', $hash);