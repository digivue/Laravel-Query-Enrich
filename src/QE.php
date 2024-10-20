<?php

namespace digivue\LaravelQueryEnrich;

use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Query\Builder as QueryBuilder;

/**
 * @method static Column                                c(string $name)                                                                 Retrieves a reference to a specific database column.
 * @method static Raw                                   raw(string $sql, array $bindings = [])                                          Represents a raw SQL expression with bindings.
 * @method static Advanced\CaseExpression\CaseWhenChain case()                                                                          Creates a case expression for handling conditional logic.
 * @method static Advanced\Coalesce                     coalesce(...$parameters)                                                        Returns the first non-null value in a list.
 * @method static Advanced\Exists                       exists(QueryBuilder|EloquentBuilder $query)                                     Checks if a subquery returns any results using the EXISTS condition.
 * @method static Advanced\_If                          if (DBFunction $condition, $valueIfTrue, $valueIfFalse)                         Implements an IF condition to introduce branching.
 * @method static Advanced\IsNull                       isNull($parameter)                                                              Checks if a value is NULL.
 * @method static Condition\Condition                   condition(mixed $parameter1, string $operator = null, mixed $parameter2 = null) Creates a condition.
 * @method static Operator\_And                         and (...$parameters)                                                            Combines multiple conditions with logical AND .
 * @method static Operator\_Or                          or (...$parameters)                                                             Combines multiple conditions with logical OR .
 * @method static Operator\Not                          not($parameter)                                                                 Negates a condition with logical NOT.
 * @method static Date\AddDate                          addDate($subject, $value, Date\Unit $interval = Date\Unit::DAY)                 Adds a specific value to a date/datetime.
 * @method static Date\CurrentDate                      currentDate()                                                                   Retrieves the current date.
 * @method static Date\CurrentTime                      currentTime()                                                                   Retrieves the current time.
 * @method static Date\Date                             date($parameter)                                                                Extracts the date part from a datetime expression.
 * @method static Date\DateDiff                         dateDiff($date1, $date2)                                                        Returns the number of days between two date values.
 * @method static Date\DayOfWeek                        dayOfWeek($parameter)                                                           Returns the weekday index for a given date/datetime.
 * @method static Date\Hour                             hour($parameter)                                                                Returns the hour part for a given time/datetime.
 * @method static Date\Minute                           minute($parameter)                                                              Returns the minute part for a given time/datetime.
 * @method static Date\Month                            month($parameter)                                                               Returns the month part for a given date/datetime.
 * @method static Date\MonthName                        monthName($parameter)                                                           Returns the name of the month for a given date/datetime.
 * @method static Date\Now                              now()                                                                           Returns the current date and time.
 * @method static Date\Second                           second($parameter)                                                              Returns the seconds part of a time/datetime.
 * @method static Date\SubDate                          subDate($subject, $value, Date\Unit $interval = Date\Unit::DAY)                 Subtracts a time/date interval from a date and then returns the date.
 * @method static Date\Time                             time($parameter)                                                                Extracts the time part from a given time/datetime.
 * @method static Date\Year                             year($parameter)                                                                Returns the week number for a given date/datetime.
 * @method static Numeric\Abs                           abs($parameter)                                                                 Returns the absolute value of a number.
 * @method static Numeric\Acos                          acos($parameter)                                                                Returns the arc cosine of a number.
 * @method static Numeric\Add                           add(...$parameters)                                                             Adds multiple numeric parameters.
 * @method static Numeric\Asin                          asin($parameter)                                                                Returns the arc sine of a number.
 * @method static Numeric\Atan                          atan($parameter)                                                                Returns the arc tangent of a number.
 * @method static Numeric\Atan2                         atan2($y, $x)                                                                   Returns the arc tangent of two numbers.
 * @method static Numeric\Avg                           avg($parameter)                                                                 Returns the average value of an expression.
 * @method static Numeric\Ceil                          ceil($parameter)                                                                Returns the smallest integer value that is >= to a number.
 * @method static Numeric\Cos                           cos($parameter)                                                                 Returns the cosine of a number.
 * @method static Numeric\Cot                           cot($parameter)                                                                 Returns the cotangent of a number.
 * @method static Numeric\Count                         count($parameter = '*')                                                         Returns the number of records returned by a select query.
 * @method static Numeric\DegreesToRadian               degreesToRadian($parameter)                                                     Converts a degree value into radians.
 * @method static Numeric\Divide                        divide(...$parameters)                                                          Divide the first numeric parameter by subsequent numeric parameters.
 * @method static Numeric\Exp                           exp($parameter)                                                                 Returns e raised to the power of a specified number.
 * @method static Numeric\Floor                         floor($parameter)                                                               Returns the largest integer value that is <= to a number.
 * @method static Numeric\Greatest                      greatest(...$parameters)                                                        Returns the greatest value of the list of arguments.
 * @method static Numeric\Least                         least(...$parameters)                                                           Returns the smallest value of the list of arguments.
 * @method static Numeric\Ln                            ln($parameter)                                                                  Returns the natural logarithm of a number.
 * @method static Numeric\Log                           log($number, $base = 2)                                                         Returns the logarithm of a number
 * @method static Numeric\Max                           max($parameter)                                                                 Returns the maximum value in a set of values.
 * @method static Numeric\Min                           min($parameter)                                                                 Returns the minimum value in a set of values.
 * @method static Numeric\Mod                           mod($x, $y)                                                                     Returns the remainder of a number divided by another number.
 * @method static Numeric\Multiply                      multiply(...$parameters)                                                        Multiply multiple numeric parameters.
 * @method static Numeric\PI                            pi()                                                                            Returns the value of PI.
 * @method static Numeric\Pow                           pow($x, $y)                                                                     Returns the value of a number raised to the power of another number.
 * @method static Numeric\RadianToDegrees               radianToDegrees($parameter)                                                     Converts a value in radians to degrees.
 * @method static Numeric\Rand                          rand($seed = null)                                                              Returns a random number.
 * @method static Numeric\Round                         round($parameter, $decimals = 0)                                                Rounds a number to a specified number of decimal places.
 * @method static Numeric\Sign                          sign($parameter)                                                                Returns the sign of a number.
 * @method static Numeric\Sin                           sin($parameter)                                                                 Returns the sine of a number.
 * @method static Numeric\Sqrt                          sqrt($parameter)                                                                Returns the square root of a number.
 * @method static Numeric\Subtract                      subtract(...$parameters)                                                        Subtracts multiple numeric parameters.
 * @method static Numeric\Sum                           sum($parameter)                                                                 Calculates the sum of a set of values.
 * @method static Numeric\Tan                           tan($parameter)                                                                 Returns the tangent of a number.
 * @method static String\Concat                         concat(...$parameters)                                                          Adds two or more expressions together.
 * @method static String\ConcatWS                       concatWS($separator, ...$parameters)                                            Adds two or more expressions together with a separator.
 * @method static String\contains                       contains($haystack, $needle)                                                    Determines if a given string contains a given substring.
 * @method static String\EndsWith                       endsWith($haystack, $needle)                                                    Determines if a given string ends with a given substring.
 * @method static String\Left                           left($string, $numberOfChars)                                                   Extracts a number of characters from a string (starting from left).
 * @method static String\Length                         length($parameter)                                                              Returns the length of a string.
 * @method static String\Lower                          lower($parameter)                                                               Converts a string to lower-case
 * @method static String\Ltrim                          ltrim($parameter)                                                               Removes leading spaces from a string.
 * @method static String\MD5                            md5($parameter)                                                                 Calculates the MD5 hash for a given parameter.
 * @method static String\PadLeft                        padLeft($string, $length, $pad = ' ')                                           Left-pads a string with another string, to a certain length.
 * @method static String\PadRight                       padRight($string, $length, $pad = ' ')                                          Right-pads a string with another string, to a certain length.
 * @method static String\Position                       position($subString, $string)                                                   Finds the position of a substring within a string.
 * @method static String\Repeat                         repeat($parameter, $number)                                                     Repeats a string a specified number of times.
 * @method static String\Replace                        replace($string, $substring, $newString)                                        Replaces occurrences of a substring with a new string.
 * @method static String\Reverse                        reverse($parameter)                                                             Reverses the characters of a string.
 * @method static String\Right                          right($string, $numberOfChars)                                                  Extracts a number of characters from a string (starting from right).
 * @method static String\Rtrim                          rtrim($parameter)                                                               Removes trailing spaces from a string.
 * @method static String\Space                          space($parameter)                                                               Returns a string consisting of a specified number of spaces.
 * @method static String\StartsWith                     startsWith($haystack, $needle)                                                  Determines if a given string starts with a given substring.
 * @method static String\Substr                         substr($string, $start, $length = null)                                         Extracts a substring from a string starting at a specified position with optional length.
 * @method static String\Trim                           trim($parameter)                                                                Removes leading and trailing spaces from a string.
 * @method static String\Upper                          upper($parameter)                                                               Converts a string to upper-case.
 */
