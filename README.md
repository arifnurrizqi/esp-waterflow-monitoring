# waterflow-monitoring
Visualize waterflow usage from Anywhere in the World (ESP32 + MySQL + PHP)
using the Fetch method with Interval (Polling) to auto update the data

## Install on localhost
Use git clone https://github.com/arifnurrizqi/esp-waterflow-monitoring.git or Download repositori ini dalam bentuk zip

selanjutnya ikuti langkah berikut:
1. Install xampp
2. Jalankan & start apache + mysql
3. Copy dan ekstrak file script di folder xampp/htdocs
4. Buat database di PhpMyAdmin : localhost/phpmyadmin
Contoh disini: esp_waterflow
5. Buka folder script yang telah di ekstrak di xampp/htdocs
6. Buka file config.php
8. Ganti nama database, samakan dengan nama database baru pada langkah 4:

Contoh disini: esp_waterflow
'hostname' => 'localhost',
'username' => 'root',
'password' => '',
'database' => 'esp_waterflow',

9. Import database web ke phpmyadmin
10. Setelah database di import. Web siap dijalankan di localhost dengan alamat : localhost/NAMAFOLDER
contoh disini: localhost/esp-waterflow-monitoring
11. Selesai.

### default username & password
username : user
password : 12345678