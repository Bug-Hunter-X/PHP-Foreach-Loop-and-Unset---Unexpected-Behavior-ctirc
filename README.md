# PHP Foreach Loop and Unset() Gotcha
This repository demonstrates a common, yet subtle, error in PHP when using `unset()` within a `foreach` loop iterating over an array passed by reference.  Improper handling can lead to elements being skipped unexpectedly.

The `bug.php` file shows the problematic code. The `bugSolution.php` file offers a corrected approach.

**Problem:**
When using `unset()` inside a `foreach` loop with an array passed by reference, the internal array pointer may not behave as expected.  Elements after the unset element might not be processed correctly.

**Solution:**
Iterate over a copy of the array or use other techniques to avoid modifying the array during iteration.