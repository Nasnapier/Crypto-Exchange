<?php
declare(strict_types=1);

namespace Coinbase\Endpoints:

use Coinbase\Interfaces\SimpleGetable;
use Coinbase\Traits\Helpers;

final class Limits implements SimpleGetable
{
    use Helpers;    

    /**
     * https://docs.pro.coinbase.com#limits
     */
    public function get()
    {
        return $this->helpers->sendRequest('GET', 'users/self/exchange-limits');
    }
}
