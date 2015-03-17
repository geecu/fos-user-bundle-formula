<?php

namespace Gk\FOSUserBundleFormula;

class Installer extends \Gk\SymfonyBundleInstaller\Installer\AbstractInstaller
{
    public function getSteps()
    {
        return [
            'install:bundle',
            //'install:kernel',
            //'install:routing'
        ];
    }
}

