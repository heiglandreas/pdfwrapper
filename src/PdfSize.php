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
 * @since     07.03.2017
 * @link      http://github.com/heiglandreas/org.heigl.PdfWrapper
 */

namespace Org_Heigl\PdfWrapper;

class PdfSize
{
    const A0 = 'a0';
    const A1 = 'a1';
    const A2 = 'a2';
    const A3 = 'a3';
    const A4 = 'a4';
    const A5 = 'a5';
    const A6 = 'a6';
    const A7 = 'a7';
    const A8 = 'a8';

    const PORTRAIT = 'portrait';
    const LANDSCAPE = 'landscape';

    private $width;

    private $height;

    private static $sizes = [
        'a0' => [3370, 2384],
        'a1' => [2384, 1684],
        'a2' => [1684, 1190],
        'a3' => [1190,  842],
        'a4' => [ 842,  595],
        'a5' => [ 595,  420],
        'a6' => [ 420,  298],
        'a7' => [ 298,  210],
        'a8' => [ 210,  148],
    ];

    /**
     * PdfSize constructor.
     *
     * @param int $width
     * @param int $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getHeight() :float
    {
        return $this->height;
    }

    public function getWidth() :float
    {
        return $this->width;
    }

    public static function createFromFormat($format = self::A4, $orientation = self::PORTRAIT) : self
    {
        if (! preg_match('/a[0-8]/', $format)) {
            throw new \InvalidArgumentException('No valid format provided');
        }

        if ($orientation !== self::LANDSCAPE && $orientation !== self::PORTRAIT) {
            throw new \InvalidArgumentException('No valid orientation provided');
        }

        $size = self::$sizes[$format];

        if ($orientation === self::LANDSCAPE) {
            $size = [$size[1], $size[0]];
        }

        return new self($size[1], $size[0]);
    }

    public static function toPoint(float $millimeter)
    {
        return $millimeter /25.4 * 72;
    }

    public static function toMillimeter(float $point)
    {
        return $point / 72 * 25.4;
    }
}
