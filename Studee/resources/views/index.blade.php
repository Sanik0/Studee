<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Figtree:ital,wght@0,300..900;1,300..900&family=Google+Sans+Code:ital,wght@0,300..800;1,300..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Space+Grotesk:wght@300..700&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="relative flex flex-col">
    <!-- NAVIGATION -->
    <nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-default">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <svg width="98" height="21" viewBox="0 0 98 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.29605 13.152C4.80805 13.648 5.37605 14.024 6.00005 14.28C6.62405 14.536 7.27205 14.72 7.94405 14.832C8.61605 14.928 9.30405 14.984 10.0081 15C10.7121 15 11.3921 15 12.0481 15C12.2881 15 12.6081 14.992 13.0081 14.976C13.4241 14.96 13.8641 14.928 14.3281 14.88C14.8081 14.816 15.2881 14.736 15.7681 14.64C16.2481 14.528 16.6801 14.384 17.0641 14.208C17.4641 14.032 17.7841 13.824 18.0241 13.584C18.2801 13.328 18.4081 13.024 18.4081 12.672C18.4081 12.32 18.2721 12.016 18.0001 11.76C17.7441 11.488 17.4081 11.256 16.9921 11.064C16.5761 10.872 16.1041 10.712 15.5761 10.584C15.0641 10.44 14.5521 10.336 14.0401 10.272C13.5281 10.192 13.0481 10.136 12.6001 10.104C12.1681 10.072 11.8161 10.056 11.5441 10.056H11.5681C11.1841 10.04 10.7121 10 10.1521 9.93601C9.59205 9.87201 9.00805 9.77601 8.40005 9.64801C7.79205 9.52001 7.18405 9.36001 6.57605 9.16801C5.96805 8.96001 5.42405 8.71201 4.94405 8.42401C4.46405 8.13601 4.07205 7.80001 3.76805 7.41601C3.46405 7.01601 3.31205 6.56001 3.31205 6.04801C3.31205 5.48801 3.45605 5.00801 3.74405 4.60801C4.04805 4.20801 4.43205 3.87201 4.89605 3.60001C5.37605 3.31201 5.91205 3.08801 6.50405 2.92801C7.09605 2.75201 7.69605 2.61601 8.30405 2.52001C8.91205 2.42401 9.48805 2.36001 10.0321 2.32801C10.5921 2.29601 11.0641 2.28001 11.4481 2.28001C12.0721 2.28001 12.7041 2.31201 13.3441 2.37601C14.0001 2.42401 14.6401 2.52001 15.2641 2.66401C15.8881 2.80801 16.4961 3.00801 17.0881 3.26401C17.6801 3.50401 18.2241 3.81601 18.7201 4.20001L17.4481 5.11201C16.9841 4.79201 16.4961 4.54401 15.9841 4.36801C15.4721 4.17601 14.9441 4.03201 14.4001 3.93601C13.8561 3.84001 13.3041 3.78401 12.7441 3.76801C12.1841 3.73601 11.6401 3.72001 11.1121 3.72001C10.7441 3.72001 10.2401 3.74401 9.60005 3.79201C8.97605 3.84001 8.35205 3.94401 7.72805 4.10401C7.12005 4.24801 6.59205 4.48001 6.14405 4.80001C5.69605 5.10401 5.47205 5.52001 5.47205 6.04801C5.47205 6.56001 5.68805 6.97601 6.12005 7.29601C6.55205 7.60001 7.12005 7.84801 7.82405 8.04001C8.52805 8.21601 9.32805 8.36001 10.2241 8.47201C11.1361 8.56801 12.0641 8.67201 13.0081 8.78401C13.9521 8.89601 14.8721 9.03201 15.7681 9.19201C16.6801 9.33601 17.4881 9.55201 18.1921 9.84001C18.8961 10.112 19.4641 10.48 19.8961 10.944C20.3281 11.392 20.5441 11.968 20.5441 12.672C20.5441 13.168 20.3921 13.608 20.0881 13.992C19.8001 14.376 19.4161 14.712 18.9361 15C18.4561 15.272 17.9121 15.504 17.3041 15.696C16.7121 15.872 16.1121 16.016 15.5041 16.128C14.9121 16.24 14.3441 16.32 13.8001 16.368C13.2561 16.416 12.8081 16.44 12.4561 16.44H10.6561C10.0001 16.44 9.31205 16.416 8.59205 16.368C7.87205 16.32 7.16805 16.216 6.48005 16.056C5.79205 15.88 5.13605 15.64 4.51205 15.336C3.88805 15.032 3.33605 14.616 2.85605 14.088L4.29605 13.152ZM0.864053 13.584C1.50405 14.624 2.26405 15.432 3.14405 16.008C4.02405 16.568 4.97605 16.984 6.00005 17.256C7.02405 17.512 8.08005 17.664 9.16805 17.712C10.2721 17.76 11.3681 17.784 12.4561 17.784C12.9361 17.784 13.5041 17.752 14.1601 17.688C14.8161 17.608 15.4961 17.488 16.2001 17.328C16.9041 17.168 17.5921 16.96 18.2641 16.704C18.9521 16.432 19.5601 16.112 20.0881 15.744C20.6321 15.36 21.0641 14.92 21.3841 14.424C21.7201 13.912 21.8881 13.328 21.8881 12.672C21.8881 11.888 21.7121 11.224 21.3601 10.68C21.0241 10.12 20.5761 9.65601 20.0161 9.28801C19.4721 8.90401 18.8401 8.60001 18.1201 8.37601C17.4161 8.13601 16.6881 7.95201 15.9361 7.82401C15.1841 7.69601 14.4481 7.60001 13.7281 7.53601C13.0081 7.47201 12.3681 7.41601 11.8081 7.36801C11.6161 7.35201 11.2481 7.32001 10.7041 7.27201C10.1601 7.20801 9.60005 7.12801 9.02405 7.03201C8.44805 6.92001 7.93605 6.78401 7.48805 6.62401C7.04005 6.46401 6.81605 6.27201 6.81605 6.04801C6.81605 5.79201 7.02405 5.60001 7.44005 5.47201C7.85605 5.34401 8.32805 5.24801 8.85605 5.18401C9.40005 5.12001 9.92005 5.08801 10.4161 5.08801C10.9281 5.07201 11.2721 5.06401 11.4481 5.06401C11.9601 5.06401 12.4801 5.08801 13.0081 5.13601C13.5361 5.16801 14.0481 5.24801 14.5441 5.37601C15.0561 5.50401 15.5361 5.68801 15.9841 5.92801C16.4481 6.16801 16.8721 6.48001 17.2561 6.86401L20.7601 4.51201C20.1521 3.68001 19.4641 3.03201 18.6961 2.56801C17.9281 2.08801 17.1121 1.72801 16.2481 1.48801C15.3841 1.24801 14.4801 1.09601 13.5361 1.03201C12.6081 0.968009 11.6721 0.936009 10.7281 0.936009C10.2321 0.936009 9.66405 0.976009 9.02405 1.05601C8.40005 1.12001 7.76005 1.23201 7.10405 1.39201C6.46405 1.55201 5.83205 1.76001 5.20805 2.01601C4.60005 2.27201 4.05605 2.59201 3.57605 2.97601C3.09605 3.36001 2.71205 3.80801 2.42405 4.32001C2.13605 4.81601 1.99205 5.39201 1.99205 6.04801C1.99205 6.80001 2.17605 7.44801 2.54405 7.99201C2.91205 8.53601 3.40005 9.00001 4.00805 9.38401C4.61605 9.76801 5.30405 10.08 6.07205 10.32C6.84005 10.56 7.61605 10.76 8.40005 10.92C9.20005 11.064 9.96805 11.184 10.7041 11.28C11.4561 11.36 12.1121 11.432 12.6721 11.496C12.8321 11.512 13.1441 11.544 13.6081 11.592C14.0881 11.64 14.5841 11.712 15.0961 11.808C15.6081 11.888 16.0641 12 16.4641 12.144C16.8641 12.288 17.0641 12.464 17.0641 12.672C17.0641 12.848 16.9361 13 16.6801 13.128C16.4241 13.24 16.0961 13.336 15.6961 13.416C15.2961 13.48 14.8561 13.528 14.3761 13.56C13.8961 13.592 13.4241 13.616 12.9601 13.632C12.5121 13.648 12.1041 13.656 11.7361 13.656C11.3841 13.656 11.1361 13.656 10.9921 13.656C10.3841 13.656 9.78405 13.632 9.19205 13.584C8.60005 13.52 8.02405 13.408 7.46405 13.248C6.90405 13.072 6.37605 12.832 5.88005 12.528C5.38405 12.224 4.93605 11.816 4.53605 11.304L0.864053 13.584ZM4.34405 10.704L3.19205 9.52801C2.63205 9.11201 2.19205 8.62401 1.87205 8.06401C1.55205 7.48801 1.39205 6.81601 1.39205 6.04801C1.39205 5.31201 1.54405 4.66401 1.84805 4.10401C2.16805 3.52801 2.58405 3.03201 3.09605 2.61601C3.60805 2.20001 4.19205 1.84801 4.84805 1.56001C5.50405 1.25601 6.17605 1.01601 6.86405 0.840009C7.55205 0.664009 8.23205 0.536009 8.90405 0.456009C9.57605 0.376009 10.1841 0.33601 10.7281 0.33601C11.6721 0.33601 12.6241 0.368009 13.5841 0.432008C14.5441 0.480009 15.4801 0.624009 16.3921 0.864008C17.3201 1.10401 18.2081 1.47201 19.0561 1.96801C19.9041 2.46401 20.6961 3.16001 21.4321 4.05601C21.9281 4.55201 22.3201 4.96801 22.6081 5.30401C22.8961 5.62401 23.1201 5.89601 23.2801 6.12001C23.4561 6.34401 23.5841 6.52801 23.6641 6.67201C23.7441 6.80001 23.8241 6.92001 23.9041 7.03201L20.8321 9.09601C20.9121 9.17601 21.0001 9.24801 21.0961 9.31201C21.2081 9.36001 21.3601 9.46401 21.5521 9.62401C21.7441 9.78401 21.9921 10.016 22.2961 10.32C22.6161 10.608 23.0401 11.024 23.5681 11.568C23.9521 11.968 24.2561 12.48 24.4801 13.104C24.7041 13.728 24.8161 14.384 24.8161 15.072C24.8161 15.792 24.6401 16.432 24.2881 16.992C23.9361 17.552 23.4801 18.04 22.9201 18.456C22.3601 18.872 21.7201 19.224 21.0001 19.512C20.2801 19.8 19.5521 20.032 18.8161 20.208C18.0801 20.384 17.3601 20.512 16.6561 20.592C15.9681 20.672 15.3681 20.712 14.8561 20.712C13.9121 20.712 12.9521 20.712 11.9761 20.712C11.0001 20.712 10.0401 20.632 9.09605 20.472C8.16805 20.312 7.26405 20.048 6.38405 19.68C5.50405 19.312 4.69605 18.752 3.96005 18C3.33605 17.424 2.80805 16.92 2.37605 16.488C1.96005 16.04 1.60005 15.64 1.29605 15.288C1.00805 14.92 0.760053 14.584 0.552053 14.28C0.360053 13.976 0.176053 13.68 5.27389e-05 13.392L4.34405 10.704Z" fill="#9810FA" />
                    <path d="M32.9174 7.22401V13.656C32.9174 14.104 33.0214 14.432 33.2294 14.64C33.4534 14.832 33.8214 14.928 34.3334 14.928H35.8934V17.76H33.7814C30.9494 17.76 29.5334 16.384 29.5334 13.632V7.22401H27.9494V4.46401H29.5334V1.17601H32.9174V4.46401H35.8934V7.22401H32.9174ZM50.8621 4.46401V17.76H47.4781V16.08C47.0461 16.656 46.4781 17.112 45.7741 17.448C45.0861 17.768 44.3341 17.928 43.5181 17.928C42.4781 17.928 41.5581 17.712 40.7581 17.28C39.9581 16.832 39.3261 16.184 38.8621 15.336C38.4141 14.472 38.1901 13.448 38.1901 12.264V4.46401H41.5501V11.784C41.5501 12.84 41.8141 13.656 42.3421 14.232C42.8701 14.792 43.5901 15.072 44.5021 15.072C45.4301 15.072 46.1581 14.792 46.6861 14.232C47.2141 13.656 47.4781 12.84 47.4781 11.784V4.46401H50.8621ZM53.3132 11.064C53.3132 9.72001 53.5772 8.52801 54.1052 7.48801C54.6492 6.44801 55.3852 5.64801 56.3132 5.08801C57.2412 4.52801 58.2732 4.24801 59.4092 4.24801C60.2732 4.24801 61.0972 4.44001 61.8812 4.82401C62.6652 5.19201 63.2892 5.68801 63.7532 6.31201V9.53674e-06H67.1612V17.76H63.7532V15.792C63.3372 16.448 62.7532 16.976 62.0012 17.376C61.2492 17.776 60.3772 17.976 59.3852 17.976C58.2652 17.976 57.2412 17.688 56.3132 17.112C55.3852 16.536 54.6492 15.728 54.1052 14.688C53.5772 13.632 53.3132 12.424 53.3132 11.064ZM63.7772 11.112C63.7772 10.296 63.6172 9.60001 63.2972 9.02401C62.9772 8.43201 62.5452 7.98401 62.0012 7.68001C61.4572 7.36001 60.8732 7.20001 60.2492 7.20001C59.6252 7.20001 59.0492 7.35201 58.5212 7.65601C57.9932 7.96001 57.5612 8.40801 57.2252 9.00001C56.9052 9.57601 56.7452 10.264 56.7452 11.064C56.7452 11.864 56.9052 12.568 57.2252 13.176C57.5612 13.768 57.9932 14.224 58.5212 14.544C59.0652 14.864 59.6412 15.024 60.2492 15.024C60.8732 15.024 61.4572 14.872 62.0012 14.568C62.5452 14.248 62.9772 13.8 63.2972 13.224C63.6172 12.632 63.7772 11.928 63.7772 11.112ZM82.8029 10.824C82.8029 11.304 82.7709 11.736 82.7069 12.12H72.9869C73.0669 13.08 73.4029 13.832 73.9949 14.376C74.5869 14.92 75.3149 15.192 76.1789 15.192C77.4269 15.192 78.3149 14.656 78.8429 13.584H82.4669C82.0829 14.864 81.3469 15.92 80.2589 16.752C79.1709 17.568 77.8349 17.976 76.2509 17.976C74.9709 17.976 73.8189 17.696 72.7949 17.136C71.7869 16.56 70.9949 15.752 70.4189 14.712C69.8589 13.672 69.5789 12.472 69.5789 11.112C69.5789 9.73601 69.8589 8.52801 70.4189 7.48801C70.9789 6.44801 71.7629 5.64801 72.7709 5.08801C73.7789 4.52801 74.9389 4.24801 76.2509 4.24801C77.5149 4.24801 78.6429 4.52001 79.6349 5.06401C80.6429 5.60801 81.4189 6.38401 81.9629 7.39201C82.5229 8.38401 82.8029 9.52801 82.8029 10.824ZM79.3229 9.86401C79.3069 9.00001 78.9949 8.31201 78.3869 7.80001C77.7789 7.27201 77.0349 7.00801 76.1549 7.00801C75.3229 7.00801 74.6189 7.26401 74.0429 7.77601C73.4829 8.27201 73.1389 8.96801 73.0109 9.86401H79.3229ZM97.6154 10.824C97.6154 11.304 97.5834 11.736 97.5194 12.12H87.7994C87.8794 13.08 88.2154 13.832 88.8074 14.376C89.3994 14.92 90.1274 15.192 90.9914 15.192C92.2394 15.192 93.1274 14.656 93.6554 13.584H97.2794C96.8954 14.864 96.1594 15.92 95.0714 16.752C93.9834 17.568 92.6474 17.976 91.0634 17.976C89.7834 17.976 88.6314 17.696 87.6074 17.136C86.5994 16.56 85.8074 15.752 85.2314 14.712C84.6714 13.672 84.3914 12.472 84.3914 11.112C84.3914 9.73601 84.6714 8.52801 85.2314 7.48801C85.7914 6.44801 86.5754 5.64801 87.5834 5.08801C88.5914 4.52801 89.7514 4.24801 91.0634 4.24801C92.3274 4.24801 93.4554 4.52001 94.4474 5.06401C95.4554 5.60801 96.2314 6.38401 96.7754 7.39201C97.3354 8.38401 97.6154 9.52801 97.6154 10.824ZM94.1354 9.86401C94.1194 9.00001 93.8074 8.31201 93.1994 7.80001C92.5914 7.27201 91.8474 7.00801 90.9674 7.00801C90.1354 7.00801 89.4314 7.26401 88.8554 7.77601C88.2954 8.27201 87.9514 8.96801 87.8234 9.86401H94.1354Z" fill="#101828" />
                </svg>
            </a>
            <div class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                <button type="button" data-dropdown-toggle="language-dropdown-menu" class="flex items-center text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none">
                    <svg class="h-4 w-4 me-1.5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.00023 16.5C13.1425 16.5 16.5005 13.1421 16.5005 9C16.5005 4.85786 13.1425 1.5 9.00023 1.5C4.85797 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85797 16.5 9.00023 16.5Z" fill="white" />
                        <path d="M8.67548 8.99996H16.5012C16.5012 8.32308 16.4109 7.66735 16.2428 7.04358H8.67548V8.99996Z" fill="#D80027" />
                        <path d="M8.67548 5.08712H15.4004C14.9413 4.338 14.3543 3.67585 13.6699 3.13074H8.67548V5.08712Z" fill="#D80027" />
                        <path d="M9.0005 16.5001C10.7655 16.5001 12.3878 15.89 13.6689 14.8698H4.33209C5.61318 15.89 7.23548 16.5001 9.0005 16.5001Z" fill="#D80027" />
                        <path d="M2.60125 12.9132H15.4C15.7686 12.3118 16.0545 11.6543 16.2425 10.9567H1.75879C1.94679 11.6543 2.23265 12.3118 2.60125 12.9132Z" fill="#D80027" />
                        <path d="M4.97397 2.67114H5.65741L5.0217 3.13297L5.26453 3.88024L4.62884 3.41841L3.99316 3.88024L4.20292 3.23468C3.6432 3.7009 3.15262 4.24713 2.74834 4.85575H2.96732L2.56266 5.14972C2.49962 5.25489 2.43915 5.36173 2.38121 5.47015L2.57444 6.06485L2.21393 5.80293C2.12432 5.99279 2.04235 6.18692 1.96867 6.3851L2.18156 7.04036H2.96732L2.33161 7.50219L2.57444 8.24947L1.93876 7.78764L1.55798 8.0643C1.51986 8.37066 1.5 8.6827 1.5 8.99941H8.99964C8.99964 4.85763 8.99964 4.36934 8.99964 1.5C7.51811 1.5 6.13703 1.92975 4.97397 2.67114ZM5.26453 8.24947L4.62884 7.78764L3.99316 8.24947L4.23599 7.50219L3.60028 7.04036H4.38604L4.62884 6.29309L4.87165 7.04036H5.65741L5.0217 7.50219L5.26453 8.24947ZM5.0217 5.31758L5.26453 6.06485L4.62884 5.60303L3.99316 6.06485L4.23599 5.31758L3.60028 4.85575H4.38604L4.62884 4.10848L4.87165 4.85575H5.65741L5.0217 5.31758ZM7.95461 8.24947L7.31893 7.78764L6.68325 8.24947L6.92608 7.50219L6.29037 7.04036H7.07613L7.31893 6.29309L7.56173 7.04036H8.34749L7.71178 7.50219L7.95461 8.24947ZM7.71178 5.31758L7.95461 6.06485L7.31893 5.60303L6.68325 6.06485L6.92608 5.31758L6.29037 4.85575H7.07613L7.31893 4.10848L7.56173 4.85575H8.34749L7.71178 5.31758ZM7.71178 3.13297L7.95461 3.88024L7.31893 3.41841L6.68325 3.88024L6.92608 3.13297L6.29037 2.67114H7.07613L7.31893 1.92386L7.56173 2.67114H8.34749L7.71178 3.13297Z" fill="#1A47B8" />
                    </svg>
                    English (US)
                </button>
                <!-- Dropdown -->
                <div class="z-50 hidden bg-neutral-primary-medium border border-default-medium rounded-base shadow-lg w-44" id="language-dropdown-menu">
                    <ul class="p-2 text-sm text-body font-medium" role="none">
                        <li>
                            <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-4 w-4 me-1.5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.00023 16.5C13.1425 16.5 16.5005 13.1421 16.5005 9C16.5005 4.85786 13.1425 1.5 9.00023 1.5C4.85797 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85797 16.5 9.00023 16.5Z" fill="white" />
                                        <path d="M8.67548 8.99996H16.5012C16.5012 8.32308 16.4109 7.66735 16.2428 7.04358H8.67548V8.99996Z" fill="#D80027" />
                                        <path d="M8.67548 5.08712H15.4004C14.9413 4.338 14.3543 3.67585 13.6699 3.13074H8.67548V5.08712Z" fill="#D80027" />
                                        <path d="M9.0005 16.5001C10.7655 16.5001 12.3878 15.89 13.6689 14.8698H4.33209C5.61318 15.89 7.23548 16.5001 9.0005 16.5001Z" fill="#D80027" />
                                        <path d="M2.60125 12.9132H15.4C15.7686 12.3118 16.0545 11.6543 16.2425 10.9567H1.75879C1.94679 11.6543 2.23265 12.3118 2.60125 12.9132Z" fill="#D80027" />
                                        <path d="M4.97397 2.67114H5.65741L5.0217 3.13297L5.26453 3.88024L4.62884 3.41841L3.99316 3.88024L4.20292 3.23468C3.6432 3.7009 3.15262 4.24713 2.74834 4.85575H2.96732L2.56266 5.14972C2.49962 5.25489 2.43915 5.36173 2.38121 5.47015L2.57444 6.06485L2.21393 5.80293C2.12432 5.99279 2.04235 6.18692 1.96867 6.3851L2.18156 7.04036H2.96732L2.33161 7.50219L2.57444 8.24947L1.93876 7.78764L1.55798 8.0643C1.51986 8.37066 1.5 8.6827 1.5 8.99941H8.99964C8.99964 4.85763 8.99964 4.36934 8.99964 1.5C7.51811 1.5 6.13703 1.92975 4.97397 2.67114ZM5.26453 8.24947L4.62884 7.78764L3.99316 8.24947L4.23599 7.50219L3.60028 7.04036H4.38604L4.62884 6.29309L4.87165 7.04036H5.65741L5.0217 7.50219L5.26453 8.24947ZM5.0217 5.31758L5.26453 6.06485L4.62884 5.60303L3.99316 6.06485L4.23599 5.31758L3.60028 4.85575H4.38604L4.62884 4.10848L4.87165 4.85575H5.65741L5.0217 5.31758ZM7.95461 8.24947L7.31893 7.78764L6.68325 8.24947L6.92608 7.50219L6.29037 7.04036H7.07613L7.31893 6.29309L7.56173 7.04036H8.34749L7.71178 7.50219L7.95461 8.24947ZM7.71178 5.31758L7.95461 6.06485L7.31893 5.60303L6.68325 6.06485L6.92608 5.31758L6.29037 4.85575H7.07613L7.31893 4.10848L7.56173 4.85575H8.34749L7.71178 5.31758ZM7.71178 3.13297L7.95461 3.88024L7.31893 3.41841L6.68325 3.88024L6.92608 3.13297L6.29037 2.67114H7.07613L7.31893 1.92386L7.56173 2.67114H8.34749L7.71178 3.13297Z" fill="#1A47B8" />
                                    </svg>
                                    English (US)
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-4 w-4 me-1.5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.96631 11.6087C3.02601 14.4647 5.77508 16.5 8.99981 16.5C12.2245 16.5 14.9736 14.4647 16.0333 11.6087L8.99981 10.9565L1.96631 11.6087Z" fill="#FFDA44" />
                                        <path d="M8.99981 1.5C5.77508 1.5 3.02601 3.53531 1.96631 6.39132L8.99981 7.04347L16.0333 6.39129C14.9736 3.53531 12.2245 1.5 8.99981 1.5Z" fill="black" />
                                        <path d="M1.96649 6.39136C1.66503 7.20385 1.5 8.08264 1.5 9.00004C1.5 9.91744 1.66503 10.7962 1.96649 11.6087H16.0335C16.335 10.7962 16.5 9.91744 16.5 9.00004C16.5 8.08264 16.335 7.20385 16.0335 6.39136H1.96649Z" fill="#D80027" />
                                    </svg>
                                    Deutsch
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-4 w-4 me-1.5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" fill="white" />
                                        <path d="M16.5012 9.00018C16.5012 5.77544 14.4659 3.02637 11.6099 1.96667V16.0337C14.4659 14.974 16.5012 12.2249 16.5012 9.00018Z" fill="#D80027" />
                                        <path d="M1.5 8.99994C1.5 12.2247 3.53531 14.9737 6.39132 16.0334V1.96643C3.53531 3.02613 1.5 5.7752 1.5 8.99994Z" fill="#249F58" />
                                    </svg>
                                    Italiano
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded" role="menuitem">
                                <div class="inline-flex items-center">
                                    <svg class="h-4 w-4 me-1.5" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 16.5C13.1421 16.5 16.5 13.1421 16.5 9C16.5 4.85786 13.1421 1.5 9 1.5C4.85786 1.5 1.5 4.85786 1.5 9C1.5 13.1421 4.85786 16.5 9 16.5Z" fill="#D80027" />
                                        <path d="M5.60449 6.06458L6.25195 8.05676H8.34668L6.65332 9.29016L7.30078 11.2823L5.60449 10.0519L3.9082 11.2823L4.55859 9.29016L2.8623 8.05676H4.95703L5.60449 6.06458Z" fill="#FFDA44" />
                                        <path d="M10.3906 13.1162L9.89551 12.5068L9.16309 12.791L9.58789 12.1318L9.09277 11.5195L9.85156 11.7217L10.2793 11.0625L10.3203 11.8477L11.082 12.0498L10.3467 12.3311L10.3906 13.1162Z" fill="#FFDA44" />
                                        <path d="M11.375 11.3291L11.6094 10.5791L10.9678 10.125L11.7529 10.1133L11.9844 9.36328L12.2393 10.1074L13.0244 10.0986L12.3945 10.5674L12.6465 11.3115L12.0049 10.8574L11.375 11.3291Z" fill="#FFDA44" />
                                        <path d="M12.7041 7.00488L12.3584 7.71094L12.9209 8.25879L12.1445 8.14746L11.7988 8.85059L11.6641 8.07715L10.8848 7.96582L11.582 7.59961L11.4473 6.82324L12.0098 7.37109L12.7041 7.00488Z" fill="#FFDA44" />
                                        <path d="M10.4126 4.86621L10.354 5.64844L11.0835 5.94434L10.3188 6.13184L10.2632 6.91699L9.8501 6.24902L9.08545 6.43652L9.59229 5.83594L9.17627 5.1709L9.90576 5.4668L10.4126 4.86621Z" fill="#FFDA44" />
                                    </svg>
                                    中文 (繁體)
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary" aria-controls="navbar-language" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-default rounded-base bg-neutral-secondary-soft md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-neutral-primary">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-purple-600 rounded md:bg-transparent md:text-purple-600 md:p-0" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-purple-600 md:p-0 md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-purple-600 md:p-0 md:dark:hover:bg-transparent">Terms</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-purple-600 md:p-0 md:dark:hover:bg-transparent">Privacy</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-heading rounded hover:bg-neutral-tertiary md:hover:bg-transparent md:border-0 md:hover:text-purple-600 md:p-0 md:dark:hover:bg-transparent">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- MODAL -->
    <section>
        <div id="popup-modal" tabindex="-1" class=" overflow-y-auto overflow-x-hidden w-full bg-[rgba(0,0,0,0.5)] flex fixed top-0 right-0 left-0 z-50 justify-center pt-20 w-full md:inset-0 h-[calc(100%-1rem)] h-full max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-neutral-primary-soft border border-default rounded-base shadow-sm p-4 md:p-6">
                    <button type="button" class="absolute top-3 end-2.5 text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-fg-disabled w-12 h-12" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-6 text-body">We couldn’t process your file. Please ensure it’s valid and contains readable text that can be extracted.</h3>
                        <div class="flex items-center space-x-4 justify-center">
                            <button data-modal-hide="popup-modal" type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Retry</button>
                            <button data-modal-hide="popup-modal" type="button" class="text-white bg-purple-600 box-border border border-transparent hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                                Understood
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CALL TO ACTION -->
    <section class="relative overflow-hidden mt-[65px] ">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-10 z-10 relative">
            <div class="w-auto inline-flex items-center p-1 pe-2 mb-4 text-sm text-purple-800 rounded-full bg-purple-50 border border-purple-200" role="alert">
                <span class="bg-purple-100 text-purple-800 py-0.5 px-2 rounded-full">Create</span>
                <div class="ms-2 text-sm">
                    Start learning with Studee
                </div>
                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                </svg>
            </div>
            <h1 class="mb-6 text-4xl font-semibold tracking-tighter text-heading md:text-5xl lg:text-6xl">Upload a document to start your quiz</h1>
            <p class="mb-8 text-base font-normal text-body md:text-xl">Make learning easier and more enjoyable with Studee Quiz Maker!
                Studee uses AI to help you turn your notes or documents into interactive quizzes in just a few clicks.</p>
            <div class="w-auto inline-flex items-center p-1 pe-2 mb-4 font-medium text-sm text-purple-800 rounded-full bg-purple-200 border border-purple-200" role="alert">
                <span class="bg-white text-purple-800 py-0.5 px-2 rounded-full">By File</span>
                <div class="ms-2 text-sm">
                    Prompt
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-b from-white to-transparent dark:from-purple-300 w-full h-full absolute top-0 left-0 z-0"></div>
    </section>
    <!-- FORMS -->
    <section class="w-full justify-center align-center flex px-[15px] py-[50px]">
        <!-- UPLOAD FORM -->
        {{-- <form action="" class="w-full max-w-screen-sm gap-[20px] justify-center items-end flex flex-col">
            <!-- FILE UPLOAD -->
            <!-- <div class="flex items-center justify-center w-full">
                <div class="flex flex-col items-center justify-center w-full h-64 bg-neutral-secondary-medium border border-dashed border-purple-600 rounded-base">
                    <div class="flex flex-col items-center justify-center text-body pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01" />
                        </svg>
                        <p class="mb-2 text-sm">Click the button below to upload</p>
                        <p class="text-xs mb-4">Max. File Size: <span class="font-semibold">30MB</span></p>
                        <button type="button" onclick="document.getElementById('dropzone-file-2').click()" class="inline-flex items-center text-white bg-purple-600 hover:bg-purple-700 box-border border border-transparent focus:ring-4 focus:ring-purple-300 shadow-xs font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none">
                            <svg class="w-4 h-4 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                            </svg>
                            Browse file
                        </button>
                    </div>
                </div> 
                <input id="dropzone-file-2" type="file" class="hidden" />
            </div> -->
            <!-- PROMPT -->
            <textarea id="prompt" rows="4" class="bg-neutral-secondary-medium border border-purple-400 text-heading text-sm rounded-base focus:ring-purple-600 focus:border-purple-600 resize-none h-[250px] block w-full p-3.5 shadow-xs placeholder:text-body" placeholder="Generate a computer science quiz focusing on fundamentals such as algorithms, data structures, programming concepts, and basic computer systems. "></textarea>
            <p class="mt-2 text-sm text-gray-500">
                <span id="count">0</span> / 300
            </p>
            <button disabled type="button" class="inline-flex w-fit items-center disabled:bg-purple-800 disabled:cursor-not-allowed text-white bg-purple-600 hover:bg-purple-700 box-border border border-transparent focus:ring-4 focus:ring-purple-300 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                Next Step
                <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </button>
        </form> --}}
        <!-- CHOOSE FORM -->
        <form action="" class="w-full max-w-screen-sm gap-[15px] justify-center items-end flex flex-col">
            <h2 class="mb-6 text-2xl w-full flex items-start font-bold tracking-tighter text-heading md:text-3xl lg:text-4xl">What type of quiz do you want</h2>
            <div class="flex flex-col w-full gap-[20px]">
                <ul class="select-none w-full gap-4 flex flex-col">
                    <li>
                        <input type="radio" id="react-option" value="react-option" name="technologies" class="hidden peer" required="" checked>
                        <label for="react-option" class="inline-flex group items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-200 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-800">
                            <div class="flex flex-col lg:flex-row lg:gap-4 gap-0 items-start lg:items-center">
                                <div class="rounded-[8px] mb-[7px] lg:mb-0 md:mb-0 group-peer-checked:bg-purple-200 flex items-center justify-center bg-gray-100 p-[7px]">
                                    <svg class="group-peer-checked:fill-purple-500 fill-gray-700" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.3335 5.83333C3.3335 5.3731 3.70659 5 4.16683 5H15.8335C16.2937 5 16.6668 5.3731 16.6668 5.83333C16.6668 6.29357 16.2937 6.66667 15.8335 6.66667H4.16683C3.70659 6.66667 3.3335 6.29357 3.3335 5.83333ZM3.3335 10C3.3335 9.53976 3.70659 9.16667 4.16683 9.16667H15.8335C16.2937 9.16667 16.6668 9.53976 16.6668 10C16.6668 10.4602 16.2937 10.8333 15.8335 10.8333H4.16683C3.70659 10.8333 3.3335 10.4602 3.3335 10ZM3.3335 14.1667C3.3335 13.7064 3.70659 13.3333 4.16683 13.3333H15.8335C16.2937 13.3333 16.6668 13.7064 16.6668 14.1667C16.6668 14.6269 16.2937 15 15.8335 15H4.16683C3.70659 15 3.3335 14.6269 3.3335 14.1667Z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-0 lg:gap-1">
                                    <div class="w-full font-medium mb-1">Multiple Choice</div>
                                    <div class="w-full text-sm">Choose the correct answer from a set of options to quickly test your knowledge.</div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="vue-option" value="vue-option" name="technologies" class="hidden peer">
                        <label for="vue-option" class="inline-flex group items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-200 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-800">
                            <div class="flex flex-col lg:flex-row lg:gap-4 gap-0 items-start lg:items-center">
                                <div class="rounded-[8px] mb-[7px] lg:mb-0 md:mb-0 group-peer-checked:bg-purple-200 flex items-center justify-center bg-gray-100 p-[7px]">
                                    <svg width="30" height="30" class="group-peer-checked:fill-purple-500 fill-gray-700" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99984 3.33333C6.31794 3.33333 3.33317 6.3181 3.33317 10C3.33317 13.6819 6.31794 16.6667 9.99984 16.6667C13.6817 16.6667 16.6665 13.6819 16.6665 10C16.6665 6.3181 13.6817 3.33333 9.99984 3.33333ZM1.6665 10C1.6665 5.39763 5.39746 1.66667 9.99984 1.66667C14.6022 1.66667 18.3332 5.39763 18.3332 10C18.3332 14.6024 14.6022 18.3333 9.99984 18.3333C5.39746 18.3333 1.6665 14.6024 1.6665 10ZM10.0718 7.15231C9.7401 7.13964 9.41697 7.25925 9.17347 7.48482C8.92998 7.7104 8.78607 8.02346 8.7734 8.35514C8.75583 8.81504 8.36876 9.17363 7.90886 9.15606C7.44896 9.13849 7.09038 8.75142 7.10794 8.29152C7.13749 7.51814 7.47305 6.78816 8.04081 6.26218C8.60856 5.73621 9.36201 5.45731 10.1354 5.48686C10.9088 5.5164 11.6388 5.85196 12.1647 6.41972C12.6884 6.98503 12.9672 7.73443 12.9404 8.50431C12.9338 8.8827 12.8522 9.25606 12.7005 9.60283C12.5474 9.95267 12.3259 10.2684 12.0491 10.5314C11.7722 10.7945 11.4456 10.9995 11.0884 11.1346C11.0045 11.1663 10.9193 11.194 10.8332 11.2176V11.6667C10.8332 12.1269 10.4601 12.5 9.99984 12.5C9.5396 12.5 9.1665 12.1269 9.1665 11.6667V10.485C9.1665 10.2586 9.25859 10.042 9.42159 9.88494C9.58458 9.72787 9.80446 9.64386 10.0307 9.65224C10.1904 9.65815 10.3496 9.63209 10.4991 9.57558C10.6485 9.51908 10.7852 9.43328 10.901 9.32321C11.0169 9.21314 11.1096 9.08103 11.1736 8.93465C11.2377 8.78826 11.2718 8.63054 11.2741 8.47077L11.2746 8.45069C11.2873 8.11901 11.1677 7.79588 10.9421 7.55238C10.7165 7.30889 10.4035 7.16498 10.0718 7.15231ZM9.15816 14.1732C9.15816 13.7129 9.53126 13.3398 9.9915 13.3398H9.99983C10.4601 13.3398 10.8332 13.7129 10.8332 14.1732C10.8332 14.6334 10.4601 15.0065 9.99983 15.0065H9.9915C9.53126 15.0065 9.15816 14.6334 9.15816 14.1732Z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-0 lg:gap-1">
                                    <div class="w-full font-medium mb-1">True or False</div>
                                    <div class="w-full text-sm">Test your understanding by deciding whether each statement is correct or incorrect.</div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="angular-option" value="angular-option" name="technologies" class="hidden peer">
                        <label for="angular-option" class="inline-flex group items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-200 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-800">
                            <div class="flex flex-col lg:flex-row lg:gap-4 gap-0 items-start lg:items-center">
                                <div class="rounded-[8px] mb-[7px] lg:mb-0 md:mb-0 group-peer-checked:bg-purple-200 flex items-center justify-center bg-gray-100 p-[7px]">
                                    <svg class="group-peer-checked:fill-purple-500 fill-gray-700" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.33317 3.33333C5.57175 3.33333 3.33317 5.57191 3.33317 8.33333C3.33317 11.0948 5.57175 13.3333 8.33317 13.3333C11.0946 13.3333 13.3332 11.0948 13.3332 8.33333C13.3332 5.57191 11.0946 3.33333 8.33317 3.33333ZM1.6665 8.33333C1.6665 4.65144 4.65127 1.66667 8.33317 1.66667C12.0151 1.66667 14.9998 4.65144 14.9998 8.33333C14.9998 12.0152 12.0151 15 8.33317 15C4.65127 15 1.6665 12.0152 1.6665 8.33333ZM13.9939 13.9941C14.3194 13.6686 14.847 13.6686 15.1724 13.9941L18.0891 16.9107C18.4145 17.2362 18.4145 17.7638 18.0891 18.0893C17.7637 18.4147 17.236 18.4147 16.9106 18.0893L13.9939 15.1726C13.6685 14.8472 13.6685 14.3195 13.9939 13.9941Z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-0 lg:gap-1">
                                    <div class="w-full font-medium mb-1">Identification</div>
                                    <div class="w-full text-sm">Type the correct term or answer that best matches the given question or description.</div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <input type="radio" id="flutter-option" value="flutter-option" name="technologies" class="hidden peer">
                        <label for="flutter-option" class="inline-flex group items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-200 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-800">
                            <div class="flex flex-col lg:flex-row lg:gap-4 gap-0 items-start lg:items-center">
                                <div class="rounded-[8px] mb-[7px] lg:mb-0 md:mb-0 group-peer-checked:bg-purple-200 flex items-center justify-center bg-gray-100 p-[7px]">
                                    <svg class="group-peer-checked:fill-purple-500 fill-gray-700" width="30" height="30" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3388 2.5C12.5598 2.5 12.7718 2.5878 12.928 2.74408L17.2559 7.07203C17.5814 7.39747 17.5814 7.9251 17.2559 8.25054L15.0813 10.4252C14.925 10.5815 14.713 10.6693 14.492 10.6693C14.4677 10.6693 14.4435 10.6683 14.4195 10.6662L13.1074 14.1638C13.021 14.3944 12.837 14.5749 12.6048 14.6569L4.69318 17.4524C4.39049 17.5593 4.05329 17.4829 3.82629 17.2559L2.7441 16.1737C2.5171 15.9467 2.44068 15.6095 2.54763 15.3068L5.34311 7.39511C5.42513 7.16296 5.60562 6.97897 5.83615 6.89249L9.33389 5.58039C9.31339 5.3437 9.39371 5.09993 9.57484 4.91879L11.7495 2.74408C11.9058 2.5878 12.1178 2.5 12.3388 2.5ZM14.492 8.65748L15.4882 7.66128L12.3388 4.51185L11.3426 5.50805L14.492 8.65748ZM10.4271 6.95038L6.78517 8.31656L4.75273 14.0688L8.07506 10.7464C8.4005 10.4209 8.92814 10.4209 9.25358 10.7464C9.57901 11.0718 9.57902 11.5995 9.25358 11.9249L5.93122 15.2473L11.6834 13.2148L13.0495 9.57286L10.4271 6.95038Z" />
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-0 lg:gap-1">
                                    <div class="w-full font-medium mb-1">Fill in the blank</div>
                                    <div class="w-full text-sm">Complete the sentence by filling in the missing word or phrase.</div>
                                </div>
                            </div>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="w-full flex flex-col-reverse lg:flex-row md:flex-row gap-4 md:gap-0 lg:gap-0 justify-between items-center">
                <button type="button" class="inline-flex items-center justify-center lg:w-fit md:w-fit w-full items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-xl md:text-sm lg:text-sm  px-5 md:py-2.5 lg:py-2.5 py-4 focus:outline-none">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.70711 7.29289C10.0976 7.68342 10.0976 8.31658 9.70711 8.70711L7.41421 11H19C19.5523 11 20 11.4477 20 12C20 12.5523 19.5523 13 19 13H7.41421L9.70711 15.2929C10.0976 15.6834 10.0976 16.3166 9.70711 16.7071C9.31658 17.0976 8.68342 17.0976 8.29289 16.7071L4.29289 12.7071C3.90237 12.3166 3.90237 11.6834 4.29289 11.2929L8.29289 7.29289C8.68342 6.90237 9.31658 6.90237 9.70711 7.29289Z" fill="#101828" />
                    </svg>
                    Go Back
                </button>
                <button type="button" class="inline-flex items-center justify-center lg:w-fit md:w-fit w-full items-center disabled:bg-purple-800 disabled:cursor-not-allowed text-white bg-purple-600 hover:bg-purple-700 box-border border border-transparent focus:ring-4 focus:ring-purple-300 shadow-xs font-medium leading-5 rounded-base text-xl md:text-sm lg:text-sm px-4 md:py-2.5 lg:py-2.5 py-4 text-center focus:outline-none">
                    Generate
                    <svg class="lg:w-4 md:w-4 w-7 lg:h-4 md:h-4 ms-1.5 fill-white -me-0.5" fill="#000000" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 26.6875 12.6602 C 26.9687 12.6602 27.1094 12.4961 27.1797 12.2383 C 27.9062 8.3242 27.8594 8.2305 31.9375 7.4570 C 32.2187 7.4102 32.3828 7.2461 32.3828 6.9648 C 32.3828 6.6836 32.2187 6.5195 31.9375 6.4726 C 27.8828 5.6524 28.0000 5.5586 27.1797 1.6914 C 27.1094 1.4336 26.9687 1.2695 26.6875 1.2695 C 26.4062 1.2695 26.2656 1.4336 26.1953 1.6914 C 25.3750 5.5586 25.5156 5.6524 21.4375 6.4726 C 21.1797 6.5195 20.9922 6.6836 20.9922 6.9648 C 20.9922 7.2461 21.1797 7.4102 21.4375 7.4570 C 25.5156 8.2774 25.4687 8.3242 26.1953 12.2383 C 26.2656 12.4961 26.4062 12.6602 26.6875 12.6602 Z M 15.3438 28.7852 C 15.7891 28.7852 16.0938 28.5039 16.1406 28.0821 C 16.9844 21.8242 17.1953 21.8242 23.6641 20.5821 C 24.0860 20.5117 24.3906 20.2305 24.3906 19.7852 C 24.3906 19.3633 24.0860 19.0586 23.6641 18.9883 C 17.1953 18.0977 16.9609 17.8867 16.1406 11.5117 C 16.0938 11.0899 15.7891 10.7852 15.3438 10.7852 C 14.9219 10.7852 14.6172 11.0899 14.5703 11.5352 C 13.7969 17.8164 13.4687 17.7930 7.0469 18.9883 C 6.6250 19.0821 6.3203 19.3633 6.3203 19.7852 C 6.3203 20.2539 6.6250 20.5117 7.1406 20.5821 C 13.5156 21.6133 13.7969 21.7774 14.5703 28.0352 C 14.6172 28.5039 14.9219 28.7852 15.3438 28.7852 Z M 31.2344 54.7305 C 31.8438 54.7305 32.2891 54.2852 32.4062 53.6524 C 34.0703 40.8086 35.8750 38.8633 48.5781 37.4570 C 49.2344 37.3867 49.6797 36.8945 49.6797 36.2852 C 49.6797 35.6758 49.2344 35.2070 48.5781 35.1133 C 35.8750 33.7070 34.0703 31.7617 32.4062 18.9180 C 32.2891 18.2852 31.8438 17.8633 31.2344 17.8633 C 30.6250 17.8633 30.1797 18.2852 30.0860 18.9180 C 28.4219 31.7617 26.5938 33.7070 13.9140 35.1133 C 13.2344 35.2070 12.7891 35.6758 12.7891 36.2852 C 12.7891 36.8945 13.2344 37.3867 13.9140 37.4570 C 26.5703 39.1211 28.3281 40.8321 30.0860 53.6524 C 30.1797 54.2852 30.6250 54.7305 31.2344 54.7305 Z" />
                    </svg>
                </button>
            </div>
        </form>
    </section>
    <!-- HERO -->
    <section class="bg-neutral-primary">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-20 grid lg:grid-cols-2 gap-8 lg:gap-16">
            <div class="flex flex-col justify-center">
                <h1 class="mb-6 text-4xl font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">Upgrade your learning with Studee</h1>
                <p class="text-base font-normal text-body md:text-xl">In just a few simple steps, you can boost your learning and gain confidence in what you study. Studee makes it easy to turn your lessons into meaningful practice, helping you learn smarter and faster.</p>
            </div>
            <div class="w-full flex items-center justify-end">
                <svg width="350" height="350" viewBox="0 0 350 350" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M278.749 197.383C280.152 197.308 281.507 196.846 282.663 196.047C283.818 195.248 284.729 194.143 285.294 192.857C285.776 191.221 284.043 190.643 283.464 192.472C282.98 193.473 282.249 194.335 281.34 194.975C280.431 195.615 279.374 196.013 278.268 196.131C277.883 196.228 277.113 197.414 278.749 197.383Z" fill="#191919" />
                    <path d="M281.636 183.521C281.069 181.4 278.169 183.328 279.904 185.35C280.385 185.927 282.226 185.731 281.636 183.521Z" fill="#191919" />
                    <path d="M277.498 174.57C276.149 174.949 276.151 176.495 277.881 176.495C279.817 176.352 281.759 176.651 283.562 177.37C283.686 177.411 283.821 177.409 283.944 177.364C284.066 177.319 284.17 177.233 284.237 177.12C284.304 177.008 284.331 176.876 284.313 176.746C284.295 176.616 284.233 176.497 284.138 176.407C283.229 175.64 282.165 175.079 281.019 174.762C279.873 174.445 278.672 174.379 277.498 174.57Z" fill="#191919" />
                    <path d="M272.3 179.375C271.014 178.648 269.499 178.442 268.065 178.798C267.19 179.087 267.295 180.049 268.161 180.145C269.292 180.184 270.404 180.446 271.434 180.915C272.587 181.404 272.871 179.871 272.3 179.375Z" fill="#191919" />
                    <path d="M273.838 186.025C273.565 188.165 273.533 190.329 273.742 192.476C274.129 194.978 279.806 193.149 278.941 191.802C278.46 191.032 276.535 192.677 275.282 192.091C274.948 190.087 274.82 188.055 274.899 186.025C274.899 185.884 274.843 185.75 274.743 185.65C274.644 185.551 274.509 185.495 274.368 185.495C274.228 185.495 274.093 185.551 273.994 185.65C273.894 185.75 273.838 185.884 273.838 186.025Z" fill="#191919" />
                    <path d="M271.913 186.697C273.353 185.822 272.011 182.847 270.76 183.81C269.796 184.387 270.175 187.749 271.913 186.697Z" fill="#191919" />
                    <path d="M262.192 194.495C263.54 198.923 266.812 204.698 270.566 207.393C272.298 208.644 273.165 207.393 271.441 205.756C267.74 202.638 264.948 198.582 263.356 194.012C263.292 193.858 263.169 193.735 263.015 193.671C262.86 193.608 262.687 193.608 262.533 193.672C262.378 193.736 262.256 193.859 262.192 194.013C262.128 194.167 262.128 194.341 262.192 194.495Z" fill="#191919" />
                    <path d="M293.475 199.115C293.946 198.718 293.571 197.96 292.994 198.24C287.604 200.55 283.85 208.924 286.449 214.893C286.834 215.663 287.892 215.375 287.7 214.507C286.256 207.104 288.158 203.599 293.475 199.115Z" fill="#191919" />
                    <path d="M261.326 200.944C262.082 203.35 263.315 205.579 264.952 207.498C266.59 209.416 268.597 210.985 270.855 212.109C272.106 212.687 273.357 211.724 271.432 210.473C267.471 208.203 264.336 204.731 262.481 200.559C262 199.789 261.113 200.083 261.326 200.944Z" fill="#191919" />
                    <path d="M265.465 194.303C267.63 198.781 271.265 202.382 275.763 204.505C282.02 207.297 283.273 202.965 288.663 199.404C289.24 199.019 288.95 198.249 288.276 198.442C283.463 199.597 282.982 205.949 276.245 202.677C272.314 200.492 269.002 197.346 266.62 193.533C266.508 193.405 266.353 193.322 266.185 193.3C266.016 193.277 265.846 193.317 265.704 193.411C265.563 193.505 265.461 193.648 265.417 193.812C265.372 193.976 265.39 194.15 265.465 194.303Z" fill="#191919" />
                    <path d="M273.838 219.625C274.321 220.393 275.573 219.721 275.186 218.951C273.357 214.041 266.042 212.982 263.443 208.651C262.962 207.881 262.096 208.651 262.393 209.421C265.08 214.515 270.575 214.414 273.838 219.625Z" fill="#191919" />
                    <path d="M264.791 179.286C265.144 184.004 266.082 188.66 267.582 193.148C267.775 193.822 269.026 193.533 268.833 192.763C266.804 186.259 265.988 179.437 266.427 172.638C267.108 172.885 267.833 172.989 268.557 172.941C269.28 172.893 269.985 172.696 270.628 172.361C271.27 172.026 271.836 171.561 272.29 170.996C272.743 170.43 273.074 169.777 273.261 169.077C275.861 172.927 283.561 172.542 285.968 169.077C285.294 174.37 291.454 183.707 292.705 181.974C293.283 181.099 293.86 180.145 294.919 179.857C298.865 178.605 299.539 186.113 297.133 187.172C296.083 187.653 293.956 186.297 295.208 189.674C296.87 194.083 298.283 198.582 299.443 203.149C299.635 204.015 300.694 203.63 300.694 202.764C299.847 198.096 298.558 193.519 296.844 189.095C297.739 188.981 298.569 188.566 299.198 187.919C299.828 187.273 300.219 186.431 300.309 185.534C301.435 185.124 302.44 184.44 303.234 183.543C304.027 182.645 304.584 181.563 304.852 180.396C305.12 179.228 305.091 178.012 304.769 176.859C304.446 175.705 303.84 174.65 303.006 173.791C308.203 168.594 307.241 160.026 299.25 160.122C299.746 158.545 299.753 156.856 299.27 155.276C298.788 153.695 297.839 152.298 296.547 151.267C295.256 150.236 293.683 149.62 292.035 149.5C290.387 149.379 288.741 149.761 287.313 150.593C284.426 142.797 272.587 145.107 272.298 152.037C264.791 145.877 255.068 155.502 260.843 162.913C254.3 163.018 253.722 178.612 264.791 179.286Z" fill="#191919" />
                    <path d="M277.979 225.008C278.555 225.653 279.315 226.107 280.156 226.309C280.997 226.51 281.88 226.45 282.686 226.136C283.492 225.822 284.183 225.269 284.666 224.551C285.15 223.834 285.402 222.986 285.39 222.121C286.983 221.498 288.527 220.758 290.01 219.907C289.795 218.599 289.302 217.352 288.566 216.25C287.068 216.637 285.616 217.186 284.235 217.886C283.678 217.196 282.917 216.702 282.061 216.474C281.205 216.246 280.298 216.297 279.472 216.618C278.647 216.94 277.945 217.516 277.468 218.263C276.992 219.01 276.766 219.889 276.822 220.773C275.859 221.351 274.801 222.025 274.416 222.313C274.368 223.643 274.735 224.955 275.466 226.067C276.244 225.778 277.2 225.4 277.979 225.008ZM278.843 220.773C279.148 217.405 283.568 217.79 283.176 222.025C282.887 225.49 278.479 224.818 278.843 220.773Z" fill="#191919" />
                    <path d="M256.9 257.543C256.612 252.73 256.419 241.371 257.67 237.136C257.863 236.366 258.825 236.173 258.72 237.81C258.396 244.353 258.461 250.91 258.913 257.446C266.181 257.212 273.456 257.566 280.667 258.505C277.585 250.42 273.254 225.297 272.773 222.025C272.291 218.752 265.746 216.537 262.273 213.168C254.188 216.055 242.925 225.105 234.166 237.425C237.388 244.448 240.028 251.724 242.059 259.179C246.972 258.358 251.926 257.812 256.9 257.543Z" fill="#191919" />
                    <path d="M302.234 204.89C298.288 209.029 294.919 211.05 288.952 211.147C290.203 219.722 297.712 232.227 304.257 241.373C305.28 239.197 306.023 236.9 306.469 234.537C306.663 233.19 307.519 233.671 307.519 234.441C307.362 237.478 306.712 240.469 305.594 243.298C313.488 254.078 323.794 264.473 327.644 277.564C331.975 272.078 348.917 242.039 337.175 222.121C330.246 210.088 315.133 203.928 302.234 204.89Z" fill="#191919" />
                    <path d="M316.384 291.9C323.22 291.996 326.394 291.996 332.169 291.996C335.155 284.585 338.235 270.051 339.294 258.018C333.132 277.949 323.796 287.382 316.384 291.9Z" fill="#191919" />
                    <path d="M290.106 285.938C279.241 286.966 268.485 288.931 257.957 291.809C264.213 291.713 286.738 291.521 294.63 291.713C292.587 290.275 291.013 288.266 290.106 285.938Z" fill="#191919" />
                    <path d="M288.575 283.532C289.732 283.357 289.538 281.607 288.383 281.799C260.538 285.707 255.913 289.042 244.008 290.077C242.372 290.173 241.033 291.905 243.238 291.905C250.362 291.905 262.105 288.248 269.805 286.804C276.535 285.457 281.839 284.573 288.575 283.532Z" fill="#191919" />
                    <path d="M245.539 260.43C241.301 261.277 242.363 262.644 243.903 262.259C254.877 259.949 269.7 260.43 280.674 262.259C281.733 262.451 282.214 260.815 281.155 260.623C270.277 258.794 256.407 258.262 245.539 260.43Z" fill="#191919" />
                    <path d="M313.305 257.928C313.782 258.318 314.748 257.735 314.355 257.053C305.259 246.23 297.172 234.599 290.194 222.305C289.809 221.631 288.654 222.305 288.943 222.978C292.609 230.3 306.999 252.788 313.305 257.928Z" fill="#191919" />
                    <path d="M325.24 278.334C325.625 277.372 324.365 276.602 323.892 277.459C321.005 282.56 317.54 287.662 311.957 290.164C306.279 292.763 300.021 291.993 295.882 287.084C286.931 276.497 280.386 242.809 277.978 227.502C277.785 226.539 276.438 226.924 276.63 227.887C278.651 242.517 285.205 276.978 294.727 288.239C302.019 296.93 317.409 294.781 325.24 278.334Z" fill="#191919" />
                    <path d="M181.722 239.925C182.396 239.544 181.915 238.77 181.145 238.875C177.68 239.549 175.37 240.512 174.309 243.978C173.239 247.136 172.975 250.51 173.539 253.796C173.732 254.671 174.983 254.47 175.079 253.603C175.175 249.85 174.598 249.08 175.849 244.941C176.908 241.082 178.647 241.675 181.722 239.925Z" fill="#191919" />
                    <path d="M182.973 225.201C182.867 227.288 182.932 229.38 183.166 231.457C183.262 232.227 184.609 232.131 184.706 231.457C184.749 229.367 184.653 227.277 184.417 225.201C184.319 224.525 182.989 224.525 182.973 225.201Z" fill="#191919" />
                    <path d="M190.288 224.431C192.859 223.031 196.938 220.292 198.662 216.922C199.143 215.959 199.049 215.67 198.373 214.804C197.523 213.842 196.517 213.029 195.398 212.398C194.245 211.82 194.147 212.205 193.283 212.783C187.602 216.729 178.933 215.959 172.97 212.879C172.489 212.59 171.142 213.36 172.393 214.034C179.806 217.79 187.793 218.463 194.628 213.649C195.73 214.348 196.734 215.189 197.614 216.152C195.334 219.391 192.248 221.98 188.661 223.661C187.313 222.025 185.966 220.485 184.618 218.848C182.587 216.593 181.754 220.653 178.457 223.95C175.121 222.302 171.933 220.369 168.928 218.175C169.89 217.21 170.757 216.25 171.719 215.285C172.297 214.804 171.527 213.842 170.844 214.235C169.829 214.97 168.894 215.809 168.053 216.738C167.708 217.135 167.535 217.653 167.571 218.178C167.607 218.702 167.849 219.192 168.245 219.538C169.785 220.982 177.582 225.987 178.835 225.409C180.952 224.359 182.107 221.559 183.551 219.827C184.898 221.174 186.727 223.869 187.786 224.928C188.46 225.682 189.608 224.802 190.288 224.431Z" fill="#191919" />
                    <path d="M200.493 185.735C200.842 184.254 200.971 182.73 200.876 181.211C200.683 179.575 199.145 179.479 199.24 181.307C199.432 183.714 198.568 186.505 198.856 187.082C199.53 188.72 201.936 186.032 203.09 187.758C204.726 190.453 201.165 195.554 198.951 194.207C198.375 193.822 197.901 194.11 197.507 195.362C196.919 197.047 196.144 198.661 195.197 200.174C190 207.778 179.508 209.703 173.733 203.149C171.697 200.512 170.372 197.397 169.883 194.102C169.868 193.885 169.797 193.676 169.676 193.495C169.556 193.314 169.39 193.168 169.196 193.071C169.001 192.973 168.785 192.929 168.568 192.941C168.351 192.953 168.141 193.021 167.958 193.139C165.937 194.679 164.108 192.369 163.916 189.482C163.627 185.534 166.033 185.245 167.766 186.592C167.874 186.68 168.006 186.731 168.145 186.739C168.283 186.747 168.421 186.711 168.538 186.637C168.655 186.562 168.746 186.453 168.797 186.324C168.849 186.195 168.858 186.053 168.825 185.919C168.728 185.044 168.247 180.144 168.247 179.085C168.151 178.122 166.996 178.507 166.996 179.374C167.092 181.106 167.188 182.935 167.381 184.571C166.85 184.313 166.264 184.189 165.674 184.209C165.085 184.229 164.509 184.393 163.997 184.686C163.485 184.979 163.052 185.393 162.736 185.892C162.42 186.39 162.23 186.958 162.183 187.546C161.413 192.745 165.071 196.788 168.44 194.863C169.402 199.098 171.038 203.429 174.601 206.028C174.407 207.76 174.313 209.493 174.12 211.225C174.024 212.765 175.083 212.958 175.468 212.188C175.728 210.434 175.888 208.666 175.949 206.894C178.308 208.123 180.953 208.7 183.609 208.565C186.266 208.429 188.838 207.587 191.06 206.124C191.156 207.857 191.06 209.685 191.253 211.418C191.254 211.527 191.279 211.635 191.326 211.735C191.372 211.834 191.439 211.922 191.521 211.994C191.604 212.066 191.701 212.12 191.806 212.151C191.911 212.183 192.021 212.193 192.13 212.179C192.239 212.166 192.343 212.129 192.437 212.073C192.531 212.016 192.611 211.94 192.674 211.85C192.736 211.76 192.779 211.658 192.8 211.55C192.82 211.443 192.818 211.332 192.793 211.225C192.504 208.338 192.696 206.509 192.6 205.065C195.515 202.754 197.635 199.592 198.666 196.018C199.249 196.157 199.856 196.159 200.44 196.026C201.024 195.892 201.57 195.626 202.034 195.248C206.556 192.185 206.17 184.002 200.493 185.735Z" fill="#191919" />
                    <path d="M176.525 177.265C175.551 177.246 174.584 177.433 173.688 177.815C172.792 178.196 171.987 178.763 171.325 179.478C170.748 180.056 171.133 181.307 172.288 180.73C173.532 179.837 174.998 179.304 176.525 179.19C178.257 178.997 177.975 177.368 176.525 177.265Z" fill="#191919" />
                    <path d="M199.913 237.617C199.643 235.278 198.763 233.05 197.361 231.158C195.959 229.266 194.084 227.776 191.924 226.837C190.874 226.452 190.769 227.511 191.539 227.887C196.448 230.486 198.373 235.491 198.568 240.786C198.758 245.117 196.737 251.855 201.838 254.261C202.713 254.646 203.38 253.211 202.512 252.817C198.181 250.805 200.932 244.169 199.913 237.617Z" fill="#191919" />
                    <path d="M177.774 228.473C178.245 227.887 177.678 227.126 177.004 227.598C173.264 230.8 170.525 235.01 169.112 239.726C168.438 242.23 168.63 244.829 168.053 247.235C167.379 250.026 164.973 251.085 162.759 252.625C161.989 253.106 162.663 254.454 163.529 254.069C165.687 253.187 167.531 251.678 168.823 249.737C170.844 246.272 168.823 241.941 172.962 234.721C174.407 232.521 176.016 230.433 177.774 228.473Z" fill="#191919" />
                    <path d="M171.999 249.361C172.33 246.386 172.095 243.296 173.731 240.601C174.468 239.487 175.433 238.543 176.561 237.83C177.69 237.116 178.956 236.65 180.278 236.462C181.433 236.269 181.328 235.114 180.278 235.114C178.752 235.165 177.259 235.575 175.921 236.31C174.583 237.046 173.438 238.088 172.578 239.349C170.917 242.372 170.276 245.849 170.749 249.265C170.748 249.939 171.913 250.131 171.999 249.361Z" fill="#191919" />
                    <path d="M183.75 248.5C183.4 251.008 183.943 288.253 184.039 290.275C184.039 291.333 185.771 291.237 185.771 290.178C185.771 279.503 185.29 260.243 185.098 248.597C184.994 248.014 183.85 247.725 183.75 248.5Z" fill="#191919" />
                    <path d="M194.042 266.205C192.938 265.79 191.955 265.106 191.182 264.215C190.409 263.324 189.87 262.255 189.615 261.104C188.556 256.003 193.85 251.094 191.155 245.8C190.683 244.81 189.901 244.001 188.928 243.496C187.955 242.99 186.844 242.816 185.763 243C185.622 243 185.488 243.056 185.388 243.155C185.289 243.254 185.233 243.389 185.233 243.529C185.233 243.67 185.289 243.804 185.388 243.904C185.488 244.003 185.622 244.059 185.763 244.059C186.387 244.082 187 244.232 187.565 244.5C188.13 244.767 188.635 245.146 189.049 245.614C189.463 246.082 189.778 246.63 189.974 247.223C190.171 247.816 190.245 248.443 190.192 249.066C190.192 251.857 188.652 254.456 188.075 257.151C187.487 259.27 187.715 261.532 188.712 263.492C189.71 265.451 191.405 266.966 193.465 267.738C194.523 268.226 195.097 266.604 194.042 266.205Z" fill="#191919" />
                    <path d="M161.989 254.944C161.887 254.174 161.989 251.575 160.641 251.969C159.46 252.187 158.301 252.509 157.176 252.931C155.636 253.605 154.866 255.338 156.984 254.76C157.946 254.471 159.005 254.183 159.959 253.885C160.449 260.123 162.948 266.033 167.081 270.731C161.442 275.548 155.347 279.803 148.881 283.436C147.052 284.494 147.534 286.131 149.074 285.264C156.069 281.613 162.571 277.085 168.422 271.789C168.71 271.501 169.095 271.116 168.71 270.538C165.261 265.146 162.813 261.205 161.989 254.944Z" fill="#191919" />
                    <path d="M243.903 276.409C242.837 266.303 235.625 246.57 231.583 237.809C225.421 224.623 215.7 219.811 202.032 216.825C201.854 216.787 201.667 216.821 201.513 216.92C201.359 217.019 201.251 217.176 201.213 217.355C201.174 217.533 201.208 217.72 201.308 217.874C201.407 218.028 201.563 218.136 201.742 218.174C213.582 222.313 222.341 223.853 228.792 236.077C233.412 244.837 243.614 271.693 242.17 281.992C241.015 289.98 236.781 289.595 231.198 289.98C221.186 290.654 204.054 277.275 196.929 270.73C201.742 267.36 204.824 259.66 205.69 254.27C213.353 256.373 220.751 259.344 227.74 263.125C228.704 263.606 229.474 262.355 228.512 261.874C224.061 259.377 219.427 257.221 214.65 255.425C214.234 253.128 213.241 250.975 211.763 249.169C210.993 248.495 210.608 249.361 210.896 249.842C211.836 251.367 212.55 253.021 213.014 254.751C210.734 253.878 208.383 253.202 205.988 252.73C204.159 252.441 204.159 252.73 203.87 254.27C200.692 269.575 193.473 269.189 195.494 271.404C202.619 279.393 219.751 291.424 230.918 291.617C241.401 291.9 245.051 287.287 243.903 276.409Z" fill="#191919" />
                    <path d="M195.005 245.8C194.885 244.393 194.358 243.052 193.488 241.941C192.617 240.829 191.442 239.996 190.105 239.542C188.457 239.223 186.777 239.094 185.1 239.157C184.328 239.157 184.328 240.12 185.003 240.314C187.795 241.084 190.105 240.023 192.126 242.913C194.34 245.993 193.088 248.976 193.473 250.805C193.526 250.949 193.619 251.075 193.742 251.167C193.864 251.259 194.011 251.313 194.164 251.323C194.317 251.334 194.47 251.299 194.603 251.224C194.737 251.149 194.846 251.037 194.917 250.901C195.242 249.219 195.271 247.493 195.005 245.8Z" fill="#191919" />
                    <path d="M182.588 242.431C181.478 242.783 180.457 243.37 179.594 244.15C178.73 244.93 178.044 245.887 177.581 246.955C173.539 255.425 184.609 261.681 168.63 267.554C168.434 267.613 168.268 267.745 168.167 267.922C168.065 268.1 168.037 268.31 168.086 268.508C168.136 268.707 168.26 268.878 168.433 268.988C168.606 269.097 168.814 269.135 169.015 269.094C171.563 268.494 173.936 267.307 175.945 265.628C184.898 258.12 172.095 250.901 183.069 243.49C183.647 243.009 183.36 242.249 182.588 242.431Z" fill="#191919" />
                    <path d="M174.213 185.831C175.452 186.905 177.013 183.521 175.37 182.655C173.924 181.885 173.338 185.071 174.213 185.831Z" fill="#191919" />
                    <path d="M193.657 238.965C196.137 241.303 195.967 244.74 196.063 247.918C196.063 248.688 197.218 248.591 197.411 247.918C197.892 244.453 197.507 240.312 194.812 237.713C191.924 235.018 187.497 234.633 183.839 235.211C183.756 235.215 183.674 235.236 183.6 235.274C183.525 235.311 183.46 235.364 183.407 235.429C183.355 235.494 183.317 235.569 183.295 235.65C183.274 235.73 183.27 235.815 183.284 235.897C183.298 235.979 183.329 236.058 183.375 236.127C183.421 236.197 183.482 236.255 183.552 236.3C183.623 236.344 183.702 236.373 183.785 236.384C183.868 236.396 183.952 236.389 184.032 236.366C187.304 236.366 191.032 236.49 193.657 238.965Z" fill="#191919" />
                    <path d="M160.738 183.425C161.602 184.196 162.567 182.847 161.797 182.077C156.214 176.495 156.214 168.023 160.064 161.478C171.133 142.419 204.054 146.27 210.888 165.905C212.072 169.044 212.196 172.485 211.24 175.701C210.284 178.917 208.301 181.731 205.594 183.713C205.016 184.195 205.498 185.253 206.268 184.868C213.968 181.018 215.315 170.912 212.139 163.693C202.706 142.228 166.032 141.073 157.08 163.693C154.385 170.335 155.243 178.525 160.738 183.425Z" fill="#191919" />
                    <path d="M163.722 177.65C169.586 178.304 176.813 174.185 179.701 169.18C179.789 169.039 179.82 168.87 179.788 168.707C179.756 168.544 179.664 168.4 179.53 168.302C179.396 168.204 179.23 168.161 179.065 168.181C178.9 168.201 178.749 168.283 178.642 168.41C174.311 173.704 170.363 175.436 163.722 176.206C163.55 176.234 163.395 176.322 163.282 176.454C163.17 176.587 163.108 176.754 163.108 176.928C163.108 177.101 163.17 177.269 163.282 177.402C163.395 177.534 163.55 177.622 163.722 177.65Z" fill="#191919" />
                    <path d="M182.203 192.474C182.879 191.994 182.877 191.319 182.203 191.03C181.722 190.838 179.123 191.511 178.931 191.03C178.546 190.068 179.989 185.927 180.278 183.906C180.471 182.462 179.797 182.462 179.123 183.617C178.449 184.772 176.323 190.645 177.293 192.378C178.257 193.821 181.244 193.151 182.203 192.474Z" fill="#191919" />
                    <path d="M143.218 232.804C149.081 224.616 155.54 221.254 165.165 218.271C166.128 217.982 165.839 216.442 164.876 216.731C153.808 220.003 148.127 223.083 141.39 232.419C140.427 233.574 142.254 234.15 143.218 232.804Z" fill="#191919" />
                    <path d="M203 178.516C203.14 178.474 203.262 178.385 203.345 178.264C203.428 178.143 203.467 177.998 203.456 177.852C203.445 177.706 203.384 177.568 203.283 177.461C203.183 177.354 203.049 177.285 202.904 177.265C196.935 177.168 189.716 176.302 185.192 171.971C180.957 167.928 178.84 160.9 178.542 155.222C178.446 154.259 177.002 154.172 177.098 155.125C177.195 161.093 179.898 168.891 184.221 173.03C188.543 177.168 197.113 179.419 203 178.516Z" fill="#191919" />
                    <path d="M179.604 197.96C182.725 199.617 186.631 198.634 187.689 195.65C187.882 194.976 187.112 194.399 186.631 194.976C183.831 198.249 181.433 196.901 179.981 196.998C179.219 196.901 179.034 197.657 179.604 197.96Z" fill="#191919" />
                    <path d="M192.021 181.692C191.293 179.592 187.209 177.265 185.284 177.939C184.514 178.227 184.225 179.767 185.284 179.96C187.423 180.238 189.432 181.142 191.059 182.559C191.54 182.944 192.291 182.469 192.021 181.692Z" fill="#191919" />
                    <path d="M185.861 186.505C187.693 186.141 187.594 182.751 186.15 183.136C184.801 183.425 184.323 186.811 185.861 186.505Z" fill="#191919" />
                    <path d="M238.995 125.671C239.959 125.388 240.92 125.094 241.882 124.796C241.305 127.203 240.631 129.609 240.053 132.015C239.091 135.48 240.438 135.769 241.208 134.518C243.615 130.764 246.117 126.914 248.716 123.256C252.279 118.155 253.143 118.636 246.598 118.829C247.753 116.613 248.908 114.4 249.967 112.179C251.026 109.958 243.903 112.468 243.23 113.045C243.095 113.131 242.996 113.265 242.953 113.419C242.911 113.574 242.927 113.739 242.999 113.882C243.07 114.026 243.193 114.138 243.342 114.196C243.491 114.255 243.657 114.256 243.807 114.2C244.577 114.008 246.213 113.238 248.042 112.853L244.866 119.207C244.673 119.688 244.866 120.266 245.443 120.266C246.695 120.266 248.042 120.169 249.293 120.169C246.887 123.634 244.481 127.196 242.075 130.661L244.096 123.731C244.147 123.592 244.159 123.442 244.131 123.298C244.102 123.153 244.035 123.018 243.936 122.909C243.836 122.8 243.709 122.72 243.568 122.678C243.426 122.637 243.276 122.634 243.133 122.672C242.171 122.961 241.112 123.346 240.158 123.634C240.736 120.843 241.506 118.052 242.18 115.163C242.372 114.393 241.217 114.2 240.928 114.874C239.808 118.016 238.908 121.232 238.233 124.499C237.936 125.094 238.323 125.867 238.995 125.671Z" fill="#191919" />
                    <path d="M122.716 198.45C123.199 198.835 123.969 198.45 123.68 197.873C123.004 195.948 122.427 194.023 123.872 192.001C124.464 191.209 125.26 190.592 126.176 190.219C127.092 189.846 128.093 189.729 129.07 189.882C129.228 189.881 129.381 189.829 129.507 189.734C129.633 189.639 129.725 189.505 129.768 189.353C129.811 189.201 129.804 189.039 129.748 188.892C129.691 188.744 129.588 188.619 129.455 188.535C126.76 187.283 121.464 189.593 121.464 194.696C121.389 195.375 121.462 196.063 121.678 196.711C121.894 197.359 122.248 197.952 122.716 198.45Z" fill="#191919" />
                    <path d="M119.058 209.799C119.068 210.01 119.158 210.208 119.31 210.354C119.463 210.499 119.665 210.58 119.876 210.58C120.087 210.58 120.289 210.499 120.441 210.354C120.594 210.208 120.684 210.01 120.694 209.799C120.902 208.026 120.771 206.23 120.309 204.505C119.347 201.137 116.17 199.885 116.267 196.517C116.363 194.495 116.748 192.474 116.844 190.549C116.842 190.392 116.781 190.241 116.674 190.126C116.566 190.011 116.419 189.941 116.262 189.929C116.106 189.917 115.95 189.964 115.826 190.061C115.702 190.158 115.619 190.298 115.593 190.453C115.208 192.378 114.823 194.303 114.63 196.228C114.245 200.463 117.133 201.618 118.288 204.313C119.065 206.03 119.332 207.934 119.058 209.799Z" fill="#191919" />
                    <path d="M120.117 173.896L121.56 188.045C121.657 188.622 122.715 188.622 122.812 187.949C123.293 184.387 122.042 177.361 121.272 173.599C121.175 173.03 120.02 173.222 120.117 173.896Z" fill="#191919" />
                    <path d="M129.839 199.885C130.214 200.661 131.187 200.078 130.994 199.404C130.705 197.768 130.032 195.843 133.208 195.843C135.807 195.843 136.183 198.153 136.095 200.27C135.903 204.217 132.534 207.585 132.534 211.147C132.538 211.348 132.614 211.541 132.749 211.69C132.884 211.839 133.068 211.934 133.268 211.958C133.468 211.981 133.669 211.932 133.835 211.818C134.001 211.704 134.12 211.534 134.17 211.339C135.133 207.393 135.518 207.778 136.865 204.505C138.03 202.067 138.202 199.272 137.347 196.709C135.422 192.378 126.777 193.57 129.839 199.885Z" fill="#191919" />
                    <path d="M125.509 194.88C125.323 196.306 125.593 197.755 126.279 199.019C126.357 199.133 126.473 199.215 126.606 199.252C126.739 199.288 126.881 199.277 127.006 199.22C127.132 199.162 127.233 199.062 127.292 198.937C127.351 198.813 127.364 198.671 127.329 198.538C126.944 196.516 126.559 194.11 128.484 193.051C129.331 192.533 130.295 192.235 131.287 192.185C132.278 192.134 133.267 192.333 134.163 192.763C134.836 193.148 135.414 192.089 134.933 191.608C133.305 189.586 126.086 190.356 125.509 194.88Z" fill="#191919" />
                    <path d="M82 178.709C81.4225 178.805 80.845 178.901 80.3638 178.997C79.4975 176.302 76.8988 173.511 73.7225 174.666C70.3538 175.917 70.2558 179.575 70.45 181.211C67.65 181.5 64.7695 181.885 61.9783 182.174C61.8201 182.211 61.6804 182.303 61.5841 182.434C61.4878 182.565 61.4413 182.726 61.4529 182.888C61.4645 183.05 61.5334 183.203 61.6473 183.319C61.7612 183.435 61.9127 183.507 62.0745 183.521C64.962 183.329 67.8495 183.136 70.7388 183.04C72.4328 191.701 82.217 189.35 80.845 180.73C81.3263 180.634 81.8075 180.634 82.1925 180.537C83.2618 188.027 91.9698 188.258 91.1438 179.382C91.9138 179.382 93.55 178.997 92.78 177.842C92.395 177.265 91.5288 177.65 90.9513 177.746C89.4113 171.394 82.2888 172.164 82 178.709ZM71.99 181.981C71.7013 179.767 72.1825 177.457 73.6263 176.591C76.0325 175.051 78.4388 177.457 79.2088 180.537C80.8013 187.907 72.9245 189.468 71.99 181.981ZM87.6788 184.484C84.1438 185.709 81.769 177.678 84.8875 175.34C89.0298 172.097 91.7423 183.068 87.6753 184.484H87.6788Z" fill="#191919" />
                    <path d="M82.1925 189.586C79.9787 189.779 80.1712 190.741 81.615 190.934C82.5775 191.03 84.1175 190.838 84.59 189.971C85.36 188.624 84.3012 186.408 82.9537 185.157C81.9912 184.195 81.5099 185.061 81.9037 185.542C82.7752 186.89 84.8875 189.105 82.1925 189.586Z" fill="#191919" />
                    <path d="M89.2186 186.986C89.1276 186.024 88.1686 186.024 88.1686 186.986C88.3611 193.533 87.6874 204.024 78.3511 204.794C74.6919 205.083 70.7456 203.35 67.5694 201.522C66.9919 201.137 66.2219 202.099 66.8956 202.58C70.0759 204.87 73.8583 206.175 77.7736 206.334C77.9661 207.874 78.3511 209.51 78.5436 211.05C79.0249 214.034 80.1799 212.59 79.9874 211.628C79.7847 209.824 79.5279 208.026 79.2174 206.238C88.2561 204.794 89.9309 194.492 89.2186 186.986Z" fill="#191919" />
                    <path d="M76.0326 198.249C76.5653 198.503 77.1457 198.643 77.7358 198.657C78.326 198.672 78.9126 198.563 79.4575 198.336C80.0025 198.109 80.4934 197.769 80.8983 197.34C81.3033 196.91 81.6131 196.4 81.8076 195.843C82.4814 194.399 82.0963 194.11 80.8451 194.11C79.6283 194.202 78.4066 194.015 77.2724 193.565C76.1382 193.115 75.1213 192.413 74.2984 191.512C72.7129 190.189 72.3243 196.837 76.0326 198.249ZM80.6526 195.554C79.1126 198.529 74.4909 197.094 74.3964 193.629C76.222 194.924 78.4149 195.598 80.6526 195.554Z" fill="#191919" />
                    <path d="M75.7438 181.692C75.5426 182.268 75.8383 183.81 76.8026 183.617C77.5726 183.521 77.5726 182.462 77.2838 181.789C76.8988 180.826 76.1131 180.628 75.7438 181.692Z" fill="#191919" />
                    <path d="M86.4269 179.96C86.2204 180.63 86.5231 182.366 87.4769 181.981C87.9581 181.788 88.1507 181.307 88.0544 180.441C87.8707 179.375 86.7874 178.798 86.4269 179.96Z" fill="#191919" />
                    <path d="M69.6781 176.013C71.1367 174.333 73.1549 173.239 75.3586 172.933C75.5871 172.887 75.7914 172.76 75.9343 172.576C76.0773 172.392 76.1495 172.162 76.1379 171.93C76.1262 171.697 76.0315 171.476 75.8709 171.307C75.7103 171.138 75.4944 171.032 75.2624 171.008C74.1487 171.018 73.0497 171.263 72.0374 171.727C71.0252 172.192 70.1228 172.865 69.3894 173.703C67.2719 176.013 69.0849 176.671 69.6781 176.013Z" fill="#191919" />
                    <path d="M44.0738 174.762C43.9158 177.749 44.6102 180.72 46.0761 183.327C47.542 185.934 49.7189 188.071 52.353 189.489C52.8343 192.28 54.663 195.554 58.128 195.554C59.1631 200.698 59.8385 205.908 60.1493 211.147C60.1426 211.239 60.1551 211.332 60.1859 211.42C60.2167 211.507 60.2653 211.587 60.3285 211.655C60.3917 211.723 60.4683 211.777 60.5533 211.815C60.6384 211.852 60.7302 211.871 60.823 211.871C60.9158 211.871 61.0076 211.852 61.0927 211.815C61.1778 211.777 61.2544 211.723 61.3176 211.655C61.3808 211.587 61.4293 211.507 61.4602 211.42C61.491 211.332 61.5035 211.239 61.4968 211.147C61.3972 206.135 60.8496 201.142 59.8605 196.228C59.668 195.362 59.668 193.627 58.7055 193.724C56.7805 193.916 54.8555 192.28 54.278 189.2C53.6043 185.927 55.433 183.232 58.0318 184.475C58.4168 184.667 58.7055 184.379 58.898 184.186C62.6518 180.529 67.368 173.791 67.368 166.378C72.373 168.594 84.406 169.46 89.8923 167.629C89.5073 160.314 82.481 149.053 66.8868 150.593C49.4655 152.334 44.2453 165.617 44.0738 174.762Z" fill="#191919" />
                    <path d="M84.1178 171.778C85.3412 171.406 86.648 171.406 87.8715 171.778C88.834 172.067 88.7377 171.105 87.9677 170.431C87.3076 170.082 86.5846 169.868 85.8409 169.802C85.0972 169.736 84.3478 169.819 83.6365 170.046C82.1927 170.72 82.688 172.389 84.1178 171.778Z" fill="#191919" />
                    <path d="M47.3461 158.59C48.4322 156.201 50.3478 154.286 52.7379 153.2C50.7166 138.184 29.7324 136.451 23.2749 151.375C16.8174 166.299 29.8216 173.425 32.5166 178.904C35.1154 184.391 36.6554 192.862 34.9229 196.229C33.1904 199.502 35.3079 199.694 37.7141 195.179C39.6391 191.522 43.1041 180.829 40.3129 171.981C37.3361 162.825 44.7474 157.917 47.3461 158.59Z" fill="#191919" />
                    <path d="M146.587 235.114C134.363 234.929 114.149 234.441 103.08 235.403C94.4162 236.173 92.2987 238.868 90.2774 246.377C87.3899 257.35 82.7699 275.735 81.2299 286.227C69.5989 286.055 57.967 286.504 46.3839 287.574C42.0527 288.152 41.7639 291.328 43.1114 292.675C43.7852 293.349 44.6514 292.387 44.1614 291.713C44.0661 291.542 44.0054 291.355 43.9828 291.161C43.9602 290.967 43.9762 290.77 44.0299 290.582C44.0836 290.394 44.1738 290.219 44.2955 290.066C44.4172 289.913 44.5679 289.786 44.7389 289.692C47.1452 288.055 76.3124 287.767 80.4512 287.767C81.9912 287.767 82.4724 287.574 82.8574 285.938C85.7449 272.367 89.5074 256.772 92.9637 243.971C94.0137 239.831 97.1987 237.617 102.302 237.232C115.199 236.173 133.392 236.751 147.06 236.943C151.874 237.039 154.76 238.964 154.376 244.356C153.895 251.575 147.541 273.714 145.231 281.895C144.499 285.104 143.367 288.208 141.862 291.135C141.285 292.098 142.728 293.158 143.306 292.185C145.035 288.57 146.421 284.799 147.445 280.924C150.525 270.144 154.858 254.55 156.205 245.021C156.8 238.483 153.134 235.214 146.587 235.114Z" fill="#191919" />
                    <path d="M120.309 258.216C119.918 258.79 120.597 259.66 121.271 259.179C121.948 258.628 122.789 258.319 123.662 258.301C124.534 258.284 125.388 258.559 126.085 259.083C127.337 260.238 127.625 262.644 125.315 266.783C122.426 272.078 118.48 272.848 116.74 270.731C114.623 268.132 116.644 262.836 118.665 260.719C119.147 260.141 118.28 259.275 117.79 259.756C113.555 263.606 112.785 269.287 115.192 271.886C119.042 276.121 124.626 272.656 126.742 268.132C127.993 265.435 129.918 261.778 128.185 258.986C127.827 258.284 127.298 257.683 126.647 257.239C125.995 256.795 125.243 256.522 124.458 256.445C123.673 256.368 122.882 256.49 122.157 256.8C121.432 257.109 120.796 257.597 120.309 258.216Z" fill="#191919" />
                    <path d="M131.861 139.918C134.085 138.49 131.187 134.719 128.886 137.029C126.952 138.859 130.041 141.085 131.861 139.918Z" fill="#191919" />
                    <path d="M108.374 141.553C110.883 142.496 112.801 139.724 111.261 138.28C109.144 136.259 105.495 140.471 108.374 141.553Z" fill="#191919" />
                    <path d="M119.058 140.977C122.428 142.027 123.678 137.704 120.405 136.934C118.288 136.453 116.268 140.105 119.058 140.977Z" fill="#191919" />
                    <path d="M246.887 158.109C246.416 157.141 245.252 157.435 245.347 158.302C245.733 161.277 251.699 161.767 253.433 158.494C256.512 152.527 246.784 150.794 245.541 154.644C245.06 156.088 246.309 155.992 246.985 154.933C247.849 153.489 253.528 154.058 251.99 157.532C251.316 159.264 247.676 159.737 246.887 158.109Z" fill="#9810FA" />
                    <path d="M230.428 137.993C230.332 143.287 235.914 145.212 240.149 146.078C255.647 149.254 262.673 140.977 260.748 135.2C260.738 135.122 260.711 135.048 260.669 134.981C260.628 134.915 260.572 134.858 260.507 134.815C260.442 134.772 260.368 134.743 260.29 134.73C260.213 134.718 260.134 134.722 260.058 134.743C259.983 134.764 259.912 134.801 259.852 134.851C259.792 134.901 259.743 134.964 259.709 135.034C259.675 135.105 259.656 135.182 259.654 135.26C259.653 135.339 259.668 135.417 259.698 135.489C260.276 142.517 252.093 145.114 246.414 145.212C241.987 145.308 229.763 142.998 232.362 136.259C232.843 135.104 231.977 134.43 231.312 135.104C227.365 139.244 221.396 138.089 218.509 133.083C215.429 127.693 217.065 120.089 223.802 120.955C224.007 120.967 224.209 120.903 224.37 120.776C224.53 120.649 224.639 120.467 224.674 120.265C224.71 120.064 224.67 119.856 224.563 119.681C224.455 119.507 224.287 119.378 224.091 119.319C218.412 117.009 217.441 108.152 224.284 104.013C230.83 100.067 236.317 102.281 240.744 107.478C241.514 108.441 242.477 108.248 242.573 106.323C243.054 101.318 249.407 98.4309 253.932 99.5859C255.133 99.9751 256.244 100.599 257.201 101.422C258.157 102.245 258.941 103.25 259.505 104.379C260.07 105.508 260.404 106.738 260.488 107.997C260.572 109.256 260.405 110.519 259.996 111.713C259.707 112.588 260.573 112.87 261.247 112.678C267.215 111.136 273.567 117.683 274.145 123.361C275.107 132.601 266.83 132.89 261.825 131.831C260.862 131.639 261.055 132.706 261.825 132.986C269.043 135.393 276.551 132.024 275.685 123.361C275.107 117.009 268.466 110.077 261.728 111.136C262.197 109.031 262.057 106.836 261.324 104.807C260.591 102.779 259.296 101.001 257.59 99.6821C251.428 95.1584 242.284 99.1046 241.033 105.361C239.086 102.945 236.356 101.286 233.314 100.671C230.273 100.056 227.113 100.523 224.38 101.992C217.835 105.361 214.755 114.121 220.917 119.126C216.391 120.185 214.37 124.709 214.947 129.329C216.374 137.608 224.747 141.939 230.428 137.993Z" fill="#9810FA" />
                    <path d="M334.775 295.18C252.536 294.335 116.871 292.73 13.4754 297.394C12.8016 297.394 12.8979 299.511 13.5716 299.511C112.994 296.996 203.872 295.064 334.872 297.971C335.733 297.971 335.635 295.189 334.775 295.18Z" fill="#9810FA" />
                    <path d="M111.743 233.1C116.556 233.1 125.99 233.1 132.439 233.004C133.848 226.431 134.842 219.776 135.414 213.078C130.312 213.752 120.686 213.271 116.451 211.635C115.453 218.903 113.879 226.081 111.743 233.1Z" fill="#9810FA" />
                    <path d="M40.4248 291.9C40.1501 290.712 40.286 289.466 40.8104 288.364C41.3347 287.263 42.2166 286.372 43.3123 285.836C45.911 284.585 72.5758 284.393 78.8373 284.104C79.126 282.564 79.9923 278.425 81.2435 273.035C65.4869 269.873 49.4729 268.165 33.4038 267.934C31.96 267.934 32.5375 266.585 33.4038 266.585C35.7138 266.488 38.0238 266.488 40.3338 266.488C42.1138 259.449 44.7658 252.659 48.228 246.276C48.613 245.602 49.4793 245.987 49.1905 246.661C46.2081 253.069 43.8232 259.738 42.0663 266.585C55.3808 267.093 68.6379 268.606 81.7248 271.11C83.8423 261.965 86.7298 250.222 89.4248 242.33C91.7348 235.302 95.3923 233.569 100.303 233.28C103.509 233.142 106.719 233.109 109.928 233.184C110.313 232.029 110.698 230.874 111.083 229.43C106.367 221.73 96.2585 214.895 82.4948 213.836C77.7785 219.42 64.5905 218.843 57.3718 212.007C53.1368 212.489 39.1718 215.569 30.805 225.003C19.0608 238.478 3.08325 269.378 10.7833 285.644C14.6193 293.928 36.0848 292.387 40.4248 291.9Z" fill="#9810FA" />
                    <path d="M173.058 66.474C173.353 64.0677 171.71 51.8422 170.459 50.6872C170.385 50.61 170.294 50.5523 170.192 50.5193C170.091 50.4863 169.983 50.479 169.878 50.4981C169.773 50.5171 169.674 50.562 169.591 50.6286C169.507 50.6953 169.442 50.7815 169.4 50.8797C169.015 51.746 171.325 64.9322 171.614 66.474C171.651 66.6377 171.743 66.7839 171.874 66.8886C172.005 66.9933 172.168 67.0503 172.336 67.0503C172.504 67.0503 172.666 66.9933 172.798 66.8886C172.929 66.7839 173.02 66.6377 173.058 66.474Z" fill="#9810FA" />
                    <path d="M186.631 115.563C186.702 115.418 186.734 115.257 186.725 115.095C186.715 114.933 186.663 114.777 186.575 114.641C186.487 114.506 186.365 114.395 186.222 114.321C186.078 114.246 185.918 114.21 185.756 114.216C184.12 114.216 181.906 117.394 173.819 116.237C172.944 116.141 172.375 117.394 173.242 117.779C178.353 119.7 185.85 117.39 186.631 115.563Z" fill="#9810FA" />
                    <path d="M196.448 98.6234C199.918 100.639 203.558 102.346 207.326 103.725C207.492 103.75 207.661 103.723 207.81 103.646C207.959 103.569 208.08 103.447 208.155 103.297C208.23 103.147 208.255 102.977 208.227 102.812C208.2 102.646 208.12 102.494 208 102.377C204.544 100.361 200.901 98.6851 197.122 97.3721C196.956 97.2828 196.762 97.263 196.581 97.3171C196.401 97.3713 196.249 97.4949 196.16 97.6609C196.07 97.8268 196.051 98.0214 196.105 98.2019C196.159 98.3824 196.282 98.534 196.448 98.6234Z" fill="#9810FA" />
                    <path d="M178.065 119.896C177.867 119.854 177.661 119.887 177.487 119.989C177.313 120.091 177.183 120.254 177.123 120.447C177.063 120.64 177.076 120.848 177.162 121.031C177.247 121.214 177.397 121.358 177.583 121.436C179.99 122.784 184.233 121.244 182.588 119.8C181.825 119.126 180.66 120.4 178.065 119.896Z" fill="#9810FA" />
                    <path d="M194.331 76.0028C195.768 75.4078 203.477 66.3778 204.728 64.6453C205.209 63.9715 204.15 63.2978 203.573 63.779C200.385 66.8553 197.364 70.1004 194.524 73.5003C192.695 75.5215 193.654 76.2828 194.331 76.0028Z" fill="#9810FA" />
                    <path d="M170.074 106.419C170.152 106.592 170.288 106.731 170.458 106.813C170.628 106.895 170.821 106.915 171.004 106.869C171.188 106.824 171.349 106.715 171.46 106.562C171.572 106.41 171.626 106.223 171.614 106.034C170.94 101.799 167.09 99.3844 164.964 95.9282C160.536 88.7077 166.408 80.4302 173.915 78.5052C180.077 76.8689 187.007 79.0827 188.643 86.4939C190.087 92.8482 187.199 97.4682 185.178 103.243C184.793 104.494 186.053 104.879 186.622 103.724C189.221 98.8244 191.723 92.9444 190.953 87.3602C189.606 78.4089 182.098 74.4627 173.723 76.4839C166.408 78.3127 160.151 84.6652 161.403 92.6557C162.47 99.2007 168.207 101.008 170.074 106.419Z" fill="#9810FA" />
                    <path d="M172.201 113.735C174.415 114.522 176.781 114.793 179.117 114.526C181.452 114.259 183.696 113.462 185.676 112.195C186.542 111.521 186.157 110.077 184.906 110.558C179.804 112.387 177.783 112.868 172.776 112.195C171.903 112.098 171.326 113.358 172.201 113.735Z" fill="#9810FA" />
                    <path d="M145.721 106.708C145.051 107.583 145.721 108.73 147.646 107.382C150.32 105.718 152.862 103.852 155.251 101.8C155.379 101.688 155.462 101.533 155.485 101.365C155.507 101.196 155.467 101.026 155.373 100.884C155.279 100.743 155.137 100.641 154.972 100.596C154.808 100.552 154.634 100.569 154.481 100.645C151.388 102.403 148.456 104.432 145.721 106.708Z" fill="#9810FA" />
                    <path d="M152.95 81.0077C153.109 81.0491 153.278 81.0334 153.426 80.9632C153.575 80.893 153.694 80.7728 153.763 80.6237C153.831 80.4745 153.846 80.306 153.803 80.1474C153.76 79.9889 153.662 79.8505 153.528 79.7564C149.678 77.26 145.657 75.0378 141.495 73.1064C141.322 73.0522 141.135 73.0613 140.968 73.1322C140.801 73.2031 140.665 73.3311 140.584 73.4933C140.503 73.6554 140.482 73.8412 140.526 74.0172C140.569 74.1932 140.674 74.3481 140.821 74.4539C144.704 76.9225 148.757 79.1126 152.95 81.0077Z" fill="#9810FA" />
                    <path d="M172.2 110.075C175.396 111.078 183.463 109.498 185.196 108.15C186.351 107.188 185.292 105.84 183.848 106.418C180.256 107.782 176.424 108.404 172.585 108.247C170.844 108.15 170.564 109.568 172.2 110.075Z" fill="#9810FA" />
                    <path d="M179.989 104.494C179.866 99.422 180.318 94.352 181.337 89.3814C181.361 89.221 181.324 89.0575 181.232 88.9234C181.141 88.7893 181.003 88.6946 180.845 88.6581C180.687 88.6216 180.521 88.6461 180.38 88.7267C180.239 88.8072 180.134 88.9379 180.085 89.0927C178.819 94.1215 178.364 99.3203 178.738 104.493C178.733 104.578 178.746 104.663 178.775 104.742C178.805 104.822 178.85 104.895 178.908 104.957C178.967 105.019 179.037 105.068 179.115 105.102C179.193 105.136 179.278 105.153 179.363 105.153C179.448 105.153 179.532 105.136 179.61 105.103C179.688 105.069 179.759 105.02 179.817 104.958C179.876 104.897 179.922 104.824 179.951 104.744C179.981 104.664 179.994 104.579 179.989 104.494Z" fill="#9810FA" />
                    <path d="M177.679 88.5169C175.135 89.1963 172.514 89.5491 169.881 89.5669C169.736 89.568 169.593 89.6081 169.469 89.6831C169.344 89.7581 169.242 89.8651 169.174 89.993C169.105 90.121 169.071 90.2651 169.077 90.4102C169.083 90.5554 169.128 90.6963 169.207 90.8182C171.18 95.279 172.916 99.8412 174.406 104.486C174.695 105.361 175.561 105.159 175.369 104.293C174.469 99.7493 173.048 95.3245 171.132 91.1069C173.527 90.9939 175.893 90.5402 178.16 89.7594C178.307 89.6833 178.42 89.5559 178.478 89.4014C178.537 89.247 178.536 89.0765 178.476 88.9226C178.417 88.7687 178.302 88.6422 178.155 88.5673C178.008 88.4925 177.838 88.4745 177.679 88.5169Z" fill="#9810FA" />
                    <path d="M107.893 155.607C108.131 160.211 107.407 164.815 105.766 169.123C104.125 173.432 101.605 177.352 98.3646 180.632C96.5359 182.461 98.0759 182.846 99.9046 182.172C108.567 178.803 116.355 168.889 118.577 160.033C118.962 158.493 117.615 158.589 117.422 159.551C116.241 163.906 114.179 167.971 111.365 171.498C108.551 175.024 105.043 177.936 101.06 180.054C106.952 173.423 110.028 164.756 109.635 155.894C109.538 154.45 109.346 154.354 107.613 154.065C92.7891 151.755 87.3029 130.482 110.693 121.916C131.581 114.31 147.657 128.461 143.998 142.708C141.303 153.391 129.945 155.028 120.607 155.028C119.356 155.028 119.452 156.568 120.703 156.568C130.328 156.76 141.303 155.413 144.864 145.788C152.564 125.285 131.004 114.113 112.811 119.221C83.3479 127.693 90.7591 154.933 107.893 155.607Z" fill="#9810FA" />
                </svg>

            </div>
        </div>
    </section>
    <!-- HOW IT WORKS -->
    <section class="relative">
        <div class="mx-auto max-w-screen-xl py-8 lg:py-20 flex flex-col gap-8 items-center justify-center ">
            <div class="flex w-full flex-col justify-center">
                <h1 class="mb-6 text-4xl text-center font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">How does it <span class="text-purple-600 underline">work</span> </h1>
                <p class="text-base text-center font-normal text-body md:text-xl">Create your quiz in 3 easy steps</p>
            </div>

            <div class="w-full flex items-center justify-between flex-wrap">

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base shadow-xs">
                    <img class="rounded-base" src="{{asset('images/step1.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Upload file or enter a prompt</h5>
                    <p class="mb-6 text-body">You can start creating your quiz by either uploading files like PDF, DOCS, PPT. or you can enter your own prompt to study.</p>
                </div>

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base shadow-xs">
                    <img class="rounded-base" src="{{asset('images/step1.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Select quiz preferences</h5>
                    <p class="mb-6 text-body">Select your quiz preferences, like the amount of questions, language, and the type of quiz you want.</p>
                </div>

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base shadow-xs">
                    <img class="rounded-base" src="{{asset('images/step1.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Start learning</h5>
                    <p class="mb-6 text-body">After clicking generate, wait for a few seconds and then your can now start learning with ease.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- WHY USE -->
    <section class="relative">
        <div class="mx-auto max-w-screen-xl py-8 lg:py-20 flex flex-col gap-8 items-center justify-center ">
            <div class="flex w-full flex-col px-[15px] lg:px-0 justify-center">
                <h1 class="mb-6 text-4xl text-center font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">Why use <span class="text-purple-600 underline">Studee</span> for your studies</h1>
                <p class="text-base text-center font-normal text-body md:text-xl">Create your quiz in 3 easy steps</p>
            </div>

            <div class="w-full flex items-center gap-12 justify-between flex-wrap">

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base">
                    <img class="rounded-base max-w-[123px]" src="{{asset('images/file-and-folder.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Start From Any Format</h5>
                    <p class="mb-6 text-body">Our quiz maker supports multiple file format, including DOCX, DOCS, PDF, PPT, JPG, PNG. making your quiz journey versatile and easy.</p>
                </div>

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base">
                    <img class="rounded-base max-w-[123px]" src="{{asset('images/books.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Interactive Learning</h5>
                    <p class="mb-6 text-body">Engage with your lessons through interactive quizzes that encourage active participation and help improve understanding and knowledge retention.</p>
                </div>

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base">
                    <img class="rounded-base max-w-[123px]" src="{{asset('images/creativity.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Effortless Test Creation</h5>
                    <p class="mb-6 text-body">Create quizzes with ease by uploading files or entering prompts, allowing Studee to quickly turn your content into well-structured tests.</p>
                </div>

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base">
                    <img class="rounded-base max-w-[123px]" src="{{asset('images/responsive.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Create quizzes on any device</h5>
                    <p class="mb-6 text-body">Create and access quizzes anytime using any device. be it your computer or your phone, studee makes it easy to study, practice, and learn wherever you are.</p>
                </div>

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base">
                    <img class="rounded-base max-w-[123px]" src="{{asset('images/responsive.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Create quizzes on any device</h5>
                    <p class="mb-6 text-body">Create and access quizzes anytime using any device. be it your computer or your phone, studee makes it easy to study, practice, and learn wherever you are.</p>
                </div>

                <div class="bg-neutral-primary-soft block max-w-sm p-6 rounded-base">
                    <img class="rounded-base max-w-[123px]" src="{{asset('images/location.png')}}" alt="" />
                    <h5 class="mt-6x text-purple-600 mb-2 text-2xl font-semibold tracking-tight text-heading">Create Anytime Anywhere</h5>
                    <p class="mb-6 text-body">Create quizzes wherever you are and whenever you need, making learning flexible, accessible, and easy to fit into your daily routine.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="relative">
        <div class="mx-auto max-w-screen-xl px-[15px] py-8 lg:py-20 flex flex-col lg:flex-row md:flex-row gap-20 items-start justify-between ">
            <div class="flex max-w-[640px] items-start flex-col justify-center w-full">
                <h1 class="mb-6 text-4xl font-bold tracking-tighter text-heading md:text-5xl lg:text-6xl">Got any questions? We got you</h1>
                <p class="mb-8 text-base font-normal text-body md:text-xl">These are some of the most frequently asked questions about Studee. You can browse through them to learn more about how Studee works, its features, and how it can help improve your learning experience.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
                    <button type="button" class="inline-flex items-center justify-center text-white bg-purple-600 hover:bg-purple-700 box-border border border-transparent focus:ring-4 focus:ring-purple-200 shadow-xs font-medium rounded-base text-base px-5 py-3 focus:outline-none">
                        Contact Us
                        <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </button>
                    <button type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-base px-5 py-3 focus:outline-none">FAQ</button>
                </div>
            </div>

            <div class="w-full" id="accordion-flush" data-accordion="collapse" data-active-classes="bg-neutral-primary text-heading" data-inactive-classes="text-body">
                <h2 id="accordion-flush-heading-1">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-start text-body border-b border-default gap-3" data-accordion-target="#accordion-flush-body-1" aria-expanded="true" aria-controls="accordion-flush-body-1">
                        <span>What is Flowbite?</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-default text-body">
                        <p class="mb-2">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                        <p>Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-fg-brand hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-2">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-start text-body border-b border-default gap-3" data-accordion-target="#accordion-flush-body-2" aria-expanded="false" aria-controls="accordion-flush-body-2">
                        <span>Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-default text-body">
                        <p class="mb-2">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p>Check out the <a href="https://flowbite.com/figma/" class="text-fg-brand hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-3">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-start text-body border-b border-default gap-3" data-accordion-target="#accordion-flush-body-3" aria-expanded="false" aria-controls="accordion-flush-body-3">
                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 text-body border-b border-default">
                        <p class="mb-2">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                        <p class="mb-2">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                        <p class="mb-2">Learn more about these technologies:</p>
                        <ul class="ps-5 list-disc">
                            <li><a href="https://flowbite.com/pro/" class="text-fg-brand hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow" class="text-fg-brand hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-4">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-start text-body border-b border-default gap-3" data-accordion-target="#accordion-flush-body-4" aria-expanded="false" aria-controls="accordion-flush-body-3">
                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-4" class="hidden" aria-labelledby="accordion-flush-heading-4">
                    <div class="py-5 text-body border-b border-default">
                        <p class="mb-2">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                        <p class="mb-2">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                        <p class="mb-2">Learn more about these technologies:</p>
                        <ul class="ps-5 list-disc">
                            <li><a href="https://flowbite.com/pro/" class="text-fg-brand hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow" class="text-fg-brand hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-5">
                    <button type="button" class="flex items-center justify-between w-full py-5 font-medium text-start text-body border-b border-default gap-3" data-accordion-target="#accordion-flush-body-5" aria-expanded="false" aria-controls="accordion-flush-body-3">
                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m5 15 7-7 7 7" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-5" class="hidden" aria-labelledby="accordion-flush-heading-5">
                    <div class="py-5 text-body border-b border-default">
                        <p class="mb-2">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                        <p class="mb-2">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                        <p class="mb-2">Learn more about these technologies:</p>
                        <ul class="ps-5 list-disc">
                            <li><a href="https://flowbite.com/pro/" class="text-fg-brand hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow" class="text-fg-brand hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CALL TO ACTION -->
    <section class="bg-neutral-primary px-[15px] py-8 lg:py-20">
        <div class="py-8 max-w-screen-xl rounded-3xl bg-[#2E1065] px-4 mx-auto max-w-screen-2xl text-center lg:py-20">
            <h1 class="mb-6 text-4xl font-bold tracking-tighter text-white text-heading md:text-5xl lg:text-6xl">Make Your Learning Effortless</h1>
            <p class="mb-8 text-gray-400 font-normal text-body md:text-xl">Upload your notes and files or use a prompt to generate quizzes instantly, and study smarter with tools designed to make learning easier.</p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
                <button type="button" class="inline-flex items-center justify-center text-white bg-purple-600 hover:bg-purple-700 box-border border border-transparent focus:ring-4 focus:ring-purple-200 shadow-xs font-medium rounded-base text-base px-5 py-3 focus:outline-none">
                    Getting started
                    <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </button>
                <button type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-base px-5 py-3 focus:outline-none">Learn more</button>
            </div>
        </div>
    </section>
    <!-- FOOTER -->
    <footer class="bg-neutral-primary-soft">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-10 lg:py-20">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg width="98" height="21" viewBox="0 0 98 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.29605 13.152C4.80805 13.648 5.37605 14.024 6.00005 14.28C6.62405 14.536 7.27205 14.72 7.94405 14.832C8.61605 14.928 9.30405 14.984 10.0081 15C10.7121 15 11.3921 15 12.0481 15C12.2881 15 12.6081 14.992 13.0081 14.976C13.4241 14.96 13.8641 14.928 14.3281 14.88C14.8081 14.816 15.2881 14.736 15.7681 14.64C16.2481 14.528 16.6801 14.384 17.0641 14.208C17.4641 14.032 17.7841 13.824 18.0241 13.584C18.2801 13.328 18.4081 13.024 18.4081 12.672C18.4081 12.32 18.2721 12.016 18.0001 11.76C17.7441 11.488 17.4081 11.256 16.9921 11.064C16.5761 10.872 16.1041 10.712 15.5761 10.584C15.0641 10.44 14.5521 10.336 14.0401 10.272C13.5281 10.192 13.0481 10.136 12.6001 10.104C12.1681 10.072 11.8161 10.056 11.5441 10.056H11.5681C11.1841 10.04 10.7121 10 10.1521 9.93601C9.59205 9.87201 9.00805 9.77601 8.40005 9.64801C7.79205 9.52001 7.18405 9.36001 6.57605 9.16801C5.96805 8.96001 5.42405 8.71201 4.94405 8.42401C4.46405 8.13601 4.07205 7.80001 3.76805 7.41601C3.46405 7.01601 3.31205 6.56001 3.31205 6.04801C3.31205 5.48801 3.45605 5.00801 3.74405 4.60801C4.04805 4.20801 4.43205 3.87201 4.89605 3.60001C5.37605 3.31201 5.91205 3.08801 6.50405 2.92801C7.09605 2.75201 7.69605 2.61601 8.30405 2.52001C8.91205 2.42401 9.48805 2.36001 10.0321 2.32801C10.5921 2.29601 11.0641 2.28001 11.4481 2.28001C12.0721 2.28001 12.7041 2.31201 13.3441 2.37601C14.0001 2.42401 14.6401 2.52001 15.2641 2.66401C15.8881 2.80801 16.4961 3.00801 17.0881 3.26401C17.6801 3.50401 18.2241 3.81601 18.7201 4.20001L17.4481 5.11201C16.9841 4.79201 16.4961 4.54401 15.9841 4.36801C15.4721 4.17601 14.9441 4.03201 14.4001 3.93601C13.8561 3.84001 13.3041 3.78401 12.7441 3.76801C12.1841 3.73601 11.6401 3.72001 11.1121 3.72001C10.7441 3.72001 10.2401 3.74401 9.60005 3.79201C8.97605 3.84001 8.35205 3.94401 7.72805 4.10401C7.12005 4.24801 6.59205 4.48001 6.14405 4.80001C5.69605 5.10401 5.47205 5.52001 5.47205 6.04801C5.47205 6.56001 5.68805 6.97601 6.12005 7.29601C6.55205 7.60001 7.12005 7.84801 7.82405 8.04001C8.52805 8.21601 9.32805 8.36001 10.2241 8.47201C11.1361 8.56801 12.0641 8.67201 13.0081 8.78401C13.9521 8.89601 14.8721 9.03201 15.7681 9.19201C16.6801 9.33601 17.4881 9.55201 18.1921 9.84001C18.8961 10.112 19.4641 10.48 19.8961 10.944C20.3281 11.392 20.5441 11.968 20.5441 12.672C20.5441 13.168 20.3921 13.608 20.0881 13.992C19.8001 14.376 19.4161 14.712 18.9361 15C18.4561 15.272 17.9121 15.504 17.3041 15.696C16.7121 15.872 16.1121 16.016 15.5041 16.128C14.9121 16.24 14.3441 16.32 13.8001 16.368C13.2561 16.416 12.8081 16.44 12.4561 16.44H10.6561C10.0001 16.44 9.31205 16.416 8.59205 16.368C7.87205 16.32 7.16805 16.216 6.48005 16.056C5.79205 15.88 5.13605 15.64 4.51205 15.336C3.88805 15.032 3.33605 14.616 2.85605 14.088L4.29605 13.152ZM0.864053 13.584C1.50405 14.624 2.26405 15.432 3.14405 16.008C4.02405 16.568 4.97605 16.984 6.00005 17.256C7.02405 17.512 8.08005 17.664 9.16805 17.712C10.2721 17.76 11.3681 17.784 12.4561 17.784C12.9361 17.784 13.5041 17.752 14.1601 17.688C14.8161 17.608 15.4961 17.488 16.2001 17.328C16.9041 17.168 17.5921 16.96 18.2641 16.704C18.9521 16.432 19.5601 16.112 20.0881 15.744C20.6321 15.36 21.0641 14.92 21.3841 14.424C21.7201 13.912 21.8881 13.328 21.8881 12.672C21.8881 11.888 21.7121 11.224 21.3601 10.68C21.0241 10.12 20.5761 9.65601 20.0161 9.28801C19.4721 8.90401 18.8401 8.60001 18.1201 8.37601C17.4161 8.13601 16.6881 7.95201 15.9361 7.82401C15.1841 7.69601 14.4481 7.60001 13.7281 7.53601C13.0081 7.47201 12.3681 7.41601 11.8081 7.36801C11.6161 7.35201 11.2481 7.32001 10.7041 7.27201C10.1601 7.20801 9.60005 7.12801 9.02405 7.03201C8.44805 6.92001 7.93605 6.78401 7.48805 6.62401C7.04005 6.46401 6.81605 6.27201 6.81605 6.04801C6.81605 5.79201 7.02405 5.60001 7.44005 5.47201C7.85605 5.34401 8.32805 5.24801 8.85605 5.18401C9.40005 5.12001 9.92005 5.08801 10.4161 5.08801C10.9281 5.07201 11.2721 5.06401 11.4481 5.06401C11.9601 5.06401 12.4801 5.08801 13.0081 5.13601C13.5361 5.16801 14.0481 5.24801 14.5441 5.37601C15.0561 5.50401 15.5361 5.68801 15.9841 5.92801C16.4481 6.16801 16.8721 6.48001 17.2561 6.86401L20.7601 4.51201C20.1521 3.68001 19.4641 3.03201 18.6961 2.56801C17.9281 2.08801 17.1121 1.72801 16.2481 1.48801C15.3841 1.24801 14.4801 1.09601 13.5361 1.03201C12.6081 0.968009 11.6721 0.936009 10.7281 0.936009C10.2321 0.936009 9.66405 0.976009 9.02405 1.05601C8.40005 1.12001 7.76005 1.23201 7.10405 1.39201C6.46405 1.55201 5.83205 1.76001 5.20805 2.01601C4.60005 2.27201 4.05605 2.59201 3.57605 2.97601C3.09605 3.36001 2.71205 3.80801 2.42405 4.32001C2.13605 4.81601 1.99205 5.39201 1.99205 6.04801C1.99205 6.80001 2.17605 7.44801 2.54405 7.99201C2.91205 8.53601 3.40005 9.00001 4.00805 9.38401C4.61605 9.76801 5.30405 10.08 6.07205 10.32C6.84005 10.56 7.61605 10.76 8.40005 10.92C9.20005 11.064 9.96805 11.184 10.7041 11.28C11.4561 11.36 12.1121 11.432 12.6721 11.496C12.8321 11.512 13.1441 11.544 13.6081 11.592C14.0881 11.64 14.5841 11.712 15.0961 11.808C15.6081 11.888 16.0641 12 16.4641 12.144C16.8641 12.288 17.0641 12.464 17.0641 12.672C17.0641 12.848 16.9361 13 16.6801 13.128C16.4241 13.24 16.0961 13.336 15.6961 13.416C15.2961 13.48 14.8561 13.528 14.3761 13.56C13.8961 13.592 13.4241 13.616 12.9601 13.632C12.5121 13.648 12.1041 13.656 11.7361 13.656C11.3841 13.656 11.1361 13.656 10.9921 13.656C10.3841 13.656 9.78405 13.632 9.19205 13.584C8.60005 13.52 8.02405 13.408 7.46405 13.248C6.90405 13.072 6.37605 12.832 5.88005 12.528C5.38405 12.224 4.93605 11.816 4.53605 11.304L0.864053 13.584ZM4.34405 10.704L3.19205 9.52801C2.63205 9.11201 2.19205 8.62401 1.87205 8.06401C1.55205 7.48801 1.39205 6.81601 1.39205 6.04801C1.39205 5.31201 1.54405 4.66401 1.84805 4.10401C2.16805 3.52801 2.58405 3.03201 3.09605 2.61601C3.60805 2.20001 4.19205 1.84801 4.84805 1.56001C5.50405 1.25601 6.17605 1.01601 6.86405 0.840009C7.55205 0.664009 8.23205 0.536009 8.90405 0.456009C9.57605 0.376009 10.1841 0.33601 10.7281 0.33601C11.6721 0.33601 12.6241 0.368009 13.5841 0.432008C14.5441 0.480009 15.4801 0.624009 16.3921 0.864008C17.3201 1.10401 18.2081 1.47201 19.0561 1.96801C19.9041 2.46401 20.6961 3.16001 21.4321 4.05601C21.9281 4.55201 22.3201 4.96801 22.6081 5.30401C22.8961 5.62401 23.1201 5.89601 23.2801 6.12001C23.4561 6.34401 23.5841 6.52801 23.6641 6.67201C23.7441 6.80001 23.8241 6.92001 23.9041 7.03201L20.8321 9.09601C20.9121 9.17601 21.0001 9.24801 21.0961 9.31201C21.2081 9.36001 21.3601 9.46401 21.5521 9.62401C21.7441 9.78401 21.9921 10.016 22.2961 10.32C22.6161 10.608 23.0401 11.024 23.5681 11.568C23.9521 11.968 24.2561 12.48 24.4801 13.104C24.7041 13.728 24.8161 14.384 24.8161 15.072C24.8161 15.792 24.6401 16.432 24.2881 16.992C23.9361 17.552 23.4801 18.04 22.9201 18.456C22.3601 18.872 21.7201 19.224 21.0001 19.512C20.2801 19.8 19.5521 20.032 18.8161 20.208C18.0801 20.384 17.3601 20.512 16.6561 20.592C15.9681 20.672 15.3681 20.712 14.8561 20.712C13.9121 20.712 12.9521 20.712 11.9761 20.712C11.0001 20.712 10.0401 20.632 9.09605 20.472C8.16805 20.312 7.26405 20.048 6.38405 19.68C5.50405 19.312 4.69605 18.752 3.96005 18C3.33605 17.424 2.80805 16.92 2.37605 16.488C1.96005 16.04 1.60005 15.64 1.29605 15.288C1.00805 14.92 0.760053 14.584 0.552053 14.28C0.360053 13.976 0.176053 13.68 5.27389e-05 13.392L4.34405 10.704Z" fill="#9810FA" />
                            <path d="M32.9174 7.22401V13.656C32.9174 14.104 33.0214 14.432 33.2294 14.64C33.4534 14.832 33.8214 14.928 34.3334 14.928H35.8934V17.76H33.7814C30.9494 17.76 29.5334 16.384 29.5334 13.632V7.22401H27.9494V4.46401H29.5334V1.17601H32.9174V4.46401H35.8934V7.22401H32.9174ZM50.8621 4.46401V17.76H47.4781V16.08C47.0461 16.656 46.4781 17.112 45.7741 17.448C45.0861 17.768 44.3341 17.928 43.5181 17.928C42.4781 17.928 41.5581 17.712 40.7581 17.28C39.9581 16.832 39.3261 16.184 38.8621 15.336C38.4141 14.472 38.1901 13.448 38.1901 12.264V4.46401H41.5501V11.784C41.5501 12.84 41.8141 13.656 42.3421 14.232C42.8701 14.792 43.5901 15.072 44.5021 15.072C45.4301 15.072 46.1581 14.792 46.6861 14.232C47.2141 13.656 47.4781 12.84 47.4781 11.784V4.46401H50.8621ZM53.3132 11.064C53.3132 9.72001 53.5772 8.52801 54.1052 7.48801C54.6492 6.44801 55.3852 5.64801 56.3132 5.08801C57.2412 4.52801 58.2732 4.24801 59.4092 4.24801C60.2732 4.24801 61.0972 4.44001 61.8812 4.82401C62.6652 5.19201 63.2892 5.68801 63.7532 6.31201V9.53674e-06H67.1612V17.76H63.7532V15.792C63.3372 16.448 62.7532 16.976 62.0012 17.376C61.2492 17.776 60.3772 17.976 59.3852 17.976C58.2652 17.976 57.2412 17.688 56.3132 17.112C55.3852 16.536 54.6492 15.728 54.1052 14.688C53.5772 13.632 53.3132 12.424 53.3132 11.064ZM63.7772 11.112C63.7772 10.296 63.6172 9.60001 63.2972 9.02401C62.9772 8.43201 62.5452 7.98401 62.0012 7.68001C61.4572 7.36001 60.8732 7.20001 60.2492 7.20001C59.6252 7.20001 59.0492 7.35201 58.5212 7.65601C57.9932 7.96001 57.5612 8.40801 57.2252 9.00001C56.9052 9.57601 56.7452 10.264 56.7452 11.064C56.7452 11.864 56.9052 12.568 57.2252 13.176C57.5612 13.768 57.9932 14.224 58.5212 14.544C59.0652 14.864 59.6412 15.024 60.2492 15.024C60.8732 15.024 61.4572 14.872 62.0012 14.568C62.5452 14.248 62.9772 13.8 63.2972 13.224C63.6172 12.632 63.7772 11.928 63.7772 11.112ZM82.8029 10.824C82.8029 11.304 82.7709 11.736 82.7069 12.12H72.9869C73.0669 13.08 73.4029 13.832 73.9949 14.376C74.5869 14.92 75.3149 15.192 76.1789 15.192C77.4269 15.192 78.3149 14.656 78.8429 13.584H82.4669C82.0829 14.864 81.3469 15.92 80.2589 16.752C79.1709 17.568 77.8349 17.976 76.2509 17.976C74.9709 17.976 73.8189 17.696 72.7949 17.136C71.7869 16.56 70.9949 15.752 70.4189 14.712C69.8589 13.672 69.5789 12.472 69.5789 11.112C69.5789 9.73601 69.8589 8.52801 70.4189 7.48801C70.9789 6.44801 71.7629 5.64801 72.7709 5.08801C73.7789 4.52801 74.9389 4.24801 76.2509 4.24801C77.5149 4.24801 78.6429 4.52001 79.6349 5.06401C80.6429 5.60801 81.4189 6.38401 81.9629 7.39201C82.5229 8.38401 82.8029 9.52801 82.8029 10.824ZM79.3229 9.86401C79.3069 9.00001 78.9949 8.31201 78.3869 7.80001C77.7789 7.27201 77.0349 7.00801 76.1549 7.00801C75.3229 7.00801 74.6189 7.26401 74.0429 7.77601C73.4829 8.27201 73.1389 8.96801 73.0109 9.86401H79.3229ZM97.6154 10.824C97.6154 11.304 97.5834 11.736 97.5194 12.12H87.7994C87.8794 13.08 88.2154 13.832 88.8074 14.376C89.3994 14.92 90.1274 15.192 90.9914 15.192C92.2394 15.192 93.1274 14.656 93.6554 13.584H97.2794C96.8954 14.864 96.1594 15.92 95.0714 16.752C93.9834 17.568 92.6474 17.976 91.0634 17.976C89.7834 17.976 88.6314 17.696 87.6074 17.136C86.5994 16.56 85.8074 15.752 85.2314 14.712C84.6714 13.672 84.3914 12.472 84.3914 11.112C84.3914 9.73601 84.6714 8.52801 85.2314 7.48801C85.7914 6.44801 86.5754 5.64801 87.5834 5.08801C88.5914 4.52801 89.7514 4.24801 91.0634 4.24801C92.3274 4.24801 93.4554 4.52001 94.4474 5.06401C95.4554 5.60801 96.2314 6.38401 96.7754 7.39201C97.3354 8.38401 97.6154 9.52801 97.6154 10.824ZM94.1354 9.86401C94.1194 9.00001 93.8074 8.31201 93.1994 7.80001C92.5914 7.27201 91.8474 7.00801 90.9674 7.00801C90.1354 7.00801 89.4314 7.26401 88.8554 7.77601C88.2954 8.27201 87.9514 8.96801 87.8234 9.86401H94.1354Z" fill="#101828" />
                        </svg>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Navigate</h2>
                        <ul class="text-body font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Home</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">About</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Others</h2>
                        <ul class="text-body font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">FAQs</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-heading uppercase">Legal</h2>
                        <ul class="text-body font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-default sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-body sm:text-center">© 2025 <a href="https://flowbite.com/" class="hover:underline">Studee</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-body hover:text-heading">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-body hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.942 5.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.586 11.586 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3 17.392 17.392 0 0 0-2.868 11.662 15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.638 10.638 0 0 1-1.706-.83c.143-.106.283-.217.418-.331a11.664 11.664 0 0 0 10.118 0c.137.114.277.225.418.331-.544.328-1.116.606-1.71.832a12.58 12.58 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM8.678 14.813a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.929 1.929 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-body hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-body hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-body hover:text-heading ms-5">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2a10 10 0 1 0 10 10A10.009 10.009 0 0 0 12 2Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.093 20.093 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM10 3.707a8.82 8.82 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.755 45.755 0 0 0 10 3.707Zm-6.358 6.555a8.57 8.57 0 0 1 4.73-5.981 53.99 53.99 0 0 1 3.168 4.941 32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.641 31.641 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM12 20.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 15.113 13a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
<script>
    const textarea = document.getElementById('prompt');
    const counter = document.getElementById('count');
    const maxChars = 300;

    textarea.addEventListener('input', () => {
        if (textarea.value.length > maxChars) {
            textarea.value = textarea.value.slice(0, maxChars);
        }

        counter.textContent = textarea.value.length;
    });
</script>

</html>