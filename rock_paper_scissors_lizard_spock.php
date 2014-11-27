<?php

/*
README
=================================================================================================================================================================================
A rock paper scissors lizard spock implementation done in PHP. Lines 12-60 highlight an initial & inefficient implementation using conditionals to hash out the idea of the game. Lines 60-79 are the final submissions following further research.

To execute cd to containing directory and run 'php rock_paper_scissors_lizard_spock.php' in terminal.
=================================================================================================================================================================================
 */

// // Assign moves to integers (1 = Rock, 2 = Paper, 3 = Scissors, 4 = Lizard, 5 = Spock)
// echo 'Welcome to Rock, Paper Scissors, Lizard, Spock';
// echo "\n";

// // Randomize Moves
// $player1 = rand(1, 5);
// $player2 = rand(1, 5);

// // Declare wins
// $rock_wins = array(3, 4);
// $paper_wins = array(1, 5);
// $scissors_wins = array(2, 4);
// $lizard_wins = array(5, 2);
// $spock_wins = array(3, 1);

// // Conditional logic for wins
// if ($player1 == $player2) {
// 	echo "Tie.";
// 	echo "\n";
// } elseif ($player1 == 1) {
// 		if (in_array($player2, $rock_wins)) {
// 			echo "Player 1 wins";
// 			echo "\n";
// 		}
// } elseif ($player1 == 2) {
// 	if (in_array($player2, $paper_wins)) {
// 			echo "Player 1 wins";
// 			echo "\n";
// 		}
// } elseif ($player1 == 3) {
// 	if (in_array($player2, $scissors_wins)) {
// 			echo "Player 1 wins";
// 			echo "\n";
// 		}
// }
// elseif ($player1 == 4) {
// 	if (in_array($player2, $lizard_wins)) {
// 			echo "Player 1 wins";
// 			echo "\n";
// 		}
// }
// elseif ($player1 == 5) {
// 	if (in_array($player2, $spock_wins)) {
// 			echo "Player 1 wins";
// 			echo "\n";
// 		}
// } else {
// 	echo "Player 2 wins";
// }

// Assign moves to integers (0 = Rock, 1 = Paper, 2 = Scissors, 3 = Lizard, 4 = Spock)
$player1 = rand(0, 4);
$player2 = rand(0, 4);

// Matrix declaration highglighting win/loss/tie patterns
$matrix =
[
    ['T', 'L', 'W', 'W', 'L'],
    ['W', 'T', 'L', 'L', 'W'],
    ['L', 'W', 'T', 'W', 'L'],
    ['L', 'W', 'L', 'T', 'W'],
    ['W', 'L', 'W', 'L', 'T']
];

// Output result
echo("Player 1 has " . $matrix[$player1][$player2] . " against Player 2");
echo "\n";

echo $argv[1]




?>