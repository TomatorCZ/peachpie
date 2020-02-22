<?php
$PrivateKeyRSA = "-----BEGIN PRIVATE KEY-----
MIICdgIBADANBgkqhkiG9w0BAQEFAASCAmAwggJcAgEAAoGBAMS2OjUBKiQKcdgJ
9ESslDIrfmajMC2k4wEYLsfStdzJOLEIoLuwUdZnp6e0VryqMmSB17o0WlQyM2IJ
SzEEXaw27mk7mroasHUkIsOdnuJPhZeZws60KlhK1VJJ13XoOfNw0sFinEoK3S8q
tAC5ZNsNNTHrF3IxfbvcpbmMARJ/AgMBAAECgYEAgifcvaOGoZAzoXF8qU/TQpra
qMjDIQBfnyLEGT1HTc3qb+C4kVdp3sZ4/RLq7Sxj6XKsLa1kMx+ANhbWJJmx7A1M
gV+l0zfeQup+qQl80hSiBecoz9rz2CWgsoiJSs1rYd8vCs4GeeMgjVL31kCQpv3Y
48K14h8eM0Z21mobt/kCQQD5jQ2xWAWiCBW+Og0TJVsiNtjTJHlELq3ZR41yGsKH
8PL7SwS8uoufebn6lOeTI5892tzYVY5/o8mmUuoOw1YDAkEAycubhd97rJJS48J4
0sKF+E9WnFse3xLm5+3F6/VJAX68L5ob8DsRCx12H6M1dgH/EHoLCzn2+2EhqvAI
BdzW1QJAQ3CSJb4i75H9xkXL6MOsqEdoO09dEkcHJnQGzrJapgBAuhag9hv3xaZQ
015QYtw6ma2/BxvAAdCSm0dHB6xUXwJANMqQWDh8CUyKZM1GgJSlKa3P0b3A2MkA
IWLB6ZXU0JBQOP/PGUzKi6bcdTBkVwf0q2HSK9CxPVhOz4JWBvqcNQJAH54zl4ye
JDWwDEXQoJ/mVUkNMDFJpwMZQOks15DktKX47IjMVxgbl9sgKSP7VSl8Kyou6bUi
HyM0VaTSYwmbXA==
-----END PRIVATE KEY-----";

$PrivateKeyDSA = "-----BEGIN PRIVATE KEY-----
MIIBSwIBADCCASwGByqGSM44BAEwggEfAoGBAO4P0ZNUyZWix2OckSJnQSt6fnWc
TK42r+HhQ4Z/Ep8iRv+7TwdttslcRsvP89j8C7p82yyUp3AsfIDNYRMjw0SfAMzV
c2b3IBVQRG079MDXKGcafzGTNW4nkKnc6M7OH67tj61+gKnoRGZNr0ITow4yih0q
0S3ZIHJfDJUFcKNtAhUA4XBd/MITD2MMAcA5eXAL2BvCWbECgYEAzysprqoD/hJP
dl2Oe38lWOp1ToVnpFDO2ykDfideJmJK3SuQp43J4Y+0alDlsCOUc77BNymMIzYd
2KUpXYdgoE8P++IfmX4NVwTMHaQ+iRq04h3MJ8cfJxzOUBinRx7OteC2Kqs+9IJn
K4g1qVA4s0XYTmBVkrd2V9cXNtIgxp8EFgIUa1tHP6PjC9GUPOOhKdecl5k4CzA=
-----END PRIVATE KEY-----";

//curve_name = "secp112r1"
$PrivateKeyEC="-----BEGIN EC PRIVATE KEY-----
MD4CAQEEDpOcl1oJ+N6Ug+Yzw9dcoAcGBSuBBAAGoSADHgAEi+ZQxy/Qd238+QnF
ysGG5RoAUZ/rCaffR4Be/Q==
-----END EC PRIVATE KEY-----";

//curve_name = "secp112r1"
$PrivateKeyDH="-----BEGIN PRIVATE KEY-----
MIIBIQIBADCBlQYJKoZIhvcNAQMBMIGHAoGBAMcQcLo8G5PaoAbSE05x6AvLUHKT
lhNGBKW58NqL8wFOyAbSzB6gGx2nkM0U6i7klcqUEAWckY9FKni5qRoJQi16iyNl
aBwiUfzmnPlZ0IfMACEC/v1ehW+eVH0VYDIKwu37RK0T3pcPoCdxh1m0sVEC0bWF
DtOzhBewl9Erew6zAgECBIGDAoGAcz8eTHHynjzbZ4WHasr3h06BqpNgX5EeU/7d
g1SprJq9CekiElk9XAxNxH78IApP6xq3PAeBUQGYMf6uZiDDCG2lpVuLRCXX8KOT
hRBp5Qb5qkTdNYUMLblfEpXrrroAxbWoNv9R7i7FRFfff7VeNgMB6lIc24FZdhI9
4wfqqSQ=
-----END PRIVATE KEY-----
";
$keyRSA = openssl_pkey_get_private($PrivateKeyRSA);
$keyDSA = openssl_pkey_get_private($PrivateKeyDSA);
$keyEC = openssl_pkey_get_private($PrivateKeyEC);
$keyDH = openssl_pkey_get_private($PrivateKeyDH);

openssl_pkey_export($keyRSA, $pemRSA);
openssl_pkey_export($keyDSA, $pemDSA);
openssl_pkey_export($keyEC, $pemEC);
openssl_pkey_export($keyDH, $pemDH);

print_r($pemRSA);
print_r($pemDSA);
print_r($pemEC);
print_r($pemDH);