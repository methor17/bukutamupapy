Program yang dibuat menggunakan bahasa pemrograman PHP , HTML, Javascript dan menggunakan CSS framework Materalize. 
Untuk penggunaan aplikasi ini diperlukan mysql server untuk penyimpanan databasenya dan apache server serta aplikasi web browser untuk membuka program buku tamu nya.
Berikut adalah cara penginstalan dan penggunaan program sistem informasi buku tamu berbasis WEB di PT. Papyrus Sakti Paper Mill :

1. Siapkan software XAMPP dan web browser(Mozila Firefox, Google Chrome dsb) kemudian instal dikomputer apabila belum terinstal.

2. Jika sudah terinstal buka Control Panel XAMPP , aktif kan apache server dan mysql servernya

3. Kemudian pindahkan program aplikasi buku tamunya yaitu folder tamu_papyrus ke tempat penginstalan XAMPPnya misal di C:\xampp\htdocs

4. Kemudian buka aplikasi web browser dan masuk ke phpmyadmin nya , dan buat lah database dengan nama dbtamu_papyrus

5. Kemudian impor kan file dbtamu_papyrus.sql ke database yang telah dibuat. Maka database sudah siap digunakan.

6. Untuk masuk ke programnya ketik localhost/tamu_papyrus di web browsernya .

7. Jika berhasil maka akan tampil halaman login buku tamu. Untuk masuk coba dengan memilih shift pengguna
   misal pilih username : A – Dadang S dan masuk password : 398023
   
8. Jika berhasil maka sistem akan masuk kehalaman beranda pengguna.

9. Untuk menambah tamu yang akan berkunjung dapat memilih menu di samping kan dengan pilihan Pengisian Buku tamu.

10. Sistem akan menampilkan form pengisian buku tamu. Masukan data yang diperlukan dan pilih tombol Simpan. Dan data berhasil disimpan.

11. Supaya tidak lupa untuk mencetak form tamu, sistem akan menampilkan kebagian halaman cetak form data tamu ,
    klik tombol cetak untuk cetak dengan catatan : Komputer sudah terinstal printer
	
12. Dan klik beranda untuk kembali ke halaman beranda.

13. Pada halaman beranda , terdapat daftar data tamu yang sedang berkunjung maupun yang telah berkunjung. 
Supaya tidak terjadi kesalahan dan dapat membedakan mana yang sedang dan yang sudah berkunjung. 
Data tamu yang sedang berkunjung terdapat tombol checkout yang menandakan tamu tersebut belum keluar dan tidak terdapat tombol hapus untuk menjaga 
data tamu tidak hilang sebelum tamu tersebut keluar. Dan untuk data tamu yang telah berkunjung tombol checkout nya telah hilang tetapi terdapat tombol hapus.

14. Untuk melakukan checkout , terdapat fitur pencarian nomor tamu di bagian atas kanan. Ini memudahkan pencarian data tamu yang akan keluar.

15. Klik tombol checkout jika tamu telah keluar.

16. Bagian kiri terdapat menu untuk melakukan cetak laporan . dan laporan nya terbagi dalam dua bagian yaitu cetak laporan data tamu hari ini 
dan cetak laporan data tamu berdasarkan priode tanggal yang telah ditentukan.

17. Jika masih mengalami kesulitan di menu kiri juga terdapat bantuan untuk membantu memudahkan penggunaan sistem buku tamu ini.