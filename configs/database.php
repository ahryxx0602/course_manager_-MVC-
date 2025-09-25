<?php
class Database
{
              private static $conn;
              public static function connectPDO()
              {
                            try {
                                          if (class_exists('PDO')) {
                                                        $options = array(
                                                                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // Hỗ trợ tiếng việt
                                                                      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // Đẩy lỗi vào ngoại lệ
                                                        );
                                                        $dns = _DRIVER . ":host=" . _HOST . ";dbname=" . _DB;
                                                        self::$conn = new PDO($dns, _USER, _PASSWORD, $options);
                                          }
                            } catch (PDOException $e) {
                                          http_response_code(500);
                                          echo 'Database connection failed.';
                                          die();
                            }
                            return self::$conn;
              }
}
