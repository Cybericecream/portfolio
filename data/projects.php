<?php
include 'fa.php';

$projects = array(
  array('The Motivation Foundation', 'A subsidiary of Ertech', 'The Motivation Foundation transitions students to the world of work, supporting the skills required by the community, while at the same time providing for the needs of students and their families, relieving poverty and advancing education.', 'motivationFoundation.png', 'https://motivationfoundation.com.au/', $fa = array( $wp[0], $css[0], $ux[0] )),
  array('The Book-Keeping Network', 'We\'ll put you in the good books', 'At The Book-Keeping Network, we help you do what you do best- run your business. What we do best is provide you with a full range of fast, efficient and cost-effective book-keeping and data management services to put you in the good books.', 'bookkeepingnetwork.png', 'https://www.book-keepingnetwork.com.au/', $fa = array($html[0], $css[0], $php[0 ]))
);
$projectsLength = count($projects);
$faLength = count($fa);