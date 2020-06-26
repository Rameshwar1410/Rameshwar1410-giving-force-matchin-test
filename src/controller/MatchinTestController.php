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
     * @return int
     */
    public function solutionTow(array $matrix): int
    {
        $result =0;

        if (empty($matrix)) {
            return 0;
        }

        for($i=0; $i<count($matrix[0]); $i++)
        {
            $maxRow[] = max(array_column($matrix, $i));
        }

        foreach ($matrix as $v) {
                $minClm[] = min($v);
        }

        foreach ($maxRow as $v) {
            if (in_array($v, $minClm)) {
                $result = $v;
            }
        }

        return $result;
    }
}
