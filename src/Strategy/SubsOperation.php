<?php


namespace SidSpears\Strategy;


class SubsOperation implements OperationInterface
{

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function calc(int $a, int $b): int
    {
        return $a - $b;
    }
}