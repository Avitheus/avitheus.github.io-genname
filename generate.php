<?php

function generateUsername() {
    $adjectives = array(
        'happy',
        'lucky',
        'clever',
        'smart',
        'funny',
        'awesome',
        'brave',
        'creative'
    );

    $nouns = array(
        'unicorn',
        'ninja',
        'wizard',
        'dragon',
        'pirate',
        'superhero',
        'rockstar',
        'genius'
    );

    $adjective = $adjectives[array_rand($adjectives)];
    $noun = $nouns[array_rand($nouns)];

    return ucfirst($adjective) . ucfirst($noun);
}

echo generateUsername();

?>
