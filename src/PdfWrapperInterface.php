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

interface PdfWrapperInterface
{
    /**
     * Activate a previously created structure element or other content item.
     *
     * @param int $id
     */
    public function activate_item($id);


    /**
     * Create a named destination on a page in the document.
     *
     * @param string $name
     * @param string $optlist
     */
    public function add_nameddest($name, $optlist);


    /**
     * Add a point to a new or existing path object.
     *
     * @param int $path
     * @param double $x
     * @param double $y
     * @param string $type
     * @param string $optlist
     * @return  A path handle which can be used in subsequent path-related calls.
     */
    public function add_path_point($path, $x, $y, $type, $optlist);


    /**
     * Add a file to a portfolio folder or a package (requires PDF 1.7).
     *
     * @param int $folder
     * @param string $filename
     * @param string $optlist
     * @return 0 on error, and 1 otherwise.
     */
    public function add_portfolio_file($folder, $filename, $optlist);


    /**
     * Add a folder to a new or existing portfolio (requires PDF 1.7ext3).
     *
     * @param int $parent
     * @param string $foldername
     * @param string $optlist
     * @return  A folder handle which can be used in subsequent portfolio-related calls.
     */
    public function add_portfolio_folder($parent, $foldername, $optlist);


    /**
     * Add a cell to a new or existing table.
     *
     * @param int $table
     * @param int $column
     * @param int $row
     * @param string $text
     * @param string $optlist
     * @return  A table handle which can be used in subsequent table-related calls.
     */
    public function add_table_cell($table, $column, $row, $text, $optlist);


    /**
     * Create a Textflow object, or add text and explicit options to an existing Textflow.
     *
     * @param int $textflow
     * @param string $text
     * @param string $optlist
     * @return  A Textflow handle, or -1 (in PHP: 0) on error.
     */
    public function add_textflow($textflow, $text, $optlist);


    /**
     * Align the coordinate system with a relative vector.
     *
     * @param double $dx
     * @param double $dy
     */
    public function align($dx, $dy);


    /**
     * Draw a counterclockwise circular arc segment.
     *
     * @param double $x
     * @param double $y
     * @param double $r
     * @param double $alpha
     * @param double $beta
     */
    public function arc($x, $y, $r, $alpha, $beta);


    /**
     * Draw a clockwise circular arc segment.
     *
     * @param double $x
     * @param double $y
     * @param double $r
     * @param double $alpha
     * @param double $beta
     */
    public function arcn($x, $y, $r, $alpha, $beta);


    /**
     * Create a new PDF file subject to various options.
     *
     * @param string $filename
     * @param string $optlist
     * @return  -1 (in PHP: 0) on error, and 1 otherwise.
     */
    public function begin_document($filename, $optlist);


    /**
     * Create a new node in the document part hierarchy (requires PDF/VT or   PDF 2.0).
     *
     * @param string $optlist
     */
    public function begin_dpart($optlist);


    /**
     * Start a Type 3 font definition.
     *
     * @param string $fontname
     * @param double $a
     * @param double $b
     * @param double $c
     * @param double $d
     * @param double $e
     * @param double $f
     * @param string $optlist
     */
    public function begin_font($fontname, $a, $b, $c, $d, $e, $f, $optlist);


    /**
     * Start a glyph definition for a Type 3 font.
     *
     * @param int $uv
     * @param string $optlist
     */
    public function begin_glyph_ext($uv, $optlist);


    /**
     * Open a structure element or other content item with attributes supplied as options.
     *
     * @param string $tagname
     * @param string $optlist
     * @return  An item handle.
     */
    public function begin_item($tagname, $optlist);


    /**
     * Start a layer for subsequent output on the page (requires PDF 1.5).
     *
     * @param int $layer
     */
    public function begin_layer($layer);


    /**
     * Begin a marked content sequence with optional properties.
     *
     * @param string $tagname
     * @param string $optlist
     */
    public function begin_mc($tagname, $optlist);


