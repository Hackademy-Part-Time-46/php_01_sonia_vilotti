<?php

$words1 =
[
  'una', //0
  67,//1
  'vita',//2
  'colle',//3
  'mi',//4
  'rosso',//5
  [ //6
    'oscura', //0
    'era', //1
    89, //2
    [//3
      'mezzo',//0
      [//1
        'cammin',//0
        'Nel',//1
        [//2
          'selva',//0
          'la',//1
          [//2
            'via',//0
            'una',//1
            true,//2
          ]
        ],
      ]
    ], //3
    'ritrovai', //4
    'per' //5
  ], //6
  'diritta' //7
];

  $words2 = [
  
    'elemento1' => 25.89,
  
    'elemento2' => 'nostra',
  
    'elemento3' => [
  
      'Virgilio',
  
      'smarrita',
  
      'ché'
  
    ]
  
  ];

  $di = 'di';
  $blankSpace = ' '; 
  $results = $words1[6][3][1][1] . $blankSpace . $words1[6][3][0] . $blankSpace . $di .
   $blankSpace . $words1[6][3][1][0] . $blankSpace . $di . $blankSpace . $words2['elemento2'] .
    $blankSpace . $words1[2]. $blankSpace . $words1[4] . $blankSpace . $words1[6][4] . $blankSpace . $words1[6][5] . $blankSpace
     . $words1[6][3][1][2][2][1] . $blankSpace . $words1[6][3][1][2][0]  . $blankSpace . $words1[6][0] . ',' . $blankSpace . 
     $words2['elemento3'][2] . $blankSpace . $words1[6][3][1][2][1] . $blankSpace . $words1[7] . 
     $blankSpace . $words1[6][3][1][2][2][0] . $blankSpace . $words1[6][1] . $blankSpace . $words2['elemento3'][1];

     echo $results;