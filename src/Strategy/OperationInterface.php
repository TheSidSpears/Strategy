<?php


namespace SidSpears\Strategy;


interface OperationInterface
{
    public function calc(int $a, int $b): int;
}