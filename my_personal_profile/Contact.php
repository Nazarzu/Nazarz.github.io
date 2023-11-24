<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="dist/output.css">
    <link rel="shortcut icon" href="img/iconzxc.png">
    <title>Contact us</title>
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="dark:bg-slate-800">
    <header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class=" flex items-center justify-between relative">
                <div class="px-4">
                    <a href="Index.php" class="font-bold text-lg dark:font-bold dark:text-white block py-6">Rafid <span class="text-primary">Adriyan</span></a>
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
                                <a href="Index.php" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary dark:text-white dark:font-medium group-hover:font-bold">Home</a>
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
                                    <span class="ml-2 text-sm text-slate500 dark:text-slate-300">Dark</span>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section id="Contact" class="pt-36 pb-32 dark:bg-slate-800">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto text-center mb-16">
                    <h4 class="font-semibold text-lg text-primary mb-2 dark:font-bold">Contact</h4>
                    <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">Contact Us</h2>
                    <p class="font-medium text-md text-secondary dark:text-slate-400">Thank you for wanting to work with me. Please fill in the data below and what you want me to do for you</p>
                </div>
            </div>
            <form action="PHP/Insertcontact.php" method="POST">
                <div class="w-full lg:w-2/3 lg:mx-auto">
                    <div class="w-full px-4 mb-8">
                        <label for="name" class="text-base text-primary font-bold dark:font-bold">Name</label>
                        <input type="text" name="Name" class="w-full  bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required/>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="Email" class="text-base text-primary font-bold dark:font-bold">Email</label>
                        <input type="text" name="Email" class="w-full  bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required/>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="Number" class="text-base text-primary font-bold dark:font-bold">Phone Number</label>
                        <input type="text" name="Number" class="w-full  bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required/>
                    </div>
                    <div class="w-full px-4 mb-8">
                        <label for="mesage" class="text-base text-primary font-bold dark:font-bold">Mesege</label>
                        <textarea type="type"  name="Message" class="w-full  bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32" required></textarea>
                    </div>
                    <div class="w-full">
                        <input type="submit" value="Submit" name="submit" class="text-base font-semibold text-white bg-primary py-3 px-8  rounded-full w-full hover:shadow-lg hover:opacity-80 transition duration-500 ease-in-out">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="dist/js/script.js"></script>
</body>
</html>