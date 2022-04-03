<?php
namespace dhope0000\LXDClient\Controllers\Instances;

use dhope0000\LXDClient\Tools\Instances\Copy;
use dhope0000\LXDClient\Objects\Host;
use Symfony\Component\Routing\Annotation\Route;

class CopyInstanceController implements \dhope0000\LXDClient\Interfaces\RecordAction
{
    public function __construct(Copy $copy)
    {
        $this->copy = $copy;
    }
    /**
     * @Route("/api/Instances/CopyInstanceController/copy", methods={"POST"}, name="Copy instance")
     */
    public function copy(
        Host $host,
        string $container,
        string $newContainer,
        Host $newHostId,
        string $targetProject = "",
        int $copyProfiles = 0
    ) {
        $this->copy->copy($host, $container, $newContainer, $newHostId, $targetProject, (bool) $copyProfiles);
        return ["state"=>"success", "message"=>"Copying $container to $newContainer"];
    }
}
