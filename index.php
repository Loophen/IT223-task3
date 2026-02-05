<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT223_task3</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td{
            border: 1px solid black;
            padding:4px;

        }
    </style>
</head>
<body>
    <h2>SQL String Functions</h2>
    <table>
        <tr>
            <th> SQL Function</th>
            <th>Description</th>
            <th>Example Code</th>
            <th>Example Output</th>
        </tr>
        <tr>
            <td>ASCII()</td>
            <td>Return the ASCII value for the specifi character</td>
            <td> 
                <code>
                    SELECT ASCII(Name) AS NumCodeOfFirstChar <br>
                    FROM Customers;
                </code>
            </td>
            <td>
                <a href="StringFunctions/ASCll.php" target="blank">View Output</a>
            </td>
        </tr>

          <tr>
            <td>CHAR_LENGTH</td>
            <td>Returns the length of a string (in characters)</td>
            <td> 
                <code>
                    SELECT CHAR_LENGTH("SQL Tutorial") AS LengthOfString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/CharLength.php" target="blank">View Output</a>
            </td>
        </tr>

           <tr>
            <td>CHARACTER LENGTH</td>
            <td>Returns the length of a string (in characters)</td>
            <td> 
                <code>
                    SELECT CHARACTER_LENGTH("SQL Tutorial") AS LengthOfString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/CharacterLength.php" target="blank">View Output</a>
            </td>
        </tr>

          <tr>
            <td>CONCAT</td>
            <td>Adds two or more expressions together</td>
            <td> 
                <code>
                    SELECT CONCAT("SQL ", "Tutorial ", "is ", "fun!") AS ConcatenatedString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/Concat.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>CONCAT WS</td>
            <td>	Adds two or more expressions together with a separator</td>
            <td> 
                <code>
                    SELECT CONCAT_WS("-", "SQL", "Tutorial", "is", "fun!") AS ConcatenatedString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/ConcatWS.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>FIELD</td>
            <td>Returns the index position of a value in a list of values</td>
            <td> 
                <code>
                    SELECT FIELD("q", "s", "q", "l");
                </code>
            </td>
            <td>
                <a href="StringFunctions/Field.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>FIND IN SET</td>
            <td>Returns the position of a string within a list of strings</td>
            <td> 
                <code>
                    SELECT FIND_IN_SET("q", "s,q,l");
                </code>
            </td>
            <td>
                <a href="StringFunctions/FindInSet.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>FORMAT</td>
            <td>Formats a number to a format like "#,###,###.##", rounded to a specified number of decimal places</td>
            <td> 
                <code>
                    SELECT FORMAT(250500.5634, 2);
                </code>
            </td>
            <td>
                <a href="StringFunctions/Format.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>INSERT</td>
            <td>Inserts a string within a string at the specified position and for a certain number of characters</td>
            <td> 
                <code>
                    SELECT INSERT("W3Schools.com", 1, 9, "Example");
                </code>
            </td>
            <td>
                <a href="StringFunctions/Insert.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>INSTR</td>
            <td>	Returns the position of the first occurrence of a string in another string</td>
            <td> 
                <code>
                    SELECT INSTR("W3Schools.com", "3") AS MatchPosition;
                </code>
            </td>
            <td>
                <a href="StringFunctions/INSTR.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LCASE</td>
            <td>Converts a string to lower-case</td>
            <td> 
                <code>
                    SELECT LCASE("SQL Tutorial is FUN!");
                </code>
            </td>
            <td>
                <a href="StringFunctions/LCASE.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LEFT</td>
            <td>Extracts a number of characters from a string (starting from left)</td>
            <td> 
                <code>
                    SELECT LEFT("SQL Tutorial", 3) AS ExtractString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/Left.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LENGTH</td>
            <td>Returns the length of a string (in bytes)</td>
            <td> 
                <code>
                   SELECT LENGTH("SQL Tutorial") AS LengthOfString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/Length.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LOCATE</td>
            <td>Returns the position of the first occurrence of a substring in a string</td>
            <td> 
                <code>
                    SELECT LOCATE("3", "W3Schools.com") AS MatchPosition;
                </code>
            </td>
            <td>
                <a href="StringFunctions/Locate.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LOWER</td>
            <td>Converts a string to lower-case</td>
            <td> 
                <code>
                    SELECT LOWER("SQL Tutorial is FUN!");
                </code>
            </td>
            <td>
                <a href="StringFunctions/Lower.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LPAD</td>
            <td>Left-pads a string with another string, to a certain length</td>
            <td> 
                <code>
                    SELECT LPAD("SQL Tutorial", 20, "ABC");
                </code>
            </td>
            <td>
                <a href="StringFunctions/Lpad.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LTRIM</td>
            <td>Removes leading spaces from a stringr</td>
            <td> 
                <code>
                    SELECT LTRIM("     SQL Tutorial") AS LeftTrimmedString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/LTRIM.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>MID</td>
            <td>Extracts a substring from a string (starting at any position)</td>
            <td> 
                <code>
                    SELECT MID("SQL Tutorial", 5, 3) AS ExtractString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/MID.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>POSITION</td>
            <td>Returns the position of a string within a list of strings</td>
            <td> 
                <code>
                    SELECT POSITION("3" IN "W3Schools.com") AS MatchPosition;
                </code>
            </td>
            <td>
                <a href="StringFunctions/Position.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>REPEAT</td>
            <td>Repeats a string a specified number of times</td>
            <td> 
                <code>
                    SELECT REPEAT("SQL Tutorial", 3);
                </code>
            </td>
            <td>
                <a href="StringFunctions/Repeat.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>REPLACE</td>
            <td>Replaces all occurrences of a substring within a string, with a new substring</td>
            <td> 
                <code>
                    SELECT REPLACE("SQL Tutorial", "SQL", "HTML");
                </code>
            </td>
            <td>
                <a href="StringFunctions/Replace.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>REVERSE</td>
            <td>Reverses a string and returns the result</td>
            <td> 
                <code>
                    SELECT REPLACE("SQL Tutorial", "SQL", "HTML");
                </code>
            </td>
            <td>
                <a href="StringFunctions/Reverse.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>RIGHT</td>
            <td>Extracts a number of characters from a string (starting from right)</td>
            <td> 
                <code>
                    SELECT RIGHT("SQL Tutorial is cool", 4) AS ExtractString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/Right.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>RPAD</td>
            <td>Right-pads a string with another string, to a certain length</td>
            <td> 
                <code>
                    SELECT RPAD("SQL Tutorial", 20, "ABC");
                </code>
            </td>
            <td>
                <a href="StringFunctions/RPAD.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>RTRIM</td>
            <td>Removes trailing spaces from a string</td>
            <td> 
                <code>
                    SELECT RTRIM("SQL Tutorial     ") AS RightTrimmedString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/RTRIM.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>SPACE</td>
            <td>Returns a string of the specified number of space characters</td>
            <td> 
                <code>
                    SELECT SPACE(10);
                </code>
            </td>
            <td>
                <a href="StringFunctions/Space.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>STRCMP</td>
            <td>Compares two strings</td>
            <td> 
                <code>
                    SELECT STRCMP("SQL Tutorial", "SQL Tutorial");
                </code>
            </td>
            <td>
                <a href="StringFunctions/STRCMP.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>SUBSTR</td>
            <td>Extracts a substring from a string (starting at any position)</td>
            <td> 
                <code>
                    SELECT SUBSTR("SQL Tutorial", 5, 3) AS ExtractString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/SubSTR.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>SUBSTRING</td>
            <td>Extracts a substring from a string (starting at any position)</td>
            <td> 
                <code>
                    SELECT SUBSTRING("SQL Tutorial", 5, 3) AS ExtractString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/SubString.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>SUBSTRING INDEX</td>
            <td>Returns a substring of a string before a specified number of delimiter occurs</td>
            <td> 
                <code>
                    SELECT SUBSTRING_INDEX("www.w3schools.com", ".", 1);
                </code>
            </td>
            <td>
                <a href="StringFunctions/SubStringIndex.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>TRIM</td>
            <td>Removes leading and trailing spaces from a string</td>
            <td> 
                <code>
                    SELECT TRIM('    SQL Tutorial    ') AS TrimmedString;
                </code>
            </td>
            <td>
                <a href="StringFunctions/Trim.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>UCASE</td>
            <td>Converts a string to upper-case</td>
            <td> 
                <code>
                    SELECT UCASE("SQL Tutorial is FUN!");
                </code>
            </td>
            <td>
                <a href="StringFunctions/Ucase.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>UPPER</td>
            <td>Converts a string to upper-case</td>
            <td> 
                <code>
                    SELECT UPPER("SQL Tutorial is FUN!");
                </code>
            </td>
            <td>
                <a href="StringFunctions/Upper.php" target="blank">View Output</a>
            </td>
        </tr>
    </table>
    <h2>SQL Numeric Functions</h2>
    <table>
        <tr>
            <th>SQL Function</th>
            <th>Description</th>
            <th>Example Code</th>
            <th>Example Output</th>
        </tr>

        <tr>
            <td>ABS</td>
            <td>Return the absolute value of a number</td>
            <td><code>
                SELECT ABS(-243.5);
            </code>  
            </td>
            <td>
                <a href="NumericFunctions/ABS.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>ACOS</td>
            <td>Returns the arc cosine of a number</td>
            <td><code>
                SELECT ACOS(0.25);
            </code></td>
            <td>
                <a href="NumericFunctions/ACOS.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>ASIN</td>
            <td>Returns the arc sine of a number</td>
            <td><code>
                SELECT ASIN(0.25);
            </code></td>
            <td>
                <a href="NumericFunctions/ASIN.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>ATAN</td>
            <td>Returns the arc tangent of one or two numbers</td>
            <td><code>
                SELECT ATAN(2.5);
            </code></td>
            <td>
                <a href="NumericFunctions/ATAN.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>ATAN2</td>
            <td>Returns the arc tangent of two numbers</td>
            <td><code>
                SELECT ATAN2(0.50, 1);
            </code></td>
            <td>
                <a href="NumericFunctions/ATAN2.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>AVG</td>
            <td>Returns the average value of an expression</td>
            <td>
                <code>
                    SELECT AVG(Price) AS AveragePrice FROM Products;
                </code>
            </td>
            <td>
                <a href="NumericFunctions/AVG.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>CEIL</td>
            <td>Returns the smallest integer value that is >= to a number</td>
            <td>
                <code>
                    SELECT CEIL(25.75);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/CEIL.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>CEILING</td>
            <td>Returns the smallest integer value that is >= to a number</td>
            <td>
                <code>
                    SELECT CEILING(25.75);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Ceiling.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>COS</td>
            <td>Returns the cosine of a number</td>
            <td>
                <code>
                    SELECT COS(2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/COS.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>COT</td>
            <td>Returns the cotangent of a number</td>
            <td>
                <code>
                    SELECT COT(6);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/COT.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>COUNT</td>
            <td>Returns the number of records returned by a select query</td>
            <td>
                <code>
                    SELECT COUNT(ProductID) AS NumberOfProducts FROM Products;
                </code>
            </td>
            <td>
                <a href="NumericFunctions/COUNT.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>DEGREES</td>
            <td>Converts a value in radians to degrees</td>
            <td>
                <code>
                    SELECT DEGREES(1.5);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Degrees.php" target="blank">View Output</a>
            </td>
        </tr>

        <tr>
            <td>DIV</td>
            <td>Used for integer division</td>
            <td> 
                <code>
                    SELECT 10 DIV 5;
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Div.php" target="blank">View Output</a>
            </td>
        </tr>

        <tr>
            <td>EXP</td>
            <td>Returns e raised to the power of a specified number</td>
            <td><code>
                SELECT EXP(1);
            </code></td>
            <td>
                <a href="NumericFunctions/Exp.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>FLOOR</td>
            <td>Returns the largest integer value that is <= to a number</td>
            <td>
                <code>
                    SELECT FLOOR(25.75);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Floor.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>GREATEST</td>
            <td>Returns the greatest value of the list of arguments</td>
            <td>
                <code>
                    SELECT GREATEST(3, 12, 34, 8, 25);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Greatest.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LEAST</td>
            <td>Returns the smallest value of the list of arguments</td>
            <td>
                <code>
                    SELECT LEAST(3, 12, 34, 8, 25);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Least.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LN</td>
            <td>Returns the natural logarithm of a number</td>
            <td>
                <code>
                    SELECT LN(2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/LN.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LOG</td>
            <td>Returns the natural logarithm of a number, or the logarithm of a number to a specified base</td>
            <td>
                <code>
                    SELECT LOG(2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Log.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LOG10</td>
            <td>Returns the natural logarithm of a number to base 10</td>
            <td>
                <code>
                    SELECT LOG10(2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Log10.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>LOG2</td>
            <td>Returns the natural logarithm of a number to base 2</td>
            <td>
                <code>
                    SELECT LOG2(6);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Log2.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>MAX</td>
            <td>Returns the maximum value in a set of values</td>
            <td>
                <code>
                    SELECT MAX(Price) AS LargestPrice FROM Products;
                </code>
            </td>
            <td>
                <a href="NumericFunctions/MAX.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>MIN</td>
            <td>Returns the minimum value in a set of values</td>
            <td>
                <code>
                    SELECT MIN(Price) AS SmallestPrice FROM Products;
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Min.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>MOD</td>
            <td>Returns the remainder of a number divided by another number</td>
            <td>
                <code>
                    SELECT MOD(18, 4);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/MOD.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>PI</td>
            <td>Returns the value of PI</td>
            <td>
                <code>
                    SELECT PI();
                </code>
            </td>
            <td>
                <a href="NumericFunctions/PI.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>POW</td>
            <td>Returns the value of a number raised to the power of another number</td>
            <td>
                <code>
                    SELECT POW(4, 2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Pow.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>POWER</td>
            <td>Returns the value of a number raised to the power of another number</td>
            <td>
                <code>
                    SELECT POWER(4, 2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Power.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>RADIANS</td>
            <td>Converts a degree value into radians</td>
            <td>
                <code>
                    SELECT RADIANS(180);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Radians.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>RAND</td>
            <td>Returns a random number</td>
            <td>
                <code>
                    SELECT RAND();
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Rand.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>ROUND</td>
            <td>Rounds a number to a specified number of decimal places</td>
            <td>
                <code>
                    SELECT ROUND(135.375, 2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Round.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>SIGN</td>
            <td>Returns the sign of a number</td>
            <td>
                <code>
                    SELECT SIGN(255.5);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Sign.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>SIN</td>
            <td>Returns the sine of a number</td>
            <td> 
                <code>
                    SELECT SIN(2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/SIN.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>SORT</td>
            <td>Returns the square root of a number</td>
            <td>
                <code>
                    SELECT SQRT(64);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Sort.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>SUM</td>
            <td>Calculates the sum of a set of values</td>
            <td>
                <code>
                    SELECT SUM(Quantity) AS TotalItemsOrdered FROM OrderDetails;
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Sum.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>TAN</td>
            <td>Returns the tangent of a number</td>
            <td>
                <code>
                    SELECT TAN(1.75);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Tan.php" target="blank">View Output</a>
            </td>
        </tr>

         <tr>
            <td>TRUNCATE</td>
            <td>Truncates a number to the specified number of decimal places</td>
            <td>
                <code>
                    SELECT TRUNCATE(135.375, 2);
                </code>
            </td>
            <td>
                <a href="NumericFunctions/Truncate.php" target="blank">View Output</a>
            </td>
        </tr>

       

    </table>
    <h2>SQL Date Functions</h2>
    <table>
         <tr>
            <th>SQL Function</th>
            <th>Description</th>
            <th>Example Code</th>
            <th>Example Output</th>
        </tr>
        <tr>
            <td>ADDDATE</td>
            <td>Adds a time/date interval to a date and then returns the date</td>
            <td>
                <code>
                    SELECT ADDDATE("2017-06-15", INTERVAL 10 DAY);
                </code>
            </td>
            <td>
                <a href="DateFunctions/ADDDate.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>ADDTIME</td>
            <td>Adds a time interval to a time/datetime and then returns the time/datetime</td>
            <td>
                <code>
                    SELECT ADDTIME("2017-06-15 09:34:21", "2");
                </code>
            </td>
            <td>
                <a href="DateFunctions/ADDTime.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CURDATE</td>
            <td>
                Returns the current date
            </td>
            <td>
                <code>
                    SELECT CURDATE();
                </code>
            </td>
            <td>
                <a href="DateFunctions/CURDate.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CURRENT DATE</td>
            <td>
                Returns the current date
            </td>
            <td>
                <code>
                    SELECT CURRENT_DATE();
                </code>
            </td>
            <td>
                <a href="DateFunctions/CurrentDate.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CURRENT TIME</td>
            <td>Returns the current time</td>
            <td><code>
            SELECT CURRENT_TIME();
            </code></td>
            <td>
                <a href="DateFunctions/CurrentTime.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CURRENT TIMESTAMP</td>
            <td>Returns the current date and time</td>
            <td><code>
            SELECT CURRENT_TIMESTAMP();
            </code></td>
            <td>
                <a href="DateFunctions/CurrentTimeStamp.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CURTIME</td>
            <td>Returns the current time</td>
            <td><code>
            SELECT CURTIME();
            </code></td>
            <td>
                <a href="DateFunctions/CurTime.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DATE</td>
            <td>Extracts the date part from a datetime expression</td>
            <td><code>
            SELECT DATE("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/Date.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DATEDIFF</td>
            <td>
                Returns the number of days between two date values
            </td>
            <td><code>
            SELECT DATEDIFF("2017-06-25", "2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/DateDiff.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DATE ADD</td>
            <td>Adds a time/date interval to a date and then returns the date</td>
            <td><code>
            SELECT DATE_ADD("2017-06-15", INTERVAL 10 DAY);
            </code></td>
            <td>
                <a href="DateFunctions/DateADD.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DATE FORMAT</td>
            <td>Formats a date</td>
            <td><code>
        SELECT DATE_FORMAT("2017-06-15", "%Y");
            </code></td>
            <td>
                <a href="DateFunctions/DateFormat.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DATE SUB</td>
            <td>Subtracts a time/date interval from a date and then returns the date</td>
            <td><code>
        SELECT DATE_SUB("2017-06-15", INTERVAL 10 DAY);
            </code></td>
            <td>
                <a href="DateFunctions/DateSub.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DAY</td>
            <td>Returns the day of the month for a given date</td>
            <td><code>
            SELECT DAY("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/Day.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DAYNAME</td>
            <td>	Returns the weekday name for a given date</td>
            <td><code>
            SELECT DAYNAME("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/DayName.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DAYOFMONTH</td>
            <td>Returns the day of the month for a given date</td>
            <td><code>
            SELECT DAYOFMONTH("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/DayOfMonth.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DAYOFWEEK</td>
            <td>Returns the weekday index for a given date</td>
            <td><code>
            SELECT DAYOFWEEK("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/DayOfWeek.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DAYOFYEAR</td>
            <td>Returns the day of the year for a given date</td>
            <td><code>
                SELECT DAYOFYEAR("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/DayOfYear.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>EXTRACT</td>
            <td>Extracts a part from a given date</td>
            <td><code>
            SELECT EXTRACT(MONTH FROM "2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/Extract.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>FROM DAYS</td>
            <td>
                Returns a date from a numeric datevalue
            </td>
            <td><code>
                SELECT FROM_DAYS(685467);
            </code></td>
            <td>
                <a href="DateFunctions/FromDays.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>HOUR</td>
            <td>Returns the hour part for a given date</td>
            <td><code>
            SELECT HOUR("2017-06-20 09:34:00");
            </code></td>
            <td>
                <a href="DateFunctions/Hour.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>LAST DAY</td>
            <td>Extracts the last day of the month for a given date</td>
            <td><code>
            SELECT LAST_DAY("2017-06-20");
            </code></td>
            <td>
                <a href="DateFunctions/LastDay.php" target="blank">View Output</a>
            </td>
        </tr>
         <tr>
            <td>LOCALTIME</td>
            <td>Returns the current date and time</td>
            <td><code>
            SELECT LOCALTIME();
            </code></td>
            <td>
                <a href="DateFunctions/LocalTime.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>LOCALTIMESTAMP</td>
            <td>Returns the current date and time</td>
            <td><code>
            SELECT LOCALTIMESTAMP();
            </code></td>
            <td>
                <a href="DateFunctions/LocalTimeStamp.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>MAKEDATE</td>
            <td>Creates and returns a date based on a year and a number of days value</td>
            <td><code>
            SELECT MAKEDATE(2017, 3);
            </code></td>
            <td>
                <a href="DateFunctions/MakeDate.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>MAKETIME</td>
            <td>Creates and returns a time based on an hour, minute, and second value</td>
            <td><code>
            SELECT MAKETIME(11, 35, 4);
            </code></td>
            <td>
                <a href="DateFunctions/MakeTime.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>MICROSECOND</td>
            <td>Returns the microsecond part of a time/datetime</td>
            <td><code>
            SELECT MICROSECOND("2017-06-20 09:34:00.000023");
            </code></td>
            <td>
                <a href="DateFunctions/Microsecond.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>MINUTE</td>
            <td>Returns the minute part of a time/datetime</td>
            <td><code>
            SELECT MINUTE("2017-06-20 09:34:00");
            </code></td>
            <td>
                <a href="DateFunctions/Minute.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>MONTH</td>
            <td>Returns the month part for a given date</td>
            <td><code>
            SELECT MONTH("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/Month.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>MONTHNAME</td>
            <td>Returns the name of the month for a given date</td>
            <td><code>
            SELECT MONTHNAME("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/MonthName.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>NOW</td>
            <td>Returns the current date and time</td>
            <td><code>
            SELECT NOW();
            </code></td>
            <td>
                <a href="DateFunctions/Now.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>PERIOD ADD</td>
            <td>Adds a specified number of months to a period</td>
            <td><code>
            SELECT PERIOD_ADD(201703, 5);
            </code></td>
            <td>
                <a href="DateFunctions/PeriodADD.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>QUARTER</td>
            <td>Returns the difference between two periods</td>
            <td><code>
            SELECT PERIOD_DIFF(201710, 201703);
            </code></td>
            <td>
                <a href="DateFunctions/Quarter.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>SECOND</td>
            <td>Returns the quarter of the year for a given date value</td>
            <td><code>
            SELECT QUARTER("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/Second.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>SEC TO TIME</td>
            <td>Returns the seconds part of a time/datetime</td>
            <td><code>
            SELECT SECOND("2017-06-20 09:34:00.000023");
            </code></td>
            <td>
                <a href="DateFunctions/SecToTime.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>STR TO DATE</td>
            <td>Returns a date based on a string and a format</td>
            <td><code>
            SELECT STR_TO_DATE("August 10 2017", "%M %d %Y");
            </code></td>
            <td>
                <a href="DateFunctions/STRToDate.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>SUBDATE</td>
            <td>Subtracts a time/date interval from a date and then returns the date</td>
            <td><code>
            SELECT SUBDATE("2017-06-15", INTERVAL 10 DAY);
            </code></td>
            <td>
                <a href="DateFunctions/SubDate.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>SUBTIME</td>
            <td>Subtracts a time interval from a datetime and then returns the time/datetime</td>
            <td><code>
            SELECT SUBTIME("2017-06-15 10:24:21.000004", "5.000001");
            </code></td>
            <td>
                <a href="DateFunctions/SubTime.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>SYSDATE</td>
            <td>Returns the current date and time</td>
            <td><code>
            SELECT SYSDATE();
            </code></td>
            <td>
                <a href="DateFunctions/SysDate.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>TIME</td>
            <td>Extracts the time part from a given time/datetime</td>
            <td><code>
            SELECT TIME("19:30:10");
            </code></td>
            <td>
                <a href="DateFunctions/Time.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>TIME FORMAT</td>
            <td>Formats a time by a specified format</td>
            <td><code>
        SELECT TIME_FORMAT("19:30:10", "%H %i %s");
            </code></td>
            <td>
                <a href="DateFunctions/TimeFormat.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>TIME TO SEC</td>
            <td>Converts a time value into seconds</td>
            <td><code>
        SELECT TIME_TO_SEC("19:30:10");
            </code></td>
            <td>
                <a href="DateFunctions/TimeToSec.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>TIMEDIFF</td>
            <td>Returns the difference between two time/datetime expressions</td>
            <td><code>
            SELECT TIMEDIFF("13:10:11", "13:10:10");
            </code></td>
            <td>
                <a href="DateFunctions/TimeDiff.php" target="blank">View Output</a>
            </td>
        </tr>

          <tr>
            <td>TIMESTAMP</td>
            <td>Returns a datetime value based on a date or datetime value</td>
            <td><code>
            SELECT TIMESTAMP("2017-07-23",  "13:10:11");
            </code></td>
            <td>
                <a href="DateFunctions/TimeStamp.php" target="blank">View Output</a>
            </td>
        </tr>

        <tr>
            <td>TO DAYS</td>
            <td>Returns the number of days between a date and date "0000-00-00"</td>
            <td><code>
            SELECT TO_DAYS("2017-06-20");
            </code></td>
            <td>
                <a href="DateFunctions/ToDays.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>WEEK</td>
            <td>Returns the week number for a given date</td>
            <td><code>
            SELECT WEEK("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/Week.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>WEEKDAY</td>
            <td>Returns the weekday number for a given date</td>
            <td><code>
            SELECT WEEKDAY("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/WeekDay.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>WEEKOFYEAR</td>
            <td>Returns the week number for a given date</td>
            <td><code>
            SELECT WEEKOFYEAR("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/WeekOfYear.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>YEAR</td>
            <td>Returns the year part for a given date</td>
            <td><code>
            SELECT YEAR("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions/Year.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>YEARWEEK</td>
            <td>Returns the year and week number for a given date</td>
            <td><code>
            SELECT YEARWEEK("2017-06-15");
            </code></td>
            <td>
                <a href="DateFunctions//Yearweek.php" target="blank">View Output</a>
            </td>
        </tr>
       
    </table>
    <h2>SQL Advance Funtions</h2>
    <table>
       <tr>
            <th>SQL Function</th>
            <th>Description</th>
            <th>Example Code</th>
            <th>Example Output</th>
        </tr>
        <tr>
            <td>BIN</td>
            <td>Returns a binary representation of a number</td>
            <td><code>
                SELECT BIN(15);
            </code>
            </td>
            <td>
                <a href="AdvanceFunctions/BIN.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>BINARY</td>
            <td>Converts a value to a binary string</td>
            <td>
            <code>
                SELECT BINARY "W3Schools.com";
            </code></td>
            <td>
                <a href="AdvanceFunctions/Binary.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CASE</td>
            <td>Goes through conditions and return a value when the first condition is met</td>
            <td><code>
                SELECT OrderID, Quantity,
                CASE
                   WHEN Quantity > 30 THEN "The quantity is greater than 30"
                     WHEN Quantity = 30 THEN "The quantity is 30"
                     ELSE "The quantity is under 30"
                END
                FROM OrderDetails;
            </code></td>
            <td>
                <a href="AdvanceFunctions/Case.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CAST</td>
            <td>Converts a value (of any type) into a specified datatype</td>
            <td><code>
                SELECT CAST("2017-08-29" AS DATE);
            </code></td>
            <td>
                <a href="AdvanceFunctions/Cast.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>COALESCE</td>
            <td>Returns the first non-null value in a list</td>
            <td><code>
                SELECT COALESCE(NULL, NULL, NULL, 'W3Schools.com', NULL, 'Example.com');
            </code></td>
            <td>
                <a href="AdvanceFunctions/Coalesce.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CONNECTION ID</td>
            <td>Returns the unique connection ID for the current connection</td>
            <td><code>
                SELECT CONNECTION_ID();
            </code></td>
            <td>
                <a href="AdvanceFunctions/ConnectionID.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CONV</td>
            <td>Converts a number from one numeric base system to another</td>
            <td><code>
                SELECT CONV(15, 10, 2);
            </code></td>
            <td>
                <a href="AdvanceFunctions/Conv.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CONVERT</td>
            <td>Converts a value into the specified datatype or character set</td>
            <td><code>
                SELECT CONVERT("2017-08-29", DATE);
            </code></td>
            <td>
                <a href="AdvanceFunctions/Convert.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>CURRENT USER</td>
            <td>Returns the user name and host name for the MySQL account that the server used to authenticate the current client</td>
            <td><code>
                SELECT CURRENT_USER();
            </code></td>
            <td>
                <a href="AdvanceFunctions/CurrentUser.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>DATABASE</td>
            <td>	Returns the name of the current database</td>
            <td><code>
                SELECT DATABASE();
            </code></td>
            <td>
                <a href="AdvanceFunctions/DataBase.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>IF</td>
            <td>Returns a value if a condition is TRUE, or another value if a condition is FALSE</td>
            <td><code>
                 SELECT IF(500&lt;1000, "YES", "NO");
            </code></td>
            <td>
                <a href="AdvanceFunctions/IF.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>IFNULL</td>
            <td>Return a specified value if the expression is NULL, otherwise return the expression</td>
            <td><code>
                SELECT IFNULL(NULL, "W3Schools.com");
            </code></td>
            <td>
                <a href="AdvanceFunctions/IFNULL.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>ISNULL</td>
            <td>Returns 1 or 0 depending on whether an expression is NULL</td>
            <td><code>
                SELECT ISNULL(NULL);
            </code></td>
            <td>
                <a href="AdvanceFunctions/ISNULL.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>LAST INSERT ID</td>
            <td>Returns the AUTO_INCREMENT id of the last row that has been inserted or updated in a table</td>
            <td><code>
                SELECT LAST_INSERT_ID();
            </code></td>
            <td>
                <a href="AdvanceFunctions/LastInsertID.php" target="blank">View Output</a>
            </td>
        </tr>
            <tr>
            <td>NULLIF</td>
            <td>Compares two expressions and returns NULL if they are equal. Otherwise, the first expression is returned</td>
            <td>
                <code>
                    SELECT NULLIF(25, 25);
                </code>
            </td>
            <td>
                <a href="AdvanceFunctions/NULLIF.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>SESSION USER</td>
            <td>Returns the current MySQL user name and host name</td>
            <td><code>
                SELECT SESSION_USER();
            </code></td>
            <td>
                <a href="AdvanceFunctions/SessionUser.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>SYSTEM USER</td>
            <td>Returns the current MySQL user name and host name</td>
            <td><code>
                SELECT SYSTEM_USER();
            </code></td>
            <td>
                <a href="AdvanceFunctions/SystemUser.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>USER</td>
            <td>Returns the current MySQL user name and host name</td>
            <td><code>
                SELECT USER();
            </code></td>
            <td>
                <a href="AdvanceFunctions/User.php" target="blank">View Output</a>
            </td>
        </tr>
        <tr>
            <td>VERSION</td>
            <td>Returns the current version of the MySQL database</td>
            <td><code>
            SELECT VERSION();
            </code></td>
            <td>
                <a href="AdvanceFunctions/Version.php" target="blank">View Output</a>
            </td>
        </tr>
    </table>
</body>
</html>