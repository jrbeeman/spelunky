<?php

/**
 * @file
 * Contains \Drupal\Tests\Component\Utility\UnicodeTest.
 */

namespace Drupal\Tests\Component\Utility;

use Drupal\Tests\UnitTestCase;
use Drupal\Component\Utility\Unicode;

/**
 * Test unicode handling features implemented in Unicode component.
 *
 * @see \Drupal\Component\Utility\Unicode
 *
 * @group Drupal
 * @group Unicode
 */
class UnicodeTest extends UnitTestCase {

  public static function getInfo() {
    return array(
      'name' => 'Unicode handling',
      'description' => 'Tests Drupal Unicode handling.',
      'group' => 'System',
    );
  }

  public function setUp() {
    // Initialize unicode component.
    Unicode::check();
  }

  /**
   * Tests Unicode::getStatus() and Unicode::setStatus().
   *
   * @dataProvider providerTestStatus
   */
  public function testStatus($value, $expected, $invalid = FALSE) {
    if ($invalid) {
      $this->setExpectedException('InvalidArgumentException');
    }
    Unicode::setStatus($value);
    $this->assertEquals($expected, Unicode::getStatus());
  }

  /**
   * Data provider for testStatus().
   *
   * @see testStatus()
   *
   * @return array
   *   An array containing:
   *     - The status value to set.
   *     - The status value to expect after setting the new value.
   *     - (optional) Boolean indicating invalid status. Defaults to FALSE.
   */
  public function providerTestStatus() {
    return array(
      array(Unicode::STATUS_SINGLEBYTE, Unicode::STATUS_SINGLEBYTE),
      array(rand(10, 100), Unicode::STATUS_SINGLEBYTE, TRUE),
      array(rand(10, 100), Unicode::STATUS_SINGLEBYTE, TRUE),
      array(Unicode::STATUS_MULTIBYTE, Unicode::STATUS_MULTIBYTE),
      array(rand(10, 100), Unicode::STATUS_MULTIBYTE, TRUE),
      array(Unicode::STATUS_ERROR, Unicode::STATUS_ERROR),
      array(Unicode::STATUS_MULTIBYTE, Unicode::STATUS_MULTIBYTE),
    );
  }

  /**
   * Tests Unicode::mimeHeaderEncode() and Unicode::mimeHeaderDecode().
   *
   * @dataProvider providerTestMimeHeader
   */
  public function testMimeHeader($value, $encoded) {
    $this->assertEquals($encoded, Unicode::mimeHeaderEncode($value));
    $this->assertEquals($value, Unicode::mimeHeaderDecode($encoded));
  }

  /**
   * Data provider for testMimeHeader().
   *
   * @see testMimeHeader()
   *
   * @return array
   *   An array containing a string and its encoded value.
   */
  public function providerTestMimeHeader() {
    return array(
      array('tést.txt', '=?UTF-8?B?dMOpc3QudHh0?='),
      // Simple ASCII characters.
      array('ASCII', 'ASCII'),
    );
  }

  /**
   * Tests Unicode::strtolower().
   *
   * @dataProvider providerStrtolower
   */
  public function testStrtolower($text, $expected, $multibyte = FALSE) {
    $status = $multibyte ? Unicode::STATUS_MULTIBYTE : Unicode::STATUS_SINGLEBYTE;
    Unicode::setStatus($status);
    $this->assertEquals($expected, Unicode::strtolower($text));
  }

  /**
   * Data provider for testStrtolower().
   *
   * @see testStrtolower()
   *
   * @return array
   *   An array containing a string, its lowercase version and whether it should
   *   be processed as multibyte.
   */
  public function providerStrtolower() {
    $cases = array(
      array('tHe QUIcK bRoWn', 'the quick brown'),
      array('FrançAIS is ÜBER-åwesome', 'français is über-åwesome'),
    );
    foreach ($cases as $case) {
      // Test the same string both in multibyte and singlebyte conditions.
      array_push($case, TRUE);
      $cases[] = $case;
    }
    // Add a multibyte string.
    $cases[] = array('ΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΣὨ', 'αβγδεζηθικλμνξοσὠ', TRUE);
    return $cases;
  }

