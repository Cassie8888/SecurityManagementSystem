<?php
$password=$_POST['userpwd'];

//获得哈希值
$hash=password_hash($password,PASSWORD_DEFAULT);

//使用libsodium库对哈希值加密
$secret_key = sodium_crypto_secretbox_keygen();
$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
$encrypted_message = sodium_crypto_secretbox($hash, $nonce, $secret_key);

//验证哈希值时对密文进行解密
$decrypted_message = sodium_crypto_secretbox_open($encrypted_message, $nonce, $secret_key);
?>