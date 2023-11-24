<?php include( "PHP/config.php" ); ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="dist/output.css">
    <link rel="shortcut icon" href="img/iconzxc.png">
    <title>My Personal Profile</title>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body>
    <!-- Header start -->
    <header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="Login.php" class="font-bold text-lg dark:font-bold dark:text-white block py-6">Rafid <span class="text-primary">Adriyan</span></a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>

                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-hitam dark:shadow-slate-800 lg:dark:bg-transparent">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#Home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white dark:font-medium group-hover:font-bold">Home</a>
                            </li>
                            <li class="group">
                                <a href="#About" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white dark:font-medium group-hover:font-bold">About me</a>
                            </li>
                            <li class="group">
                                <a href="#Portofolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white dark:font-medium group-hover:font-bold">Portofolio</a>
                            </li>
                            <li class="group">
                                <a href="#Home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white dark:font-medium group-hover:font-bold">Contact</a>
                            </li>
                            <li class="group">
                                <a href="#Feedback" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white dark:font-medium group-hover:font-bold">Feedback</a>
                            </li>
                            <li class="mt-3 lg:mt-0 flex items-center pl-8">
                                <div class="flex">
                                    <span class="mr-2 text-sm text-slate500 dark:text-slate-300">Light</span>
                                    <input type="checkbox" class="hidden" id="dark-toggle"/>
                                    <label for="dark-toggle">
                                        <div class="flex h-5 w-9 cursor-pointer items-center rounded-full bg-slate-500 p-1">
                                            <div class="toggle-circle h-4 w-4 rounded-full bg-white transition duration-200"></div>
                                        </div>
                                    </label>
                                    <span class="ml-2 text-sm text-slate-500 dark:text-slate-300">Dark</span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Start -->
    <section id="Home" class="pt-[11rem] dark:bg-hitam">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2" >
                    <h1 class="text-base font-semibold text-primary md:text-xl dark:font-bold">Hello friend, Im <span class="block font-bold text-dark text-3xl lg:text-5xl dark:text-white">Rafid Adriyan Saputra</span></h1>
                    <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl dark:text-slate-400">Student & <span class="text-dark dark:text-white">Web Developer</span></h2>
                    <p class="font-medium text-slate-500 mb-10   leading-relaxed">Want to create a website professionally?, <span class="text-dark font-bold dark:text-white">just hire me now</span></p>
                    <a href="Contact.php" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Contact Me</a>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:-right-5">
                        <img src="img/Rafid1.png" alt="Rafid1" class="relative z-10 max-w-full mx-auto" />
                        <span class="absolute bottom-0  left-1/2 -translate-x-1/2">
                            <svg width="350" height="350" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#4338ca" d="M61.2,-21.1C69.9,6.7,60.8,39,38.8,55.5C16.7,72.1,-18.4,72.8,-41.7,56.2C-65.1,39.5,-76.7,5.4,-67.8,-22.7C-58.9,-50.9,-29.5,-73,-1.6,-72.5C26.3,-72,52.6,-48.8,61.2,-21.1Z" transform="translate(100 100) scale(1)"/>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- About Start -->
    <section id="About" class="pt-36 pb-32 dark:bg-hitam">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-10 lg:w-1/2">
                    <h4 class="font-bold  uppercase text-primary text-lg mb-3">About Me</h4>
                    <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">Coding Excellence Beyond Limits</h2>
                    <p class="font-medium text-base text-secondary max-w-xl lg:text-lg dark:text-slate-400">A student who was born in Indonesia in 2007, has the ambition to become a successful programmer in the future so that he can make his parents proud.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-white">let's be friends</h3>
                    <p class="font-medium text-base text-secondary max-w-xl mb-6 lg:text-lg dark:text-slate-400">In Indonesia there is a saying that says, if you don't know, you won't be close. Come be friends with me, so you know the great potential within me</p>
                    <div class="flex items-center">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/rafid_768/" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-primary hover:text-white dark:text-slate-400 hover:dark:text-white"><svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
                        <!-- Twitter -->
                        <a href="https://twitter.com/AdriyanRafid" class="w-8 h-8 mr-3 rounded-full flex justify-center items-center border p-1 border-slate-300 hover:border-primary hover:bg-primary hover:text-white dark:text-slate-400 hover:dark:text-white"><svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a>
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/rafid.adriyan.16" class="w-8 h-8 mr-3 rounded-full flex justify-center items-center border p-1 border-slate-300 hover:border-primary hover:bg-primary hover:text-white dark:text-slate-400 hover:dark:text-white"><svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg></a>
                        <!-- Whastaap -->
                        <a href="https://wa.me/+62895335419696" class="w-8 h-8 mr-3 rounded-full flex justify-center items-center border p-1 border-slate-300 hover:border-primary hover:bg-primary hover:text-white dark:text-slate-400 hover:dark:text-white"><svg role="img"  class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!-- Portofolio Start -->
    <section id="Portofolio" class="pt-36 pb-16 bg-slate-100 dark:bg-[#0D0A1F]">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 dark:font-bold">Portofolio</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">Educational background</h2>
                    <p class="font-medium text-md text-secondary dark:text-slate-500">Below is information about my educational history, schools that can make me a successful person in the future.</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/SD.jpg" alt="Sdn Sumberjaya 03" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 dark:text-white">SDN SUMBERJAYA 03</h3>
                    <h5 class="mb-3 font-medium text-base text-secondary dark:text-slate-400">(2013-2019)</h5>
                    <p class="font-medium text-base text-secondary dark:text-slate-500">Jl. Raya Sumber Jaya Jl. Nusantara Raya, Sumberjaya, Kab. Tambun Sel., Bekasi Regency, West Java 17510, Indonesia.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/SMP.jpg" alt="SMP NEGERI 5 TAMBUN SELATAN" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 dark:text-white">SMP NEGERI 5 TAMBUN SELATAN</h3>
                    <h5 class="mb-3 font-medium text-base text-secondary dark:text-slate-400">(2019-2021)</h5>
                    <p class="font-medium text-base text-secondary dark:text-slate-500">Jl. Griya Asri 2, Sumberjaya, District. Tambun Sel., Bekasi Regency, West Java 17510, Indonesia.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/SMK.jpg" alt="SMP NEGERI 5 TAMBUN SELATAN" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 dark:text-white">SMK TELEKOMUNIKASI TELESANDI BEKASI</h3>
                    <h5 class="mb-3 font-medium text-base text-secondary dark:text-slate-400">(still studying here)</h5>
                    <p class="font-medium text-base text-secondary dark:text-slate-500">. Village, Mekarsari, District. Tambun Sel., Bekasi Regency, West Java 17510</p>
                </div>
            </div>
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">My Skill</h2>
                    <p class="font-medium text-md text-secondary dark:text-slate-500">Here are the skill parameters according to me personally, even though I am just a student.</p>
                </div>
            </div>
            <div class="w-full mx-auto max-w-5xl">
                <div class="px-4 mb-16 relative">
                    <p class="font-bold text-xl mb-2 dark:text-white">HTML :</p>
                    <div class="bg-html w-w-70% py-[10px] rounded-r-xl"></div>
                    <p class="relative text-right bottom-5 right-[16%] lg:right-[25%] font-bold dark:text-white">70%</p>
                    <p class="font-bold text-xl mb-2 dark:text-white">CSS :</p>
                    <div class="bg-[#0077E4] w-[85%] py-[10px] rounded-r-xl"></div>
                    <p class="relative text-right bottom-5 right-[2%] lg:right-[10%] font-bold dark:text-white">85%</p>
                    <p class="font-bold text-xl mb-2 dark:text-white">Javascript :</p>
                    <div class="bg-[#FFD80A] w-[45%] py-[10px] rounded-r-xl"></div>
                    <p class="relative text-right bottom-5 right-[42%] lg:right-[50%] font-bold dark:text-white">45%</p>
                    <p class="font-bold text-xl mb-2 dark:text-white">Phyton :</p>
                    <div class="bg-[#FF0A0A] w-[40%] py-[10px] rounded-r-xl"></div>
                    <p class="relative text-right bottom-5 right-[48%] lg:right-[55%] font-bold dark:text-white">40%</p>
                    <p class="font-bold text-xl mb-2 dark:text-white">C++ :</p>
                    <div class="bg-[#840AFF] w-w-70% py-[10px] rounded-r-xl"></div>
                    <p class="relative text-right bottom-5 right-[18%] lg:right-[25%] font-bold dark:text-white">70%</p>
                </div>
                <div class="px-4 mb-16">
                    
                </div>
            </div>
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">Jobdesk</h2>
                    <p class="font-medium text-md text-secondary dark:text-slate-500">Do you want to collaborate with me? I can assist you as follows</p>
                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/Pexels Photo by picjumbo.com (1).png" alt="Web dev" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Web Developer</h3>
                    <p class="font-medium text-base text-secondary dark:text-slate-500">I can create a dynamic or static website for you.</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/Pexels Photo by Designecologist.png" alt="Front End Developer" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Front End Developer</h3>
                    <p class="font-medium text-base text-secondary dark:text-slate-500">Do you have a team that needs a front end developer?, hire me and I will create a web design according to your needs...</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/Pexels Photo by picjumbo.com.png" alt="UI/UX Designer" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">UI/UX Designer</h3>
                    <p class="font-medium text-base text-secondary dark:text-slate-500">Do you want to create a website but don't have a web design idea? I can make it for you</p>
                </div>
                <div class="mb-12 p-4 md:w-1/2">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="img/Pexels Photo by Christina Morillo.png" alt="Mobile App Developer" width="w-full">
                    </div>
                    <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Mobile App Developer</h3>
                    <p class="font-medium text-base text-secondary dark:text-slate-500">I can also give you an application that runs on mobile, tell me whatever you need and I will do it perfectly</p>
                </div>
            </div>
        </div>
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">New Project</h2>
                <p class="font-medium text-md text-secondary dark:text-slate-500">The following are the applications or websites that I have created from the first to the last.</p>
            </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="img/Screenshot (152).png" alt="Personal Profile V.1" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Personal Profile V.1</h3>
                <p class="font-medium text-base text-secondary dark:text-slate-500">The personal profile landing page which contains my personal data in web form is a trial prototype for personal profile version 2</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md overflow-hidden">
                    <img src="img/Screenshot (153).png" alt="Personal Profile V.2" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3 dark:text-white">Personal Profile V.2</h3>
                <p class="font-medium text-base text-secondary dark:text-slate-500">The final version of the landing page from the prototype version, has additional admin forms and comment feedback features and others.</p>
            </div>
        </div>
    </section>
    <!-- Portofolio End -->

    <!-- Contact Start -->
    <section id="Feedback" class="pt-36 pb-32 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 dark:font-bold">Feedback</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">Feedback Me</h2>
                    <p class="font-medium text-md text-secondary dark:text-slate-400">Please provide your suggestions and comments so that I can develop or create a more perfect website.</p>
                </div>
                <form action="PHP/insertfeedback.php" method="POST">
                    <div class="w-full lg:w-2/3 lg:mx-auto">
                        <div class="w-full px-4 mb-8">
                            <label for="Name" class="text-base text-primary font-bold dark:font-bold">Name</label>
                            <input type="text" name="Name" class="w-full  bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required/>
                        </div>
                        <div class="w-full px-4 mb-8">
                            <label for="Message" class="text-base text-primary font-bold dark:font-bold">Mesege</label>
                            <textarea type="type" name="Message" id="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32" required></textarea>
                        </div>
                        <div class="w-full">
                            <input type="submit" value="Submit" name="submit" class="text-base text-center font-semibold text-white bg-primary py-3 px-8  rounded-full w-full hover:shadow-lg hover:opacity-80 transition duration-500 ease-in-out">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Contact end -->

    <!-- User Coment -->
    <section id="coment" class="pb-32 dark:bg-slate-800">
        <div class="container">
            <div class="flex flex-wrap border border-slate-300 dark:border-white max-w-6xl mx-auto px-4 rounded-[6px]">
                <div class="w-full px-4">
                    <div class="mb-4 pt-10">
                        <h2 class="font-bold text-dark text-2xl dark:text-white">Coment Feedback</h2>
                        <p class="text-base text-slate-600 dark:text-slate-400">fill in feedback comments by users</p>
                    </div>
                <div class="border-t border-t-slate-400 ">
                    <?php
                    $sql = "SELECT * FROM selection";
                    $query = mysqli_query( $db, $sql);
                    while( $message = mysqli_fetch_array($query)) {
                        echo "<div class='mt-6 bg-slate-200 mb-6 px-3 pt-3 pb-3 rounded-[6px]'>";
                        echo "<h2 class='font-semibold mb-2'>".$message['Name']." / <span class='text-slate-700'>".$message['Tanggal']."</span></h2>";
                        echo "<p id='message'>".$message['Message']."</p>";
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- User Coment end -->

    <!-- Footer start -->
    <footer class="bg-slate-900 pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap ">
                <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                    <h2 class="font-bold text-4xl text-white mb-5">Rafid Adriyan</h2>
                    <h3 class="font-bold text-2xl mb-2">Contact Me</h3>
                    <p>ardiyansaputrarafid@gmail.com</p>
                    <p>Kab. Bekasi, Sumberjaya, Kec. Tambun Sel., Jawa Barat 17510</p>
                    <p>Indonesia</p>
                </div>
               <div class="w-full px-4 mb-12 md:w-1/3">
                <h3 class="font-semibold text-xl text-white mb-5">Recomendation Web</h3>
                <ul class="text-slate-300">
                    <li>
                        <a href="https://www.w3schools.com/" class="inline-block text-base hover:text-primary mb-3">Programing</a>
                    </li>
                    <li>
                        <a href="https://www.jagatreview.com/" class="inline-block text-base hover:text-primary mb-3">Tecnology</a>
                    </li>
                </ul>
               </div>
               <div class="w-full px-4 mb-12 md:w-1/3">
                <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                <ul class="text-slate-300">
                    <li>
                        <a href="#Home" class="inline-block text-base hover:text-primary mb-3">Home</a>
                    </li>
                    <li>
                        <a href="#About" class="inline-block text-base hover:text-primary mb-3">About Me</a>
                    </li>
                    <li>
                        <a href="#Portofolio" class="inline-block text-base hover:text-primary mb-3">Portofolio</a>
                    </li>
                    <li>
                        <a href="#Home" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                    </li>
                    <li>
                        <a href="#Feedback" class="inline-block text-base hover:text-primary mb-3">Feedback</a>
                    </li>
                </ul>
               </div>
            </div>
            <div class="w-full pt-10 border-t border-r-slate-700">
                <div class="flex items-center justify-center mb-5">
                    <!-- Instagram -->
                    <a href="https://www.instagram.com/rafid_768/" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary text-white hover:bg-primary hover:text-white"><svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/AdriyanRafid" class="w-8 h-8 mr-3 rounded-full flex justify-center items-center border p-1 border-slate-300 hover:border-primary text-white hover:bg-primary hover:text-white"><svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a>
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/rafid.adriyan.16" class="w-8 h-8 mr-3 rounded-full flex justify-center items-center border p-1 border-slate-300 hover:border-primary text-white hover:bg-primary hover:text-white"><svg role="img" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg></a>
                    <!-- Whastaap -->
                    <a href="https://wa.me/+62895335419696i" class="w-8 h-8 mr-3 rounded-full flex justify-center items-center border p-1 border-slate-300 hover:border-primary text-white hover:bg-primary hover:text-white"><svg role="img"  class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg></a>
                </div>
                <p class="font-medium text-sm text-slate-500 text-center">Di buat oleh <a href="" class="font-bold text-primary">Rafid Adriyan Saputra</a>, Menggunakan <a href="https://tailwindcss.com/" target="_blank" class="font-bold text-sky-500">Tailwind CSS</a>.</p>
            </div>
        </div>
    </footer>
    <!-- footer End -->

    <a href="#Home" id="to-top" class="fixed hidden justify-center items-center bottom-4 right-4 p-4 z-[9999] hover:animate-pulse h-14 w-14 rounded-full bg-primary">
        <span class="block h-5 w-5 border-t-2 border-l-2 rotate-45 mt-2"></span>
    </a>
    <script src="dist/js/script.js"></script>
    <script>
        // Fungsi untuk mensensor kata-kata kasar
    function sensorKataKasar(teks) {
        // Daftar kata-kata kasar yang ingin di-sensor
        var kataKasar = ["ancuk","ancok","ajig","anjay","anjg","anjing","anying","anjir","asu","asyu","babangus","babi","bacol","bacot","bagong","bajingan","balegug","banci","bangke","bangsat","bedebah","bedegong","bego","belegug","beloon","bencong","bloon","blo'on","bodoh","boloho","buduk","budug","celeng","cibai","cibay","cocot","cocote","cok","cokil","colai","colay","coli","colmek","conge","congean","congek","congor","cuk","cukima","cukimai","cukimay","dancok","entot","entotan","ewe","ewean","gelo","genjik","germo","gigolo","goblo","goblog","goblok","hencet","henceut","heunceut","homo","idiot","itil","jancuk","jancok","jablay","jalang","jembut","jiancok","jilmek","jurig","kacung","kampang","kampret","kampungan","kehed","kenthu","kentot","kentu","keparat","kimak","kintil","kirik","kunyuk","kurap","konti","kontol","kopet","koplok","lacur","lebok","lonte","maho","meki","memek","monyet","ndas","ndasmu","ngehe","ngentot","nggateli","nyepong","ngewe","ngocok","pante","pantek","patek","pathek","peju","pejuh","pecun","pecundang","pelacur","pelakor","peler","pepek","puki","pukima","pukimae","pukimak","pukimay","sampah","sepong","sial","sialan","silit","sinting","sontoloyo","tai","taik","tempek","tempik","tete","tetek","tiembokne","titit","toket","tolol","ublag","udik","wingkeng"];
        
        // Loop melalui setiap kata-kata kasar dan ganti dengan karakter '*'
        for (var i = 0; i < kataKasar.length; i++) {
            var regex = new RegExp(kataKasar[i], "gi");
            teks = teks.replace(regex, '*');
        }
        
        return teks;
    }

    // Jalankan fungsi sensor setelah halaman dimuat
    document.addEventListener("DOMContentLoaded", function () {
        var messages = document.querySelectorAll('#message');
        messages.forEach(function (message) {
            // Dapatkan teks pesan
            var teksPesan = message.innerHTML;
            
            // Sensor kata-kata kasar
            var teksSensor = sensorKataKasar(teksPesan);

            // Terapkan teks yang sudah disensor ke dalam elemen
            message.innerHTML = teksSensor;
        });
    });
    </script>
</body>
</html>