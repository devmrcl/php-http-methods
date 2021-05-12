<?php

declare(strict_types=1);

namespace Mrcl\Tests\Utils\InternetStandards;

use Mrcl\Utils\InternetStandards\HttpMethod;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

use function PHPUnit\Framework\assertContainsOnly;
use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertSame;

class HttpMethodTest extends TestCase
{
    private static array $allConstants;

    public static function setUpBeforeClass(): void
    {
        $httpStatus = new ReflectionClass(HttpMethod::class);
        self::$allConstants = $httpStatus->getConstants();
    }

    public function testCount(): void
    {
        $expectedCount = count($this->httpMethodProvider());
        assertCount($expectedCount, self::$allConstants);
    }

    public function testType(): void
    {
        assertContainsOnly('string', self::$allConstants);
    }

    /**
     * @depends      testCount
     * @depends      testType
     * @dataProvider httpMethodProvider
     */
    public function testMapping(string $constant, string $method): void
    {
        assertSame($method, self::$allConstants[$constant]);
    }

    public function httpMethodProvider(): array
    {
        return [
            ['ACL', 'ACL'],
            ['BASELINE_CONTROL', 'BASELINE-CONTROL'],
            ['BIND', 'BIND'],
            ['CHECKIN', 'CHECKIN'],
            ['CHECKOUT', 'CHECKOUT'],
            ['CONNECT', 'CONNECT'],
            ['COPY', 'COPY'],
            ['DELETE', 'DELETE'],
            ['GET', 'GET'],
            ['HEAD', 'HEAD'],
            ['LABEL', 'LABEL'],
            ['LINK', 'LINK'],
            ['LOCK', 'LOCK'],
            ['MERGE', 'MERGE'],
            ['MKACTIVITY', 'MKACTIVITY'],
            ['MKCALENDAR', 'MKCALENDAR'],
            ['MKCOL', 'MKCOL'],
            ['MKREDIRECTREF', 'MKREDIRECTREF'],
            ['MKWORKSPACE', 'MKWORKSPACE'],
            ['MOVE', 'MOVE'],
            ['OPTIONS', 'OPTIONS'],
            ['ORDERPATCH', 'ORDERPATCH'],
            ['PATCH', 'PATCH'],
            ['POST', 'POST'],
            ['PRI', 'PRI'],
            ['PROPFIND', 'PROPFIND'],
            ['PROPPATCH', 'PROPPATCH'],
            ['PUT', 'PUT'],
            ['REBIND', 'REBIND'],
            ['REPORT', 'REPORT'],
            ['SEARCH', 'SEARCH'],
            ['TRACE', 'TRACE'],
            ['UNBIND', 'UNBIND'],
            ['UNCHECKOUT', 'UNCHECKOUT'],
            ['UNLINK', 'UNLINK'],
            ['UNLOCK', 'UNLOCK'],
            ['UPDATE', 'UPDATE'],
            ['UPDATEREDIRECTREF', 'UPDATEREDIRECTREF'],
            ['VERSION_CONTROL', 'VERSION-CONTROL'],
        ];
    }
}
