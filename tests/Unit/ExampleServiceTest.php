<?php

use Example\SymfonyPackage\ExampleService;

/**
 * ExampleService Test Suite
 *
 * Demonstrates different ways to test a service using Pest.
 */
describe('ExampleService', function () {
    it('greets the user by name', function () {
        $service = new ExampleService();
        expect($service->greet('World'))->toBe('Hello, World!');
    });

    it('bids farewell to the user', function () {
        $service = new ExampleService();
        expect($service->farewell('Alice'))->toBe('Goodbye, Alice!');
    });

    it('returns a custom message', function () {
        $service = new ExampleService();
        expect($service->customMessage('Bob', 'Welcome'))->toBe('Welcome, Bob!');
    });

    // Data-driven test example
    it('greets multiple users', function (string $name, string $expected) {
        $service = new ExampleService();
        expect($service->greet($name))->toBe($expected);
    })->with([
        ['Jane', 'Hello, Jane!'],
        ['Rumen', 'Hello, Rumen!'],
        ['Symfony', 'Hello, Symfony!'],
    ]);

    // Using Pest's higher-order expectations
    it('greets with a string containing Hello', function () {
        $service = new ExampleService();
        expect($service->greet('Test'))->toContain('Hello');
    });

    it('returns the sum of an array of numbers', function () {
        $service = new ExampleService();
        expect($service->sum([1, 2, 3, 4]))->toBe(10);
        expect($service->sum([]))->toBe(0);
    });

    it('reverses a string', function () {
        $service = new ExampleService();
        expect($service->reverseString('Symfony'))->toBe('ynofmyS');
        expect($service->reverseString(''))->toBe('');
    });

    it('detects palindromes (case-insensitive)', function () {
        $service = new ExampleService();
        expect($service->isPalindrome('Racecar'))->toBeTrue();
        expect($service->isPalindrome('A man, a plan, a canal, Panama'))->toBeTrue();
        expect($service->isPalindrome('Symfony'))->toBeFalse();
    });

    it('returns the max value or null for empty array', function () {
        $service = new ExampleService();
        expect($service->maxOrNull([1, 5, 3, 9, 2]))->toBe(9);
        expect($service->maxOrNull([]))->toBeNull();
    });

    it('calculates factorial for non-negative integers', function () {
        $service = new ExampleService();
        expect($service->factorial(0))->toBe(1);
        expect($service->factorial(1))->toBe(1);
        expect($service->factorial(5))->toBe(120);
    });

    it('throws exception for negative factorial input', function () {
        $service = new ExampleService();
        expect(fn () => $service->factorial(-1))->toThrow(InvalidArgumentException::class);
    });

    it('finds the first unique character in a string', function () {
        $service = new ExampleService();
        expect($service->firstUniqueChar('aabbcdd'))->toBe('c');
        expect($service->firstUniqueChar('aabbcc'))->toBeNull();
        expect($service->firstUniqueChar(''))->toBeNull();
        expect($service->firstUniqueChar('swiss'))->toBe('w');
    });

    it('safely divides two numbers', function () {
        $service = new ExampleService();
        expect($service->safeDivide(10, 2))->toBe(5.0);
        expect($service->safeDivide(10, 0))->toBeNull();
        expect($service->safeDivide(0, 10))->toBe(0.0);
    });

    it('returns all primes up to n', function () {
        $service = new ExampleService();
        expect($service->primesUpTo(1))->toBe([]);
        expect($service->primesUpTo(2))->toBe([2]);
        expect($service->primesUpTo(10))->toBe([2, 3, 5, 7]);
        expect($service->primesUpTo(20))->toBe([2, 3, 5, 7, 11, 13, 17, 19]);
    });
});
