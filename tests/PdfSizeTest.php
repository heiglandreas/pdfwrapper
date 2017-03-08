<?php
/**
 * Copyright (c) Andreas Heigl<andreas@heigl.org>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @author    Andreas Heigl<andreas@heigl.org>
 * @copyright Andreas Heigl
 * @license   http://www.opensource.org/licenses/mit-license.php MIT-License
 * @since     08.03.2017
 * @link      http://github.com/heiglandreas/org.heigl.PdfWrapper
 */

namespace Org_Heigl\PwdWrapperTest;

use Org_Heigl\PdfWrapper\PdfSize;
use PHPUnit\Framework\TestCase;

class PdfSizeTest extends TestCase
{
    /**
     * @param $millimeter
     * @param $point
     *
     * @dataProvider pointMillimeterProvider
     */
    public function testConvertingFromMillimeterToPointWorks($millimeter, $point)
    {
        $this->assertEquals($point, PdfSize::toPoint($millimeter));
    }

    /**
     * @param $millimeter
     * @param $point
     *
     * @dataProvider pointMillimeterProvider
     */
    public function testConvertingFromPointToMillimeterWorks($millimeter, $point)
    {
        $this->assertEquals($millimeter, PdfSize::toMillimeter($point));
    }

    public function pointMillimeterProvider()
    {
        return [
            [25.4, 72],
            [50.8, 144],
        ];
    }

    public function testInstantiatingPdfSize()
    {
        $inst = new PdfSize((float) 10, (float) 20);
        $this->assertAttributeSame((float)10, 'width', $inst);
        $this->assertAttributeSame((float)20, 'height', $inst);
        $this->assertSame((float) 10, $inst->getWidth());
        $this->assertSame((float) 20, $inst->getHeight());
    }

    /** @dataProvider formatDataProvider */
    public function testCreatingInstanceViaFormat($format, $orientation, $width, $height)
    {
        $format = PdfSize::createFromFormat($format, $orientation);

        $this->assertAttributeSame($width, 'width', $format);
        $this->assertAttributeSame($height, 'height', $format);

    }

    public function formatDataProvider()
    {
        return [
            ['a4', 'portrait', 595.0, 842.0],
            ['a4', 'landscape', 842.0, 595.0],
            ['a0', 'portrait', 2384.0, 3370.0],
            ['a0', 'landscape', 3370.0, 2384.0],
        ];
    }

    /** @expectedException \InvalidArgumentException */
    public function testCreatingFromFormatThrowsOnInvalidFormat()
    {
        PdfSize::createFromFormat('b1');
    }

    /** @expectedException \InvalidArgumentException */
    public function testCreatingFromFormatThrowsOnInvalidOrientation()
    {
        PdfSize::createFromFormat('a0', 'foo');
    }
}
