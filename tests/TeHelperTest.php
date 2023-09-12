<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Helpers\TeHelper; // Replace with the actual namespace and class name

class TeHelperTest extends TestCase
{
    public function testWillExpireAt()
    {
        // Mock the input values
        $dueTime = '2023-09-15 12:00:00';
        $createdAt = '2023-09-15 10:00:00';

        // Call the method to be tested
        $result = TeHelper::willExpireAt($dueTime, $createdAt);

        // Parse the result into a Carbon instance for easier comparison
        $resultCarbon = \Carbon\Carbon::parse($result);
        
        // Assert that the result is a valid date and time
        $this->assertInstanceOf(\Carbon\Carbon::class, $resultCarbon);

        // Assert that the result is as expected based on the input values
        $this->assertEquals('2023-09-15 12:00:00', $resultCarbon->format('Y-m-d H:i:s'));
    }
}