    /**
     * Add a new page to the document, and specify various options.
     *
     * @param double $width
     * @param double $height
     * @param string $optlist
     */
    public function begin_page_ext($width, $height, $optlist);


    /**
     * Start a pattern definition with options.
     *
     * @param double $width
     * @param double $height
     * @param string $optlist
     * @return  A pattern handle.
     */
    public function begin_pattern_ext($width, $height, $optlist);


    /**
     * Start a template definition.
     *
     * @param double $width
     * @param double $height
     * @param string $optlist
     * @return  A template handle.
     */
    public function begin_template_ext($width, $height, $optlist);


    /**
     * Draw a circle.
     *
     * @param double $x
     * @param double $y
     * @param double $r
     */
    public function circle($x, $y, $r);


    /**
     * Draw a circular arc segment defined by three points.
     *
     * @param double $x1
     * @param double $y1
     * @param double $x2
     * @param double $y2
     */
    public function circular_arc($x1, $y1, $x2, $y2);


    /**
     * Use the current path as clipping path, and terminate the path.
     *
     */
    public function clip();


    /**
     * Close an open font handle which has not yet been used in the document.
     *
     * @param int $font
     */
    public function close_font($font);


    /**
     * Close vector graphics.
     *
     * @param int $graphics
     */
    public function close_graphics($graphics);


    /**
     * Close an image or template.
     *
     * @param int $image
     */
    public function close_image($image);


    /**
     * Close all open PDI page handles, and close the input PDF document.
     *
     * @param int $doc
     */
    public function close_pdi_document($doc);


    /**
     * Close the page handle and free all page-related resources.
     *
     * @param int $page
     */
    public function close_pdi_page($page);


    /**
     * Close the current path.
     *
     */
    public function closepath();


    /**
     * Close the path, fill, and stroke it.
     *
     */
    public function closepath_fill_stroke();


    /**
     * Close the path, and stroke it.
     *
     */
    public function closepath_stroke();


    /**
     * Apply a transformation matrix to the current coordinate system.
     *
     * @param double $a
     * @param double $b
     * @param double $c
     * @param double $d
     * @param double $e
     * @param double $f
     */
    public function concat($a, $b, $c, $d, $e, $f);


    /**
     * Same as PDF_continue_text(), but with explicit string length.
     *
     * @param string $text
     */
    public function continue_text($text);


    /**
     * Convert a string in an arbitrary encoding to a Unicode string in various formats.
     *
     * @param string $inputformat
     * @param string $inputstring
     * @param string $optlist
     * @return  The converted Unicode string.
     */
    public function convert_to_unicode($inputformat, $inputstring, $optlist);


    /**
     * Create a 3D view (requires PDF 1.6).
     *
     * @param string $username
     * @param string $optlist
     * @return  A 3D view handle, or -1 (in PHP: 0) on error.
     */
    public function create_3dview($username, $optlist);


    /**
     * Create an action which can be applied to various objects and events.
     *
     * @param string $type
     * @param string $optlist
     * @return  An action handle.
     */
    public function create_action($type, $optlist);


    /**
     * Create an annotation on the current page.
     *
     * @param double $llx
     * @param double $lly
     * @param double $urx
     * @param double $ury
     * @param string $type
     * @param string $optlist
     */
    public function create_annotation($llx, $lly, $urx, $ury, $type, $optlist);


    /**
     * Create a DeviceN colorspace with an arbitrary number of color components.
     *
     * @param string $optlist
     * @return  A DeviceN color space handle, or -1 (in PHP: 0) on error.
     */
    public function create_devicen($optlist);


    /**
     * Create a bookmark subject to various options.
     *
     * @param string $text
     * @param string $optlist
     * @return  A handle for the generated bookmark.
     */
    public function create_bookmark($text, $optlist);


    /**
     * Create a form field on the current page subject to various options.
     *
     * @param double $llx
     * @param double $lly
     * @param double $urx
     * @param double $ury
     * @param string $name
     * @param string $type
     * @param string $optlist
     */
    public function create_field($llx, $lly, $urx, $ury, $name, $type, $optlist);


