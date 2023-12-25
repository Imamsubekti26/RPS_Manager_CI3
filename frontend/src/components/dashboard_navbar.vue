<script setup>
import { ref } from 'vue';

const navLinkClass = 'nav-link cursor-pointer ';

const active = ref('draf');
const search = ref('');

function changeFilter(filter){
  active.value = filter
}

</script>

<template>
  <section id="dashboard-menu" class="row align-items-center mb-4 mt-5">
    <div class="col-3">
      <ul class="nav nav-underline">
        <li class="nav-item">
          <div :class="navLinkClass + (active == 'draf' ? 'active' : '') " @click="changeFilter('draf')" id="filter-draf">Draf</div>
        </li>
        <li class="nav-item">
          <div :class="navLinkClass + (active == 'aktif' ? 'active' : '') " @click="changeFilter('aktif')" id="filter-aktif">Aktif</div>
        </li>
        <li class="nav-item">
          <div :class="navLinkClass + (active == 'arsip' ? 'active' : '') " @click="changeFilter('arsip')" id="filter-arsip">Arsip</div>
        </li>
      </ul>
    </div>
    <div class="col-6">
      <input type="search" class="form-control text-center" placeholder="Cari prodi, matkul, atau tahun..." v-model="search" id="form-search" />
    </div>
    <div class="col-3">
      <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#modal-tambah-rps" >
        Tambah RPS
      </button>
    </div>
  </section>
  <hr>
</template>