# Analisis Karakteristik Individu dengan Certainty Factor
Repo ini merupakan implementasi sederhana metode Certainty Factor menggunakan framework Laravel dalam menilai karakteristik individu. Tujuan pembuatan aplikasi ini adalah sebatas tugas Dosen di mata kuliah Sistem Pakar, dengan mengambil rujukan jurnal dari Link berikut : [Google Scholar](https://scholar.google.co.id/citations?view_op=view_citation&hl=id&user=UTBq0lsAAAAJ&cstart=300&pagesize=100&citation_for_view=UTBq0lsAAAAJ:PuOEWVtPfzwC).

# Tampilan Aplikasi
Halaman Login
![Login](/docs/login.png)

Halaman Home - **User**
![User Home](/docs/welcome-page.png)

Halaman Kuesioner - **User**
![Questioner Page](/docs/questionaires.png)

Halaman Hasil Analisis - **User**
![Analysis Result](/docs/analysis-result.png)

Halaman Home - **Admin**
![Admin Home](/docs/admin-summary.png)

Halaman Basis Rules - **Admin**
![Basis Rules](/docs/admin-cf-rules.png)

Halaman List Pengguna - **Admin**
![Users List](/docs/admin-users-list.png)


# Instalasi
Setelah repo ter-clone, akses lokasi repo clone tersebut melalui terminal (bash, cmd, powershell, dsb) dan lanjutkan dengan mengetikkan command :

```
composer update
composer install
php artisan migrate
php artisan db:seed
```
