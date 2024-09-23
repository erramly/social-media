<template>
    <div class="flex min-h-screen bg-gray-900 text-white">
        <aside class="w-1/4 p-4">
            <div class="flex items-center justify-between mb-4">
                <span
                    class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                >
                    <img
                        class="aspect-square h-full w-full"
                        alt="User"
                        src="https://v0.dev//placeholder-user.jpg"
                    />
                </span>
                <div class="flex space-x-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                    >
                        <path
                            d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"
                        ></path>
                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                    </svg>
                    <router-link to="/messages">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                        </svg>
                    </router-link>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                    >
                        <path
                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"
                        ></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </div>
            </div>
            <div class="mb-4">
                <h2 class="text-lg font-semibold">صفحاتك وملفاتك الشخصية</h2>
                <div class="flex items-center space-x-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                    >
                        <path
                            d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"
                        ></path>
                    </svg>
                    <span>RemoCode</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                    >
                        <path
                            d="M12 22h6a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v10"
                        ></path>
                        <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        <path
                            d="M10.4 12.6a2 2 0 1 1 3 3L8 21l-4 1 1-4Z"
                        ></path>
                    </svg>
                    <span>تعديل إلى الصفحة</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                    >
                        <path d="M2 3h20"></path>
                        <path
                            d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3"
                        ></path>
                        <path d="m7 21 5-5 5 5"></path>
                    </svg>
                    <span>إنشاء ترويج</span>
                </div>
            </div>
            <div class="mb-4">
                <h2 class="text-lg font-semibold">طلبات الصداقة</h2>
                <div class="flex items-center space-x-2">
                    <span
                        class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                    >
                        <img
                            class="aspect-square h-full w-full"
                            alt="Nabil Salah"
                            src="https://v0.dev//placeholder-user.jpg"
                        />
                    </span>
                    <span>Nabil Salah</span>
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2"
                    >
                        تأكيد
                    </button>
                    <button
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-secondary text-secondary-foreground hover:bg-secondary/80 h-10 px-4 py-2"
                    >
                        حذف
                    </button>
                </div>
            </div>
            <div>
                <h2 class="text-lg font-semibold">جهات الاتصال</h2>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Abdullah Momin"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Abdullah Momin</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Ahmet Asaad Hammoud"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Ahmet Asaad Hammoud</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Ahmed Abd Elwahab"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Ahmed Abd Elwahab</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Yossef Alvasstino"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Yossef Alvasstino</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Hamza Igh"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Hamza Igh</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="M Sahib"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>M Sahib</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Sinam Sami"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Sinam Sami</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Sinam Fuijar"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Sinam Fuijar</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Eren Zoon"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Eren Zoon</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span
                            class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
                        >
                            <img
                                class="aspect-square h-full w-full"
                                alt="Zack Ak"
                                src="https://v0.dev//placeholder-user.jpg"
                            />
                        </span>
                        <span>Zack Ak</span>
                    </div>
                </div>
            </div>
        </aside>
        <main class="flex-1 p-4">
            <div class="flex items-center justify-between mb-4">
                <input
                    class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full max-w-lg"
                    placeholder="بم تفكر يا Mohamed؟"
                    type="search"
                />
                <!--=================================================================================================================================================================================================================================================================================================================================================================================-->
                <button
                    class="inline-flex items-center justify-center whitespace-nowrap ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-blue-400 text-primary-foreground hover:bg-primary/90 h-10 px-6 py-3 rounded-md text-lg font-medium"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 512 512"
                    >
                        <path
                            class="fa-secondary"
                            opacity=".4"
                            d="M0 288l160 64L384 160 225.9 381.3l61.6 27.4L448 480 512 0 0 288z"
                        />
                        <path
                            class="fa-primary"
                            d="M384 160L160 352l0 32 0 32 0 80 48 16 79.5-103.3-61.6-27.4L384 160z"
                        />
                    </svg>
                    Publish Post
                </button>
                <div class="flex space-x-2">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                    >
                        <path
                            d="m16 13 5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5"
                        ></path>
                        <rect x="2" y="6" width="14" height="12" rx="2"></rect>
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                    >
                        <rect
                            width="18"
                            height="18"
                            x="3"
                            y="3"
                            rx="2"
                            ry="2"
                        ></rect>
                        <circle cx="9" cy="9" r="2"></circle>
                        <path
                            d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"
                        ></path>
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-6 h-6"
                    >
                        <path
                            d="M12.67 19a2 2 0 0 0 1.416-.588l6.154-6.172a6 6 0 0 0-8.49-8.49L5.586 9.914A2 2 0 0 0 5 11.328V18a1 1 0 0 0 1 1z"
                        ></path>
                        <path d="M16 8 2 22"></path>
                        <path d="M17.5 15H9"></path>
                    </svg>
                </div>
            </div>
            <div class="bg-gray-800 p-4 rounded-lg">
                <h3 class="text-lg font-semibold">
                    استشارات قانونية بالمجان المغرب
                </h3>
                <p class="text-sm text-gray-400">1 ساعة</p>
                <p class="mt-2">
                    خديت ملابس لولدي ب1300 درهم طلعليهم مهم جيتهم له ولكن رفض
                    يرجعهم ليا لحد اتصلت بيهم فعلا...
                </p>
                <div class="flex items-center justify-between mt-4">
                    <button
                        class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 flex items-center space-x-2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4"
                        >
                            <path
                                d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                            ></path>
                        </svg>
                        <span>أعجبني</span>
                    </button>
                    <button
                        class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 flex items-center space-x-2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4"
                        >
                            <polyline points="9 17 4 12 9 7"></polyline>
                            <path d="M20 18v-2a4 4 0 0 0-4-4H4"></path>
                        </svg>
                        <span>تعليق</span>
                    </button>
                    <button
                        class="justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 flex items-center space-x-2"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-4 h-4"
                        >
                            <path
                                d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"
                            ></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        <span>مشاركة</span>
                    </button>
                </div>
                <div class="mt-4">
                    <input
                        class="flex h-10 rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full"
                        placeholder="اكتب تعليقا..."
                        type="text"
                    />
                </div>
            </div>
        </main>
        <aside class="w-1/4 p-4">
            <div class="mb-4">
                <h2 class="text-lg font-semibold">Mohamed Er-ramly</h2>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                        <span>البحث عن أصدقاء</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                        <span>الذكريات</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                        <span>العناصر المحفوظة</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                        <span>المجموعات</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                        <span>الفيديو</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                        <span>Marketplace</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <line x1="4" x2="20" y1="12" y2="12"></line>
                            <line x1="4" x2="20" y1="6" y2="6"></line>
                            <line x1="4" x2="20" y1="18" y2="18"></line>
                        </svg>
                        <span>الأخبار</span>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-lg font-semibold">اختصاراتك</h2>
                <div class="space-y-2">
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <path
                                d="M14 11a2 2 0 1 1-4 0 4 4 0 0 1 8 0 6 6 0 0 1-12 0 8 8 0 0 1 16 0 10 10 0 1 1-20 0 11.93 11.93 0 0 1 2.42-7.22 2 2 0 1 1 3.16 2.44"
                            ></path>
                        </svg>
                        <span>Laravel-EGYPT</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <path
                                d="M14 11a2 2 0 1 1-4 0 4 4 0 0 1 8 0 6 6 0 0 1-12 0 8 8 0 0 1 16 0 10 10 0 1 1-20 0 11.93 11.93 0 0 1 2.42-7.22 2 2 0 1 1 3.16 2.44"
                            ></path>
                        </svg>
                        <span>PS4 MAROC</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <path
                                d="M14 11a2 2 0 1 1-4 0 4 4 0 0 1 8 0 6 6 0 0 1-12 0 8 8 0 0 1 16 0 10 10 0 1 1-20 0 11.93 11.93 0 0 1 2.42-7.22 2 2 0 1 1 3.16 2.44"
                            ></path>
                        </svg>
                        <span>Node.js Egypt</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <path
                                d="M14 11a2 2 0 1 1-4 0 4 4 0 0 1 8 0 6 6 0 0 1-12 0 8 8 0 0 1 16 0 10 10 0 1 1-20 0 11.93 11.93 0 0 1 2.42-7.22 2 2 0 1 1 3.16 2.44"
                            ></path>
                        </svg>
                        <span>احتراف لارافل بالعربي</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            class="w-6 h-6"
                        >
                            <path
                                d="M14 11a2 2 0 1 1-4 0 4 4 0 0 1 8 0 6 6 0 0 1-12 0 8 8 0 0 1 16 0 10 10 0 1 1-20 0 11.93 11.93 0 0 1 2.42-7.22 2 2 0 1 1 3.16 2.44"
                            ></path>
                        </svg>
                        <span>Developpement Informatique 'darija' maroc</span>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</template>