  /**
   * Tests Unicode::strtoupper().
   *
   * @dataProvider providerStrtoupper
   */
  public function testStrtoupper($text, $expected, $multibyte = FALSE) {
    $status = $multibyte ? Unicode::STATUS_MULTIBYTE : Unicode::STATUS_SINGLEBYTE;
    Unicode::setStatus($status);
    $this->assertEquals($expected, Unicode::strtoupper($text));
  }

  /**
   * Data provider for testStrtoupper().
   *
   * @see testStrtoupper()
   *
   * @return array
   *   An array containing a string, its uppercase version and whether it should
   *   be processed as multibyte.
   */
  public function providerStrtoupper() {
    $cases = array(
      array('tHe QUIcK bRoWn', 'THE QUICK BROWN'),
      array('FrançAIS is ÜBER-åwesome', 'FRANÇAIS IS ÜBER-ÅWESOME'),
    );
    foreach ($cases as $case) {
      // Test the same string both in multibyte and singlebyte conditions.
      array_push($case, TRUE);
      $cases[] = $case;
    }
    // Add a multibyte string.
    $cases[] = array('αβγδεζηθικλμνξοσὠ', 'ΑΒΓΔΕΖΗΘΙΚΛΜΝΞΟΣὨ', TRUE);
    return $cases;
  }

  /**
   * Tests Unicode::ucfirst().
   *
   * @dataProvider providerUcfirst
   */
  public function testUcfirst($text, $expected) {
    $this->assertEquals($expected, Unicode::ucfirst($text));
  }

  /**
   * Data provider for testUcfirst().
   *
   * @see testUcfirst()
   *
   * @return array
   *   An array containing a string and its uppercase first version.
   */
  public function providerUcfirst() {
    return array(
      array('tHe QUIcK bRoWn', 'THe QUIcK bRoWn'),
      array('françAIS', 'FrançAIS'),
      array('über', 'Über'),
      array('åwesome', 'Åwesome'),
      // A multibyte string.
      array('σion', 'Σion'),
    );
  }

  /**
   * Tests Unicode::strlen().
   *
   * @dataProvider providerStrlen
   */
  public function testStrlen($text, $expected) {
    // Run through multibyte code path.
    Unicode::setStatus(Unicode::STATUS_MULTIBYTE);
    $this->assertEquals($expected, Unicode::strlen($text));
    // Run through singlebyte code path.
    Unicode::setStatus(Unicode::STATUS_SINGLEBYTE);
    $this->assertEquals($expected, Unicode::strlen($text));
  }

  /**
   * Data provider for testStrlen().
   *
   * @see testStrlen()
   *
   * @return array
   *   An array containing a string and its length.
   */
  public function providerStrlen() {
    return array(
      array('tHe QUIcK bRoWn', 15),
      array('ÜBER-åwesome', 12),
    );
  }

  /**
   * Tests Unicode::substr().
   *
   * @dataProvider providerSubstr
   */
  public function testSubstr($text, $start, $length, $expected) {
    // Run through multibyte code path.
    Unicode::setStatus(Unicode::STATUS_MULTIBYTE);
    $this->assertEquals($expected, Unicode::substr($text, $start, $length));
    // Run through singlebyte code path.
    Unicode::setStatus(Unicode::STATUS_SINGLEBYTE);
    $this->assertEquals($expected, Unicode::substr($text, $start, $length));
  }

