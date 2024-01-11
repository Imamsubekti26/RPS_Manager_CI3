<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Amikom RPS Manager</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <style>
      * {
        font-family: "Bookman Old Style", serif !important;
      }

      p,
      hr {
        margin-top: 0;
        margin-bottom: 0;
      }

      .center-img {
        margin-top: 12px;
        margin-bottom: 12px;
      }
      @media print {
        @page {
            size: A4 landscape;
            margin: 2.5rem 5rem 2.5rem 5rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="container-lg">
      <h3 class="text-center mt-4 fw-bold">
        RENCANA PEMBELAJARAN SEMESTER (RPS)
      </h3>
      <hr />
      <p class="text-center small">FM-PJM-011/Rev.00/25 Jan 2018</p>
      <div class="d-flex justify-content-center">
        <img
          src="https://icei.ac.id/static/comprehensive/images/logoamikom.png"
          alt="Logo Amikom"
          height="90"
          class="my-4"
        />
      </div>
      <hr />
      <h5 class="text-center fw-bold">MATA KULIAH: <?= $basic['nama_matkul']?></h5>
      <hr />
      <h5 class="text-center fw-bold">Program Studi: <?= $basic['nama_prodi']?></h5>
      <hr />
      <div class="row text-center">
        <div class="col">Nomor</div>
        <div class="col">Tgl. Berlaku</div>
        <div class="col">Tgl. Disusun</div>
        <div class="col">Revisi</div>
      </div>
      <hr />
      <div class="row text-center">
        <div class="col">RPS-DT-032</div>
        <div class="col"><?= $basic['tahun']?></div>
        <div class="col">15 September <?= $basic['tahun']?></div>
        <div class="col">00</div>
      </div>
      <hr />
      <hr class="mt-4" />
      <div class="row text-center align-items-center">
        <div class="col">
          <p>Disetujui oleh,</p>
          <p>Dekan Ilmu Komputer</p>
        </div>
        <div class="col">
          <p>Diperiksa Oleh,</p>
          <p>Kaprodi <?= $basic['nama_prodi']?></p>
        </div>
        <div class="col"><p>Disusun Oleh,</p></div>
        <div class="col">
          <p>Dikendalikan oleh,</p>
          <p>Sekretaris Prodi <?= $basic['nama_prodi']?></p>
        </div>
      </div>
      <hr />
      <div class="row text-center">
        <div class="col d-flex flex-column my-3">
          <img
            src="https://theinvestor.id/wp-content/uploads/2020/07/Ttd.png"
            alt="ttd"
            height="50"
          />
          <strong class="text-decoration-underline"
            >Hanif Al Fattah, M.Kom</strong
          >
          <p>NIK. 191238239</p>
        </div>
        <div class="col d-flex flex-column my-3">
          <img
            src="https://theinvestor.id/wp-content/uploads/2020/07/Ttd.png"
            alt="ttd"
            height="50"
          />
          <strong class="text-decoration-underline"
            >Hanif Al Fattah, M.Kom</strong
          >
          <p>NIK. 191238239</p>
        </div>
        <div class="col d-flex flex-column my-3">
          <img
            src="https://theinvestor.id/wp-content/uploads/2020/07/Ttd.png"
            alt="ttd"
            height="50"
          />
          <strong class="text-decoration-underline"
            >Hanif Al Fattah, M.Kom</strong
          >
          <p>NIK. 191238239</p>
        </div>
        <div class="col d-flex flex-column my-3">
          <img
            src="https://theinvestor.id/wp-content/uploads/2020/07/Ttd.png"
            alt="ttd"
            height="50"
          />
          <strong class="text-decoration-underline"
            >Hanif Al Fattah, M.Kom</strong
          >
          <p>NIK. 191238239</p>
        </div>
      </div>
      <hr />
      <div class="text-center mt-4">
        <h5 class="fw-bold">UNIVERSITAS AMIKOM YOGYAKARTA</h5>
        <h5 class="fw-bold">YOGYAKARTA</h5>
        <h5 class="fw-bold"><?= $basic['tahun']?></h5>
      </div>
      <table class="table table-bordered small">
        <tr>
          <td rowspan="2" width="25%">
            <div
              class="d-flex justify-content-center align-items-center center-img"
            >
              <img
                src="https://icei.ac.id/static/comprehensive/images/logoamikom.png"
                alt="Logo Amikom"
                width="200"
              />
            </div>
          </td>
          <td rowspan="2" width="50%" class="text-center">
            <h6>RENCANA PEMBELAJARAN SEMESTER</h6>
            <h6>PROGRAM STUDI:<?= $basic['nama_prodi']?></h6>
            <h6>MATAKULIAH <?= $basic['nama_matkul']?> (DT032)</h6>
          </td>
          <td width="10%" class="text-end">
            <i>Nomor</i><br />
            <i>Tgl. Disusun</i><br />
            <i>Revisi</i>
          </td>
          <td width="15%">
            <i>: RPS-DT-032 </i><br />
            <i>: 12 Mei 2022 </i><br />
            <i>: 00 </i>
          </td>
        </tr>
        <tr>
          <td class="text-end"><i>Halaman</i></td>
          <td><i>Hal. 2 dari 12</i></td>
        </tr>
      </table>
      <div class="bg-light p-1" id="identitas">
        <strong>1. Identitas</strong>
      </div>
      <table class="table table-bordered mt-3 mb-4 small">
        <tr>
          <td width="20%">Program Studi</td>
          <td width="30%"><?= $basic['nama_prodi']?></td>
          <td width="10%">Semester</td>
          <td width="40%" colspan="6"><?= $basic['semester'] % 2 == 0 ? 'Genap' : 'Gasal' ?> (<?= $basic['semester']?>)</td>
        </tr>
        <tr>
          <td>Nama & Kode Mata Kuliah</td>
          <td><?= $basic['nama_matkul']?> - DT032</td>
          <td>Bobot SKS</td>
          <td colspan="6"><?= $basic['sks_teori']?> Teori <?= $basic['sks_praktek']?> Praktek</td>
        </tr>
        <tr>
          <td rowspan="3">Detail Persentase Penilaian</td>
          <td rowspan="3">
            <ul>
              <?php foreach ($nilai as $key) :?>
              <li><?=$key['persentase']?>% <?=$key['deskripsi']?></li>
              <?php endforeach ?>
            </ul>
          </td>
          <td>Dosen Pengampu</td>
          <td colspan="6">Nama Dosen m.Kom (NIK. 12345678)</td>
        </tr>
        <tr>
          <td rowspan="2">Klasifikasi Nilai</td>
          <td>80 - 100</td>
          <td>60 - 79</td>
          <td>40 - 59</td>
          <td>20 - 39</td>
          <td>1 - 19</td>
        </tr>
        <tr>
          <td>A</td>
          <td>B</td>
          <td>C</td>
          <td>D</td>
          <td>E</td>
        </tr>
      </table>
      <div class="bg-light p-1" id="gambaran-umum">
        <strong>2. Gambaran Umum</strong>
      </div>
      <div class="small mt-3 mb-4 ms-4">
        <?= $basic['gambaran_umum']?>
      </div>
      <div class="bg-light p-1" id="capaian-pembelajaran">
        <strong>3. Capaian Pembelajaran</strong>
      </div>
      <div class="small mt-3 mb-4 ms-4">
        <?= $basic['capaian_pembelajaran']?>
      </div>
      <div class="bg-light p-1" id="prasyarat-pengetahuan-awal">
        <strong>4. Prasyarat dan Pengetahuan awal</strong>
      </div>
      <div class="small mt-3 mb-4 ms-4">
        <?= $basic['prasyarat']?>
      </div>
      <div class="bg-light p-1" id="unit-pembelajaran-awal">
        <strong>5. Unit-unit Pembelajaran Awal</strong>
      </div>
      <div class="mt-3 mb-4 ms-3">
        <table class="table table-bordered small">
          <thead class="text-center">
            <th width="16.6%">Kemampuan Akhir yang diharapkan</th>
            <th width="16.6%">Indikator</th>
            <th width="16.6%">Bahan Kajian</th>
            <th width="15%">Metode Pembelajaran</th>
            <th width="10%">Waktu</th>
            <th width="12.5%">Metode Penilaian</th>
            <th width="12.5%">Bahan Ajar</th>
          </thead>
          <tbody>
            <?php foreach ($unit as $key) : ?>
            <tr>
              <td><?= $key['kemampuan']?></td>
              <td><?= $key['indikator']?></td>
              <td><?= $key['bahan_kajian']?></td>
              <td><?= $key['metode_pem']?></td>
              <td><?= $key['lama_waktu']?></td>
              <td><?= $key['metode_pen']?> </td>
              <td><?= $key['bahan_ajar']?></td>
            </tr>
            <?php endforeach?>
          </tbody>
        </table>
      </div>
      <div class="bg-light p-1" id="tugas-aktifitas-penilaian">
        <strong>6. Tugas / Akktifitas dan Penilaian</strong>
      </div>
      <div class="mt-3 mb-4 ms-3">
        <table class="table table-bordered small">
          <thead class="text-center">
            <th width="15%">Tugas / Aktifitas</th>
            <th width="15%">Kemampuan Akhir yang Diharapkan atau Dievaluasi</th>
            <th width="10%">Waktu</th>
            <th width="10%">Bobot</th>
            <th width="22%">Kriteria Penilaian</th>
            <th width="23%">Indikator Penilaian</th>
          </thead>
          <tbody>
            <?php foreach ($tugas as $key) : ?>
            <tr>
              <td><?= $key['tugas']?></td>
              <td><?= $key['kemampuan']?></td>
              <td><?= $key['lama_waktu']?></td>
              <td><?= $key['bobot_nilai']?></td>
              <td><?= $key['kriteria_pen']?></td>
              <td><?= $key['indikator_pen']?></td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <div class="bg-light p-1" id="referensi-pembelajaran">
        <strong>7. Referensi Pembelajaran</strong>
      </div>
      <div class="small mt-3 mb-4 ms-3">
        <ol>
          <?php foreach ($referensi as $key) : ?>
          <li>
            <?= $key['deskripsi'] ?>
          </li>
          <?php endforeach ?>
        </ol>
      </div>
      <div class="bg-light p-1" id="rencana-pelaksanaan-pembelajaran">
        <strong>8. Rencana Pelaksanaan Pembelajaran</strong>
      </div>
      <div class="mt-3 mb-4 ms-3">
        <table class="table table-bordered small">
          <thead class="text-center">
            <th width="5%">Minggu / Pertemuan</th>
            <th width="15%">Kemampuan Akhir yang Diharapkan</th>
            <th width="25%">Indikator</th>
            <th width="15%">Topik & Sub Topik</th>
            <th width="15%">Aktifitas dan Strategi Pembelajaran</th>
            <th width="12.5%">Waktu</th>
            <th width="12.5%">Penilaian</th>
          </thead>
          <tbody>
            <?php foreach ($rencana as $key): ?>
            <tr>
              <td><?= $key['pertemuan_ke']?></td>
              <td><?= $key['kemampuan']?></td>
              <td><?= $key['indikator']?></td>
              <td><?= $key['topik_subtopik']?></td>
              <td><?= $key['strategi']?></td>
              <td><?= $key['lama_waktu']?></td>
              <td><?= $key['penilaian']?></td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