    /**
     * Create a form field group subject to various options.
     *
     * @param string $name
     * @param string $optlist
     */
    public function create_fieldgroup($name, $optlist);


    /**
     * Create a graphics state object subject to various options.
     *
     * @param string $optlist
     * @return  A graphic state handle.
     */
    public function create_gstate($optlist);


    /**
     * Create a named virtual read-only file from data provided in memory.
     *
     * @param string $filename
     * @param string $data
     * @param string $optlist
     */
    public function create_pvf($filename, $data, $optlist);


    /**
     * Create a Textflow object from text contents, inline options, and explicit options.
     *
     * @param string $text
     * @param string $optlist
     * @return  A Textflow handle, or -1 (in PHP: 0) on error.
     */
    public function create_textflow($text, $optlist);


    /**
     * Draw a Bezier curve from the current point, using 3 more control points.
     *
     * @param double $x1
     * @param double $y1
     * @param double $x2
     * @param double $y2
     * @param double $x3
     * @param double $y3
     */
    public function curveto($x1, $y1, $x2, $y2, $x3, $y3);


    /**
     * Create a new layer definition (requires PDF 1.5).
     *
     * @param string $name
     * @param string $optlist
     * @return  A layer handle which can be used in subsequent layer-related calls.
     */
    public function define_layer($name, $optlist);


    /**
     * Delete a path object.
     *
     * @param int $path
     */
    public function delete_path($path);


    /**
     * Delete a named virtual file and free its data structures (but not the contents).
     *
     * @param string $filename
     * @return  -1 (in PHP: 0) if the virtual file exists but is locked, and 1 otherwise.
     */
    public function delete_pvf($filename);


    /**
     * Delete a table and all associated data structures.
     *
     * @param int $table
     * @param string $optlist
     */
    public function delete_table($table, $optlist);


    /**
     * Delete a textflow and all associated data structures.
     *
     * @param int $textflow
     */
    public function delete_textflow($textflow);


    /**
     * Draw a path object.
     *
     * @param int $path
     * @param double $x
     * @param double $y
     * @param string $optlist
     */
    public function draw_path($path, $x, $y, $optlist);


    /**
     * Draw an ellipse.
     *
     * @param double $x
     * @param double $y
     * @param double $rx
     * @param double $ry
     */
    public function ellipse($x, $y, $rx, $ry);


    /**
     * Draw an elliptical arc segment from the current point.
     *
     * @param double $x
     * @param double $y
     * @param double $rx
     * @param double $ry
     * @param string $optlist
     */
    public function elliptical_arc($x, $y, $rx, $ry, $optlist);


    /**
     * Add a glyph name and/or Unicode value to a custom 8-bit encoding.
     *
     * @param string $encoding
     * @param int $slot
     * @param string $glyphname
     * @param int $uv
     */
    public function encoding_set_char($encoding, $slot, $glyphname, $uv);


    /**
     * Close the generated PDF document and apply various options.
     *
     * @param string $optlist
     */
    public function end_document($optlist);


    /**
     * Close a node in the document part hierarchy (requires PDF/VT or PDF 2.0).
     *
     * @param string $optlist
     */
    public function end_dpart($optlist);


    /**
     * Terminate a Type 3 font definition.
     *
     */
    public function end_font();


    /**
     * Terminate a glyph definition for a Type 3 font.
     *
     */
    public function end_glyph();


    /**
     * Close a structure element or other content item.
     *
     * @param int $id
     */
    public function end_item($id);


    /**
     * Deactivate all active layers (requires PDF 1.5).
     *
     */
    public function end_layer();


    /**
     * End the least recently opened marked content sequence.
     *
     */
    public function end_mc();


    /**
     * Finish a page, and apply various options.
     *
     * @param string $optlist
     */
    public function end_page_ext($optlist);


    /**
     * Finish a pattern definition.
     *
     */
    public function end_pattern();


