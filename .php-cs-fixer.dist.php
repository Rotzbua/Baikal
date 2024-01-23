<?php

$config = new PhpCsFixer\Config;
$config->getFinder()
    ->exclude('vendor')
    ->in(__DIR__);
$config->setRules([
    '@PSR2' => true,
    '@Symfony' => true,
    'binary_operator_spaces' => [],
    'braces'                 => [
        'allow_single_line_anonymous_class_with_empty_body' => true,
        'allow_single_line_closure'                         => true,
        'position_after_functions_and_oop_constructs'       => 'same',
    ],
     'braces_position' => [
         'allow_single_line_anonymous_functions' => true,
         'classes_opening_brace' => 'same_line',
         'functions_opening_brace' => 'same_line',
     ],
    'concat_space' => ['spacing' => 'one'],
    'no_superfluous_phpdoc_tags' => false,
    'single_line_comment_spacing' => false,
    'no_unneeded_control_parentheses' => false,
    'phpdoc_align' => false,
    'single_line_comment_style' => false,
    'single_quote' => false,
    'trailing_comma_in_multiline' => true,
    'visibility_required' => false,
    'yoda_style' => false
]);

return $config;
