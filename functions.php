<?php
function calculateDogAge($dogAge, $breed, $size) {
    // First year of a dog's life equals 15 human years
    $humanAge = 15;

    if ($dogAge <= 1) {
        return $humanAge * $dogAge;
    }

    // Second year of a dog's life equals about 9 human years
    $humanAge += 9;

    if ($dogAge <= 2) {
        return $humanAge + ($dogAge - 1) * 9;
    }

    // After that, each dog year equals about 4-5 human years
    $remainingYears = $dogAge - 2;
    
    // Adjust for size
    $yearMultiplier = 4.5;
    switch ($size) {
        case 'small':
            $yearMultiplier = 4;
            break;
        case 'medium':
            $yearMultiplier = 4.5;
            break;
        case 'large':
            $yearMultiplier = 5;
            break;
        case 'giant':
            $yearMultiplier = 5.5;
            break;
    }

    // Adjust for breed (simplified, as breed-specific calculations can be very complex)
    $longLivedBreeds = ['Chihuahua', 'Jack Russell Terrier', 'Pomeranian', 'Toy Poodle', 'Yorkshire Terrier'];
    $shortLivedBreeds = ['Great Dane', 'Bernese Mountain Dog', 'Irish Wolfhound', 'Rottweiler', 'Saint Bernard'];

    if (in_array($breed, $longLivedBreeds)) {
        $yearMultiplier -= 0.5;
    } elseif (in_array($breed, $shortLivedBreeds)) {
        $yearMultiplier += 0.5;
    }

    $humanAge += $remainingYears * $yearMultiplier;

    return $humanAge;
}
