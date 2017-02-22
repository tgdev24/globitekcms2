<?php
  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }
  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }
  // has_valid_email_format('test@test.com')
  function has_valid_email_format($value) {
    // Function can be improved later to check for
    // more than just '@'.
    $at = strpos($value, '@') !== false;
    $regex = preg_match('/\A[A-Za-z0-9_\-\.@]+\Z/', $value);
    return $at && $regex;
  }
// validates phone number format
function has_valid_number($value) {
    return preg_match('/\A[0-9\(\)\-]+\Z/', $value);
}
// validates username format
function has_valid_username($value) {
    return preg_match('/\A[A-Za-z0-9_]+\Z/', $value);
}
// Personal validation function that checks first name starts with capital
function capital_first($value) {
    return preg_match('/^[A-Z]/', $value);
}
// Personal validation function that checks last name starts with capital
function capital_last($value) {
    return preg_match('/^[A-Z]/', $value);    
}
// Personal validation function that checks state starts with capital
function capital_state($value) {
    return preg_match('/^[A-Z]/', $value);
}
// Personal validation function that checks that state code is all capitals
function capital_code($value) {
    return preg_match('/\A[A-Z]+\Z/', $value);
}
// Personal validation function that checks that territory is a positive value
function positive_territory($value) {
    return preg_match('/^[-]/', $value);
}
?>