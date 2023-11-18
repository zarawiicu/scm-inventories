# CodeIngiter 3 Vuexy Starter KIT

Selamat datang dan selamat menggunakan 😁. Repository ini dibuat untuk mempercepat pekerjaan para karyawan SCM (Solusi Cipta Media). Silakan baca-baca di bawah ya.

## SETUP ENVIRONMENT

1. Lihat file `.env.example` pada root folder **repository** ini
2. Pada file tersebut, terdapat beberapa konfigurasi **database** dan **mode**
3. Silakan rubah alamat database sesuai dengan environment anda masing-masing.
4. Gunakan mode dev untuk development. Dan gunakan mode prod untuk testing minify-file.

## OPTIONAL RULES

Untuk menambah performa website, dan mengurangi beban server. File-file aset seperti `.js` dan `.css` alangkah baiknya dijadikan menjadi file `minify` (`.min.js`, `.min.css`)

### Tata Cara Minify File

Sebelum 3 cara dibawah dijalankan, jangan lupa run `npm install`

1. Buka file `minify.mjs` pada root folder repo ini.
2. Tuliskan kode `writeMinify` pada method `init()`

contoh:

```javascript
async function init() {
	//CONTOH MEMBUAT MINIFY FILE
	writeMinify("./js/book_articles.js", "./js/book_articles.min.js");
}
```

3. Setelah itu anda bisa jalankan `npm run build`
