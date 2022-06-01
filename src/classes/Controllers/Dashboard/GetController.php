<?php

namespace dhope0000\LXDClient\Controllers\Dashboard;

use dhope0000\LXDClient\Tools\Dashboard\GetDashboard;

class GetController
{
    private $getDashboard;
    
    public function __construct(GetDashboard $getDashboard)
    {
        $this->getDashboard = $getDashboard;
    }

    public function get($userId, string $history = "-30 minutes")
    {
        return $this->getDashboard->get($userId);
    }
}