    /**
     * Finish a template definition.
     *
     * @param double $width
     * @param double $height
     */
    public function end_template_ext($width, $height);


    /**
     * End the current path without filling or stroking it.
     *
     */
    public function endpath();


    /**
     * Fill the interior of the path with the current fill color.
     *
     */
    public function fill();


    /**
     * Fill a graphics block with variable data according to its properties.
     *
     * @param int $page
     * @param string $blockname
     * @param int $graphics
     * @param string $optlist
     * @return  -1 (in PHP: 0) on error, and 1 otherwise.
     */
    public function fill_graphicsblock($page, $blockname, $graphics, $optlist);


    /**
     * Fill an image block with variable data according to its properties.
     *
     * @param int $page
     * @param string $blockname
     * @param int $image
     * @param string $optlist
     * @return  -1 (in PHP: 0) on error, and 1 otherwise.
     */
    public function fill_imageblock($page, $blockname, $image, $optlist);


    /**
     * Fill a PDF block with variable data according to its properties.
     *
     * @param int $page
     * @param string $blockname
     * @param int $contents
     * @param string $optlist
     * @return  -1 (in PHP: 0) on error, and 1 otherwise.
     */
    public function fill_pdfblock($page, $blockname, $contents, $optlist);


    /**
     * Fill a Textline or Textflow Block with variable data according to its properties.
     *
     * @return  -1 (in PHP: 0) on error, and 1 otherwise.
     */
    public function fill_stroke();


    /**
     * Fill a Textline or Textflow Block with variable data according to its properties.
     *
     * @param int $page
     * @param string $blockname
     * @param string $text
     * @param string $optlist
     * @return  -1 (in PHP: 0) on error, and 1 otherwise.
     */
    public function fill_textblock($page, $blockname, $text, $optlist);


    /**
     * Place vector graphics on a content stream, subject to various options.
     *
     * @param int $graphics
     * @param double $x
     * @param double $y
     * @param string $optlist
     */
    public function fit_graphics($graphics, $x, $y, $optlist);


    /**
     * Place an image or template on the page, subject to various options.
     *
     * @param int $image
     * @param double $x
     * @param double $y
     * @param string $optlist
     */
    public function fit_image($image, $x, $y, $optlist);


    /**
     * Place an imported PDF page on the page subject to various options.
     *
     * @param int $page
     * @param double $x
     * @param double $y
     * @param string $optlist
     */
    public function fit_pdi_page($page, $x, $y, $optlist);


    /**
     * Fully or partially place a table on the page.
     *
     * @param int $table
     * @param double $llx
     * @param double $lly
     * @param double $urx
     * @param double $ury
     * @param string $optlist
     * @return  A string which specifies the reason for returning.
     */
    public function fit_table($table, $llx, $lly, $urx, $ury, $optlist);


    /**
     * Format the next portion of a Textflow.
     *
     * @param int $textflow
     * @param double $llx
     * @param double $lly
     * @param double $urx
     * @param double $ury
     * @param string $optlist
     * @return  A string which specifies the reason for returning.
     */
    public function fit_textflow($textflow, $llx, $lly, $urx, $ury, $optlist);


    /**
     * Place a single line of text at position (x, y) subject to various options.
     *
     * @param string $text
     * @param double $x
     * @param double $y
     * @param string $optlist
     */
    public function fit_textline($text, $x, $y, $optlist);


    /**
     * Get the name of the API public function which threw the last exception or failed.
     *
     * @return  Name of an API public function.
     */
    public function get_apiname();


    /**
     * Get the contents of the PDF output buffer.
     *
     * @return  A buffer full of binary PDF data for consumption by the client.
     */
    public function get_buffer();


    /**
     * Get the text of the last thrown exception or the reason of a failed public function call.
     *
     * @return  Text containing the description of the most recent error condition.
     */
    public function get_errmsg();


    /**
     * Get the number of the last thrown exception or the reason of a failed public function call.
     *
     * @return  The error code of the most recent error condition.
     */
    public function get_errnum();


