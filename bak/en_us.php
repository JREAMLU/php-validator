<?php

return [
    'present' => "params '{parameter-name}' is not exist",
    'alpha' => "params '{parameter-name}' is not all letters",
    'num' => "params '{parameter-name}' is not all numbers",
    'alpha_num' => "params '{parameter-name}' is not composed of numbers or letters",
    'alpha_dish' => "params '{parameter-name}' not composed of letters, numbers, underscores and dashes",
    'var' => "params '{parameter-name}' is not a valid variable name",
    'ip' => "params '{parameter-name}' is not a legal IP address",
    'url' => "params '{parameter-name}' is not a valid URL",
    'email' => "params '{parameter-name}' is not a valid email address",
    'mobile' => "params '{parameter-name}' is not a legal phone number",
    'json' => "params '{parameter-name}' is not the correct JSON structure",
    'timestamp' => "params '{parameter-name}' is not a valid timestamp",
    'date_format' => "params '{parameter-name}' is not a standard date format, or the date is out of range",
    'regex' => "params '{parameter-name}' does not meet the regular expression rules",
    'string' => "params '{parameter-name}' is not a string type",
    'boolean' => "params '{parameter-name}' is not a boolean type",
    'integer' => "params '{parameter-name}' is not an integer type",
    'float' => "params '{parameter-name}' is not a float type",
    'array' => "params '{parameter-name}' is not an array type",
    'object' => "params '{parameter-name}' is not object type",
    'object_of' => "params '{parameter-name}' is not '{bind-value_1}' object type",
    'integer_str' => "params '{parameter-name}' is not a valid integer",
    'float_str' => "params '{parameter-name}' is not a valid float number",
    'numeric_str' => "params '{parameter-name}' is not a valid number",
    'array_str' => "params '{parameter-name}' is not a valid array string",
    'max' => "params '{parameter-name}' is too big",
    'length_max' => "params '{parameter-name}' is too long",
    'min' => "params '{parameter-name}' is too small",
    'length_min' => "params '{parameter-name}' is too short",
    'length' => "params '{parameter-name}' length is not '{bind-value_1}'",
    'between' => "params '{parameter-name}' is not between '{bind-value_1}' and '{bind-value_2}'",
    'length_between' => "params '{parameter-name}' length is not between '{bind-value_1}' and '{bind-value_2}'",
    'in' => "params '{parameter-name}' not in: '{bind-value_1}'",
    'not_in' => "params '{parameter-name}' in '{bind-value_1}'",
    'filled' => "when passing in params '{parameter-name}' , it can not be empty",
    'distinct' => "in the array params '{parameter-name}' , there are duplicate values",
    'different' => "params '{parameter-name}' as same as '{bind-value_1}'",
    'same' => "params '{parameter-name}' different from '{bind-value_1}'",
    'required_with' => "when '{bind-value_1}' is not empty '{parameter-name}' can not be empty",
    'required_with_all' => "params '{parameter-name}' can not be empty",
    'required_without' => "when '{bind-value_1}' is empty, params '{parameter-name}' can not be empty",
    'required_without_all' => "params '{parameter-name}' is not exist",
    'file_exists' => "the specified file does not exist",
    'file_type_in' => "the file type must be as follows: {bind-value_1}",
    'file_max' => "the maximum file size is {bind-value_1}M",
    'file_min' => "the minimum file size is {bind-value_1}M",
    'file_size_between' => "File size can only between {bind-value_1}M and {bind-value_2}M",
];
