<?php

$rules = [
    '@Symfony' => true,
    '@autoPHPMigration' => true,
//    '@autoPHPMigration:risky' => true,
    'binary_operator_spaces' => [
        'default' => 'at_least_single_space',
    ],
    'braces_position' => [
        'functions_opening_brace' => 'same_line',
        'classes_opening_brace' => 'same_line'],
    'concat_space' => ['spacing' => 'one'],
    'modifier_keywords' => ['elements' => []],
    'fully_qualified_strict_types' => false,
    'no_superfluous_phpdoc_tags' => false,
    'no_unneeded_control_parentheses' => false,
    'phpdoc_align' => false,
    'single_line_comment_style' => false,
    'single_line_comment_spacing' => false,
    'single_quote' => false,
    'trailing_comma_in_multiline' => true,
    'yoda_style' => false
];

//$finder = new PhpCsFixer\Finder();
//$finder->exclude('vendor');
//$finder->in(__DIR__);

$config = new PhpCsFixer\Config();
$config->setRules($rules);
//$config->setFinder($finder);
$config->setRiskyAllowed(true);
$config->setParallelConfig(PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());

return $config;
