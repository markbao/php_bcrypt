<?php
// bcrypt.php
// unit test
// 
// by Mark Bao <opensource@markbao.com>

require("simpletest/autorun.php");
require("../bcrypt.php");

class TestBcryptEncryption extends UnitTestCase {
    function testBcryptEncryptionHashDoesMatch() {
        $bcrypt = new Bcrypt();
        $hash = $bcrypt->hash('plaintext_password');
        $this->assertTrue($bcrypt->verify('plaintext_password', $hash));
    }
    
    function testBcryptEncryptionHashDoesNotMatch() {
        $bcrypt = new Bcrypt();
        $hash = $bcrypt->hash('plaintext_password');
        $this->assertFalse($bcrypt->verify('plaintext_password', md5($hash)));
    }
    
    function testBcryptEncryptionPlaintextDoesNotMatch() {
        $bcrypt = new Bcrypt();
        $hash = $bcrypt->hash('plaintext_password');
        $this->assertFalse($bcrypt->verify('plaintext_password_not_this_one', $hash));
    }
}