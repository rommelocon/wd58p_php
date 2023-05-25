<?php

require 'php_functions_exercise_2.php';

use PHPUnit\Framework\TestCase;

class ExerciseTest extends TestCase
{
    public function testCheckIfVowelOrConsonant()
    {
        $output = checkIfVowelOrConsonant('a');
        $this->assertEquals('A is vowel', $output);

        $output1 = checkIfVowelOrConsonant('z');
        $this->assertEquals('Z is consonant', $output1);

        $output2 = checkIfVowelOrConsonant('e');
        $this->assertEquals('E is vowel', $output2);

        $output3 = checkIfVowelOrConsonant('h');
        $this->assertEquals('H is consonant', $output3);
    }

    public function testConvertDigitToWord()
    {
        $output = convertDigitToWord(190847);
        $this->assertEquals('One Nine Zero Eight Four Seven ', $output);

        $output1 = convertDigitToWord(456125);
        $this->assertEquals('Four Five Six One Two Five ', $output1);
    }

    public function testIsDivisibleByThree()
    {
        $output = isDivisibleByThree(6);
        $this->assertEquals('6 is divisible by 3', $output);

        $output1 = isDivisibleByThree(5);
        $this->assertEquals('5 is not divisible by 3', $output1);

        $output2 = isDivisibleByThree(12);
        $this->assertEquals('12 is divisible by 3', $output2);

        $output3 = isDivisibleByThree(56);
        $this->assertEquals('56 is not divisible by 3', $output3);
    }

    public function testDeleteDuplicate()
    {
        $output = deleteDuplicate(['One', 'One', 'Two', 'Two', 'Three', 'Three', 'Four', 'Four', 'Four', 'Four']);
        $this->assertIsArray($output);
        $this->assertSame(['One', 'Two', 'Three', 'Four'], $output);
    }

    public function testIsArmstrongNumber()
    {
        $output = isArmstrongNumber(153);
        $this->assertEquals('153 is an Armstrong Number', $output);

        $output1 = isArmstrongNumber(232);
        $this->assertEquals('232 is not an Armstrong Number', $output1);

        $output2 = isArmstrongNumber(370);
        $this->assertEquals('370 is an Armstrong Number', $output2);

        $output3 = isArmstrongNumber(878);
        $this->assertEquals('878 is not an Armstrong Number', $output3);
    }
}
