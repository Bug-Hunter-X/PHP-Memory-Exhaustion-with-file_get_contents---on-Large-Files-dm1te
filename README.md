# PHP Memory Exhaustion Bug

This repository demonstrates a common PHP bug related to memory exhaustion when using `file_get_contents()` to process large files.  The `bug.php` file shows the problematic code, while `bugSolution.php` provides a corrected version that uses stream-based file handling to prevent memory issues.

## Problem
The original script loads the entire content of a potentially large file into memory at once. This is inefficient and can lead to memory exhaustion errors, especially when dealing with files exceeding available RAM.

## Solution
The solution employs a stream-based approach, reading the file in smaller chunks and processing it iteratively.  This significantly reduces memory consumption and makes the script more robust when handling large files.