<?php
/**
 * This file is part of the PHPDocker package.
 *
 * (c) Khaled Attia <khaledattia@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPDocker;

use Guzzle\Http\Client;

/**
 * Docker Client
 */
class DockerClient {

    private $endPoint;

    public function setEndPoint($endPoint)
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    public function getEndPoint()
    {
        return $this->endPoint;
    }
}
