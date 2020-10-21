<?php

// https://mlocati.github.io/php-cs-fixer-configurator/#version:2.16

use PhpCsFixer\{
    Config,
    Finder
};

$rules = [
    '@PSR2'                                         => true,
    'align_multiline_comment'                       => [
        'comment_type' => 'phpdocs_like',
    ],
    'array_syntax'                                  => [
        'syntax' => 'short',
    ],
    'binary_operator_spaces'                        => [
        'operators' => [
            '=>' => 'align_single_space',
        ],
    ],
    'blank_line_after_namespace'                    => true,
    'blank_line_after_opening_tag'                  => false,
    'blank_line_before_statement'                   => [
        'statements' => [
            'return',
            'try',
        ],
    ],
    'compact_nullable_typehint'                     => true,
    'braces'                                        => [
        'allow_single_line_closure' => true,
    ],
    'cast_spaces'                                   => true,
    'class_definition'                              => true,
    'concat_space'                                  => [
        'spacing' => 'one',
    ],
    'class_attributes_separation'                   => [
        'elements' => [
            'const',
            'method',
            'property',
        ],
    ],
    'declare_equal_normalize'                       => [
        'space' => 'none',
    ],
    'elseif'                                        => true,
    'encoding'                                      => true,
    'full_opening_tag'                              => true,
    'function_declaration'                          => true,
    'function_typehint_space'                       => true,
    'heredoc_to_nowdoc'                             => true,
    'include'                                       => true,
    'indentation_type'                              => true,
    'increment_style'                               => [
        'style' => 'post',
    ],
    'line_ending'                                   => false,
    'lowercase_cast'                                => true,
    'lowercase_constants'                           => true,
    'lowercase_keywords'                            => true,
    'linebreak_after_opening_tag'                   => false,
    'magic_constant_casing'                         => true,
    'method_argument_space'                         => [
        'on_multiline' => 'ensure_fully_multiline',
    ],
    'multiline_whitespace_before_semicolons'        => true,
    'native_function_casing'                        => true,
    'new_with_braces'                               => false,
    'no_mixed_echo_print'                           => [
        'use' => 'echo',
    ],
    'no_blank_lines_after_class_opening'            => true,
    'no_blank_lines_after_phpdoc'                   => true,
    'no_extra_blank_lines'                          => true,
    'no_closing_tag'                                => true,
    'no_empty_phpdoc'                               => true,
    'no_empty_statement'                            => true,
    'no_leading_import_slash'                       => true,
    'no_leading_namespace_whitespace'               => true,
    'no_multiline_whitespace_around_double_arrow'   => true,
    'no_short_bool_cast'                            => true,
    'no_singleline_whitespace_before_semicolons'    => true,
    'no_spaces_after_function_name'                 => true,
    'no_spaces_around_offset'                       => [
        'positions' => [
            'inside',
        ],
    ],
    'no_spaces_inside_parenthesis'                  => true,
    'no_trailing_comma_in_list_call'                => true,
    'no_trailing_comma_in_singleline_array'         => true,
    'no_trailing_whitespace'                        => true,
    'no_trailing_whitespace_in_comment'             => true,
    'no_unneeded_control_parentheses'               => true,
    'no_unused_imports'                             => true,
    'no_useless_return'                             => true,
    'no_useless_else'                               => true,
    'no_superfluous_elseif'                         => true,
    'no_whitespace_before_comma_in_array'           => true,
    'no_whitespace_in_blank_line'                   => true,
    'normalize_index_brace'                         => true,
    'not_operator_with_successor_space'             => false,
    'no_empty_comment'                              => false,
    'no_superfluous_phpdoc_tags'                    => false,
    'phpdoc_add_missing_param_annotation'           => [
        'only_untyped' => false,
    ],
    'ordered_imports'                               => [
        'imports_order'  => ['const', 'class', 'function'],
        'sort_algorithm' => 'alpha',
    ],
    'object_operator_without_whitespace'            => true,
    'phpdoc_align'                                  => [
        'align' => 'vertical',
    ],
    'phpdoc_order'                                  => true,
    'phpdoc_no_empty_return'                        => false,
    'phpdoc_indent'                                 => true,
    'phpdoc_inline_tag'                             => true,
    'phpdoc_no_access'                              => true,
    'phpdoc_no_package'                             => false,
    'phpdoc_no_useless_inheritdoc'                  => true,
    'phpdoc_scalar'                                 => true,
    'phpdoc_single_line_var_spacing'                => true,
    'phpdoc_summary'                                => false,
    'phpdoc_to_comment'                             => false,
    'phpdoc_trim'                                   => true,
    'phpdoc_trim_consecutive_blank_line_separation' => true,
    'phpdoc_separation'                             => false,
    'phpdoc_var_annotation_correct_order'           => true,
    'phpdoc_no_alias_tag'                           => false,
    'phpdoc_types'                                  => true,
    'phpdoc_var_without_name'                       => true,
    'return_type_declaration'                       => [
        'space_before' => 'none',
    ],
    'single_trait_insert_per_statement'             => true,
    'single_line_comment_style'                     => [
        'comment_types' => ['hash'],
    ],
    'short_scalar_cast'                             => true,
    'simplified_null_return'                        => true,
    'single_blank_line_at_eof'                      => true,
    'single_blank_line_before_namespace'            => true,
    'single_class_element_per_statement'            => true,
    'single_import_per_statement'                   => false,
    'single_line_after_imports'                     => true,
    'single_quote'                                  => true,
    'space_after_semicolon'                         => true,
    'standardize_not_equals'                        => true,
    'switch_case_semicolon_to_colon'                => true,
    'switch_case_space'                             => true,
    'ternary_operator_spaces'                       => true,
    'trailing_comma_in_multiline_array'             => false,
    'trim_array_spaces'                             => true,
    'unary_operator_spaces'                         => true,
    'visibility_required'                           => true,
    'whitespace_after_comma_in_array'               => true,
    'yoda_style'                                    => false,
];

$project_path = getcwd();

$paths = [
    $project_path . '/app',
    $project_path . '/config',
    $project_path . '/database',
    $project_path . '/resources',
    $project_path . '/routes',
    $project_path . '/tests',
    $project_path . '/packages',
];

$finder = Finder::create()
    ->exclude('vendor')
    ->in($paths)
    ->name('*.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return (new Config())
    ->setRules($rules)
    ->setFinder($finder);
