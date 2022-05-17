<?php

namespace Khanguyennfq\Unlock\Factory;

class South implements TreeInterface
{
    public function getTreeName(): South
    {
        return new MangoTree();
    }
}
