<?php

namespace Example\SymfonyPackage;

/**
 * ExampleService provides simple greeting functionality.
 *
 * This is a sample service class to demonstrate how to structure
 * and test a Symfony package using modern PHP standards.
 */
class ExampleService
{
    /**
     * Returns a greeting for the given name.
     *
     * @param string $name The name to greet
     * @return string The greeting message
     */
    public function greet(string $name): string
    {
        return "Hello, $name!";
    }

    /**
     * Returns a farewell for the given name.
     *
     * @param string $name The name to bid farewell
     * @return string The farewell message
     */
    public function farewell(string $name): string
    {
        return "Goodbye, $name!";
    }

    /**
     * Returns a personalized message.
     *
     * @param string $name The name to personalize
     * @param string $message The message to use
     * @return string The personalized message
     */
    public function customMessage(string $name, string $message): string
    {
        return "$message, $name!";
    }

    /**
     * Returns the sum of an array of numbers.
     *
     * @param int[] $numbers
     * @return int
     */
    public function sum(array $numbers): int
    {
        return array_sum($numbers);
    }

    /**
     * Returns the reversed string.
     *
     * @param string $input
     * @return string
     */
    public function reverseString(string $input): string
    {
        return strrev($input);
    }

    /**
     * Returns true if the string is a palindrome (case-insensitive).
     *
     * @param string $input
     * @return bool
     */
    public function isPalindrome(string $input): bool
    {
        $normalized = strtolower(preg_replace('/\W/', '', $input));
        return $normalized === strrev($normalized);
    }

    /**
     * Returns the maximum value from an array of numbers, or null if empty.
     *
     * @param int[] $numbers
     * @return int|null
     */
    public function maxOrNull(array $numbers): ?int
    {
        return $numbers ? max($numbers) : null;
    }

    /**
     * Returns the factorial of a non-negative integer.
     *
     * @param int $n
     * @return int
     * @throws \InvalidArgumentException if $n is negative
     */
    public function factorial(int $n): int
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Negative numbers are not allowed.');
        }
        return $n === 0 ? 1 : $n * $this->factorial($n - 1);
    }

    /**
     * Returns the first non-repeating character in a string, or null if none exists.
     *
     * @param string $input
     * @return string|null
     */
    public function firstUniqueChar(string $input): ?string
    {
        $chars = [];
        $inputLength = mb_strlen($input);
        for ($i = 0; $i < $inputLength; $i++) {
            $char = mb_substr($input, $i, 1);
            $chars[$char] = ($chars[$char] ?? 0) + 1;
        }
        foreach (array_keys($chars) as $char) {
            if ($chars[$char] === 1) {
                return $char;
            }
        }
        return null;
    }

    /**
     * Safely divides two numbers, returns null if division by zero.
     *
     * @param float $a
     * @param float $b
     * @return float|null
     */
    public function safeDivide(float $a, float $b): ?float
    {
        return $b == 0.0 ? null : $a / $b;
    }

    /**
     * Returns an array of all prime numbers up to and including $n.
     *
     * @param int $n
     * @return int[]
     */
    public function primesUpTo(int $n): array
    {
        if ($n < 2) return [];
        $sieve = array_fill(2, $n - 1, true);
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($sieve[$i]) {
                for ($j = $i * $i; $j <= $n; $j += $i) {
                    $sieve[$j] = false;
                }
            }
        }
        return array_keys(array_filter($sieve));
    }
}
