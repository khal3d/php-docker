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

use PHPDocker\DockerClient;

/**
 * Remote Client for Docker
 */
class RemoteClient extends DockerClient {

    // ---------------------------------------------------------------------
    // Containers

    public function listContainers() {}
    public function createContainer() {}
    public function inspectContainer() {}
    public function listContainerProcesses() {}
    public function inspectContainerChanges() {}
    public function exportContainer() {}
    public function startContainer() {}
    public function stopContainer() {}
    public function restartContainer() {}
    public function killContainer() {}
    public function attachContainer() {}
    public function waitContainer() {}
    public function copyFromContainer() {}

    // ---------------------------------------------------------------------
    // Images

    public function listImages() {}
    public function createImage() {}
    public function insertFileInImage() {}
    public function inspectImage() {}
    public function getImageHistory() {}
    public function pushImage() {}
    public function tagImage() {}
    public function removeImage() {}
    public function searchImage() {}

    // ---------------------------------------------------------------------
    // Misc

    public function build() {}
    public function auth() {}
    public function info() {}
    public function version() {}
    public function commit() {}
    public function events() {}
}