<style scoped>
body {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}
:root {
    --background: 0 0% 100%;
    --foreground: 240 10% 3.9%;
    --card: 0 0% 100%;
    --card-foreground: 240 10% 3.9%;
    --popover: 0 0% 100%;
    --popover-foreground: 240 10% 3.9%;
    --primary: 240 5.9% 10%;
    --primary-foreground: 0 0% 98%;
    --secondary: 240 4.8% 95.9%;
    --secondary-foreground: 240 5.9% 10%;
    --muted: 240 4.8% 95.9%;
    --muted-foreground: 240 3.8% 45%;
    --accent: 240 4.8% 95.9%;
    --accent-foreground: 240 5.9% 10%;
    --destructive: 0 72% 51%;
    --destructive-foreground: 0 0% 98%;
    --border: 240 5.9% 90%;
    --input: 240 5.9% 90%;
    --ring: 240 5.9% 10%;
    --chart-1: 173 58% 39%;
    --chart-2: 12 76% 61%;
    --chart-3: 197 37% 24%;
    --chart-4: 43 74% 66%;
    --chart-5: 27 87% 67%;
    --radius: 0.5rem;
}
img[src="/placeholder.svg"],
img[src="/placeholder-user.jpg"] {
    filter: sepia(0.3) hue-rotate(-60deg) saturate(0.5) opacity(0.8);
}
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Inter", sans-serif;
    --font-sans-serif: "Inter";
}
</style>
