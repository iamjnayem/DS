<?php

function place_all_books(Array $ordered_books, Array $book_list){
    foreach($ordered_books as $book){
        $book_found = find_a_book($book_list, $book);
        if($book_found){
            array_splice($book_list, $book_found, 1);
        }
        var_dump($book_list);


    }
}
function find_a_book(Array $book_list, String $book_name){
    $found = FALSE;
    foreach($book_list as $index => $book){
        if ($book == $book_name){
            $found = $index;
            break;
        }
    }
    return $found;
}
$book_list = ['PHP', 'MySQL', 'PGSQL', 'Oracle', 'Java'];
$ordered_books = ['MySQL', 'PGSQL', 'Java'];
place_all_books($ordered_books, $book_list);
echo implode(",", $book_list) . "\n";
