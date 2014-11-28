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
// Declarations
$value1 = strtolower($argv[1]);
$value2 = strtolower($argv[2]);
$value3 = $value2;
$accepted_values = ['rock', 'paper', 'scissors', 'lizard', 'spock'];

// Check for valid input
if ( in_array($value1, $accepted_values) && in_array($value2, $accepted_values) ) {
	echo "Values are acceptable \n";
} else {
	exit("Unacceptable inputs. Please enter valid inputs. \n");
}

echo "Value 1 is " . $value1 . "\n" . "Value 2 is " . $value2 . "\n";

// Convert second value into array index for matrix search
// switch ($value2) {
// 	case "rock":
// 		$value2 = 0;
// 		break;
// 	case "paper":
// 		$value2 = 1;
// 		break;
// 	case "scissors":
// 		$value2 = 2;
// 		break;
// 	case "lizard":
// 		$value2 = 3;
// 		break;
// 	case "spock";
// 		$value2 = 4;
// 		break;
// }

$value2 = array_search($value2, $accepted_values);

// Matrix declaration highglighting win/loss/tie patterns
$matrix =
[
    "rock" =>     ['Ties', 'Loses', 'Wins', 'Wins', 'Loses'],
    "paper" =>    ['Wins', 'Ties', 'Loses', 'Loses', 'Wins'],
    "scissors" => ['Loses', 'Wins', 'Ties', 'Wins', 'Loses'],
    "lizard" =>   ['Loses', 'Wins', 'Loses', 'Ties', 'Wins'],
    "spock" =>    ['Wins', 'Loses', 'Wins', 'Loses', 'Ties']
];

$verbs = [
		"rock" =>     ["scissors" => 'Smashes', "lizard" => 'Smashes' ],
    "paper" =>    ["rock" => 'Covers', "spock" => 'Disproves' ],
    "scissors" => ["paper" => 'Cuts', "lizard" => 'Snips' ],
    "lizard" =>   ["paper" => 'Eats', "spock" => 'Poisons' ],
    "spock" =>    ["rock" => 'Destroys', "scissors" => "Destroys" ]
];

// Output result
if ($matrix[$value1][$value2] == "Wins") {
	echo ucfirst($value1) . " " . $verbs[$value1][$value3] . " " . ucfirst($value3) . "\n";
} elseif ($matrix[$value1][$value2] == "Loses") {
	echo ucfirst($value3) . " " . $verbs[$value3][$value1] . " " . ucfirst($value1) . "\n";
}

echo ucfirst($value1) . " " . $matrix[$value1][$value2] . " against " . ucfirst($value3) . "!\n";


?>