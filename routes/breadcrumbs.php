<?php
// Home
Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

// Warga Index
Breadcrumbs::for('admin.warga.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Warga', route('admin.warga.index'));
});

// Warga Add
Breadcrumbs::for('admin.warga.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Warga', route('admin.warga.index'));
    $trail->push('Tambah Warga', route('admin.warga.create'));
});
// Warga Index
Breadcrumbs::for('admin.warga.restore', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Warga', route('admin.warga.index'));
    $trail->push('Warga-restore', route('admin.warga.restore'));
});

// Warga Edit
Breadcrumbs::for('admin.warga.edit', function ($trail, $warga) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Warga', route('admin.warga.index'));
    $trail->push('Edit Warga', route('admin.warga.edit', $warga));
});

// Warga Show
Breadcrumbs::for('admin.warga.show', function ($trail, $warga) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Warga', route('admin.warga.index'));
    $trail->push('Lihat Warga', route('admin.warga.show', $warga));
});

// Perkebunan Index
Breadcrumbs::for('admin.perkebunan.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Perkebunan', route('admin.perkebunan.index'));
    
});

Breadcrumbs::for('admin.perkebunan.restore', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Perkebunan', route('admin.perkebunan.index'));
    $trail->push('Perkebunan-restore', route('admin.perkebunan.restore'));
});

// perkebunan Add
Breadcrumbs::for('admin.perkebunan.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Perkebunan', route('admin.perkebunan.index'));
    $trail->push('Tambah Perkebunan', route('admin.perkebunan.create'));
});

// Warga Edit
Breadcrumbs::for('admin.perkebunan.edit', function ($trail, $perkebunan) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Warga', route('admin.perkebunan.index'));
    $trail->push('Edit Perkebunan', route('admin.perkebunan.edit', $perkebunan));
});

// Warga Show
Breadcrumbs::for('admin.perkebunan.show', function ($trail, $perkebunan) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Warga', route('admin.perkebunan.index'));
    $trail->push('Lihat Warga', route('admin.perkebunan.show', $perkebunan));
});

// Pengumuman Index
Breadcrumbs::for('admin.pengumuman.index', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Pengumuman', route('admin.pengumuman.index'));
});

// pengumuman Add
Breadcrumbs::for('admin.pengumuman.create', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Pengumuman', route('admin.pengumuman.index'));
    $trail->push('Tambah Pengumuman', route('admin.pengumuman.create'));
});

// Pengumuman Edit
Breadcrumbs::for('admin.pengumuman.edit', function ($trail, $pengumuman) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Pengumuman', route('admin.pengumuman.index'));
    $trail->push('Edit Pengumuman', route('admin.pengumuman.edit', $pengumuman));
});

// Pengumuman Show
Breadcrumbs::for('admin.pengumuman.show', function ($trail, $pengumuman) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Pengumuman', route('admin.pengumuman.index'));
    $trail->push('Lihat pengumuman', route('admin.pengumuman.show', $pengumuman));
});

// Kontak Index
Breadcrumbs::for('admin.kontak.show', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('kontak', route('admin.kontak.show'));
});

// Komentar Index
Breadcrumbs::for('admin.komentar.show', function ($trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('komentar', route('admin.komentar.show'));
});


