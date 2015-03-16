<?php

namespace Gk\FOSUserBundleFormula;

class Installer implements \Gk\SymfonyBundleInstaller\Installer\InstallerInterface
{
    public function getSteps()
    {
        return [
            'install:bundle',
            'install:kernel',
            'install:routing'
        ];
    }
}

