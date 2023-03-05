<html>

<head>
    <style>
        body {
            background-color: #abdbe3;
        }

        td {
            padding: 30px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <?php

    echo "<h2>Basic  Rules to Print All Pattern</h2><br>";
    echo "1) Run the outer FOR LOOP the number of times you are having the lines. <b>Outer FOR LOOP is for ROWS and Inner FOR LOOP is for COLUMNS.</b><br> 
              2) How many colums are there with each row => Identify for every ROW numbers how many colums are there.<br>
              3) What do you need to print?<br><br>";
    ?>
    <table>
        </tr>
        <tr>
            <th>
                <?php
                echo "<b>Pattern 1<br></b>";
                ?>
            </th>
            <td>
                <?php
                for ($i = 0; $i <= 4; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 2<br></b>";
                ?>
            </th>
            <td>
                <?php
                for ($i = 0; $i <= 5; $i++) {
                    for ($j = 1; $j <= 5; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 3<br></b>";
                ?>
            </th>
            <td>
                <?php
                for ($i = 5; $i >= 1; $i--) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 4<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;
                for ($i = 1; $i <= $size; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 5<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;
                for ($i = 0; $i < $size; $i++) {
                    // print column
                    for ($j = 0; $j < $size; $j++) {
                        // print only star in first and last row
                        if ($i === 0 || $i === $size - 1) {
                            echo "*";
                        } else {
                            // print star only in first and last position row
                            if ($j === 0 || $j === $size - 1) {
                                echo "*";
                            } else {
                                // use &nbsp; for space
                                echo "&nbsp;&nbsp;";
                            }
                        }
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 6<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;
                for ($i = 0; $i < $size; $i++) {
                    // print spaces
                    for ($j = 1; $j < $size - $i; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    // print stars
                    for ($k = 0; $k <= $i; $k++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 7<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;
                for ($i = 1; $i <= $size; $i++) {
                    for ($j = 0; $j < $i; $j++) {
                        // not last row
                        if ($i != $size) {
                            if ($j == 0 || $j == $i - 1) {
                                echo "*";
                            } else {
                                echo "&nbsp;&nbsp;";
                            }
                        }
                        // last row
                        else {
                            echo "*";
                        }
                    }
                    echo "<br>";
                }
                ?>
            </td>
        </tr>

        <tr>
            <th>
                <?php
                echo "<b>Pattern 8<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;
                for ($i = 0; $i < $size; $i++) {
                    // print spaces
                    for ($j = 0; $j < $size - $i - 1; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    // print stars
                    for ($k = 0; $k < 2 * $i + 1; $k++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
            </td>
            <th>
                <?php
                echo "<b>Pattern 9<br></b>";
                ?>
            </th>

            <td>
                <?php
                $size = 5;
                for ($i = 0; $i < $size; $i++) {
                    // print spaces
                    for ($j = 0; $j < $i; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    // print stars
                    for ($k = 0; $k < 2 * ($size - $i) - 1; $k++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 10<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;
                for ($i = 0; $i < $size; $i++) {
                    // print spaces
                    for ($j = 0; $j < $size - $i - 1; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    // print stars
                    for ($k = 0; $k < 2 * $i + 1; $k++) {
                        if ($i === 0 || $i === $size - 1) {
                            echo "*";
                        } else {
                            if ($k === 0 || $k === 2 * $i) {
                                echo "*";
                            } else {
                                echo "&nbsp;&nbsp;";
                            }
                        }
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 11<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;

                // upside pyramid
                for ($i = 1; $i <= $size; $i++) {
                    // printing spaces
                    for ($j = $size; $j > $i; $j--) {
                        echo "&nbsp;&nbsp;";
                    }
                    // printing star
                    for ($k = 0; $k < $i * 2 - 1; $k++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                // downside pyramid
                for ($i = 1; $i <= $size - 1; $i++) {
                    // printing spaces
                    for ($j = 0; $j < $i; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    // printing star
                    for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 12<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;

                // upside pyramid
                for ($i = 1; $i <= $size; $i++) {
                    // printing spaces
                    for ($j = $size; $j > $i; $j--) {
                        echo "&nbsp;&nbsp;";
                    }
                    // printing star
                    for ($k = 0; $k < $i * 2 - 1; $k++) {
                        if ($k === 0 || $k === 2 * $i - 2) {
                            echo "*";
                        } else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    echo "<br>";
                }
                // downside pyramid
                for ($i = 1; $i <= $size - 1; $i++) {
                    // printing spaces
                    for ($j = 0; $j < $i; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    // printing star
                    for ($k = ($size - $i) * 2 - 1; $k >= 1; $k--) {
                        if ($k === 1 || $k === ($size - $i) * 2 - 1) {
                            echo "*";
                        } else {
                            echo "&nbsp;&nbsp;";
                        }
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 13<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;

                for ($i = 1; $i <= $size; $i++) {
                    for ($j = 0; $j < $i; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                for ($i = 1; $i <= $size - 1; $i++) {
                    for ($j = 0; $j < $size - $i; $j++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
            </td>

            <th>
                <?php
                echo "<b>Pattern 14<br></b>";
                ?>
            </th>
            <td>
                <?php
                $size = 5;

                for ($i = 1; $i <= $size; $i++) {
                    for ($j = 0; $j < $size - $i; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($k = 0; $k < $i; $k++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                for ($i = 1; $i <= $size - 1; $i++) {
                    for ($j = 0; $j < $i; $j++) {
                        echo "&nbsp;&nbsp;";
                    }
                    for ($k = 0; $k < $size - $i; $k++) {
                        echo "*";
                    }
                    echo "<br>";
                }
                ?>
            </td>
        </tr>
    </table>

</body>

</html>