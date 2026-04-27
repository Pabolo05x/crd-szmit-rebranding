<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria | CRD Tomasz Szmit</title>
    <meta name="description" content="Zobacz naszą flotę i zadowolonych kursantów. Galeria zdjęć Centrum Ruchu Drogowego Tomasz Szmit.">
    
    <link rel="icon" href="crd.jpg" type="image/png">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body class="bg-gray-100 text-gray-900 font-inter flex flex-col min-h-screen">

    <nav class="bg-white/95 border-b border-red-600 fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <a href="index.html" class="text-3xl font-black italic tracking-tighter text-black hover:opacity-80 transition-opacity">
                        CRD <span class="text-red-600">SZMIT</span>
                    </a>
                </div>
                
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="index.html#konsorcjum" class="text-gray-800 hover:text-red-600 font-bold uppercase text-sm tracking-wide transition">O nas</a>
                    <a href="oferta.html" class="text-gray-800 hover:text-red-600 font-bold uppercase text-sm tracking-wide transition">Oferta</a>
                    <a href="cennik.html" class="text-gray-800 hover:text-red-600 font-bold uppercase text-sm tracking-wide transition">Cennik</a>
                    <a href="galeria.php" class="text-red-600 font-bold uppercase text-sm tracking-wide transition border-b-2 border-red-600">Galeria</a>
                    <a href="blog.html" class="text-gray-800 hover:text-red-600 font-bold uppercase text-sm tracking-wide transition">Blog</a>
                    <a href="index.html#opinie" class="text-gray-800 hover:text-red-600 font-bold uppercase text-sm tracking-wide transition">Opinie</a>
                    
                    <a href="index.html#formularz-kontaktowy" class="bg-red-600 text-white px-6 py-2 font-bold uppercase text-sm skew-button hover:bg-black transition-all shadow-lg ml-2">
                        <span class="skew-fix">Zapisz się</span>
                    </a>
                </div>
                
                <div class="md:hidden flex items-center"><button id="mobile-menu-btn" class="text-black hover:text-red-600 focus:outline-none"><i class="fas fa-bars text-2xl"></i></button></div>
            </div>
        </div>
        
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-200 absolute w-full shadow-xl">
            <div class="px-4 pt-4 pb-6 space-y-2">
                <a href="index.html#konsorcjum" class="block py-2 text-lg font-bold text-gray-800 border-l-4 border-transparent hover:border-red-600 hover:pl-2 transition-all">O nas</a>
                <a href="oferta.html" class="block py-2 text-lg font-bold text-gray-800 border-l-4 border-transparent hover:border-red-600 hover:pl-2 transition-all">Oferta</a>
                <a href="cennik.html" class="block py-2 text-lg font-bold text-gray-800 border-l-4 border-transparent hover:border-red-600 hover:pl-2 transition-all">Cennik</a>
                <a href="galeria.php" class="block py-2 text-lg font-bold text-gray-800 border-l-4 border-transparent hover:border-red-600 hover:pl-2 transition-all">Galeria</a>
                <a href="blog.html" class="block py-2 text-lg font-bold text-gray-800 border-l-4 border-transparent hover:border-red-600 hover:pl-2 transition-all">Blog</a>
                <a href="index.html#opinie" class="block py-2 text-lg font-bold text-gray-800 border-l-4 border-transparent hover:border-red-600 hover:pl-2 transition-all">Opinie</a>
                <a href="index.html#formularz-kontaktowy" class="block mt-4 text-center bg-red-600 text-white py-3 font-bold uppercase">Zapisz się</a>
            </div>
        </div>
    </nav>

    <header class="pt-32 pb-16 bg-gray-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30"></div>
        <div class="max-w-7xl mx-auto px-4 relative z-10 text-center reveal">
            <h1 class="text-4xl md:text-5xl font-black uppercase mb-4">Nasza <span class="text-red-600">Galeria</span></h1>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">Zobacz naszych zadowolonych kursantów i flotę w akcji!</p>
        </div>
    </header>

    <main class="flex-grow py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                    // Ścieżka do folderu ze zdjęciami
                    $folder = 'zdjecia_galeria/';
                    
                    // Sprawdź czy folder istnieje
                    if (is_dir($folder)) {
                        // Pobierz pliki graficzne
                        $images = glob($folder . "*.{jpg,jpeg,png,JPG,JPEG,PNG}", GLOB_BRACE);

                        if ($images) {
                            foreach($images as $image) {
                                // Zmieniono div na 'a' z klasą 'glightbox' i data-gallery
                                echo '
                                <a href="'.$image.'" class="glightbox group relative block aspect-[4/3] overflow-hidden shadow-lg border border-gray-200 hover:border-red-600 cursor-pointer reveal transition-all duration-300" data-gallery="gallery1">
                                    <img src="'.$image.'" alt="Zdjęcie z galerii" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <div class="border-2 border-red-600 p-3 bg-black/50 rounded-full">
                                            <i class="fas fa-search-plus text-white text-2xl"></i>
                                        </div>
                                    </div>
                                </a>';
                            }
                        } else {
                            echo '<p class="text-center col-span-3 text-gray-500 py-10 text-lg font-bold">Galeria jest w trakcie aktualizacji. Zajrzyj wkrótce!</p>';
                        }
                    } else {
                        // Komunikat diagnostyczny (można usunąć na produkcji)
                        echo '<p class="text-center col-span-3 text-red-600 py-10 font-mono">Błąd: Upewnij się, że folder "zdjecia_galeria" istnieje na serwerze.</p>';
                    }
                ?>
            </div>

            <div class="mt-16 text-center reveal">
                <a href="index.html#formularz-kontaktowy" class="inline-block bg-red-600 text-white px-10 py-4 font-bold uppercase skew-button hover:bg-black transition-all shadow-lg">
                    <span class="skew-fix">Dołącz do naszych kursantów!</span>
                </a>
            </div>
        </div>
    </main>

    <footer class="bg-black text-gray-500 py-12 border-t border-gray-800 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                
                <div class="col-span-1 md:col-span-2">
                    <div class="text-2xl font-black italic text-white mb-4">CRD <span class="text-red-600">SZMIT</span></div>
                    <p class="text-sm max-w-sm mb-4">Konsorcjum szkoleniowe Szmit & Szmit. Profesjonalizm i doświadczenie na rynku legnickim i jaworskim.</p>
                    
                    <div class="p-4 bg-gray-900 border border-gray-800 max-w-sm">
                        <p class="text-xs font-bold text-gray-400 uppercase mb-1">Dane do wpłat:</p>
                        <p class="text-sm text-white font-mono">Credit Agricole</p>
                        <p class="text-sm text-red-500 font-mono font-bold tracking-wide">10 1940 1076 5172 6977 0000 0000</p>
                        <p class="text-xs text-gray-500 mt-1">Tytuł: Imię i Nazwisko + Kategoria</p>
                    </div>
                    
                    <p class="text-xs font-mono mt-4">NIP: 695 145 68 66</p>
                </div>

                <div>
                    <h4 class="text-white font-bold uppercase mb-4">Linki</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="Katb.html" class="hover:text-red-600 transition">Kategoria B</a></li>
                        <li><a href="motocylke.html" class="hover:text-red-600 transition">Motocykle</a></li>
                        <li><a href="KatAMCZ.html" class="hover:text-red-600 transition">Microcar</a></li>
                        <li><a href="cennik.html" class="hover:text-red-600 transition">Cennik</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold uppercase mb-4">Kontakt</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-red-600 mt-1 mr-3"></i>
                            <span class="text-gray-400">Chełmiec 44A<br>59-424 Chełmiec</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt text-red-600 mr-3"></i>
                            <a href="tel:+48536506650" class="text-white hover:text-red-600 transition font-bold">+48 536 506 650</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-red-600 mr-3"></i>
                            <a href="mailto:biuro@oskameleon.pl" class="text-gray-400 hover:text-white transition">biuro@oskameleon.pl</a>
                        </li>
                    </ul>

                    <div class="mt-6 flex gap-4">
                        <a href="https://www.facebook.com/OSKameleon" target="_blank" class="text-2xl text-gray-500 hover:text-red-600 transition"><i class="fab fa-facebook"></i></a>
                        <a href="https://www.instagram.com/centrumruchudrogowego/" target="_blank" class="text-2xl text-gray-500 hover:text-red-600 transition"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

            </div>
            
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs gap-4">
                <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4">
                    <p>© 2026 CRD Tomasz Szmit. Wszelkie prawa zastrzeżone.</p>
                    <span class="hidden md:inline text-gray-700">|</span>
                    <a href="polityka.html" class="hover:text-white transition">Polityka Prywatności</a>
                </div>
                <div class="mt-2 md:mt-0">
                    <a href="https://sosinskiweb.pl/" target="_blank" class="hover:text-white transition group">
                        Projekt i realizacja: <span class="text-white group-hover:text-red-600 transition font-bold">SosinskiWeb</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <a href="tel:+48536506650" class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-14 h-14 bg-red-600 text-white shadow-lg hover:bg-black transition-colors">
        <i class="fas fa-phone-alt text-2xl"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <script>
        // Inicjalizacja GLightbox
        const lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
            autoplayVideos: true,
            selector: '.glightbox' // Działa na elementach z tą klasą
        });
    </script>

</body>
</html>