  /**
   * Data provider for testSubstr().
   *
   * @see testSubstr()
   *
   * @return array
   *   An array containing:
   *     - The string to test.
   *     - The start number to be processed by substr.
   *     - The length number to be processed by substr.
   *     - The expected string result.
   */
  public function providerSubstr() {
    return array(
      array('frànçAIS is über-åwesome', 0, 0, ''),
      array('frànçAIS is über-åwesome', 0, 1, 'f'),
      array('frànçAIS is über-åwesome', 0, 8, 'frànçAIS'),
      array('frànçAIS is über-åwesome', 0, 23, 'frànçAIS is über-åwesom'),
      array('frànçAIS is über-åwesome', 0, 24, 'frànçAIS is über-åwesome'),
      array('frànçAIS is über-åwesome', 0, 25, 'frànçAIS is über-åwesome'),
      array('frànçAIS is über-åwesome', 0, 100, 'frànçAIS is über-åwesome'),
      array('frànçAIS is über-åwesome', 4, 4, 'çAIS'),
      array('frànçAIS is über-åwesome', 1, 0, ''),
      array('frànçAIS is über-åwesome', 100, 0, ''),
      array('frànçAIS is über-åwesome', -4, 2, 'so'),
      array('frànçAIS is über-åwesome', -4, 3, 'som'),
      array('frànçAIS is über-åwesome', -4, 4, 'some'),
      array('frànçAIS is über-åwesome', -4, 5, 'some'),
      array('frànçAIS is über-åwesome', -7, 10, 'åwesome'),
      array('frànçAIS is über-åwesome', 5, -10, 'AIS is üb'),
      array('frànçAIS is über-åwesome', 0, -10, 'frànçAIS is üb'),
      array('frànçAIS is über-åwesome', 0, -1, 'frànçAIS is über-åwesom'),
      array('frànçAIS is über-åwesome', -7, -2, 'åweso'),
      array('frànçAIS is über-åwesome', -7, -6, 'å'),
      array('frànçAIS is über-åwesome', -7, -7, ''),
      array('frànçAIS is über-åwesome', -7, -8, ''),
      array('...', 0, 2, '..'),
      array('以呂波耳・ほへとち。リヌルヲ。', 1, 3, '呂波耳'),
    );
  }

  /**
   * Tests Unicode::truncate().
   *
   * @dataProvider providerTruncate
   */
  public function testTruncate($text, $max_length, $expected, $wordsafe = FALSE, $add_ellipsis = FALSE) {
    Unicode::check();
    $this->assertEquals($expected, Unicode::truncate($text, $max_length, $wordsafe, $add_ellipsis));
  }

