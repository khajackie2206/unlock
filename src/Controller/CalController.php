<?php
namespace Khanguyennfq\Unlock\Controller;
class CalController
{
 /**
  * return float
  */
  public function calSum($a, $b): int
  {
      return  $a + $b;
  }
  public function calSub($a, $b): int
  {
      return $a - $b;
  }
}