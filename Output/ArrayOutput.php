<?php

namespace esky\Output;

class ArrayOutput implements OutputInterface
{

    public function load($data)
    {
        return (array)$data;
    }
}