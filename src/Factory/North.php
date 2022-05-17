<?php

namespace Khanguyennfq\Unlock\Factory;
class North implements TreeInterface
{
    public function getTreeName(): LycheeTree
    {
        return new LycheeTree();
    }
}
