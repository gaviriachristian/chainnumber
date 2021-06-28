<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Chalenge Number Chains</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body class="bg-dark text-white text-center h-100">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

    <main role="main" class="inner cover my-auto">
        <h1 class="cover-heading display-5 mb-0">Code Chalenge</h1>
        <h2 class="display-3 mb-5">Number chain</h2>
        <p class="lead">A number chain Created by continuously adding the square of the digits in a number to form a new number until it has been seen before</p>
        <p>For example,
            <br>85 → <b>89</b> → 145 → 42 → 20 → 4 → 16 → 37 → 58 → <b>89</b>
            <br>44 → 32 → 13 → 10 → <b>1</b> → <b>1</b>
        </p>
        <p>Therefore any chain that arrives at 1 or 89 will become stuck in an endless loop.
            <br> What is most amazing is that EVERY starting number will eventually arrive at 1 or 89</p>
        <blockquote>
            <b>NOTE: </b><big> Other numbers will generate endless loops too, like 4, 16, 20, 37, 58, 145</big>
        </blockquote>




        <p>
            <big><b><i>Total ending in 89 from the first 100.000 numbers are :</b></i></big>
            <br><span class="display-4"><?= count_the_89s(); ?></span></h3>

        <p class="lead">
            <a href="https://github.com/gaviriachristian/chainnumber" target="_blank" class="btn btn-lg btn-secondary">Open in GitLab</a>
        </p>

    </main>


</div>


<?php
/**
 * Find the repeting 89s in the Chain Number
 */
function count_the_89s($limit = 100000){
    $count_89s = 0;
    for($i = 1; $i <= $limit; $i++){
        $number = $i;
        while(true){
            if($number == 1){
                break;
            }elseif($number == 89){
                $count_89s++;
                break;
            }

            $newValue = 0;
            foreach(str_split($number) as $digit){
                $newValue += $digit * $digit;
            }
            $number = $newValue;
        }
    }

    return $count_89s;
}
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