    /**
     * Retrieve some option or other value.
     *
     * @param string $keyword
     * @param string $optlist
     * @return  The value of some option value as requested by keyword.
     */
    public function get_option($keyword, $optlist);


    /**
     * Retrieve a string value.
     *
     * @param int $idx
     * @param string $optlist
     * @return  a string identified by a string index returned by another public function.
     */
    public function get_string($idx, $optlist);


    /**
     * Get the value of some PDFlib parameter with numerical type.
     *
     * @param string $key
     * @param double $modifier
     * @return  The numerical value of the parameter.
     */
    public function get_value($key, $modifier);


    /**
     * Query detailed information about a loaded font.
     *
     * @param int $font
     * @param string $keyword
     * @param string $optlist
     * @return  The value of some font property as requested by keyword.
     */
    public function info_font($font, $keyword, $optlist);


    /**
     * Format vector graphics and query metrics and other properties.
     *
     * @param int $graphics
     * @param string $keyword
     * @param string $optlist
     * @return  The value of some graphics metrics as requested by keyword.
     */
    public function info_graphics($graphics, $keyword, $optlist);


    /**
     * Format an image and query metrics and other image properties.
     *
     * @param int $image
     * @param string $keyword
     * @param string $optlist
     * @return  The value of some image metrics as requested by keyword.
     */
    public function info_image($image, $keyword, $optlist);


    /**
     * Query information about a matchbox on the current page.
     *
     * @param string $boxname
     * @param int $num
     * @param string $keyword
     * @return  The value of some matchbox parameter as requested by keyword.
     */
    public function info_matchbox($boxname, $num, $keyword);


    /**
     * Query the results of drawing a path object without actually drawing it.
     *
     * @param int $path
     * @param string $keyword
     * @param string $optlist
     * @return  The value of some geometrical values as requested by keyword.
     */
    public function info_path($path, $keyword, $optlist);


    /**
     * Perform formatting calculations for a PDI page and query the resulting metrics.
     *
     * @param int $page
     * @param string $keyword
     * @param string $optlist
     * @return  The value of some page metrics as requested by keyword.
     */
    public function info_pdi_page($page, $keyword, $optlist);


    /**
     * Query properties of a virtual file or the PDFlib Virtual Filesystem (PVF).
     *
     * @param string $filename
     * @param string $keyword
     * @return  The value of some file parameter as requested by keyword.
     */
    public function info_pvf($filename, $keyword);


    /**
     * Query table information related to the most recently placed table instance.
     *
     * @param int $table
     * @param string $keyword
     * @return  The value of some table parameter as requested by keyword.
     */
    public function info_table($table, $keyword);


    /**
     * Query the current state of a Textflow.
     *
     * @param int $textflow
     * @param string $keyword
     * @return  The value of some Textflow parameter as requested by keyword.
     */
    public function info_textflow($textflow, $keyword);


    /**
     * Perform textline formatting without creating output and query the resulting metrics.
     *
     * @param string $text
     * @param string $keyword
     * @param string $optlist
     * @return  The value of some text metric value as requested by keyword.
     */
    public function info_textline($text, $keyword, $optlist);


    /**
     * Draw a line from the current point to another point.
     *
     * @param double $x
     * @param double $y
     */
    public function lineto($x, $y);


    /**
     * Load a 3D model from a disk-based or virtual file (requires PDF 1.6).
     *
     * @param string $filename
     * @param string $optlist
     * @return  A 3D handle, or -1 (in PHP: 0) on error.
     */
    public function load_3ddata($filename, $optlist);


    /**
     * Load a rich media asset or file attachment from a disk-based or virtual file.
     *
     * @param string $type
     * @param string $filename
     * @param string $optlist
     * @return  An asset handle, or -1 (in PHP: 0) on error.
     */
    public function load_asset($type, $filename, $optlist);


    /**
     * Search for a font and prepare it for later use.
     *
     * @param string $fontname
     * @param string $encoding
     * @param string $optlist
     * @return  A font handle.
     */
    public function load_font($fontname, $encoding, $optlist);


