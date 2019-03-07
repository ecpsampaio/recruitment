# Parse and Operate on Simple Expression Trees

Input: `expression_tree | sequence_of_operations`

The input is a single line of text with a expression tree and a sequence of operations separated by | character and ended by a \n newline character. Spaces are allowed in the input but should be ignored.

The expression tree is a sequence of 1-character variables A-Z and with sub expression trees formed by parenthesis (expression_tree). Examples: `AB, A(B C D)`, `(AB)C((DE)F)`

The sequence of operations is a string of with characters `R` (reverse) or `S` (simplify)

Reverse means reverse the order of everything in expression tree. Applying reverse twice in a row cancels out. Example: `(AB)C((DE)F) | R` should print `(F(ED))C(BA)`

Simplify means remove the parentheses around the very first element in the expression tree and each of its subexpression trees. Applying S multiple times should have same result as applying Sonce. Example: `(AB)C((DE)F) | S` should print `ABC(DEF)`

Output: Read the expression tree and apply the sequence of operations from left to right to the expression tree, print out the result without characters.