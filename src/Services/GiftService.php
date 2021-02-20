<?php
/**
 * Created by PhpStorm.
 * User: khaoula
 * Date: 2/20/2021
 * Time: 10:47 AM
 */

namespace App\Services;


use Psr\Log\LoggerInterface;

class GiftService //name of the class must be the same name of the file
{
    public $gifts=['flowers', 'car', 'money', 'piano'];

//   NOTE !! to access a service from another service you can only do it in a constructor
    public function __construct(LoggerInterface $logger)//typehint
    {
        $logger->info('Gifts were randomized !');//see result in var/log/dev.log
        shuffle($this->gifts);
    }
}