    /**
     * Open a disk-based or virtual vector graphics file subject to various options.
     *
     * @param string $type
     * @param string $filename
     * @param string $optlist
     * @return  A graphics handle, or -1 (in PHP: 0) on error.
     */
    public function load_graphics($type, $filename, $optlist);


    /**
     * Search for an ICC profile, and prepare it for later use.
     *
     * @param string $profilename
     * @param string $optlist
     * @return  A profile handle.
     */
    public function load_iccprofile($profilename, $optlist);


    /**
     * Open a disk-based or virtual image file subject to various options.
     *
     * @param string $imagetype
     * @param string $filename
     * @param string $optlist
     * @return  An image handle, or -1 (in PHP: 0) on error.
     */
    public function load_image($imagetype, $filename, $optlist);


    /**
     * Find a built-in spot color name, or make a named spot color from the current fill color.
     *
     * @param string $spotname
     * @return  A color handle.
     */
    public function makespotcolor($spotname);


    /**
     * Add a marked content point with optional properties.
     *
     * @param string $tagname
     * @param string $optlist
     */
    public function mc_point($tagname, $optlist);


    /**
     * Set the current point for graphics output.
     *
     * @param double $x
     * @param double $y
     */
    public function moveto($x, $y);


    /**
     * Open a disk-based or virtual PDF document and prepare it for later use.
     *
     * @param string $filename
     * @param string $optlist
     * @return  A PDI document handle.
     */
    public function open_pdi_document($filename, $optlist);


    /**
     * Prepare a page for later use with PDF_fit_pdi_page().
     *
     * @param int $doc
     * @param int $pagenumber
     * @param string $optlist
     * @return  A page handle.
     */
    public function open_pdi_page($doc, $pagenumber, $optlist);


    /**
     * Get the value of a pCOS path with type number or boolean.
     *
     * @param int $doc
     * @param string $path
     * @return  The numerical value of the object identified by the pCOS path.
     */
    public function pcos_get_number($doc, $path);


    /**
     * Get the value of a pCOS path with type name, number, string, or boolean.
     *
     * @param int $doc
     * @param string $path
     * @return  A string with the value of the object identified by the pCOS path.
     */
    public function pcos_get_string($doc, $path);


    /**
     * Get the contents of a pCOS path with type stream, fstream, or string.
     *
     * @param int $doc
     * @param string $optlist
     * @param string $path
     * @return  The unencrypted data contained in the stream or string.
     */
    public function pcos_get_stream($doc, $optlist, $path);


    /**
     * Delete a PDF container object.
     *
     * @param int $container
     * @param string $optlist
     */
    public function poca_delete($container, $optlist);


    /**
     * Insert a simple or container object in a PDF container object.
     *
     * @param int $container
     * @param string $optlist
     */
    public function poca_insert($container, $optlist);


    /**
     * Create a new PDF container object of type dictionary, array, or stream and insert objects.
     *
     * @param string $optlist
     * @return  A container handle which can be used until it is deleted with PDF_poca_delete().
     */
    public function poca_new($optlist);


    /**
     * Remove a simple or container object from a PDF container object.
     *
     * @param int $container
     * @param string $optlist
     */
    public function poca_remove($container, $optlist);


    /**
     * Process certain elements of an imported PDF document.
     *
     * @param int $doc
     * @param int $page
     * @param string $optlist
     * @return  -1 (in PHP: 0) on error, and 1 otherwise.
     */
    public function process_pdi($doc, $page, $optlist);


    /**
     * Draw a rectangle.
     *
     * @param double $x
     * @param double $y
     * @param double $width
     * @param double $height
     */
    public function rect($x, $y, $width, $height);


    /**
     * Restore the most recently saved graphics state from the stack.
     *
     */
    public function restore();


    /**
     * Resume a page to add more content to it.
     *
     * @param string $optlist
     */
    public function resume_page($optlist);


    /**
     * Rotate the coordinate system.
     *
     * @param double $phi
     */
    public function rotate($phi);


