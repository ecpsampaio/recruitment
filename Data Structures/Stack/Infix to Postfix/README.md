# Infix to Postfix

Infix expression:The expression of the form a op b. When an operator is in-between every pair of operands.
Postfix expression:The expression of the form a b op. When an operator is followed for every pair of operands.

Why postfix representation of the expression?
The compiler scans the expression either from left to right or from right to left.

Consider the below expression: `a op1 b op2 c op3 d`
If `op1 = +`, `op2 = *`, `op3 = +`
The compiler first scans the expression to evaluate the expression `b * c`, then again scan the expression to add a to it. The result is then added to `d` after another scan.
The repeated scanning makes it very in-efficient. It is better to convert the expression to postfix(or prefix) form before evaluation.
The corresponding expression in postfix form is: `abc*+d+`
