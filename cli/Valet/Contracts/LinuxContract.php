<?php
/**
 * Created by PhpStorm.
 * User: gordo
 * Date: 31/05/16
 * Time: 11:50 AM.
 */
namespace Valet\Contracts;

interface LinuxContract
{
    public function installed(string $package) : bool;

    public function installOrFail(string $package);

    public function restartService($services);

    public function stopService($services);

    public function linkedPhp() :string;
}
