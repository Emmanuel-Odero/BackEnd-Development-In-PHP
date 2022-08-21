<!-- The precedence of an operator specifies how "tightly" it binds two expressions together. For example, in the expression 1 + 5 * 3, the answer is 16 and not 18 because the multiplication ("*") operator has a higher precedence than the addition ("+") operator. Parentheses may be used to force precedence, if necessary. For instance: (1 + 5) * 3 evaluates to 18.

When operators have equal precedence their associativity decides how the operators are grouped. For example "-" is left-associative, so 1 - 2 - 3 is grouped as (1 - 2) - 3 and evaluates to -4. "=" on the other hand is right-associative, so $a = $b = $c is grouped as $a = ($b = $c).

Operators of equal precedence that are non-associative cannot be used next to each other, for example 1 < 2 > 1 is illegal in PHP. The expression 1 <= 1 == 1 on the other hand is legal, because the == operator has a lower precedence than the <= operator.

Associativity is only meaningful for binary (and ternary) operators. Unary operators are either prefix or postfix so this notion is not applicable. For example !!$a can only be grouped as !(!$a).

Use of parentheses, even when not strictly necessary, can often increase readability of the code by making grouping explicit rather than relying on the implicit operator precedence and associativity.

The following table lists the operators in order of precedence, with the highest-precedence ones at the top. Operators on the same line have equal precedence, in which case associativity decides grouping.
 -->

<!-- Three types of operator associativity in php.
1.left
2.rigt
3.non-associativity

Category of three operators are right associativity
1)**
2)=,+=,-=,*=,/=,%=,&=,^=,|=,<<=,>>=,??=,.=
3)??

Category of eight operators are non-associativity
1)clone new
2)++,--,~,@
3)!
4)<,<=,>,>=
5)<<,>>
6)yield from
7)yield
8)print

Rest of the operators are left associativity -->