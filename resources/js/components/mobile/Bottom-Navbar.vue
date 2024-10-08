<template>
    <div>
        <div
            class="px-7 bg-white shadow-lg rounded-2xl fixed left-4 right-4 bottom-4 lg:hidden border-[1px] border-[#1d4ed8]"
        >
            <div class="flex">
                <div class="flex-1 group">
                    <a
                        href="/"
                        class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-indigo-500"
                    >
                        <span class="block px-1 pt-1 pb-1">
                            <svg
                                viewBox="0 0 24 24"
                                width="24"
                                height="24"
                                fill="#1d4ed8"
                                class="x19dipnz x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq mx-auto mb-1"
                                style="
                                    --color: var(--primary-button-background);
                                "
                            >
                                <path
                                    d="M9.464 1.286C10.294.803 11.092.5 12 .5c.908 0 1.707.303 2.537.786.795.462 1.7 1.142 2.815 1.977l2.232 1.675c1.391 1.042 2.359 1.766 2.888 2.826.53 1.059.53 2.268.528 4.006v4.3c0 1.355 0 2.471-.119 3.355-.124.928-.396 1.747-1.052 2.403-.657.657-1.476.928-2.404 1.053-.884.119-2 .119-3.354.119H7.93c-1.354 0-2.471 0-3.355-.119-.928-.125-1.747-.396-2.403-1.053-.656-.656-.928-1.475-1.053-2.403C1 18.541 1 17.425 1 16.07v-4.3c0-1.738-.002-2.947.528-4.006.53-1.06 1.497-1.784 2.888-2.826L6.65 3.263c1.114-.835 2.02-1.515 2.815-1.977zM10.5 13A1.5 1.5 0 0 0 9 14.5V21h6v-6.5a1.5 1.5 0 0 0-1.5-1.5h-3z"
                                ></path>
                            </svg>
                            <span class="block text-xs pb-2">Home</span>
                            <span
                                class="block w-5 mx-auto h-1 group-hover:bg-indigo-500 rounded-full"
                            ></span>
                        </span>
                    </a>
                </div>
                <div class="flex-1 group">
                    <a
                        href="/friend-page"
                        class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-indigo-500"
                    >
                        <span class="block px-1 pt-1 pb-1">
                            <svg
                                viewBox="0 0 24 24"
                                width="24"
                                height="24"
                                fill="#1d4ed8"
                                class="x19dipnz x1lliihq x1tzjh5l x1k90msu x2h7rmj x1qfuztq mx-auto mb-1"
                            >
                                <path
                                    d="M12.496 5a4 4 0 1 1 8 0 4 4 0 0 1-8 0zm4-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-9 2.5a4 4 0 1 0 0 8 4 4 0 0 0 0-8zm-2 4a2 2 0 1 1 4 0 2 2 0 0 1-4 0zM5.5 15a5 5 0 0 0-5 5 3 3 0 0 0 3 3h8.006a3 3 0 0 0 3-3 5 5 0 0 0-5-5H5.5zm-3 5a3 3 0 0 1 3-3h4.006a3 3 0 0 1 3 3 1 1 0 0 1-1 1H3.5a1 1 0 0 1-1-1zm12-9.5a5.04 5.04 0 0 0-.37.014 1 1 0 0 0 .146 1.994c.074-.005.149-.008.224-.008h4.006a3 3 0 0 1 3 3 1 1 0 0 1-1 1h-3.398a1 1 0 1 0 0 2h3.398a3 3 0 0 0 3-3 5 5 0 0 0-5-5H14.5z"
                                ></path>
                            </svg>
                            <span class="block text-xs pb-2">Friends</span>
                            <span
                                class="block w-5 mx-auto h-1 group-hover:bg-indigo-500 rounded-full"
                            ></span>
                        </span>
                    </a>
                </div>
                <div class="flex-1 group">
                    <a
                        href="#"
                        class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-indigo-500"
                    >
                        <span class="block px-1 pt-1 pb-1">
                            <!-- <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                height="24px"
                                width="24px"
                                version="1.1"
                                id="Layer_1"
                                viewBox="0 0 458 458"
                                xml:space="preserve"
                                fill="#1d4ed8"
                            >
                                <g>
                                    <g>
                                        <path
                                            d="M428,41.534H30c-16.569,0-30,13.431-30,30v252c0,16.568,13.432,30,30,30h132.1l43.942,52.243    c5.7,6.777,14.103,10.69,22.959,10.69c8.856,0,17.258-3.912,22.959-10.69l43.942-52.243H428c16.568,0,30-13.432,30-30v-252    C458,54.965,444.568,41.534,428,41.534z M323.916,281.534H82.854c-8.284,0-15-6.716-15-15s6.716-15,15-15h241.062    c8.284,0,15,6.716,15,15S332.2,281.534,323.916,281.534z M67.854,198.755c0-8.284,6.716-15,15-15h185.103c8.284,0,15,6.716,15,15    s-6.716,15-15,15H82.854C74.57,213.755,67.854,207.039,67.854,198.755z M375.146,145.974H82.854c-8.284,0-15-6.716-15-15    s6.716-15,15-15h292.291c8.284,0,15,6.716,15,15C390.146,139.258,383.43,145.974,375.146,145.974z"
                                        />
                                    </g>
                                </g>
                            </svg> -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#1d4ed8"
                                height="24px"
                                width="24px"
                                version="1.1"
                                id="Layer_1"
                                viewBox="0 0 458 458"
                                xml:space="preserve"
                                class="mx-auto mb-1"
                            >
                                <g>
                                    <g>
                                        <path
                                            d="M428,41.534H30c-16.569,0-30,13.431-30,30v252c0,16.568,13.432,30,30,30h132.1l43.942,52.243    c5.7,6.777,14.103,10.69,22.959,10.69c8.856,0,17.258-3.912,22.959-10.69l43.942-52.243H428c16.568,0,30-13.432,30-30v-252    C458,54.965,444.568,41.534,428,41.534z M323.916,281.534H82.854c-8.284,0-15-6.716-15-15s6.716-15,15-15h241.062    c8.284,0,15,6.716,15,15S332.2,281.534,323.916,281.534z M67.854,198.755c0-8.284,6.716-15,15-15h185.103c8.284,0,15,6.716,15,15    s-6.716,15-15,15H82.854C74.57,213.755,67.854,207.039,67.854,198.755z M375.146,145.974H82.854c-8.284,0-15-6.716-15-15    s6.716-15,15-15h292.291c8.284,0,15,6.716,15,15C390.146,139.258,383.43,145.974,375.146,145.974z"
                                        />
                                    </g>
                                </g>
                            </svg>
                            <span class="block text-xs pb-2">Message</span>
                            <span
                                class="block w-5 mx-auto h-1 group-hover:bg-indigo-500 rounded-full"
                            ></span>
                        </span>
                    </a>
                </div>
                <div class="flex-1 group">
                    <a
                        href="/user/profile"
                        class="flex items-end justify-center text-center mx-auto px-4 pt-2 w-full text-gray-400 group-hover:text-indigo-500"
                    >
                        <span class="block px-1 pt-1 pb-1">
                            <svg
                                class="mx-auto mb-1"
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="#1d4ed8"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"
                                ></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <span class="block text-xs pb-2">Settings</span>
                            <span
                                class="block w-5 mx-auto h-1 group-hover:bg-indigo-500 rounded-full"
                            ></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>
