# 📱 RPS Manager with 🔥CodeIgniter 3

Program RPS manager menggunakan CodeIgniter 3 yang saya buat untuk memenuhi tugas akhir semester saya di Pemrograman Web 2

## 💻 Teknologi

![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E)
![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white)

![Code-Igniter](https://img.shields.io/badge/CodeIgniter-%23EF4223.svg?style=for-the-badge&logo=codeIgniter&logoColor=white)
![jQuery](https://img.shields.io/badge/jquery-%230769AD.svg?style=for-the-badge&logo=jquery&logoColor=white)
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)

## 🪛 Instalasi

1. download atau clone repository ini
2. import file sql yang tersedia di projek ini ke dalam database
3. atur konfigurasi base_url anda di file `config/config.php`
4. atur juga konfigurasi database anda di file `config/database.php`
5. jalankan project menggunakan web server seperti apache atau nginx, atau juga bisa menggunakan build-in server milik php

## 🔌Endpoint

<details>
<summary>Frontend</summary>

| Endpoint          | Method | Fungsi                         |
| ----------------- | ------ | ------------------------------ |
| `auth/login`      | `GET`  | menampilkan halaman login      |
| `auth/register`   | `GET`  | menampilkan halaman register   |
| `dashboard`       | `GET`  | menampilkan halaman dashboard  |
| `rps/(:id_rps)`   | `GET`  | menampilkan halaman detail RPS |
| `print/(:id_rps)` | `GET`  | menampilkan halaman print      |

</details>

<details>
<summary>Autentikasi</summary>

| Endpoint            | Method | Fungsi                      |
| ------------------- | ------ | --------------------------- |
| `api/auth/login`    | `POST` | menangani proses login      |
| `api/auth/register` | `POST` | menangani proses registrasi |
| `api/auth/logout`   | `GET`  | menangani proses logout     |

</details>

<details>
<summary>RPS basic information</summary>

| Endpoint                             | Method   | Fungsi                        |
| ------------------------------------ | -------- | ----------------------------- |
| `api/rps/`                           | `GET`    | mendapatkan semua data RPS    |
| `api/rps/`                           | `POST`   | menambah RPS                  |
| `api/rps/(:id_rps)`                  | `PUT`    | mengedit detail RPS           |
| `api/rps/(:id_rps)`                  | `DELETE` | menghapus RPS                 |
| `api/rps/(:id_rps)/status/(:status)` | `PUT`    | mengedit status RPS           |
| `api/rps/(:id_rps)/gam`              | `PUT`    | mengedit gambaran umum        |
| `api/rps/(:id_rps)/cap`              | `PUT`    | mengedit capaian pembelajaran |
| `api/rps/(:id_rps)/pra`              | `PUT`    | mengedit prasyarat            |

</details>

<details>
<summary>Referensi Pembelajaran</summary>

| Endpoint                                | Method   | Fungsi                                  |
| --------------------------------------- | -------- | --------------------------------------- |
| `api/rps/(:id_rps)/referensi`           | `GET`    | mendapatkan data referensi pembelajaran |
| `api/rps/(:id_rps)/referensi`           | `POST`   | menambahkan data referensi pembelajaran |
| `api/rps/(:id_rps)/referensi/(:id_ref)` | `DELETE` | menghapus referensi pembelajaran        |

</details>

<details>
<summary>Unit-unit Pembelajaran</summary>

| Endpoint                           | Method   | Fungsi                                            |
| ---------------------------------- | -------- | ------------------------------------------------- |
| `api/rps/(:id_rps)/unit`           | `GET`    | mendapatkan semua data unit pembelajaran          |
| `api/rps/(:id_rps)/unit`           | `POST`   | menambahkan data unit pembelajaran                |
| `api/rps/(:id_rps)/unit/(:id_uni)` | `GET`    | mendapatkan data unit pembelajaran berdasarkan id |
| `api/rps/(:id_rps)/unit/(:id_uni)` | `PUT`    | mengedit data unit pembelajaran                   |
| `api/rps/(:id_rps)/unit/(:id_uni)` | `DELETE` | menghapus data unit pembelajaran                  |

</details>

<details>
<summary>Persentase Penilaian</summary>

| Endpoint                             | Method   | Fungsi                                |
| ------------------------------------ | -------- | ------------------------------------- |
| `api/rps/(:id_rps)/persen`           | `GET`    | mendapatkan data persentase penilaian |
| `api/rps/(:id_rps)/persen`           | `POST`   | menambahkan data persentase penilaian |
| `api/rps/(:id_rps)/persen/(:id_per)` | `DELETE` | menghapus persentase penilaian        |

</details>

<details>
<summary>Tugas / Aktifitas Penilaian</summary>

| Endpoint                            | Method   | Fungsi                                                    |
| ----------------------------------- | -------- | --------------------------------------------------------- |
| `api/rps/(:id_rps)/tugas`           | `GET`    | mendapatkan semua data tugas/aktifitas penilaian          |
| `api/rps/(:id_rps)/tugas`           | `POST`   | menambahkan data tugas/aktifitas penilaian                |
| `api/rps/(:id_rps)/tugas/(:id_tug)` | `GET`    | mendapatkan data tugas/aktifitas penilaian berdasarkan id |
| `api/rps/(:id_rps)/tugas/(:id_tug)` | `PUT`    | mengedit data tugas/aktifitas penilaian                   |
| `api/rps/(:id_rps)/tugas/(:id_tug)` | `DELETE` | menghapus data tugas/aktifitas penilaian                  |

</details>

<details>
<summary>Rencana Pembelajaran</summary>

| Endpoint                          | Method   | Fungsi                                               |
| --------------------------------- | -------- | ---------------------------------------------------- |
| `api/rps/(:id_rps)/ren`           | `GET`    | mendapatkan semua data rencana pembelajaran          |
| `api/rps/(:id_rps)/ren`           | `POST`   | menambahkan data rencana pembelajaran                |
| `api/rps/(:id_rps)/ren/(:id_ren)` | `GET`    | mendapatkan data rencana pembelajaran berdasarkan id |
| `api/rps/(:id_rps)/ren/(:id_ren)` | `PUT`    | mengedit data rencana pembelajaran                   |
| `api/rps/(:id_rps)/ren/(:id_ren)` | `DELETE` | menghapus data rencana pembelajaran                  |

</details>

## 👨‍💻 Tentang Saya

- Nama : Imam Subekti
- NIM : 22.01.4813
