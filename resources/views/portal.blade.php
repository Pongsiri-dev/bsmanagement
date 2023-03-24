<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="asset/css/custom.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bartersmart</title>
</head>

<body>
    <header class="absolute w-full lg:top-12 top-4">
        <nav class="flex items-center justify-between bg-inherit p-5 xl:px-28 lg:px-10 px-4">
            <div class="flex items-center flex-shrink-0 text-white mr-6">
                <img class="w-60 img-logo" src="asset/image/logo.png" />
            </div>

            <div class="block md:hidden">
                <div class="flex items-center">
                    <a href="/" class="block lg:inline-block  text-orange-500 mr-4"> หน้าแรก </a>
                    <span onclick="openNav()">

                        <img class="w-6" src="asset/image/icon-hamburger.png" />
                    </span>
                </div>

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500">
                        เกี่ยวกับเรา </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500">
                        ประโยชน์ที่คุณจะได้รับ </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500">
                        Point&Bigpoint </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500">
                        กิจกรรม </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500">
                        บทความ </a>
                    <a href="{{ url('/login') }}"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500">
                        เข้าสู่ระบบ </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500">
                        ติดต่อเรา </a>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="md:flex block menu-phone">
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500 mr-4">
                        หน้าแรก </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500 mr-4">
                        เกี่ยวกับเรา </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500 mr-4">
                        ประโยชน์ที่คุณจะได้รับ </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500 mr-4">
                        Point&Bigpoint </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500 mr-4">
                        กิจกรรม </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500 mr-4">
                        บทความ </a>
                    <a href="{{ url('/login') }}"
                        class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500 mr-4">
                        เข้าสู่ระบบ </a>
                    <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-white hover:text-orange-500">
                        ติดต่อเรา </a>˝

                </div>

            </div>
        </nav>
    </header>
    <!-- section 1 -->
    <section class="sectionone box-content">
        <div class="container mx-auto">
            <div class="w-full lg:w-1/2 columns-lg h-5/6 grid content-center px-4">
                <div class="lg:pt-96 pt-96">
                    <img class="w-96" src="asset/image/WEB_Barter_01.png" />
                    <p class="text-white fix-padding">Bigpoint เหรียญคนไทย ใช้ได้จริง สร้างโอกาสใหม่ เพิ่มช่องทาง
                        ขยายฐานลูกค้า จากสินค้า และบริการของคุณ</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section 1  end -->

    <!-- section 2 -->
    <section class="sectiontwo box-content lg:pt-40 pt-20">
        <div class="container mx-auto">
            <div class="flex justify-center text-center md:px-28 lg:px-60 px-8">
                <div>
                    <h1 class="text-5xl font-bold text-white mb-8 leading-normal">รู้จัก <span
                            class="text-orange-500">Barter</span>smart มากขึ้น</h1>
                    <p class="text-white">
                        <span>เราคือ Platform แลกเปลี่ยนสินค้าไม่ใช้เงิน ที่จะช่วยให้ธุรกิจของคุณ
                            เพิ่มยอดขายระบายสต๊อค</span> ประหยัดเงินสด ลดค่าใช้จ่าย ต่อยอด Connection ขยายฐานธุรกิจใหม่
                        ผ่านเหรียญ Cryptocurrency ที่ใช้ระบบ Blockchain ในการออกแบบ ด้วยสินค้าบริการของคุณที่มีอยู่
                        นำสินค้าและบริการมา แลกเปลี่ยนกันจนเกิดเป็นโลกใบใหม่ ไม่ใช้เงิน
                    </p>
                    <div>
                        <div class="lg:flex grid py-8">
                            <div class="lg:w-1/2 w-full h-40 my-2 px-0 lg:px-0">
                                <div class="bg-black border-orange-500 rounded-3xl mx-4 border-2 h-full">
                                    <div class="flex justify-center items-center h-full">
                                        <img class="w-24 mr-4" src="asset/image/icon-01.png" />
                                        <div class="text-center">
                                            <p class="text-white">จำนวนสมาชิกในระบบ</p>
                                            <p><span class="text-orange-500 text-4xl">45,000</span> ธุรกิจ</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:w-1/2 w-full h-40 my-2 px-0 lg:px-0">
                                <div class="bg-black border-orange-500 rounded-3xl mx-4 border-2 h-full">
                                    <div class="flex justify-center items-center h-full">
                                        <div>
                                            <p class="text-white">ยอดแลกเปลี่ยน</p>
                                            <p class="text-white"><span
                                                    class="text-orange-500 text-4xl">9,000,000,000</span> point</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 2 end -->

    <!-- section 3 -->
    <section class="sectionthree box-content lg:pt-20 pt-20">
        <div class="container mx-auto">
            <div class="flex justify-center ">
                <img class="lg:w-2/3 w-full md:block hidden " src="asset/image/img-phone.png" />
                <img class="w-full  md:hidden block" src="asset/image/mobile/WEB_Barter_1.png" />
            </div>
            <div class="lg:w-1/2 w-full flex justify-center items-center  lg:hidden block">
                <div class="lg:px-10 px-0 text-center">
                    <h1 class="text-5xl font-bold text-orange-500 mb-4">สมัครฟรี!</h1>
                    <p class="text-white text-5xl">“ไม่มีค่าใช้จ่าย”</p>
                    <div class="flex justify-center my-6">
                        <img class="w-1/4" src="asset/image/applestore.png" />
                        <img class="w-1/4" src="asset/image/google.png" />
                    </div>
                    <p class="text-white  mb-10">ดาวน์โหลดฟรี ทั้ง IOS และ Android</p>
                </div>
            </div>
        </div>
    </section>
    <!-- section 3 end -->

    <!-- section 4 -->
    <section class="sectionfour box-content pt-20">
        <div class="container mx-auto">
            <div class="lg:flex grid mb-4 text-center  lg:block hidden">
                <div class="lg:w-1/2 w-full flex justify-center items-center">
                    <div>
                        <h1 class="text-5xl font-bold text-orange-500 mb-4">สมัครฟรี!</h1>
                        <p class="text-white text-5xl">“ไม่มีค่าใช้จ่าย”</p>
                        <div class="flex justify-center my-6">
                            <img class="w-1/4" src="asset/image/applestore.png" />
                            <img class="w-1/4" src="asset/image/google.png" />
                        </div>
                        <p class="text-white ">ดาวน์โหลดฟรี ทั้ง IOS และ Android</p>
                    </div>
                </div>
                <div class="lg:w-1/2 w-full">
                    <div>
                        <img class="lg:w-full w-1/2 mx-auto" src="asset/image/imghand.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 4 end -->

    <!-- section 5 -->
    <section class="sectionfive box-content pt-20">
        <div class="container mx-auto">
            <div class="lg:flex grid text-center">
                <div class="lg:w-1/2 w-full ">
                    <div class="lg:block hidden">
                        <img cclass="w-full mx-auto" src="asset/image/imgnotebook.png" />
                    </div>
                </div>
                <div class="lg:w-1/2 w-full flex justify-center items-center">
                    <div class="lg:px-10 px-0">
                        <h1 class="text-5xl font-bold text-white mb-4">Point และ <span
                                class="text-orange-500">Bigpoint</span></h1>
                        <p class="text-white">Bigpoint เป็นที่ยอมรับ สามารถซื้อ-ขายได้ ตั้งแต่ วันที่ 8 พฤศจิกายน 2022
                            บนกระดาน Exchange XT.COM</p>
                        <div class="lg:hidden block">
                            <img cclass="lg:w-full w-1/2 mx-auto" src="asset/image/imgnotebook.png" />
                        </div>
                        <div class="bg-black border-orange-500 rounded-3xl mx-4 border-2 h-full w-80 my-8 mx-auto">
                            <div class="flex justify-center items-center h-full p-5">
                                <p class="text-5xl text-orange-500 mr-3">24</p>
                                <div class="text-center">
                                    <p class="text-white">กระดานอันดับที่</p>
                                    <p><span class="text-orange-500 text-4xl">ของโลก</span></p>
                                </div>
                            </div>
                        </div>
                        <p class="text-white  mb-10">*จัดอันดับโดย coinmarketcap.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 5 end -->

    <!-- section 6 -->
    <section class="sectionsix box-content pt-20">
        <div class="container mx-auto">
            <div class="text-center">
                <h1 class="text-5xl font-bold text-white mb-10">สื่อที่เกี่ยวข้อง</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="mx-10 mb-5">
                    <iframe height="315" src="https://www.youtube.com/embed/TNj8qWc2a2o"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="mx-10 mb-5">
                    <iframe height="315" src="https://www.youtube.com/embed/uzPs3QGHjw8"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
            <div>
                <p class="text-center text-white my-10">ติดตามเราได้ที่เฟสบุ๊ก และ ยูทูป บาร์เทอร์สมาร์ท</p>
            </div>
            <div class="flex mx-auto justify-center pb-10">
                <div>
                    <img class="w-10 mx-10	" src="asset/image/icon-facebook.png" />
                </div>
                <div>
                    <img class="w-10 mx-10	" src="asset/image/icon-you.png" />
                </div>
            </div>
        </div>
    </section>
    <!-- section 6 end -->

    <!-- section 7 -->
    <section class="sectionseven box-content pt-20">
        <div class="container mx-auto text-center">

            <h1 class="text-white text-5xl leading-normal lg:block hidden"><span
                    class="text-orange-500">Barter</span>smart ช่วยอะไรคุณได้</h1>
            <h1 class=" text-orange-500 text-5xl leading-normal lg:hidden block">Barter<span
                    class="text-white">smart</span>
                <p class="text-white text-2xl	">ช่วยอะไรคุณได้</p>
            </h1>

            <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-3 lg:gap-2 gap-0 lg:my-10 my-0 py-10">
                <div class="mx-2">
                    <div class="orangegradient text-center">
                        <img class="w-16 mx-auto mb-4" src="asset/image/icon-02.png" />
                        <p class="text-orange-500 mb-4">Free Marketplace Platform</p>
                        <p class="text-white lg:text-sm text-xs	">เข้าถึงง่าย ฟรี ไม่มี ค่าใช้จ่ายและมีกำลังซื้อ
                            จากนักธุรกิจที่มีสินค้า และบริการ ด้วยระบบ การซื้อขายเฉพาะกลุ่ม</p>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="orangegradient text-center">
                        <img class="w-16 mx-auto mb-4" src="asset/image/icon-03.png" />
                        <p class="text-orange-500 mb-4">สินค้าของคุณ ถูกเปลี่ยนเป็น โอกาสใหม่ทาง ธุรกิจ</p>
                        <p class="text-white lg:text-sm text-xs	">
                            Bartersmart ทำหน้าที่ รวบรวมนักธุรกิจจากทั่ว โลกที่มีสินค้าและบริการ เช่นเดียวกับคุณ
                            เพียงคุณ นำสินค้า 5-10% ที่ไม่กระทบ เงินสดมาซื้อ-ขายกันโดย ตรงผ่าน Application
                            Bartersmart
                        </p>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="orangegradient text-center">
                        <img class="w-16 mx-auto mb-4" src="asset/image/icon-04.png" />
                        <p class="text-orange-500 mb-4">สร้างโอกาสใหม่ ในการขาย สินค้า-บริการ</p>
                        <p class="text-white lg:text-sm text-xs	">
                            เงินสดหายาก เก็บไว้ใช้ ยามจำเป็น นำต้นทุนที่ ต้องเสียในแต่ละวัน มา เปลี่ยนเป็นรายรับแบบ
                            Point และ Bigpoint เพื่อเพิ่มโอกาสใหม่ใน การขาย
                        </p>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="orangegradient text-center">
                        <img class="w-16 mx-auto mb-4" src="asset/image/icon-05.png" />
                        <p class="text-orange-500 mb-4">Business Machine</p>
                        <p class="text-white lg:text-sm text-xs	">
                            คุณมีโอกาสต่อยอด ธุรกิจได้อย่างอิสระ โดย เราได้รวบรวมนักธุรกิจ มากกว่า 45,000 ธุรกิจ
                            ที่พร้อมจะแลกเปลี่ยน สินค้ากับคุณ เช่น ธุรกิจ โรงแรม, ร้านอาหาร, สินค้าการเกษตร
                            และอื่นๆ
                        </p>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="orangegradient text-center">
                        <img class="w-16 mx-auto mb-4" src="asset/image/icon-06.png" />
                        <p class="text-orange-500 mb-4">ปลอดภัย ตรวจสอบได้</p>
                        <p class="text-white lg:text-sm text-xs	">
                            Platform เสรี ที่เอื้อ ประโยชน์สำหรับทุกคน ที่ต้องการแลกเปลี่ยนสินค้า และบริการ ผ่านกระเป๋า
                            ดิจิทัล Trust wallet ด้วย การรับ Point และ Bigpoint เพิ่มโอกาสทางการค้า
                            และทำการตลาดแบบ ออนไลน์
                        </p>
                    </div>
                </div>
                <div class="mx-2">
                    <div class="orangegradient text-center">
                        <img class="w-16 mx-auto mb-4" src="asset/image/icon-07.png" />
                        <p class="text-orange-500 mb-4">เปลี่ยนสินค้า เป็นการลงทุน ผ่านเหรียญ Bigpoint</p>
                        <p class="text-white lg:text-sm text-xs	">เหรียญ Crytocurrency ที่ใช้งานได้จริงผ่าน
                            นักธุรกิจทั่วโลกที่ต้อง การเหรียญ Bigpoint ที่มีอยู่อย่างจำกัด</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section 7 end -->

    <!-- section 8 -->
    <section class="sectioneight box-content">
        <div class="container mx-auto text-center">
            <h1 class="text-white text-5xl mb-2">สมาชิกของเรา</h1>
            <p class="text-white text-2xl">ครอบครัว <span class="text-orange-500">Bartersmart</span> มากกว่า 45,000
                ธุรกิจ</p>
            <div class="site-wrapper">
                <section class="tabs-wrapper">
                    <div class="tabs-container">
                        <div class="tabs-block">
                            <div class="tabs">
                                <input type="radio" name="tabs" id="tab1" checked="checked" />
                                <label for="tab1"><span class="material-icons">โรงแรม/ที่พัก</span></label>
                                <div class="tab">
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-08.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-09.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-10.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-11.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-12.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-13.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-14.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-15.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-16.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-17.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-18.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-19.png" />
                                        </div>
                                    </div>
                                </div>

                                <input type="radio" name="tabs" id="tab2" />
                                <label for="tab2"><span class="material-icons">ร้านอาหาร</span></label>
                                <div class="tab">
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-12.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-13.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-14.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-15.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-08.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-09.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-10.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-11.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-16.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-17.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-18.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-19.png" />
                                        </div>
                                    </div>
                                </div>

                                <input type="radio" name="tabs" id="tab3" />
                                <label for="tab3"><span class="material-icons">สินค้าอุปโภค/บริโภค</span> </label>
                                <div class="tab">
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-12.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-13.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-14.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-15.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-16.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-17.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-18.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-19.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-08.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-09.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-10.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-11.png" />
                                        </div>
                                    </div>
                                </div>

                                <input type="radio" name="tabs" id="tab4" />
                                <label for="tab4"><span class="material-icons">เครื่องประดับ/ความงาม</span>
                                </label>
                                <div class="tab">
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-08.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-09.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-10.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-11.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-12.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-13.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-14.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-15.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-16.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-17.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-18.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-19.png" />
                                        </div>
                                    </div>
                                </div>
                                <input type="radio" name="tabs" id="tab5" />
                                <label for="tab5"><span class="material-icons">เฟอร์นิเจอร์/ของใช้</span> </label>
                                <div class="tab">
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-08.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-09.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-10.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-11.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-12.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-13.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-14.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-15.png" />
                                        </div>
                                    </div>
                                    <div class="flex items-center my-6">
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-16.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-17.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-18.png" />
                                        </div>
                                        <div class="w-1/4">
                                            <img class="w-6/12 mx-auto" src="asset/image/icon-19.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- section 8 end -->

    <!-- section 9 -->
    <section class="sectionnine box-content lg:pt-36 pt-20">
        <div class="container mx-auto">
            <div class="text-center">
                <p class="text-orange-500 text-2xl mb-1">บรรยากาศ</p>
                <p class="text-white text-2xl">งานแลกเปลี่ยนสินค้า</p>
            </div>
            <div class="flex justify-center">
                <img class="w-4/5 mx-auto   lg:block hidden" src="asset/image/imghoneynest-.png" />
                <img class="w-full mx-auto md:hidden block" src="asset/image/mobile/WEB_Barter_2.png" />
                <img class="w-full mx-auto lg:hidden hidden md:block" src="asset/image/tablet/img-01.png" />


            </div>
            <div class="text-center pt-6">
                <p class="text-white text-2xl">ความประทับใจลูกค้า</p>
            </div>
            <div class="flex justify-center w-2/4 mx-auto pb-20">
                <div class="w-1/3">
                    <img class="w-96 mx-auto" src="asset/image/customer01.png" />
                </div>
                <div class="w-1/3">
                    <img class="w-96 mx-auto" src="asset/image/customer02.png" />
                </div>
                <div class="w-1/3">
                    <img class="w-96 mx-auto" src="asset/image/customer03.png" />
                </div>
            </div>
        </div>
    </section>
    <!-- section 9 end -->

    <!-- section 10 -->
    <section class="sectiontenTop box-content lg:pt-36 pt-20">
        <div class="container mx-auto">
            <div class="text-center">
                <p class="text-white text-2xl mb-8">ข่าวสาร และกิจกรรม</p>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-3 lg:gap-3 gap-1 news-Fixpadding relative">
                <div class="bg-white rounded-xl relative-right">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full"
                            src="asset/image/businessman-discussing-with-professional-business-team-terms-contract_1.jpg"
                            alt="Sunset in the mountains" />
                        <div class="lg:py-4 py-2 px-2 lg:px-4">
                            <div class="font-bold lg:text-xl text-xs border-orange-500">ข่าวสารและกิจกรรม</div>
                            <p class="text-xs">บทความบทความ</p>
                            <p class="text-gray-400 text-sm text-ellipsis overflow-hidden">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-xl z-10 shadow-orange">
                    <div class="max-w-sm rounded overflow-hidden">
                        <img class="w-full"
                            src="asset/image/businessman-discussing-with-professional-business-team-terms-contract_1.jpg"
                            alt="Sunset in the mountains" />
                        <div class="lg:py-4 py-2 px-2 lg:px-4">
                            <div class="font-bold lg:text-xl text-xs border-orange-500">ข่าวสารและกิจกรรม</div>
                            <p class="text-xs">บทความบทความ</p>
                            <p class="text-gray-400 text-sm">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" bg-white rounded-xl relative-left">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full"
                            src="asset/image/businessman-discussing-with-professional-business-team-terms-contract_1.jpg"
                            alt="Sunset in the mountains" />
                        <div class="lg:py-4 py-2 px-2 lg:px-4">
                            <div class="font-bold lg:text-xl text-xs border-orange-500">ข่าวสารและกิจกรรม</div>
                            <p class="text-xs">บทความบทความ</p>
                            <p class="text-gray-400 text-sm">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto my-10 text-center">
                <button
                    class="bg-white hover:bg-orange-500 text-orange-500 hover:text-white font-bold py-2 px-10 rounded-full">View
                    More</button>
            </div>
            <div class="text-center mt-24">
                <p class="text-white lg:text-2xl text-3xl	 mb-8">บทความ</p>
            </div>
        </div>
    </section>
    <section class="sectiontenBottom box-content">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-3 grid-cols-3 gap-3 news-Fixpadding">
                <div class="">
                    <div class="max-w-sm rounded overflow-hidden">
                        <img class="w-full rounded-t-xl"
                            src="asset/image/businessman-discussing-with-professional-business-team-terms-contract_1.jpg"
                            alt="Sunset in the mountains" />
                        <div class="py-4">
                            <div class="font-bold lg:text-xl text-sm	 border-orange-500">บทความบทความ</div>
                            <p class="text-white">บทความบทความ</p>
                            <p class="text-white text-sm">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="max-w-sm rounded overflow-hidden">
                        <img class="w-full rounded-t-xl"
                            src="asset/image/businessman-discussing-with-professional-business-team-terms-contract_1.jpg"
                            alt="Sunset in the mountains" />
                        <div class="py-4">
                            <div class="font-bold lg:text-xl text-sm	 border-orange-500">บทความบทความ</div>
                            <p class="text-white">บทความบทความ</p>
                            <p class="text-white text-sm">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="max-w-sm rounded overflow-hidden">
                        <img class="w-full rounded-t-xl"
                            src="asset/image/businessman-discussing-with-professional-business-team-terms-contract_1.jpg"
                            alt="Sunset in the mountains" />
                        <div class="py-4">
                            <div class="font-bold lg:text-xl text-sm	 border-orange-500">บทความบทความ</div>
                            <p class="text-white">บทความบทความ</p>
                            <p class="text-white text-sm">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla!
                                Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto py-10 text-center">
                <button
                    class="bg-white hover:bg-orange-500 text-orange-500 hover:text-white font-bold py-2 px-10 rounded-full">View
                    More</button>
            </div>
        </div>
    </section>
    <!-- section 10 end -->

    <footer>
        <div class="container mx-auto mt-10 lg:px-28 md:px-10 px-0">
            <div>
                <h2 class="text-white text-3xl mb-4">Contact</h2>
            </div>
            <div class="lg:grid-cols-3 md:grid-cols-3 md:grid flex gap-3 text-white">
                <div>
                    <div class="flex">
                        <img class="h-full mr-3" src="asset/image/icon_map.png" />
                        <p class="text-white w-60">211/3-4 ถนนรัชดาภิเษก แขวงรัชดาภิเษก เขตดินแดง กรุงเทพมหานคร 10400
                        </p>
                    </div>
                    <div class="flex my-4">
                        <img class="mr-3" src="asset/image/icon-phone.png" />
                        <p class="text-white">095-955-9595</p>
                    </div>
                    <div class="flex">
                        <img class="mr-3" src="asset/image/icon-mail.png" />
                        <p class="text-white">info@bartersmart.co.th</p>
                    </div>
                </div>
                <div>
                    <p>หน้าแรก</p>
                    <p class="my-3">เกี่ยวกับเรา</p>
                    <p>ประโยชน์ที่คุณจะได้รับ</p>
                    <p class="my-3">Point&Bigpoint</p>
                </div>
                <div>
                    <p>กิจกรรม</p>
                    <p class="my-3">บทความ</p>
                    <p>ติดต่อเรา</p>
                    <p class="my-3">สมัครสมาชิก</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        /* Set the width of the side navigation to 250px */
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        /* Set the width of the side navigation to 0 */
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</body>

</html>
