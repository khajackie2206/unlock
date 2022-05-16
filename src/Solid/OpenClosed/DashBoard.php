<?php

namespace Khanguyennfq\Unlock\Solid\OpenClosed;

use Animals;

class DashBoard
{
         /**
          * @param Animals[] $lists
          * @return string
          */
    public function eatList(array $lists): string
    {
          $listFood = "";
        foreach ($lists as $list) {
               $listFood .= $list->eat() . " ";
        }
          return $listFood;
    }
}
