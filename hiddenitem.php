<?php

// Define the grid layout
$grid = [
    "########",
    "#......#",
    "#.###..#",
    "#...#.##",
    "#X#....#",
    "########"
];
$y_max = 7;
$x_max = 5;

// Define the player's starting position
$playerX = 4;
$playerY = 1;

// Define the player's movement order
$movementOrder = [
    ['dx' => 0, 'dy' => -1],  // Up/North
    ['dx' => 1, 'dy' => 0],   // Right/East
    ['dx' => 0, 'dy' => 1],   // Down/South
];

// Initialize an array to store probable item locations
$probableLocations = [];
$max_initial_step = $x_max - ($x_max - $playerX) - 1; // 7 - 3 - 1 =  3

for($up = 1; $up <= $max_initial_step; $up++){
    // Keatas
    if($grid[$playerX-$up][$playerY] == "."){
        // Available, tambah ke probable
        $probableLocations[] = ['x' => $playerX-$up, 'y' => $playerY];

        // Kekanan
        $max_second_step = $y_max - $playerY - 1;
        for($kanan = 1; $kanan <= $max_second_step; $kanan++){

            if($grid[$playerX-$up][$playerY+$kanan] == "."){
                $probableLocations[] = ['x' => $playerX-$up, 'y' => $playerY+$kanan];

                
                //Kebawah
                $max_last_step = $x_max - ($playerX-$up) - 1;
                for($bawah = 1; $bawah <= $max_last_step; $bawah++){

                    if($grid[$playerX-$up+$bawah][$playerY+$kanan] == "."){
                        //index -1
                        $probableLocations[] = ['x' =>$playerX-$up+$bawah, 'y' => $playerY+$kanan];

                    }
                    if($grid[$playerX-$up+$bawah][$playerY+$kanan] == "#"){
                        break;
                    }
                }
            }

            if($grid[$playerX-$up][$playerY+$kanan] == "#"){ //Stop at index -1
                break;
            }
            
            
        }
    }

    if($grid[$playerX-$up][$playerY] == "#"){
        break;
    }

}

echo "Original Grid:\n";
foreach ($grid as $row) {
    echo $row . PHP_EOL;
}


// Display the grid with probable item locations
echo "\nProbable Locations (x,y):\n";
$num = 1;
foreach ($probableLocations as $location) {
    echo $num . ". (" . $location['x']. ",". $location['y'] . ")\n";
    $grid[$location['x']][$location['y']] = "$";
    $num++;
}

echo "\nGrid with the Probable Locations Marked With '$' Symbol:\n";
foreach ($grid as $row) {
    echo $row . PHP_EOL;
}
