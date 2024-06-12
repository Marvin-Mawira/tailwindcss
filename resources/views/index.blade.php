<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwindcss</title>
    @vite('resources/css/app.css')
</head>

    <section class="px-6 py-4">
            <nav class="bg-blue-800 rounded">
                <ul>
                    <li class="flex mt-2 text-white font-bold px-2 py-1 rounded-lg">
                        <a href="" class="mr-7 hover:bg-green-900 rounded px-2 py-2">Home</a>
                        <a href="" class="mr-7 hover:bg-green-900 rounded px-2 py-2">About</a>
                        <a href="" class="mr-7 hover:bg-green-900 rounded px-2 py-2">Services</a>
                        <a href="" class="mr-7 hover:bg-green-900 rounded px-2 py-2">Contact</a>
                        <!-- Add the search option -->
                        <div class="flex">
                            <input type="text" class="bg-gray-50 border border-gray-300 text-red-900 sm:text-sm rounded-lg focus:ring-green-800 focus:border-green-800" placeholder="Search...">
                            <button class="focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="text-red-900 font-bold hover:text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                            </button>
                            <!-- Add the light mode icon -->
                            <button class="focus:outline-none" aria-label="Toggle light mode">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="transform rotate-90">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                            </button>
                        </div>
                    </li>
                </ul>
            </nav>
        <header class="mt-10 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold">Welcome to
                    <span class="text-blue-500">MTec Collection</span>
                </h2>
                <h2 class="inline-flex mt-2">
                    By Collective assurance
                </h2>
                <p class="mt-5 text-sm">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium, dicta.
                </p>
                <div class="mt-6 rounded">
                    <select name="like" id="like" class="rounded">View
                            <option value="like">
                                    <span class="font-bold">Like,</i></span>
                                    <span>Comment,</span>
                                    <span>Subscribe</span>
                            </option>
                    </select>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <h3 class="text-center text-2xl dark:text-orange-900 font-bold underline rounded-full bg-pink-200 mt-6">Our Services</h2>
                    <div class="flex justify-center mt-6">
                        <div class="w-1/3 bg-yellow-500 rounded mx-auto m-3">
                            <p class="p-4 mt-4 font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Officia explicabo ducimus nihil incidunt id nesciunt hic autem.
                                Reiciendis temporibus cum modi a beatae rem harum necessitatibus
                                tempore ea provident. Inventore.
                            </p>
                        </div>
                        <div class="w-1/3 bg-orange-500 rounded m-3">
                            <p class="p-4 mt-4">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Iste adipisci impedit excepturi voluptatem cum facilis quo molestiae unde,
                                fuga tenetur officiis totam modi beatae. Distinctio,
                                quo quibusdam? Consequatur, aspernatur deleniti.
                            </p>
                        </div>
                        <div class="w-1/3 bg-pink-500 rounded m-3">
                            <p class="p-4 mt-4">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Officia, harum. Fuga quo consectetur velit animi hic,
                                aliquam sint totam vitae et eaque officiis nihil. Officiis maiores,
                                praesentium odio sint, labore inventore aut totam cupiditate reprehenderit et nulla nemo saepe amet?
                            </p>
                        </div>
                    </div>

                    <article class="bg-gray-100 rounded-xl hover:border-4 border-blue-300 transform-scale-50">
                        <div class="py-6 px-5 flex">
                            <div class="flex-1 mr-6">
                                <img src="https://via.placeholder.com/700x300" alt="" class="rounded-xl h-full">
                            </div>
                            <div class="flex-1">
                                <header>
                                    <div>
                                        <a href="#" class="m-4 px-3 py-1 border-4 border-blue-300 rounded-full text-xs uppercase font-deibold" style="font-size: 1rem">Humbled</a>
                                        <a href="#" class="m-4 px-3 py-1 border-4 border-blue-300 rounded-full text-xs uppercase font-deibold" style="font-size: 1rem">World!</a>
                                    </div>
                                    <div>
                                        <h1 class="text-2xl mt-6"
                                        >Title For Big Cards in thi section</h1>
                                        <span class="block text-gray-400 mt-3 text-xs font-bold ">
                                           Published <time datetime="" class="text-gray-600">1 Month Ago</time>
                                        </span>
                                    </div>
                                </header>
                                <div class="mt-3">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Natus exercitationem accusantium est esse doloribus?
                                        Accusantium similique excepturi recusandae voluptatibus,
                                        odit illum, beatae, rerum libero iure quis quisquam magnam
                                        odio! Accusamus debitis asperiores deleniti in sint,
                                        odit.
                                    </p>
                                    <hr class="mt-4 border-2 border-blue-300 font-bold">
                                    <p class="mt-3">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Exercitationem, aspernatur. Eius mollitia pariatur ut dolores fuga!
                                        Deleniti non, veniam quia magnam id enim,
                                         ab debitis velit exercitationem?
                                    </p>
                                </div>
                                <section class="flex justify-between items-center mt-4">
                                    <div class="flex items-center text-sm">
                                        <img src="https://via.placeholder.com/50x50" alt="" class="rounded-xl h-full">
                                        <div class="ml-3 ">
                                                <h5>
                                                    <span class="font-bold text-blue-900">MTec</span> Collection
                                                </h5>
                                            <h6>Media Team</h6>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="text-sm font-bold border-4 border-blue-300 rounded-lg px-2 py-1">Read More</a>
                                    </div>
                                </s>
                            </div>
                        </div>
                    </article>
                    <section class="container mx-auto mt-6 p-4">
                        <div class="flex flex-wrap justify-between rounded-full">
                            <div class="flex-1 m-4 p-4 bg-white shadow-lg rounded-xl">
                                <div>
                                    <img src="https://via.placeholder.com/300x200" alt="Placeholder Image" class="rounded-xl w-full">
                                </div>
                                <header class="mt-4">
                                    <div class="flex space-x-2">
                                        <a href="#" class="px-3 py-1 border-4 border-blue-300 rounded-full text-xs uppercase font-semibold" style="font-size: 1rem">Humbled</a>
                                        <a href="#" class="px-3 py-1 border-4 border-blue-300 rounded-full text-xs uppercase font-semibold" style="font-size: 1rem">World!</a>
                                    </div>
                                    <div>
                                        <h1 class="text-2xl mt-6">Title Cards Section</h1>
                                        <span class="block text-gray-400 mt-3 text-xs font-bold">
                                            Published <time datetime="2023-05-01" class="text-gray-600">1 Month Ago</time>
                                        </span>
                                    </div>
                                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia perspiciatis aliquam repellendus dolorem ipsum.</p>
                                    <hr class="border-4 border-blue-300 mt-6 rounded-full">
                                    <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                </header>
                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit officiis repudiandae perferendis,
                                    dicta voluptatibus sit culpa illum esse laudantium quia repellendus blanditiis illo facilis autem consequuntur
                                    enim aliquid provident sunt? Asperiores, cum. Adipisci velit dignissimos aspernatur quas consequuntur inventore mollitia.
                                </p>
                            </div>
                            <div class="flex-1 m-4 p-4 bg-white shadow-lg rounded-xl">
                                <div>
                                    <img src="https://via.placeholder.com/300x200" alt="Placeholder Image" class="rounded-xl w-full">
                                </div>
                                <header class="mt-4">
                                    <div class="flex space-x-2">
                                        <a href="#" class="px-3 py-1 border-4 border-blue-300 rounded-full text-xs uppercase font-semibold" style="font-size: 1rem">Humbled</a>
                                        <a href="#" class="px-3 py-1 border-4 border-blue-300 rounded-full text-xs uppercase font-semibold" style="font-size: 1rem">World!</a>
                                    </div>
                                    <div>
                                        <h1 class="text-2xl mt-6">Title Cards Section</h1>
                                        <span class="block text-gray-400 mt-3 text-xs font-bold">
                                            Published <time datetime="2023-05-01" class="text-gray-600">1 Month Ago</time>
                                        </span>
                                    </div>
                                    <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia perspiciatis aliquam repellendus dolorem ipsum.</p>
                                    <hr class="border-4 border-blue-300 mt-6 rounded-full">
                                    <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
                                </header>
                                <p class="mt-4">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae laborum consequuntur beatae molestias harum iusto
                                    quibusdam optio quae? Tenetur autem aut expedita commodi eius nostrum numquam ea saepe, laboriosam nemo?
                                </p>
                            </div>
                        </div>
                    </section>


                    <div class="flex mt-6 justify-between">
                        <div class="flex-1 rounded-xl border-4 border-blue-600 hover:bg-blue-100 p-3 transform hover:scale-50">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, sequi nemo. Quam suscipit voluptatum,
                                consectetur iste non quis optio quaerat nostrum voluptatem et deserunt distinctio reiciendis eum mollitia
                                placeat voluptate ipsum repellendus tenetur unde
                                voluptatibus amet facilis! Labore sequi deserunt non at ullam illo recusandae ipsum nam! Nesciunt, quae iste.
                            </p>
                        </div>
                        <div class="flex-1 rounded-xl border-4 border-blue-600 hover:bg-blue-100 p-3">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam totam dolor doloremque nulla placeat,
                                id perferendis dolores alias enim provident quae vel nisi! Aut possimus incidunt reiciendis eaque, dolore architecto
                                quisquam aliquid perferendis tempore. Dolor odit animi rem asperiores consequatur iure architecto esse cum necessitatibus.
                            </p>
                        </div>
                        <div class="flex-1 rounded-xl border-4 border-blue-600 hover:bg-blue-100 p-3">
                            <p class="text-green italic">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Maxime laudantium quo esse accusamus voluptatem tenetur quos modi optio consectetur,
                                numquam mollitia delectus? Beatae quo illum esse corporis libero, id vitae,
                                consequuntur dolore optio necessitatibus itaque sequi voluptas. Laudantium recusandae
                                voluptatem saepe perspiciatis fugit mollitia omnis repellendus. Tempora quis iusto voluptates
                                nihil excepturi, modi expedita et possimus quibusdam repellendus praesentium alias.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="flex bg-slate-300 mt-10 h-full w-full rounded-xl relative overflow-hidden">
                <div class="flex-1 m-4">
                    <h2 class="text-2xl font-bold">Connect with Us</h2>
                    <ul class="m-2 space-y-1 text-gray-600 text-xl">
                        <li class="hover:text-blue-600 cursor-pointer">Nairobi</li>
                        <li class="hover:text-blue-600 cursor-pointer">Kenya</li>
                        <li class="hover:text-blue-600 cursor-pointer">254</li>
                        <li class="hover:text-blue-600 cursor-pointer">Kicc</li>
                    </ul>
                </div>
                <div class="flex-1 m-4">
                    <h2 class="text-2xl font-bold">Quick Links</h2>
                    <div>
                        <ul class="m-2 space-y-1 text-gray-600 text-xl">
                            <li class="hover:text-blue-600 cursor-pointer">Home</li>
                            <li class="hover:text-blue-600 cursor-pointer">About</li>
                            <li class="hover:text-blue-600 cursor-pointer">Services</li>
                            <li class="hover:text-blue-600 cursor-pointer">Contact</li>
                        </ul>
                    </div>
                </div>
                <div class="flex-1 m-4">
                    <h2 class="text-2xl font-bold">Objectives</h2>
                    <ul class="m-2 space-y-1 text-gray-600 text-xl">
                        <li class="hover:text-blue-600 cursor-pointer">Home</li>
                        <li class="hover:text-blue-600 cursor-pointer">About</li>
                        <li class="hover:text-blue-600 cursor-pointer">Services</li>
                        <li class="hover:text-blue-600 cursor-pointer">Contact</li>
                    </ul>

                </div>
                <div class="flex-1 m-4">
                    <h2 class="text-2xl font-bold">News Update</h2>
                        <ul class="m-2 space-y-1 text-gray-600 text-xl">
                            <li class="hover:text-blue-600 cursor-pointer">Home</li>
                            <li class="hover:text-blue-600 cursor-pointer">About</li>
                            <li class="hover:text-blue-600 cursor-pointer">Services</li>
                            <li class="hover:text-blue-600 cursor-pointer">Contact</li>
                        </ul>
                </div>
            </div>
            <div>
                <button class="float-right bg-blue-600 rounded-full">
                    <a href="#" class="px-4 py-3 mt-4 font-semibold text-white">&#x2195; Top</a>
                </button>
            </div>
        </footer>
    </section>

</html>
