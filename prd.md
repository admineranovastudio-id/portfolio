# Product Requirements Document (PRD)
# Website Portofolio Pribadi — Eka Rizky Nauvan Nurilham

> **Dokumen:** PRD v1.0
> **Disusun oleh:** AI Product Manager
> **Tanggal:** Mei 2026
> **Status:** Ready for Development

---

## Daftar Isi

1. [Project Overview](#1-project-overview)
2. [Goals & Success Metrics](#2-goals--success-metrics)
3. [Target Audience](#3-target-audience)
4. [Design Direction](#4-design-direction)
5. [Sitemap](#5-sitemap)
6. [Core Features & Requirements](#6-core-features--requirements)
7. [User Flow](#7-user-flow)
8. [Tech Stack Recommendation](#8-tech-stack-recommendation)
9. [Content Requirements](#9-content-requirements)
10. [Non-Functional Requirements](#10-non-functional-requirements)
11. [Future Enhancements](#11-future-enhancements)
12. [Roadmap Pengembangan](#12-roadmap-pengembangan)

---

## 1. Project Overview

### Latar Belakang

Eka Rizky Nauvan Nurilham adalah mahasiswa Informatika sekaligus Web Developer aktif yang telah mengerjakan proyek nyata seperti **Barly Vision** (e-commerce CCTV) dan **Eranovastudio**. Saat ini belum memiliki satu titik digital terpusat yang merepresentasikan identitas profesionalnya secara utuh.

Tanpa portofolio yang kuat, peluang dari klien freelance maupun perekrut sering kali bergantung pada rekomendasi atau LinkedIn — medium yang tidak sepenuhnya mencerminkan kemampuan teknis dan karakter personal seorang developer.

### Solusi

Sebuah website portofolio pribadi yang didesain dengan standar produksi tinggi — bukan sekadar daftar proyek, melainkan **bukti langsung dari kemampuan Eka sebagai developer**: desain yang tajam, performa yang cepat, kode yang rapi, dan pengalaman yang meninggalkan kesan.

### Pernyataan Produk

> *Website ini adalah kartu nama digital Eka — satu halaman yang meyakinkan klien bahwa mereka sedang berbicara dengan developer yang serius, dan meyakinkan perekrut bahwa kandidat ini layak dipanggil interview.*

---

## 2. Goals & Success Metrics

### Business Goals

| # | Goal | Metrik Keberhasilan |
|---|---|---|
| G1 | Menarik klien freelance baru | Minimal 2 inquiry per bulan dari form kontak |
| G2 | Membangun kredibilitas di mata perekrut | Profil lengkap + proyek terdokumentasi baik |
| G3 | Memperkuat personal branding | Website muncul di halaman 1 Google untuk nama "Eka Rizky Nauvan Nurilham" |
| G4 | Menjadi showcase kemampuan teknis | Lighthouse score ≥ 90 di semua kategori |

### User Goals

| Audiens | Yang Ingin Dicapai |
|---|---|
| Klien | Memahami layanan, melihat bukti kerja, dan bisa langsung menghubungi |
| Perekrut | Mengevaluasi skill, pengalaman, dan kepribadian developer dalam < 2 menit |
| Sesama Developer | Mendapat inspirasi, melihat pendekatan teknis, dan terhubung |

---

## 3. Target Audience

### Persona 1 — Klien Freelance (Primer)

```
Nama          : Budi Santoso (fiktif, representatif)
Usia          : 30–45 tahun
Profesi       : Pemilik UMKM / Startup lokal
Kebutuhan     : Butuh developer untuk buat website bisnis
Perilaku      : Google "jasa buat website", lihat portofolio, langsung WA jika yakin
Pain Point    : Susah menilai kualitas developer tanpa contoh kerja nyata
Apa yang dicari di portofolio:
  - Apakah pernah buat proyek serupa?
  - Berapa biayanya?
  - Bisa dihubungi lewat mana?
```

### Persona 2 — Perekrut / HRD Tech (Primer)

```
Nama          : Sari Dewi (fiktif, representatif)
Usia          : 25–35 tahun
Profesi       : HR / Technical Recruiter di startup/perusahaan tech
Kebutuhan     : Mencari fresh graduate / junior developer yang proaktif
Perilaku      : Cek LinkedIn → klik link portofolio → scan 60–90 detik
Pain Point    : Banyak kandidat tanpa bukti kerja nyata
Apa yang dicari:
  - Tech stack yang dikuasai
  - Proyek nyata yang pernah dikerjakan
  - Cara developer mengkomunikasikan pekerjaannya
  - Link ke GitHub / CV
```

### Persona 3 — Sesama Developer / Komunitas (Sekunder)

```
Profesi       : Mahasiswa Informatika, junior developer
Perilaku      : Menemukan via media sosial atau referral
Yang dicari   : Inspirasi desain, stack yang dipakai, cara mendokumentasikan proyek
```

---

## 4. Design Direction

### Konsep Visual: *"Coded Craft"*

**Tone:** Editorial-Minimalis dengan sentuhan Developer Culture — bersih, presisi, dan sedikit mentah. Seperti seorang developer yang tahu desain: tidak berlebihan, tapi setiap elemen terasa dipilih dengan niat. Ada kepercayaan diri dalam kesederhanaannya.

**Differentiator visual:** Tipografi besar yang mendominasi layar, dengan aksen warna yang muncul seperti syntax highlighting — terkontrol, tepat, dan tidak random. Layout yang agak asimetris menunjukkan kepekaan desain, bukan template cookie-cutter.

### Typography

| Peran | Font | Alasan |
|---|---|---|
| Display / Nama | `Clash Display` ExtraBold | Editorial, berkarakter kuat, tidak generik |
| Heading | `DM Serif Display` | Kontras serif yang hangat dengan sans-serif body |
| Body / UI | `Geist` Regular/Medium | Bersih, modern, sedikit bernuansa kode |
| Kode / Tag | `JetBrains Mono` | Autentik developer, untuk label tech stack |

### Color Palette

```
/* Mode Terang (Default) */
--bg-primary:       #F5F3EE   /* Krem hangat — bukan putih flat */
--bg-surface:       #EDEAE3   /* Surface card lebih gelap */
--text-primary:     #111110   /* Hitam organik, bukan #000 */
--text-secondary:   #6B6862   /* Abu-abu hangat */
--accent:           #E8FF47   /* Kuning neon — CTA, highlight, link hover */
--accent-dark:      #C8E000   /* Kuning lebih dalam untuk hover */
--border:           #D9D5CC   /* Border sangat subtle */
--tag-bg:           #111110   /* Background badge tech stack */
--tag-text:         #E8FF47   /* Teks badge — efek syntax highlight */

/* Mode Gelap (Toggle) */
--bg-primary-dark:  #0F0F0D
--bg-surface-dark:  #1A1A17
--text-primary-dark:#F0EDE6
--accent-dark-mode: #E8FF47   /* Aksen tetap sama — konsistensi identitas */
```

### Elemen Visual Khas

- **Cursor kustom** — dot kecil dengan ring yang mengikuti gerakan mouse
- **Marquee/ticker text** — barisan tech stack atau tagline yang berjalan horizontal
- **Underline animasi** pada link — reveal dari kiri ke kanan saat hover
- **Noise texture overlay** — grain halus di atas background krem untuk kedalaman
- **Angka besar dekoratif** — penomoran section `01 / 02 / 03` sebagai elemen typographic
- **Hover reveal pada kartu proyek** — gambar/mockup slide in dari bawah saat hover

### Prinsip Layout

- Single-page dengan navigasi smooth-scroll
- Konten sebagian besar full-width, dengan variasi indentasi
- Banyak whitespace — tidak memadatkan informasi
- Grid asimetris di section proyek
- Animasi: scroll-triggered fade + slide (GSAP ScrollTrigger atau CSS `@keyframes` + Intersection Observer)

---

## 5. Sitemap

Website ini adalah **single-page application** dengan anchor navigation. Setiap section dapat diakses langsung via URL hash.

```
ekarizkynauvan.com/
├── #hero          → Nama, tagline, CTA utama
├── #about         → Tentang Eka — latar belakang, kepribadian, foto
├── #skills        → Tech stack & kemampuan
├── #projects      → Showcase proyek (Barly Vision, Eranovastudio, dll)
├── #experience    → Pengalaman / timeline (opsional jika ada)
├── #contact       → Form kontak + tautan sosial
│
└── /project/{slug}   → Halaman detail proyek (sub-halaman terpisah)
    ├── /project/barly-vision
    └── /project/eranovastudio
```

**Halaman Tambahan (standalone):**
```
/cv              → Redirect ke file CV PDF (download langsung)
404.html         → Halaman not found yang custom & berkarakter
```

---

## 6. Core Features & Requirements

---

### 6.1 Section: Hero

**Tujuan:** Memberikan kesan pertama yang kuat dalam 3 detik pertama.

**Konten:**
- Nama lengkap: **"Eka Rizky Nauvan Nurilham"** — ditampilkan besar, mendominasi layar
- Label identitas: `Web Developer · Mahasiswa Informatika`
- Tagline singkat: 1 kalimat yang merangkum value proposition
  - Contoh: *"I build websites that work — and look like they mean it."*
- CTA Primer: **"Lihat Proyek Saya"** → scroll ke `#projects`
- CTA Sekunder: **"Unduh CV"** → `/cv` (download PDF)
- Indikator scroll-down: panah atau teks animasi "scroll" di bagian bawah

**Perilaku:**
- Nama muncul dengan animasi staggered per kata saat halaman load
- Tagline fade-in setelah nama selesai muncul
- Background: noise texture + sedikit geometric SVG dekoratif (bukan foto)

---

### 6.2 Section: About

**Tujuan:** Membangun koneksi personal dan menunjukkan bahwa Eka adalah developer yang bisa diajak bicara — bukan hanya mesin kode.

**Konten:**
- Foto profesional Eka (atau ilustrasi avatar berkarakter)
- Paragraf singkat (2–3 kalimat): latar belakang, passion, dan apa yang mendorong bekerja di bidang ini
- Fakta cepat (fun facts atau statistik personal):
  - Tahun mulai coding
  - Jumlah proyek selesai
  - Kota/universitas
- Filosofi kerja dalam 1 kalimat italic: *"Saya percaya website yang baik bukan hanya tentang estetika, tapi tentang solusi."*

**Perilaku:**
- Layout dua kolom: foto kiri, teks kanan (di mobile: foto atas, teks bawah)
- Foto dengan clip-path atau border yang tidak biasa (bukan kotak biasa)

---

### 6.3 Section: Skills

**Tujuan:** Komunikasikan tech stack dengan cara yang lebih menarik dari sekadar daftar logo.

**Konten & Tampilan:**

Dibagi dalam 2 kategori visual:

**A. Tech Stack Utama** — ditampilkan sebagai badge besar dengan label:
```
HTML5  |  CSS3  |  JavaScript  |  PHP  |  MySQL
```
Setiap badge: ikon + nama dalam font monospace + border

**B. Tools & Ekosistem** — grid badge lebih kecil:
```
Git  |  GitHub  |  VS Code  |  Laravel  |  Tailwind CSS
Figma  |  MySQL Workbench  |  Postman
```

**Ticker/Marquee:** Barisan nama teknologi yang berjalan otomatis horizontal sebagai elemen dekoratif di atas atau bawah grid.

**Perilaku:**
- Badge muncul dengan staggered animation saat scroll masuk viewport
- Hover: badge sedikit terangkat + border berubah warna ke accent

---

### 6.4 Section: Projects

**Tujuan:** Membuktikan kemampuan melalui karya nyata — bagian paling penting di seluruh portofolio.

**Layout:**
- Grid 2 kolom di desktop, 1 kolom di mobile
- Proyek unggulan (featured) tampil full-width di baris pertama
- Proyek lain tampil dalam grid reguler di bawahnya

**Data setiap kartu proyek:**

| Field | Keterangan |
|---|---|
| Thumbnail / Mockup | Screenshot atau mockup device (wajib ada) |
| Nomor proyek | `01`, `02`, `03` — dekoratif |
| Nama proyek | Bold, besar |
| Kategori / tag | Badge: `E-Commerce` / `Landing Page` / `Web App` |
| Deskripsi singkat | 1–2 kalimat menjelaskan apa & untuk siapa |
| Tech stack dipakai | Badge kecil: `Laravel` `MySQL` `Tailwind` |
| Tautan | Tombol "Lihat Detail" + ikon GitHub (jika publik) |

**Proyek yang wajib ada (MVP):**
1. **Barly Vision** — E-commerce CCTV (Laravel, MySQL, Filament)
2. **Eranovastudio** — (sesuai deskripsi proyek yang ada)
3. Proyek akademis atau latihan lain sebagai pelengkap

**Perilaku kartu:**
- Hover: mockup/gambar zoom halus + overlay muncul dengan tombol CTA
- Kartu muncul staggered saat scroll masuk viewport

---

### 6.5 Halaman Detail Proyek (`/project/{slug}`)

**Tujuan:** Memberikan konteks mendalam tentang satu proyek — penting untuk meyakinkan perekrut dan klien.

**Konten per halaman:**

```
1. Header
   - Nama proyek + kategori
   - Tahun + durasi pengerjaan
   - Peran Eka: "Full-Stack Developer" / "Frontend Developer" / dll

2. Overview
   - Paragraf 2–3 kalimat: apa masalah yang diselesaikan?

3. Mockup / Screenshot
   - Mockup device (browser, mobile) — minimal 2 gambar
   - Caption singkat per gambar

4. Tantangan & Solusi
   - 2–3 poin tantangan teknis yang dihadapi + cara mengatasinya
   - Format: icon ⚡ + judul + penjelasan singkat

5. Tech Stack
   - Badge semua teknologi yang digunakan dalam proyek ini

6. Hasil / Outcome
   - Apa yang berhasil dibangun?
   - Fitur utama yang ada (bullet list singkat)

7. Tautan
   - Tombol: "Lihat Live" (jika ada) + "GitHub" (jika publik)

8. Navigasi
   - Panah ke proyek sebelumnya / berikutnya
   - Tombol: "← Kembali ke Semua Proyek"
```

---

### 6.6 Section: Experience / Timeline *(opsional — isi jika ada)*

**Tujuan:** Menunjukkan perkembangan Eka secara kronologis.

**Format Timeline:**
```
[Tahun] — Nama institusi / proyek / pencapaian
          Deskripsi singkat 1 kalimat
```

**Konten yang bisa diisi:**
- Masuk jurusan Informatika
- Proyek pertama (buat website apa)
- Mengerjakan Barly Vision
- Mengerjakan Eranovastudio
- Sertifikasi (jika ada)

---

### 6.7 Section: Contact

**Tujuan:** Memudahkan klien atau perekrut untuk memulai percakapan.

**Layout:**
- Headline besar: *"Mari Berkolaborasi"* atau *"Punya Proyek? Mari Diskusi."*
- Subtext: waktu respons rata-rata (contoh: "Biasanya membalas dalam 24 jam")

**Form Kontak:**

| Field | Tipe | Validasi |
|---|---|---|
| Nama | Text | Required, min:2 |
| Email | Email | Required, valid format |
| Subjek | Text | Required |
| Pesan | Textarea | Required, min:20 karakter |
| Tombol Submit | Button | Loading state + feedback |

**Setelah submit:**
- Pesan tersimpan ke database (tabel `contacts`)
- Email notifikasi ke Eka
- Feedback inline: pesan sukses atau error tanpa reload halaman (fetch/AJAX)

**Tautan Sosial (selalu terlihat di section ini):**
- GitHub — link ke profil
- LinkedIn — link ke profil
- Email langsung — `mailto:` link
- WhatsApp — `wa.me/` link (opsional, jika mau dibuka untuk klien)

---

### 6.8 Navbar & Footer

**Navbar:**
- Logo / inisial "ERN" atau nama "Eka Rizky"
- Link navigasi: About / Skills / Projects / Contact
- Tombol CTA kecil: **"Hire Me"** → scroll ke `#contact`
- Dark/Light mode toggle (opsional tapi direkomendasikan)
- Di mobile: hamburger menu dengan animasi smooth

**Footer:**
- Kalimat singkat + copyright
- Tautan sosial (ikon)
- Teks kecil: *"Designed & built by Eka Rizky Nauvan Nurilham"*

---

## 7. User Flow

### 7.1 Flow Klien yang Mencari Developer

```
Google "jasa web developer [kota]" atau cari nama langsung
    ↓
Landing di Hero section
    ↓
Scan nama + tagline (3 detik)
    ↓
Scroll ke Projects
    ↓
Klik salah satu proyek → Halaman Detail Proyek
    ↓
Baca: apa yang dibuat, tech stack, hasil
    ↓
Kembali ke halaman utama
    ↓
Scroll ke Contact → Isi form atau klik WA langsung
    ↓
Eka menerima notifikasi email → Balas dalam 24 jam
```

### 7.2 Flow Perekrut yang Mengevaluasi Kandidat

```
Terima link portofolio dari LinkedIn / email lamaran
    ↓
Landing di Hero → Scan nama + label "Web Developer · Informatika"
    ↓
Scroll cepat ke About → Baca background singkat
    ↓
Scroll ke Skills → Verifikasi tech stack yang relevan
    ↓
Scroll ke Projects → Lihat 2–3 proyek unggulan
    ↓
Klik "Lihat Detail" pada proyek paling relevan
    ↓
Baca tantangan & solusi teknis (paling penting bagi perekrut teknis)
    ↓
Kembali → Scroll ke Contact atau klik tombol "Unduh CV"
    ↓
Download CV → Lanjut proses rekrutmen
```

### 7.3 Flow Developer yang Menginspirasi / Networking

```
Temukan link di Twitter / komunitas Discord
    ↓
Scroll cepat seluruh halaman
    ↓
Perhatikan detail desain & animasi
    ↓
Cari link GitHub di footer atau halaman proyek
    ↓
Follow / kirim pesan lewat LinkedIn
```

---

## 8. Tech Stack Recommendation

> **Prinsip:** Gunakan yang sudah Eka kuasai, tambah satu layer ringan untuk kualitas produksi. Tidak perlu framework baru yang belum dipelajari.

### Stack Utama yang Direkomendasikan

| Layer | Teknologi | Alasan |
|---|---|---|
| **Markup** | HTML5 semantik | Dikuasai, SEO-friendly, fondasi |
| **Styling** | CSS3 + CSS Custom Properties | Dikuasai; hindari ketergantungan pada framework untuk portofolio |
| **Interaktivitas** | Vanilla JavaScript (ES6+) | Dikuasai; tidak perlu React untuk website ini |
| **Animasi** | GSAP (GreenSock) | Industri standar, dokumentasi sangat baik, hasil animasi profesional |
| **Scroll Animation** | GSAP ScrollTrigger | Plugin GSAP untuk animasi scroll yang halus |
| **Backend** | PHP 8.x (murni / prosedural) | Dikuasai; cukup untuk form handler & kontak |
| **Database** | MySQL | Dikuasai; untuk tabel `contacts` dan log |
| **Email** | PHPMailer | Library PHP populer untuk kirim email dari form kontak |
| **Deployment** | Shared Hosting / VPS | Sesuai skill PHP — tidak butuh Docker |
| **Version Control** | Git + GitHub | Wajib, sudah umum |

### Mengapa TIDAK menggunakan framework berat (Laravel, React, dll)?

Untuk website portofolio pribadi, Laravel adalah **overkill**:
- Load time lebih lambat tanpa konfigurasi extra
- Struktur yang kompleks untuk kebutuhan yang sederhana
- Waktu development lebih lama

Portofolio yang *terasa cepat* adalah bukti kemampuan Eka sendiri.

### Struktur File yang Direkomendasikan

```
portfolio/
├── index.html
├── 404.html
├── assets/
│   ├── css/
│   │   ├── style.css          # Styles utama
│   │   ├── animations.css     # CSS animations
│   │   └── responsive.css     # Media queries
│   ├── js/
│   │   ├── main.js            # Logic utama
│   │   ├── animations.js      # GSAP setup
│   │   └── contact.js         # Form handler (fetch API)
│   ├── images/
│   │   ├── projects/          # Screenshot & mockup
│   │   └── profile/           # Foto Eka
│   └── fonts/                 # Self-hosted fonts (opsional)
├── project/
│   ├── barly-vision.html
│   └── eranovastudio.html
├── cv/
│   └── eka-rizky-cv.pdf
└── api/
    ├── contact.php            # Handler form kontak
    └── db.php                 # Koneksi database
```

### Database Schema (Minimalis)

```sql
-- Tabel untuk menyimpan pesan dari form kontak
CREATE TABLE contacts (
  id          INT AUTO_INCREMENT PRIMARY KEY,
  name        VARCHAR(150) NOT NULL,
  email       VARCHAR(255) NOT NULL,
  subject     VARCHAR(255) NOT NULL,
  message     TEXT NOT NULL,
  ip_address  VARCHAR(45),
  created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel opsional: log kunjungan kasar (tanpa tracking berat)
CREATE TABLE page_views (
  id          INT AUTO_INCREMENT PRIMARY KEY,
  page        VARCHAR(255),
  referrer    VARCHAR(500),
  visited_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## 9. Content Requirements

### Konten yang Harus Disiapkan Sebelum Development

| Konten | Format | Prioritas |
|---|---|---|
| Foto profesional Eka | JPG/WebP, min 800×800px | Wajib |
| CV terbaru | PDF, max 2MB | Wajib |
| Mockup / screenshot Barly Vision | Min 2 gambar | Wajib |
| Mockup / screenshot Eranovastudio | Min 2 gambar | Wajib |
| Tagline personal (1 kalimat) | Teks | Wajib |
| Paragraf "About" (2–3 kalimat) | Teks | Wajib |
| Deskripsi singkat setiap proyek | Teks | Wajib |
| Deskripsi detail setiap proyek | Teks | Wajib |
| Link GitHub (jika publik) | URL | Opsional |
| Link live preview proyek | URL | Opsional |
| Nomor WhatsApp bisnis | Teks | Opsional |
| Akun LinkedIn | URL | Direkomendasikan |
| Daftar sertifikasi (jika ada) | Teks | Opsional |

### Panduan Menulis Deskripsi Proyek yang Kuat

Gunakan formula: **Apa + Untuk Siapa + Hasil/Dampak**

❌ Lemah: *"Website e-commerce untuk penjualan CCTV."*

✅ Kuat: *"Platform e-commerce lengkap untuk Barly Vision — usaha penjualan CCTV dan jasa instalasi — dilengkapi admin CMS berbasis Filament dan sistem manajemen pesanan terintegrasi."*

---

## 10. Non-Functional Requirements

### Performa

| Metrik | Target |
|---|---|
| Lighthouse Performance | ≥ 90 |
| Lighthouse SEO | ≥ 95 |
| Lighthouse Accessibility | ≥ 85 |
| First Contentful Paint (FCP) | < 1.5 detik |
| Total page weight (tanpa gambar) | < 300 KB |
| Semua gambar | Format WebP, lazy-loaded |

### SEO

- Meta title: `Eka Rizky Nauvan Nurilham — Web Developer`
- Meta description: deskripsi singkat skill + lokasi
- Open Graph tags (untuk preview di sosial media & WhatsApp)
- Canonical URL
- Sitemap.xml
- robots.txt

### Aksesibilitas

- Semua gambar memiliki `alt` text
- Kontras warna memenuhi WCAG AA (rasio minimum 4.5:1)
- Navigasi bisa dilakukan sepenuhnya via keyboard
- Focus states yang terlihat jelas

### Responsivitas

| Breakpoint | Target Device |
|---|---|
| < 640px | Smartphone (portrait) |
| 640px – 1024px | Tablet / smartphone landscape |
| > 1024px | Laptop & desktop |

### Keamanan (Form Kontak)

- Validasi server-side di `contact.php`
- Sanitasi input dengan `htmlspecialchars()` dan `filter_var()`
- Rate limiting sederhana (simpan timestamp IP, tolak jika terlalu sering)
- CSRF token sederhana pada form

---

## 11. Future Enhancements

Fitur-fitur ini **tidak termasuk MVP** tapi direkomendasikan untuk ditambahkan setelah website live dan mendapat feedback nyata.

### Fase 2 — Peningkatan Konten & UX

| Fitur | Deskripsi | Nilai |
|---|---|---|
| **Dark / Light Mode Toggle** | Simpan preferensi di localStorage | UX, branding |
| **Blog / Artikel** | Tulis tentang proses membangun proyek atau tips teknis | SEO jangka panjang |
| **Filter Proyek** | Filter by kategori: Website / Web App / UI Design | UX saat proyek banyak |
| **Animasi Cursor Kustom** | Dot + ring yang mengikuti mouse | Kesan premium |
| **Loading Screen** | Animasi singkat dengan inisial "ERN" saat halaman pertama load | Branding |

### Fase 3 — Fitur Teknis Lanjutan

| Fitur | Deskripsi | Nilai |
|---|---|---|
| **Simple Analytics** | Integrasi Umami atau Plausible (privacy-friendly) untuk tracking visitor | Data-driven |
| **Admin Panel Sederhana** | Dashboard PHP untuk lihat pesan kontak masuk tanpa buka database | Produktivitas |
| **CMS Ringan** | Kelola proyek via panel sederhana (tambah/edit/hapus tanpa sentuh kode) | Maintainability |
| **Multilingual** | Versi Bahasa Indonesia + English | Jangkauan lebih luas (klien internasional) |

### Fase 4 — Personal Branding Lanjutan

| Fitur | Deskripsi | Nilai |
|---|---|---|
| **Availability Status** | Badge *"Available for Work"* atau *"Currently Busy"* di hero | Ekspektasi klien |
| **Testimonial Section** | Kutipan dari klien nyata setelah proyek pertama selesai | Social proof |
| **Case Study PDF** | PDF yang bisa diunduh berisi deep-dive satu proyek terbaik | Diferensiasi |
| **Newsletter / Waitlist** | Form email untuk orang yang ingin update project terbaru | Audience building |

---

## 12. Roadmap Pengembangan

### Sprint Plan (estimasi kerja solo, part-time)

| Sprint | Durasi | Scope |
|---|---|---|
| **Sprint 1** | 3–4 hari | Setup struktur file, desain sistem (CSS variables, typography, warna), komponen dasar |
| **Sprint 2** | 3–4 hari | Hero section + About section + Skills section (dengan animasi) |
| **Sprint 3** | 4–5 hari | Projects section + 2 halaman detail proyek (Barly Vision & Eranovastudio) |
| **Sprint 4** | 2–3 hari | Contact section + backend PHP (form handler + email + database) |
| **Sprint 5** | 2–3 hari | Navbar + Footer + responsivitas mobile penuh + dark mode |
| **Sprint 6** | 2–3 hari | Polish: animasi GSAP, performa (WebP, lazy load), SEO meta tags |
| **Sprint 7** | 1–2 hari | Testing lintas browser, Lighthouse audit, perbaikan, deployment |

**Total estimasi:** ~3–4 minggu kerja part-time (2–3 jam/hari)

### Checklist Pre-Launch

```
□ Lighthouse score ≥ 90 di semua kategori
□ Semua tautan berfungsi (tidak ada broken link)
□ Form kontak berhasil mengirim email
□ Tampilan OK di Chrome, Firefox, Safari, dan Edge
□ Tampilan OK di smartphone (iOS & Android)
□ CV dapat diunduh
□ Meta tags & Open Graph sudah terpasang
□ Domain terhubung dan HTTPS aktif
□ robots.txt dan sitemap.xml tersedia
□ Google Search Console terdaftar
```

---

*PRD ini adalah dokumen hidup — perbarui seiring perkembangan proyek dan masukan dari pengguna nyata.*

---

**Dibuat untuk:** Eka Rizky Nauvan Nurilham  
**Versi:** 1.0 — Mei 2026