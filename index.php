<!-- 

Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

echo '<h2>Snack 3</h2>';

$posts = [
    '17/12/2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Luigi Russo',
            'text' => 'text post 1'
        ],
    ],
    '11/12/2021' => [
        [
            'title' => 'Post 2',
            'author' => 'Michael Jackson',
            'text' => 'text post 2'
        ],
    ],
    '8/12/2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Michael Jordan',
            'text' => 'text post 3'
        ],
    ],
];


$posts_dates = array_keys($posts);

for ($i = 0; $i < count($posts); $i++) {
    echo $posts_dates[$i] . '<br>';

    for ($j = 0; $j < count($posts[$posts_dates[$i]]); $j++) {
        echo $posts[$posts_dates[$i]][$j]['title'] . '<br>';
        echo $posts[$posts_dates[$i]][$j]['author'] . '<br>';
        echo $posts[$posts_dates[$i]][$j]['text'] . '<br><br>';
    }
};

?>

<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta. -->

<?php

echo '<h2>Snack 4</h2>';

$array = [];
    
for ($i = 0; $i < 15; $i++) {
    $number = 0;
    if (!in_array($number, $array)) {
        $number = rand(1, 50);
        $array[] = $number;
    } else {
        $i--;
    }
};

var_dump($array);
?>

<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

echo '<h2>Snack 5</h2>';

$paragraph = '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia fugit, labore exercitationem tempora, laboriosam temporibus veniam iusto accusamus consectetur debitis modi quod dolore nam. Numquam nemo sequi qui illum voluptatum? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius repellat dolore nulla accusamus. Esse deleniti sequi consequuntur ratione non aliquid impedit, placeat ad libero recusandae. Inventore placeat veniam asperiores sequi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit dolorum illum atque sed, nemo illo eligendi harum sint velit expedita voluptate laudantium eaque sit dolores iure porro rerum accusamus? Illo!</p>';

$modifiedParagraph = str_replace('.', '.' . '<br><br>', $paragraph);

echo $modifiedParagraph;

?>

<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
 echo '<h2>Snack 6</h2>';

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

?>