class QE
{
    const DATABASE_FUNCTIONS = [
        'c'   => 'digivue\LaravelQueryEnrich\Column',
        'raw' => 'digivue\LaravelQueryEnrich\Raw',

        'case'     => 'digivue\LaravelQueryEnrich\Advanced\CaseExpression\CaseWhenChain',
        'if'       => 'digivue\LaravelQueryEnrich\Advanced\_If',
        'coalesce' => 'digivue\LaravelQueryEnrich\Advanced\Coalesce',
        'isNull'   => 'digivue\LaravelQueryEnrich\Advanced\IsNull',
        'exists'   => 'digivue\LaravelQueryEnrich\Advanced\Exists',

        'and' => 'digivue\LaravelQueryEnrich\Operator\_And',
        'or'  => 'digivue\LaravelQueryEnrich\Operator\_Or',
        'not' => 'digivue\LaravelQueryEnrich\Operator\Not',

        'condition' => 'digivue\LaravelQueryEnrich\Condition\Condition',

        'addDate'     => 'digivue\LaravelQueryEnrich\Date\AddDate',
        'currentDate' => 'digivue\LaravelQueryEnrich\Date\CurrentDate',
        'currentTime' => 'digivue\LaravelQueryEnrich\Date\CurrentTime',
        'date'        => 'digivue\LaravelQueryEnrich\Date\Date',
        'dateDiff'    => 'digivue\LaravelQueryEnrich\Date\DateDiff',
        'dayOfWeek'   => 'digivue\LaravelQueryEnrich\Date\DayOfWeek',
        'hour'        => 'digivue\LaravelQueryEnrich\Date\Hour',
        'minute'      => 'digivue\LaravelQueryEnrich\Date\Minute',
        'month'       => 'digivue\LaravelQueryEnrich\Date\Month',
        'monthName'   => 'digivue\LaravelQueryEnrich\Date\MonthName',
        'now'         => 'digivue\LaravelQueryEnrich\Date\Now',
        'second'      => 'digivue\LaravelQueryEnrich\Date\Second',
        'subDate'     => 'digivue\LaravelQueryEnrich\Date\SubDate',
        'time'        => 'digivue\LaravelQueryEnrich\Date\Time',
        'year'        => 'digivue\LaravelQueryEnrich\Date\Year',

        'abs'             => 'digivue\LaravelQueryEnrich\Numeric\Abs',
        'acos'            => 'digivue\LaravelQueryEnrich\Numeric\Acos',
        'add'             => 'digivue\LaravelQueryEnrich\Numeric\Add',
        'asin'            => 'digivue\LaravelQueryEnrich\Numeric\Asin',
        'atan'            => 'digivue\LaravelQueryEnrich\Numeric\Atan',
        'atan2'           => 'digivue\LaravelQueryEnrich\Numeric\Atan2',
        'avg'             => 'digivue\LaravelQueryEnrich\Numeric\Avg',
        'ceil'            => 'digivue\LaravelQueryEnrich\Numeric\Ceil',
        'cos'             => 'digivue\LaravelQueryEnrich\Numeric\Cos',
        'cot'             => 'digivue\LaravelQueryEnrich\Numeric\Cot',
        'count'           => 'digivue\LaravelQueryEnrich\Numeric\Count',
        'radianToDegrees' => 'digivue\LaravelQueryEnrich\Numeric\RadianToDegrees',
        'divide'          => 'digivue\LaravelQueryEnrich\Numeric\Divide',
        'exp'             => 'digivue\LaravelQueryEnrich\Numeric\Exp',
        'floor'           => 'digivue\LaravelQueryEnrich\Numeric\Floor',
        'greatest'        => 'digivue\LaravelQueryEnrich\Numeric\Greatest',
        'least'           => 'digivue\LaravelQueryEnrich\Numeric\Least',
        'ln'              => 'digivue\LaravelQueryEnrich\Numeric\Ln',
        'log'             => 'digivue\LaravelQueryEnrich\Numeric\Log',
        'max'             => 'digivue\LaravelQueryEnrich\Numeric\Max',
        'min'             => 'digivue\LaravelQueryEnrich\Numeric\Min',
        'mod'             => 'digivue\LaravelQueryEnrich\Numeric\Mod',
        'multiply'        => 'digivue\LaravelQueryEnrich\Numeric\Multiply',
        'pi'              => 'digivue\LaravelQueryEnrich\Numeric\PI',
        'pow'             => 'digivue\LaravelQueryEnrich\Numeric\Pow',
        'degreesToRadian' => 'digivue\LaravelQueryEnrich\Numeric\DegreesToRadian',
        'rand'            => 'digivue\LaravelQueryEnrich\Numeric\Rand',
        'round'           => 'digivue\LaravelQueryEnrich\Numeric\Round',
        'sign'            => 'digivue\LaravelQueryEnrich\Numeric\Sign',
        'sin'             => 'digivue\LaravelQueryEnrich\Numeric\Sin',
        'sqrt'            => 'digivue\LaravelQueryEnrich\Numeric\Sqrt',
        'subtract'        => 'digivue\LaravelQueryEnrich\Numeric\Subtract',
        'sum'             => 'digivue\LaravelQueryEnrich\Numeric\Sum',
        'tan'             => 'digivue\LaravelQueryEnrich\Numeric\Tan',

        'concat'     => 'digivue\LaravelQueryEnrich\String\Concat',
        'concatWS'   => 'digivue\LaravelQueryEnrich\String\ConcatWS',
        'contains'   => 'digivue\LaravelQueryEnrich\String\Contains',
        'endsWith'   => 'digivue\LaravelQueryEnrich\String\EndsWith',
        'left'       => 'digivue\LaravelQueryEnrich\String\Left',
        'length'     => 'digivue\LaravelQueryEnrich\String\Length',
        'lower'      => 'digivue\LaravelQueryEnrich\String\Lower',
        'ltrim'      => 'digivue\LaravelQueryEnrich\String\Ltrim',
        'md5'        => 'digivue\LaravelQueryEnrich\String\MD5',
        'padLeft'    => 'digivue\LaravelQueryEnrich\String\PadLeft',
        'padRight'   => 'digivue\LaravelQueryEnrich\String\PadRight',
        'position'   => 'digivue\LaravelQueryEnrich\String\Position',
        'repeat'     => 'digivue\LaravelQueryEnrich\String\Repeat',
        'replace'    => 'digivue\LaravelQueryEnrich\String\Replace',
        'reverse'    => 'digivue\LaravelQueryEnrich\String\Reverse',
        'right'      => 'digivue\LaravelQueryEnrich\String\Right',
        'rtrim'      => 'digivue\LaravelQueryEnrich\String\Rtrim',
        'space'      => 'digivue\LaravelQueryEnrich\String\Space',
        'startsWith' => 'digivue\LaravelQueryEnrich\String\StartsWith',
        'substr'     => 'digivue\LaravelQueryEnrich\String\Substr',
        'trim'       => 'digivue\LaravelQueryEnrich\String\Trim',
        'upper'      => 'digivue\LaravelQueryEnrich\String\Upper',
    ];

    public static function __callStatic(string $name, array $arguments)
    {
        $class = self::DATABASE_FUNCTIONS[$name];

        return new $class(...$arguments);
    }
}
