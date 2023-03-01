<header class="sticky top-0 shadow-lg z-30" style="z-index: 2;">
        <div class="top-header text-black bg-white">
            <div class="lg:flex lg:justify-between lg:items-center  max-w-7xl mx-auto px-[16px] py-[12px]">
                <div class="flex justify-center items-center lg:block">

                    <div class="side-nav lg:hidden absolute left-4 cursor-pointer">
                        <input type="checkbox" name="" onclick="FuncClick()" id="shopping-cart-checkbox" class=""
                            autocompleted="">
                        <label for="shopping-cart-checkbox" class="uncheck-label text-black trans"><i
                                class="fas fa-bars text-2xl"></i></label>
                    </div>
                    <div class="side-nav-f fixed top-0 bottom-0 w-full max-w-[17rem] z-10 bg-[#000000] trans -left-[17rem]"
                        id="SideNav" style="transition: 0.5s ease-in-out;">
                        <div class="w-full py-5 flex justify-between items-center px-4">

                            <img src="https://livsham.softwarebyte.co/frontend/images/logo.png" alt="logo"
                                class="w-[100px]">
                            <label for="shopping-cart-checkbox"
                                class=" transform hover:scale-150 transition duration-500 ease-in-out"
                                onclick="FuncClick()">
                                <i class="bi bi-x-circle text-gray-500 hover:text-white px-[3px] rounded-md"></i>
                                </label>
                        </div>
                        <div class="text-white">
                            <ul>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-12 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Logga in</a></li>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-12 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Bli Medlem</a></li>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-12 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Hem</a></li>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-12 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Handla om</a></li>
                                <li
                                    class="border-t-2 border-gray-600 py-2 px-10 hover:px-12 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Kontakter</a></li>
                                <li
                                    class="border-y-2 border-gray-600 py-2 px-10 hover:px-12 transition-all ease-in-out hover:text-green-600 font-bold">
                                    <a href="">Kartor</a></li>
                            </ul>
                        </div>
                    </div>

                    <h1 class="pb-4 lg:pb-0"><a href="/">
                            <picture>
                                <img src="https://livsham.softwarebyte.co/frontend/images/logo.png" alt="" class=""
                                    width="160px"></picture>
                        </a></h1>

                </div>

                <form action="https://livsham.softwarebyte.co/product/search" method="POST">
                    <div
                        class="flex items-center lg:w-full lg:max-w-[600px] border-2 border-green-700 bg-white text-black h-[44px] lg:h-[52px] pl-[16px] pr-[4px] lg:mx-[32px] rounded-lg overflow-hidden lg:ml-0">
                        <div class="flex items-center justify-center pr-[16px]">
                            <i class="fa fa-search"></i>
                        </div>
                        <input type="hidden" name="_token" value="iiEynT7XUYtwhb4BoR4zQ66K8q1K3t0BqlDABV0l">
                        <div class="w-full py-[14px]">
                            <input type="search" name="search" class="w-full focus:outline-none"
                                placeholder="Here you search for products and recipes">
                        </div>
                        <button type="submit"
                            class="hidden lg:block hover:bg-green-900 bg-green-700 text-white h-[40px] px-10 rounded-md">Search</button>
                    </div>
                </form>
                <div class="lg:flex items-center hidden lg:inline-block">

                    <span class="mr-1">
                        <a href="login.html"><i class="fa fa-user mr-2  login-icon">
                            </i>Log In</a></span>



                </div>
            </div>
        </div>
        <div class="bottom-header whitespace-nowrap bg-green-700 text-white">
            <div class="max-w-7xl hidden lg:flex items-center justify-between py-1 mx-auto">
                <div class="flex items-center space-x-12">
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a href="/"
                                    class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center" style="font-size: 20px; font-weight: 600;">
                                    <span class="">Home</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a
                                    class="bg-green-700 text-white font-semibold  py-4 px-4 rounded inline-flex items-center cursor-pointer" style="font-size: 20px; font-weight: 600;">
                                    <span class="">Category</span>

                                </a>
                                <div
                                    class="absolute  hidden text-gray-700 group-hover:block bg-white p-8 pb-10 rounded-b-[60px] overflow-hidden" style="box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.06); margin-top: 4px;">
                                    <div class="flex space-x-4">
                                        <ul class="drop-down-link pr-16 border-r-2 border-gray-300">
                                            <li><a
                                                    href="">Fruit
                                                    &amp; Vegetables</a>
                                            </li>
                                            <li>
                                                <a href="">Dairy, Cheese & Juice</a>
                                            </li>
                                            <li>
                                                <a href="">Bread & bakery</a>
                                            </li>
                                            <li>
                                                <a href="">Drinks</a>
                                            </li>
                                            <li>
                                                <a href="">Pantery</a>
                                            </li>
                                            <li>
                                                <a href="">Fish Shellfish</a>
                                            </li>

                                            <li>
                                                <a href="">Meat</a>
                                            </li>
                                        </ul>
                                        <ul class="drop-down-link pr-16 border-r-2 border-gray-300">
                                            <li>
                                                <a href="">Ready meals & snacks</a>
                                            </li>

                                            <li>
                                                <a href="">baby food & accessories</a>
                                            </li>

                                            <li>
                                                <a href="">spices & Flavorings</a>
                                            </li>

                                            <li>
                                                <a href="">Pet food & accessories</a>
                                            </li>

                                        </ul>

                                        <ul class="pr-16 border-r-2 border-gray-300">
                                            <li><a href="">Fruit
                                                    &amp; Vegetables</a></li>
                                            <li><a
                                                    href="">Milk</a>
                                            </li>
                                            <li><a
                                                    href="">Bread</a>
                                            </li>

                                        </ul>
                                       
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a
                                    class="bg-green-700 text-white font-semibold  py-4 px-4 rounded inline-flex items-center cursor-pointer" style="font-size: 20px; font-weight: 600;">
                                    <span class="">Offers
                                    </span>

                                </a>
                               
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex items-center">

                    <div class="antialiased hidden">
                        <div class="">
                            <div class="group inline-block relative">
                                <a
                                    class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                                    <span class="mr-1"></span></a><a href="https://livsham.softwarebyte.co/register">Ny
                                    kund</a>
                            </div>
                        </div>
                    </div>
                    <div class="antialiased">
                        <div class="">
                            <div class="group inline-block relative">
                                <a
                                    class="bg-green-700 text-white font-semibold py-2 px-4 rounded inline-flex items-center">
                                    <input type="checkbox" name="Shopping-cartbtn" id="Shopping-cartbtn"
                                        onclick="FuncClick2()" value="false" class="hidden">
                                    <label for="Shopping-cartbtn">
                                        <h1
                                            class="h-[40px] px-16 border-2 border-white bg-white font-extrabold rounded-md pb-[1px] whitespace-nowrap flex justify-center items-center cursor-pointer tracking-wider">
                                            <img style="width: 100px;" src="images/logo.png"
                                                alt="logo" class="w-8 mr-2">
                                        </h1>
                                    </label>
                                    <div class="px-2 py-1 bg-red-500 border-2 border-white text-white rounded-full text-xs font-semibold tracking-wider -mt-9 -ml-4 hidden"
                                        id="">
                                        0
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>