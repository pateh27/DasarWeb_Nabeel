var quotesOfTheDay = [
    "Kebahagiaan ditemukan dalam hal-hal kecil, bahkan secangkir kopi pagi bisa jadi awal yang baik.",
    "Terkadang, jawaban terbaik adalah diam, dan mendengarkan apa yang hati ingin sampaikan.",
    "Besok adalah kesempatan baru, tapi jangan lupa bahwa hari ini juga berharga.",
    "Senyum yang kamu berikan hari ini mungkin bisa mengubah hari seseorang.",
    "Setiap langkah kecil menuju tujuan adalah kemenangan yang pantas dirayakan.",
    "Keberhasilan bukan tentang seberapa cepat kamu sampai, tapi seberapa kuat kamu bertahan.",
    "Saat kamu fokus pada hal positif, hidup terasa lebih mudah dihadapi.",
    "Kesederhanaan sering kali menyimpan kebahagiaan yang paling tulus.",
    "Besok mungkin penuh tantangan, tapi ingat, kamu sudah pernah melewati yang lebih sulit.",
    "Kebijaksanaan datang dari pengalaman, dan pengalaman datang dari mencoba hal-hal baru.",
    "Jangan terlalu keras pada diri sendiri; setiap orang sedang belajar dalam perjalanan hidupnya.",
    "Hal-hal baik membutuhkan waktu, jadi bersabarlah pada prosesnya.",
    "Kamu mungkin tidak bisa mengubah dunia dalam sehari, tapi kamu bisa membuat perbedaan kecil hari ini.",
    "Tindakan kecil penuh kebaikan bisa membawa dampak besar bagi dunia di sekitarmu.",
    "Kesuksesan sejati adalah ketika kamu menemukan kedamaian dalam dirimu sendiri.",
    "Tidak apa-apa untuk beristirahat; kadang kita perlu berhenti sejenak untuk maju lebih jauh.",
    "Percayalah pada dirimu sendiri, meskipun dunia kadang tampak meragukanmu.",
    "Saat semuanya tampak tidak pasti, ingat bahwa perubahan adalah bagian alami dari hidup.",
    "Cahaya selalu menemukan jalan dalam kegelapan, begitu pula harapan dalam hidupmu.",
    "Setiap hari adalah kesempatan untuk menjadi lebih baik dari versi dirimu yang kemarin."
];

// Mengambil quotes of the day acak
document.getElementById("quote").innerHTML = quotesOfTheDay[Math.floor(Math.random() * quotesOfTheDay.length)];
