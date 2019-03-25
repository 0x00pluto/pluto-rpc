<?php
/**
 * Created by PhpStorm.
 * User: peng.zhi
 * Date: 2019/3/25
 * Time: 9:25 AM
 */

namespace Parser;

use Pluto\Rpc\Protocol\Parser\Parser;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class ParserTest extends \PHPUnit\Framework\TestCase
{

    public function testParser()
    {
        $finder = new Finder();

        $iterator = $finder->files()
            ->name('*.yaml')
            ->depth('<2')
            ->in(dirname(__DIR__));


        $parser = new Parser();
        foreach ($iterator as $file) {
            if (!$file instanceof SplFileInfo) {
                continue;
            }


            $message = $parser->parser($file->getContents());

            dumpLine($message);

        }
    }
}
