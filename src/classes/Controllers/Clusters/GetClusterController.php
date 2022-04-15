<?php

namespace dhope0000\LXDClient\Controllers\Clusters;

use dhope0000\LXDClient\Tools\Clusters\GetCluster;
use dhope0000\LXDClient\Tools\User\ValidatePermissions;
use Symfony\Component\Routing\Annotation\Route;

class GetClusterController
{
    public function __construct(GetCluster $getCluster, ValidatePermissions $validatePermissions)
    {
        $this->getCluster = $getCluster;
        $this->validatePermissions = $validatePermissions;
    }
    /**
     * @Route("/api/Clusters/GetClusterController/get", methods={"POST"}, name="Get overview of a cluster")
     */
    public function get(int $userId, $cluster)
    {
        $this->validatePermissions->isAdminOrThrow($userId);
        return $this->getCluster->get($cluster);
    }
}
