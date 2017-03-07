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

namespace Org_Heigl\PwdWrapper;

/**
 * Class PdfLib
 *
 * @method activate_item($id)
 * @method add_nameddest($name, $optlist)
 * @method add_path_point($path, $x, $y, $type, $optlist)
 * @method add_portfolio_file($folder, $filename, $optlist)
 * @method add_portfolio_folder($parent, $foldername, $optlist)
 * @method add_table_cell($table, $column, $row, $text, $optlist)
 * @method add_textflow($textflow, $text, $optlist)
 * @method align($dx, $dy)
 * @method arc($x, $y, $r, $alpha, $beta)
 * @method arcn($x, $y, $r, $alpha, $beta)
 * @method begin_document($filename, $optlist)
 * @method begin_dpart($optlist)
 * @method begin_font($fontname, $a, $b, $c, $d, $e, $f, $optlist)
 * @method begin_glyph_ext($uv, $optlist)
 * @method begin_item($tagname, $optlist)
 * @method begin_layer($layer)
 * @method begin_mc($tagname, $optlist)
 * @method begin_page_ext($width, $height, $optlist)
 * @method begin_pattern_ext($width, $height, $optlist)
 * @method begin_template_ext($width, $height, $optlist)
 * @method circle($x, $y, $r)
 * @method circular_arc($x1, $y1, $x2, $y2)
 * @method clip()
 * @method close_font($font)
 * @method close_graphics($graphics)
 * @method close_image($image)
 * @method close_pdi_document($doc)
 * @method close_pdi_page($page)
 * @method closepath_fill_stroke()
 * @method closepath_stroke()
 * @method closepath()
 * @method concat($a, $b, $c, $d, $e, $f)
 * @method continue_text($text)
 * @method convert_to_unicode($inputformat, $inputstring, $optlist)
 * @method create_3dview($username, $optlist)
 * @method create_action($type, $optlist)
 * @method create_annotation($llx, $lly, $urx, $ury, $type, $optlist)
 * @method create_bookmark($text, $optlist)
 * @method create_devicen($optlist)
 * @method create_field($llx, $lly, $urx, $ury, $name, $type, $optlist)
 * @method create_fieldgroup($name, $optlist)
 * @method create_gstate($optlist)
 * @method create_pvf($filename, $data, $optlist)
 * @method create_textflow($text, $optlist)
 * @method curveto($x1, $y1, $x2, $y2, $x3, $y3)
 * @method define_layer($name, $optlist)
 * @method delete_path($path)
 * @method delete_pvf($filename)
 * @method delete_table($table, $optlist)
 * @method delete_textflow($textflow)
 * @method draw_path($path, $x, $y, $optlist)
 * @method ellipse($x, $y, $rx, $ry)
 * @method elliptical_arc($x, $y, $rx, $ry, $optlist)
 * @method encoding_set_char($encoding, $slot, $glyphname, $uv)
 * @method end_document($optlist)
 * @method end_dpart($optlist)
 * @method end_font()
 * @method end_glyph()
 * @method end_item($id)
 * @method end_layer()
 * @method end_mc()
 * @method end_page_ext($optlist)
 * @method end_pattern()
 * @method end_template_ext($width, $height)
 * @method endpath()
 * @method fill_graphicsblock($page, $blockname, $graphics, $optlist)
 * @method fill_imageblock($page, $blockname, $image, $optlist)
 * @method fill_pdfblock($page, $blockname, $contents, $optlist)
 * @method fill_stroke()
 * @method fill_textblock($page, $blockname, $text, $optlist)
 * @method fill()
 * @method fit_graphics($graphics, $x, $y, $optlist)
 * @method fit_image($image, $x, $y, $optlist)
 * @method fit_pdi_page($page, $x, $y, $optlist)
 * @method fit_table($table, $llx, $lly, $urx, $ury, $optlist)
 * @method fit_textflow($textflow, $llx, $lly, $urx, $ury, $optlist)
 * @method fit_textline($text, $x, $y, $optlist)
 * @method get_apiname()
 * @method get_buffer()
 * @method get_errmsg()
 * @method get_errnum()
 * @method get_option($keyword, $optlist)
 * @method get_string($idx, $optlist)
 * @method get_value($key, $modifier)
 * @method info_font($font, $keyword, $optlist)
 * @method info_graphics($graphics, $keyword, $optlist)
 * @method info_image($image, $keyword, $optlist)
 * @method info_matchbox($boxname, $num, $keyword)
 * @method info_path($path, $keyword, $optlist)
 * @method info_pdi_page($page, $keyword, $optlist)
 * @method info_pvf($filename, $keyword)
 * @method info_table($table, $keyword)
 * @method info_textflow($textflow, $keyword)
 * @method info_textline($text, $keyword, $optlist)
 * @method lineto($x, $y)
 * @method load_3ddata($filename, $optlist)
 * @method load_asset($type, $filename, $optlist)
 * @method load_font($fontname, $encoding, $optlist)
 * @method load_graphics($type, $filename, $optlist)
 * @method load_iccprofile($profilename, $optlist)
 * @method load_image($imagetype, $filename, $optlist)
 * @method makespotcolor($spotname)
 * @method mc_point($tagname, $optlist)
 * @method moveto($x, $y)
 * @method open_pdi_document($filename, $optlist)
 * @method open_pdi_page($doc, $pagenumber, $optlist)
 * @method pcos_get_number($doc, $path)
 * @method pcos_get_stream($doc, $optlist, $path)
 * @method pcos_get_string($doc, $path)
 * @method poca_delete($container, $optlist)
 * @method poca_insert($container, $optlist)
 * @method poca_new($optlist)
 * @method poca_remove($container, $optlist)
 * @method process_pdi($doc, $page, $optlist)
 * @method rect($x, $y, $width, $height)
 * @method restore()
 * @method resume_page($optlist)
 * @method rotate($phi)
 * @method save()
 * @method scale($sx, $sy)
 * @method set_graphics_option($optlist)
 * @method set_gstate($gstate)
 * @method set_info($key, $value)
 * @method set_layer_dependency($type, $optlist)
 * @method set_option($optlist)
 * @method set_text_option($optlist)
 * @method set_text_pos($x, $y)
 * @method setcolor($fstype, $colorspace, $c1, $c2, $c3, $c4)
 * @method setfont($font, $fontsize)
 * @method setlinewidth($width)
 * @method setmatrix($a, $b, $c, $d, $e, $f)
 * @method setmiterlimit($miter)
 * @method shading_pattern($shading, $optlist)
 * @method shading($type, $x0, $y0, $x1, $y1, $c1, $c2, $c3, $c4, $optlist)
 * @method shfill($shading)
 * @method show_xy($text, $x, $y)
 * @method show($text)
 * @method skew($alpha, $beta)
 * @method stringwidth($text, $font, $fontsize)
 * @method stroke()
 * @method suspend_page($optlist)
 * @method translate($tx, $ty)
 */
class PdfLib implements PdfWrapperInterface
{
    public function __construct($pdfLibLicense = null, $pdfLibLicenseFile = null)
    {
        $this->pdf = new \PDFlib();
        if (null !== $pdfLibLicenseFile && is_readable($pdfLibLicenseFile)) {
            $this->set_option('licensefile=' . $pdfLibLicenseFile);
        }

        if (null !== $pdfLibLicense) {
            $this->set_option('license=' . $pdfLibLicense);
        }

        $this->set_info('Subject', 'Subject');
        $this->set_info('Title', 'Title');
        $this->set_info('Creator', 'Org_Heigl\\PdfWrapper\\PdfLib');
        $this->set_info('Author', 'Andreas Heigl');
        $this->set_info('Keywords', 'None');
        $this->set_info('Trapped', 'Unknown');
    }

    public function __call($method, $params)
    {
        return $this->pdf->$method(...$params);
    }
}
