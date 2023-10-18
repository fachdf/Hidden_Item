# Hidden Item Game

## Introduction
This is a simple command-line program for a hidden item game. In this game, you are placed in a grid with various obstacles (marked as #), clear paths (marked as .), and a starting position (marked as X). Your objective is to find the hidden item within the grid. 

You must navigate in a specific order: first moving up (North), then right (East), and finally down (South). The program will provide you with a list of probable coordinates where the item might be located, and it can also display the grid with the probable item locations marked with a "$" symbol.

## Grid Layout
The grid is represented using the following symbols:
"#": Obstacles
".": Clear paths
"X": Starting position
"$": Probable item locations (only displayed in the grid when showing the results)

## Running the Program
To run the program, simply execute the provided PHP script . The program will display the list of probable item locations in the grid and mark it as '$'.

``` php script
php hiddenitem.php
```

## Additional Features
Bonus points can be earned for displaying the grid with the probable item locations marked with a "$" symbol.

## Program Output
```Output
Original Grid:
########
#......#
#.###..#
#...#.##
#X#....#
########
```

```Output
Probable Locations (x,y):
1. (3,1)
2. (3,2)
3. (3,3)
4. (4,3)
5. (2,1)
6. (1,1)
7. (1,2)
8. (1,3)
9. (1,4)
10. (1,5)
11. (2,5)
12. (3,5)
13. (4,5)
14. (1,6)
15. (2,6)
```

```Output
Grid with the Probable Locations Marked With '$' Symbol:
########
#$$$$$$#
#$###$$#
#$$$#$##
#X#$.$.#
########
```
