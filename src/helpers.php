<?php

namespace CodingLabs;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
//use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

function styles(Finder $finder, array $rules = []): Config {
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    return (new Config())
//        ->setParallelConfig(ParallelConfigFactory::detect()) // todo: restore this once it becomes stable
        ->setFinder($finder)
        ->setRiskyAllowed(true)
        ->setRules($rules);
}
