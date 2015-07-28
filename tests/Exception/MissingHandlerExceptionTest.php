<?php

namespace Tactician\CommandBus\Tests\Exception;

use League\Tactician\Exception\MissingHandlerException;
use League\Tactician\Tests\Fixtures\Command\CompleteTaskCommand;
use League\Tactician\Exception\Exception;

class MissingHandlerExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testExceptionContainsDebuggingInfo()
    {
        $exception = MissingHandlerException::forCommand('League\Tactician\Tests\Fixtures\Command\CompleteTaskCommand');

        $this->assertContains('League\Tactician\Tests\Fixtures\Command\CompleteTaskCommand', $exception->getMessage());
        $this->assertSame('League\Tactician\Tests\Fixtures\Command\CompleteTaskCommand', $exception->getCommandName());
        $this->assertInstanceOf('League\Tactician\Exception\Exception', $exception);
    }
}
