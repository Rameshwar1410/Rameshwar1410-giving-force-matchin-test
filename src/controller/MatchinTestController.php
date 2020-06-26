<?php

declare(strict_types = 1);

namespace controller;

class MatchinTestController
{
    /**
     * Multiply Table
     *
     * @param int $start
     * @param int $end
     */
    public function solutionOne(int $start, int $end)
    {

        $tableData = "<table border =\"1\" style='border-collapse: collapse'>";
        for ($row =1; $row <= 10; $row++) {
            $tableData .= "<tr> \n";
            for ($col=$start; $col <= $end; $col++) {
                $p = $row * $col;
                $tableData .= "<td>$p</td> \n";
            }
            $tableData .= "</tr>";
        }
        $tableData .= "</table>";

        echo $tableData;
    }

    /**
     * Find luck number
     *
     * @param array $matrix
     */
    public function solutionTow(array $matrix)
    {

        echo '</br>',"A class";
    }
}