  /**
   * Data provider for testTruncate().
   *
   * @see testTruncate()
   *
   * @return array
   *   An array containing:
   *     - The string to test.
   *     - The max length to truncate this string to.
   *     - The expected string result.
   *     - (optional) Boolean for the $wordsafe flag. Defaults to FALSE.
   *     - (optional) Boolean for the $add_ellipsis flag. Defaults to FALSE.
   */
  public function providerTruncate() {
    return array(
      array('frànçAIS is über-åwesome', 24, 'frànçAIS is über-åwesome'),
      array('frànçAIS is über-åwesome', 23, 'frànçAIS is über-åwesom'),
      array('frànçAIS is über-åwesome', 17, 'frànçAIS is über-'),
      array('以呂波耳・ほへとち。リヌルヲ。', 6, '以呂波耳・ほ'),
      array('frànçAIS is über-åwesome', 24, 'frànçAIS is über-åwesome', FALSE, TRUE),
      array('frànçAIS is über-åwesome', 23, 'frànçAIS is über-åweso…', FALSE, TRUE),
      array('frànçAIS is über-åwesome', 17, 'frànçAIS is über…', FALSE, TRUE),
      array('123', 1, '…', TRUE, TRUE),
      array('123', 2, '1…', TRUE, TRUE),
      array('123', 3, '123', TRUE, TRUE),
      array('1234', 3, '12…', TRUE, TRUE),
      array('1234567890', 10, '1234567890', TRUE, TRUE),
      array('12345678901', 10, '123456789…', TRUE, TRUE),
      array('12345678901', 11, '12345678901', TRUE, TRUE),
      array('123456789012', 11, '1234567890…', TRUE, TRUE),
      array('12345 7890', 10, '12345 7890', TRUE, TRUE),
      array('12345 7890', 9, '12345…', TRUE, TRUE),
      array('123 567 90', 10, '123 567 90', TRUE, TRUE),
      array('123 567 901', 10, '123 567…', TRUE, TRUE),
      array('Stop. Hammertime.', 17, 'Stop. Hammertime.', TRUE, TRUE),
      array('Stop. Hammertime.', 16, 'Stop…', TRUE, TRUE),
      array('frànçAIS is über-åwesome', 24, 'frànçAIS is über-åwesome', TRUE, TRUE),
      array('frànçAIS is über-åwesome', 23, 'frànçAIS is über…', TRUE, TRUE),
      array('frànçAIS is über-åwesome', 17, 'frànçAIS is über…', TRUE, TRUE),
      array('¿Dónde está el niño?', 20, '¿Dónde está el niño?', TRUE, TRUE),
      array('¿Dónde está el niño?', 19, '¿Dónde está el…', TRUE, TRUE),
      array('¿Dónde está el niño?', 13, '¿Dónde está…', TRUE, TRUE),
      array('¿Dónde está el niño?', 10, '¿Dónde…', TRUE, TRUE),
      array('Help! Help! Help!', 17, 'Help! Help! Help!', TRUE, TRUE),
      array('Help! Help! Help!', 16, 'Help! Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 15, 'Help! Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 14, 'Help! Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 13, 'Help! Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 12, 'Help! Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 11, 'Help! Help…', TRUE, TRUE),
      array('Help! Help! Help!', 10, 'Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 9, 'Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 8, 'Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 7, 'Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 6, 'Help!…', TRUE, TRUE),
      array('Help! Help! Help!', 5, 'Help…', TRUE, TRUE),
      array('Help! Help! Help!', 4, 'Hel…', TRUE, TRUE),
      array('Help! Help! Help!', 3, 'He…', TRUE, TRUE),
      array('Help! Help! Help!', 2, 'H…', TRUE, TRUE),
    );
  }

  /**
   * Tests Unicode::truncateBytes().
   *
   * @param string $text
   *   The string to truncate.
   * @param int $max_length
   *   The upper limit on the returned string length.
   * @param string $expected
   *   The expected return from Unicode::truncateBytes().
   *
   * @dataProvider providerTestTruncateBytes
   */
  public function testTruncateBytes($text, $max_length, $expected) {
    $this->assertEquals($expected, Unicode::truncateBytes($text, $max_length), 'The string was not correctly truncated.');
  }

  /**
   * Provides data for self::testTruncateBytes().
   *
   * @return array
   *   An array of arrays, each containing the parameters to
   *   self::testTruncateBytes().
   */
  public function providerTestTruncateBytes() {
    return array(
      // String shorter than max length.
      array('Short string', 42, 'Short string'),
      // Simple string longer than max length.
      array('Longer string than previous.', 10, 'Longer str'),
      // Unicode.
      array('以呂波耳・ほへとち。リヌルヲ。', 10, '以呂波'),
    );
  }

  /**
   * Tests Unicode::validateUtf8().
   *
   * @param string $text
   *   The text to validate.
   * @param boolean $expected
   *   The expected return value from Unicode::validateUtf8().
   * @param string $message
   *   The message to display on failure.
   *
   * @dataProvider providerTestValidateUtf8
   */
  public function testValidateUtf8($text, $expected, $message) {
    $this->assertEquals($expected, Unicode::validateUtf8($text), $message);
  }

  /**
   * Provides data for self::testValidateUtf8().
   *
   * @return array
   *   An array of arrays, each containing the parameters for
   *   self::testValidateUtf8().
   *
   * Invalid UTF-8 examples sourced from http://stackoverflow.com/a/11709412/109119.
   */
  public function providerTestValidateUtf8() {
    return array(
      // Empty string.
      array('', TRUE, 'An empty string did not validate.'),
      // Simple text string.
      array('Simple text.', TRUE, 'A simple ASCII text string did not validate.'),
      // Invalid UTF-8, overlong 5 byte encoding.
      array(chr(0xF8) . chr(0x80) . chr(0x80) . chr(0x80) . chr(0x80), FALSE, 'Invalid UTF-8 was validated.'),
      // High code-point without trailing characters.
      array(chr(0xD0) . chr(0x01), FALSE, 'Invalid UTF-8 was validated.'),
    );
  }

  /**
   * Tests Unicode::convertToUtf8().
   *
   * @param string $data
   *   The data to be converted.
   * @param string $encoding
   *   The encoding the data is in.
   * @param string|bool $expected
   *   The expected result.
   *
   * @dataProvider providerTestConvertToUtf8
   */
  public function testConvertToUtf8($data, $encoding, $expected) {
    $this->assertEquals($expected, Unicode::convertToUtf8($data, $encoding));
  }

  /**
   * Provides data to self::testConvertToUtf8().
   *
   * @return array
   *   An array of arrays, each containg the parameters to
   *   self::testConvertUtf8().  }
   */
  public function providerTestConvertToUtf8() {
    return array(
      array(chr(0x97), 'Windows-1252', '—'),
      array(chr(0x99), 'Windows-1252', '™'),
      array(chr(0x80), 'Windows-1252', '€'),
    );
  }

}
