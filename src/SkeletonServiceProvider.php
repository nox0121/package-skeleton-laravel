<?php

namespace Spatie\Skeleton;

use Spatie\Skeleton\Commands\SkeletonCommand;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('skeleton')
            ->hasConfigFile()
            ->hasMigration('create_skeleton_table')
            ->hasViews()
            ->hasCommand(SkeletonCommand::class);
    }
}