    /**
     * Save the current graphics state to a stack.
     *
     */
    public function save();


    /**
     * Scale the coordinate system.
     *
     * @param double $sx
     * @param double $sy
     */
    public function scale($sx, $sy);


    /**
     * Set one or more graphics appearance options.
     *
     * @param string $optlist
     */
    public function set_graphics_option($optlist);


    /**
     * Activate a graphics state object.
     *
     * @param int $gstate
     */
    public function set_gstate($gstate);


    /**
     * Like PDF_set_info(), but with explicit string length.
     *
     * @param string $key
     * @param string $value
     */
    public function set_info($key, $value);


    /**
     * Define layer relationships (requires PDF 1.5).
     *
     * @param string $type
     * @param string $optlist
     */
    public function set_layer_dependency($type, $optlist);


    /**
     * Set one or more global options.
     *
     * @param string $optlist
     */
    public function set_option($optlist);


    /**
     * Set one or more text filter or text appearance options for simple text output public functions.
     *
     * @param string $optlist
     */
    public function set_text_option($optlist);


    /**
     * Set the position for simple text output on the page.
     *
     * @param double $x
     * @param double $y
     */
    public function set_text_pos($x, $y);


    /**
     * Set the color space and color for the graphics and text state..
     *
     * @param string $fstype
     * @param string $colorspace
     * @param double $c1
     * @param double $c2
     * @param double $c3
     * @param double $c4
     */
    public function setcolor($fstype, $colorspace, $c1, $c2, $c3, $c4);


    /**
     * Set the current font in the specified size.
     *
     * @param int $font
     * @param double $fontsize
     */
    public function setfont($font, $fontsize);


    /**
     * Set the current linewidth.
     *
     * @param double $width
     */
    public function setlinewidth($width);


    /**
     * Explicitly set the current transformation matrix.
     *
     * @param double $a
     * @param double $b
     * @param double $c
     * @param double $d
     * @param double $e
     * @param double $f
     */
    public function setmatrix($a, $b, $c, $d, $e, $f);


    /**
     * Set the miter limit.
     *
     * @param double $miter
     */
    public function setmiterlimit($miter);


    /**
     * Define a shading (color gradient) between two or more colors.
     *
     * @param string $type
     * @param double $x0
     * @param double $y0
     * @param double $x1
     * @param double $y1
     * @param double $c1
     * @param double $c2
     * @param double $c3
     * @param double $c4
     * @param string $optlist
     * @return  A shading handle.
     */
    public function shading($type, $x0, $y0, $x1, $y1, $c1, $c2, $c3, $c4, $optlist);


    /**
     * Define a shading pattern using a shading object.
     *
     * @param int $shading
     * @param string $optlist
     * @return  A pattern handle.
     */
    public function shading_pattern($shading, $optlist);


    /**
     * Fill an area with a shading, based on a shading object.
     *
     * @param int $shading
     */
    public function shfill($shading);


    /**
     * Same as PDF_show() but with explicit string length.
     *
     * @param string $text
     */
    public function show($text);


    /**
     * Same as PDF_show_xy() but with explicit string length.
     *
     * @param string $text
     * @param double $x
     * @param double $y
     */
    public function show_xy($text, $x, $y);


    /**
     * Skew the coordinate system.
     *
     * @param double $alpha
     * @param double $beta
     */
    public function skew($alpha, $beta);


    /**
     * Same as PDF_stringwidth(), but with explicit string length.
     *
     * @param string $text
     * @param int $font
     * @param double $fontsize
     * @return  The width of text.
     */
    public function stringwidth($text, $font, $fontsize);


    /**
     * Stroke the path with the current color and line width, and clear it.
     *
     */
    public function stroke();


    /**
     * Suspend the current page so that it can later be resumed.
     *
     * @param string $optlist
     */
    public function suspend_page($optlist);


    /**
     * Translate the origin of the coordinate system.
     *
     * @param double $tx
     * @param double $ty
     */
    public function translate($tx, $ty);
}
