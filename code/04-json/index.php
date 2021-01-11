<?php 

// Easy array
$titles = [
  "Inception", 
  "Deadpool", 
  "Big trouble in Little China", 
  "Ghostbusters"
];

// Custom index array
$detail = array(
  'title' => 'Inception',
  'year' => 2010,
  'director' => 'Christopher Nolan',
  'music' => 'Hans Zimmer',
  'time' => 148
);

// Complex data
$movies = array(
  $detail,
  array(
    'title' => 'Deadpool',
    'year' => 2016,
    'director' => 'Tim Miller',
    'music' => 'Tom Holkenbord',
    'time' => 108
  ),
  array(
    'title' => 'Big trouble in Little China',
    'year' => 1986,
    'director' => 'John Carpenter',
    'music' => 'John Carpenter',
    'time' => 99
  ),
  array(
    'title' => 'Ghostbusters',
    'year' => 1984,
    'director' => 'Ivan Reitman',
    'music' => 'Elmer Bernstein',
    'time' => 105
  )
);

// print_r($titles);
// print_r($detail);
// print_r($movies);

// Create and print the JSON
echo(json_encode($movies));

?>