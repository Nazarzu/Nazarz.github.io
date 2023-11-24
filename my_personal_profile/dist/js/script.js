window.onscroll = function() {
    const header = document.querySelector('header');
    const fixednav = header.offsetTop;
    const totop = document.querySelector('#to-top');

    if(window.pageYOffset > fixednav) {
        header.classList.add('navbar-fixed');
        totop.classList.remove('hidden')
        totop.classList.add('flex')
    } else {
        header.classList.remove('navbar-fixed');
        totop.classList.remove('flex')
        totop.classList.add('hidden')
    }
}

const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu'); 

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

// Dark mode
const darktoggle = document.querySelector('#dark-toggle');
const html = document.querySelector('html')

darktoggle.addEventListener('click', function() {
    if (darktoggle.checked) {
        html.classList.add ('dark');
        localStorage.theme = 'dark';
    }
    else {
        html.classList.remove('dark');
        localStorage.theme = 'light';
    }
});

// Pindahkan posisi toggle
if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    darktoggle.checked = true;
  } else {
    darktoggle.checked = false``;
  }

//   Khusus web admin

var sensor = ["ancuk","ancok","ajig","anjay","anjg","anjing","anying","anjir","asu","asyu","babangus","babi","bacol","bacot","bagong","bajingan","balegug","banci","bangke","bangsat","bedebah","bedegong","bego","belegug","beloon","bencong","bloon","blo'on","bodoh","boloho","buduk","budug","celeng","cibai","cibay","cocot","cocote","cok","cokil","colai","colay","coli","colmek","conge","congean","congek","congor","cuk","cukima","cukimai","cukimay","dancok","entot","entotan","ewe","ewean","gelo","genjik","germo","gigolo","goblo","goblog","goblok","hencet","henceut","heunceut","homo","idiot","itil","jancuk","jancok","jablay","jalang","jembut","jiancok","jilmek","jurig","kacung","kampang","kampret","kampungan","kehed","kenthu","kentot","kentu","keparat","kimak","kintil","kirik","kunyuk","kurap","konti","kontol","kopet","koplok","lacur","lebok","lonte","maho","meki","memek","monyet","ndas","ndasmu","ngehe","ngentot","nggateli","nyepong","ngewe","ngocok","pante","pantek","patek","pathek","peju","pejuh","pecun","pecundang","pelacur","pelakor","peler","pepek","puki","pukima","pukimae","pukimak","pukimay","sampah","sepong","sial","sialan","silit","sinting","sontoloyo","tai","taik","tempek","tempik","tete","tetek","tiembokne","titit","toket","tolol","ublag","udik","wingkeng"];

            // Fungsi untuk mengganti kata-kata dalam elemen HTML
            function replaceTextInElements(elements) {
            elements.forEach(function(element) {
                // Mengambil teks dari elemen
                var originalText = element.textContent;

                // Mengganti kata-kata menggunakan ekspresi reguler dan fungsi penggantian kustom
                var newText = originalText.replace(new RegExp(sensor.join('|'), 'gi'), function(match) {
                // Menghasilkan jumlah asterisk yang sesuai dengan panjang kata yang disensor
                return '*'.repeat(match.length);
                });

                // Menetapkan teks yang telah diganti kembali ke elemen
                element.textContent = newText;
            });
        }

        // Mengambil semua elemen <p> dengan id="message"
        var messageElements = document.querySelectorAll('p#message');

        // Mengganti kata-kata dalam elemen-elemen yang dipilih
        replaceTextInElements(messageElements);