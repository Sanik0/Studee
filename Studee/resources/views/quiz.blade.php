<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=BBH+Bartle&family=Jersey+10&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="relative flex flex-col">
    <!-- NAVIGATION -->
    <nav class="bg-neutral-primary fixed w-full z-20 top-0 start-0 border-b border-default">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3">
                <svg width="98" height="21" viewBox="0 0 98 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.29605 13.152C4.80805 13.648 5.37605 14.024 6.00005 14.28C6.62405 14.536 7.27205 14.72 7.94405 14.832C8.61605 14.928 9.30405 14.984 10.0081 15C10.7121 15 11.3921 15 12.0481 15C12.2881 15 12.6081 14.992 13.0081 14.976C13.4241 14.96 13.8641 14.928 14.3281 14.88C14.8081 14.816 15.2881 14.736 15.7681 14.64C16.2481 14.528 16.6801 14.384 17.0641 14.208C17.4641 14.032 17.7841 13.824 18.0241 13.584C18.2801 13.328 18.4081 13.024 18.4081 12.672C18.4081 12.32 18.2721 12.016 18.0001 11.76C17.7441 11.488 17.4081 11.256 16.9921 11.064C16.5761 10.872 16.1041 10.712 15.5761 10.584C15.0641 10.44 14.5521 10.336 14.0401 10.272C13.5281 10.192 13.0481 10.136 12.6001 10.104C12.1681 10.072 11.8161 10.056 11.5441 10.056H11.5681C11.1841 10.04 10.7121 10 10.1521 9.93601C9.59205 9.87201 9.00805 9.77601 8.40005 9.64801C7.79205 9.52001 7.18405 9.36001 6.57605 9.16801C5.96805 8.96001 5.42405 8.71201 4.94405 8.42401C4.46405 8.13601 4.07205 7.80001 3.76805 7.41601C3.46405 7.01601 3.31205 6.56001 3.31205 6.04801C3.31205 5.48801 3.45605 5.00801 3.74405 4.60801C4.04805 4.20801 4.43205 3.87201 4.89605 3.60001C5.37605 3.31201 5.91205 3.08801 6.50405 2.92801C7.09605 2.75201 7.69605 2.61601 8.30405 2.52001C8.91205 2.42401 9.48805 2.36001 10.0321 2.32801C10.5921 2.29601 11.0641 2.28001 11.4481 2.28001C12.0721 2.28001 12.7041 2.31201 13.3441 2.37601C14.0001 2.42401 14.6401 2.52001 15.2641 2.66401C15.8881 2.80801 16.4961 3.00801 17.0881 3.26401C17.6801 3.50401 18.2241 3.81601 18.7201 4.20001L17.4481 5.11201C16.9841 4.79201 16.4961 4.54401 15.9841 4.36801C15.4721 4.17601 14.9441 4.03201 14.4001 3.93601C13.8561 3.84001 13.3041 3.78401 12.7441 3.76801C12.1841 3.73601 11.6401 3.72001 11.1121 3.72001C10.7441 3.72001 10.2401 3.74401 9.60005 3.79201C8.97605 3.84001 8.35205 3.94401 7.72805 4.10401C7.12005 4.24801 6.59205 4.48001 6.14405 4.80001C5.69605 5.10401 5.47205 5.52001 5.47205 6.04801C5.47205 6.56001 5.68805 6.97601 6.12005 7.29601C6.55205 7.60001 7.12005 7.84801 7.82405 8.04001C8.52805 8.21601 9.32805 8.36001 10.2241 8.47201C11.1361 8.56801 12.0641 8.67201 13.0081 8.78401C13.9521 8.89601 14.8721 9.03201 15.7681 9.19201C16.6801 9.33601 17.4881 9.55201 18.1921 9.84001C18.8961 10.112 19.4641 10.48 19.8961 10.944C20.3281 11.392 20.5441 11.968 20.5441 12.672C20.5441 13.168 20.3921 13.608 20.0881 13.992C19.8001 14.376 19.4161 14.712 18.9361 15C18.4561 15.272 17.9121 15.504 17.3041 15.696C16.7121 15.872 16.1121 16.016 15.5041 16.128C14.9121 16.24 14.3441 16.32 13.8001 16.368C13.2561 16.416 12.8081 16.44 12.4561 16.44H10.6561C10.0001 16.44 9.31205 16.416 8.59205 16.368C7.87205 16.32 7.16805 16.216 6.48005 16.056C5.79205 15.88 5.13605 15.64 4.51205 15.336C3.88805 15.032 3.33605 14.616 2.85605 14.088L4.29605 13.152ZM0.864053 13.584C1.50405 14.624 2.26405 15.432 3.14405 16.008C4.02405 16.568 4.97605 16.984 6.00005 17.256C7.02405 17.512 8.08005 17.664 9.16805 17.712C10.2721 17.76 11.3681 17.784 12.4561 17.784C12.9361 17.784 13.5041 17.752 14.1601 17.688C14.8161 17.608 15.4961 17.488 16.2001 17.328C16.9041 17.168 17.5921 16.96 18.2641 16.704C18.9521 16.432 19.5601 16.112 20.0881 15.744C20.6321 15.36 21.0641 14.92 21.3841 14.424C21.7201 13.912 21.8881 13.328 21.8881 12.672C21.8881 11.888 21.7121 11.224 21.3601 10.68C21.0241 10.12 20.5761 9.65601 20.0161 9.28801C19.4721 8.90401 18.8401 8.60001 18.1201 8.37601C17.4161 8.13601 16.6881 7.95201 15.9361 7.82401C15.1841 7.69601 14.4481 7.60001 13.7281 7.53601C13.0081 7.47201 12.3681 7.41601 11.8081 7.36801C11.6161 7.35201 11.2481 7.32001 10.7041 7.27201C10.1601 7.20801 9.60005 7.12801 9.02405 7.03201C8.44805 6.92001 7.93605 6.78401 7.48805 6.62401C7.04005 6.46401 6.81605 6.27201 6.81605 6.04801C6.81605 5.79201 7.02405 5.60001 7.44005 5.47201C7.85605 5.34401 8.32805 5.24801 8.85605 5.18401C9.40005 5.12001 9.92005 5.08801 10.4161 5.08801C10.9281 5.07201 11.2721 5.06401 11.4481 5.06401C11.9601 5.06401 12.4801 5.08801 13.0081 5.13601C13.5361 5.16801 14.0481 5.24801 14.5441 5.37601C15.0561 5.50401 15.5361 5.68801 15.9841 5.92801C16.4481 6.16801 16.8721 6.48001 17.2561 6.86401L20.7601 4.51201C20.1521 3.68001 19.4641 3.03201 18.6961 2.56801C17.9281 2.08801 17.1121 1.72801 16.2481 1.48801C15.3841 1.24801 14.4801 1.09601 13.5361 1.03201C12.6081 0.968009 11.6721 0.936009 10.7281 0.936009C10.2321 0.936009 9.66405 0.976009 9.02405 1.05601C8.40005 1.12001 7.76005 1.23201 7.10405 1.39201C6.46405 1.55201 5.83205 1.76001 5.20805 2.01601C4.60005 2.27201 4.05605 2.59201 3.57605 2.97601C3.09605 3.36001 2.71205 3.80801 2.42405 4.32001C2.13605 4.81601 1.99205 5.39201 1.99205 6.04801C1.99205 6.80001 2.17605 7.44801 2.54405 7.99201C2.91205 8.53601 3.40005 9.00001 4.00805 9.38401C4.61605 9.76801 5.30405 10.08 6.07205 10.32C6.84005 10.56 7.61605 10.76 8.40005 10.92C9.20005 11.064 9.96805 11.184 10.7041 11.28C11.4561 11.36 12.1121 11.432 12.6721 11.496C12.8321 11.512 13.1441 11.544 13.6081 11.592C14.0881 11.64 14.5841 11.712 15.0961 11.808C15.6081 11.888 16.0641 12 16.4641 12.144C16.8641 12.288 17.0641 12.464 17.0641 12.672C17.0641 12.848 16.9361 13 16.6801 13.128C16.4241 13.24 16.0961 13.336 15.6961 13.416C15.2961 13.48 14.8561 13.528 14.3761 13.56C13.8961 13.592 13.4241 13.616 12.9601 13.632C12.5121 13.648 12.1041 13.656 11.7361 13.656C11.3841 13.656 11.1361 13.656 10.9921 13.656C10.3841 13.656 9.78405 13.632 9.19205 13.584C8.60005 13.52 8.02405 13.408 7.46405 13.248C6.90405 13.072 6.37605 12.832 5.88005 12.528C5.38405 12.224 4.93605 11.816 4.53605 11.304L0.864053 13.584ZM4.34405 10.704L3.19205 9.52801C2.63205 9.11201 2.19205 8.62401 1.87205 8.06401C1.55205 7.48801 1.39205 6.81601 1.39205 6.04801C1.39205 5.31201 1.54405 4.66401 1.84805 4.10401C2.16805 3.52801 2.58405 3.03201 3.09605 2.61601C3.60805 2.20001 4.19205 1.84801 4.84805 1.56001C5.50405 1.25601 6.17605 1.01601 6.86405 0.840009C7.55205 0.664009 8.23205 0.536009 8.90405 0.456009C9.57605 0.376009 10.1841 0.33601 10.7281 0.33601C11.6721 0.33601 12.6241 0.368009 13.5841 0.432008C14.5441 0.480009 15.4801 0.624009 16.3921 0.864008C17.3201 1.10401 18.2081 1.47201 19.0561 1.96801C19.9041 2.46401 20.6961 3.16001 21.4321 4.05601C21.9281 4.55201 22.3201 4.96801 22.6081 5.30401C22.8961 5.62401 23.1201 5.89601 23.2801 6.12001C23.4561 6.34401 23.5841 6.52801 23.6641 6.67201C23.7441 6.80001 23.8241 6.92001 23.9041 7.03201L20.8321 9.09601C20.9121 9.17601 21.0001 9.24801 21.0961 9.31201C21.2081 9.36001 21.3601 9.46401 21.5521 9.62401C21.7441 9.78401 21.9921 10.016 22.2961 10.32C22.6161 10.608 23.0401 11.024 23.5681 11.568C23.9521 11.968 24.2561 12.48 24.4801 13.104C24.7041 13.728 24.8161 14.384 24.8161 15.072C24.8161 15.792 24.6401 16.432 24.2881 16.992C23.9361 17.552 23.4801 18.04 22.9201 18.456C22.3601 18.872 21.7201 19.224 21.0001 19.512C20.2801 19.8 19.5521 20.032 18.8161 20.208C18.0801 20.384 17.3601 20.512 16.6561 20.592C15.9681 20.672 15.3681 20.712 14.8561 20.712C13.9121 20.712 12.9521 20.712 11.9761 20.712C11.0001 20.712 10.0401 20.632 9.09605 20.472C8.16805 20.312 7.26405 20.048 6.38405 19.68C5.50405 19.312 4.69605 18.752 3.96005 18C3.33605 17.424 2.80805 16.92 2.37605 16.488C1.96005 16.04 1.60005 15.64 1.29605 15.288C1.00805 14.92 0.760053 14.584 0.552053 14.28C0.360053 13.976 0.176053 13.68 5.27389e-05 13.392L4.34405 10.704Z" fill="#9810FA" />
                    <path d="M32.9174 7.22401V13.656C32.9174 14.104 33.0214 14.432 33.2294 14.64C33.4534 14.832 33.8214 14.928 34.3334 14.928H35.8934V17.76H33.7814C30.9494 17.76 29.5334 16.384 29.5334 13.632V7.22401H27.9494V4.46401H29.5334V1.17601H32.9174V4.46401H35.8934V7.22401H32.9174ZM50.8621 4.46401V17.76H47.4781V16.08C47.0461 16.656 46.4781 17.112 45.7741 17.448C45.0861 17.768 44.3341 17.928 43.5181 17.928C42.4781 17.928 41.5581 17.712 40.7581 17.28C39.9581 16.832 39.3261 16.184 38.8621 15.336C38.4141 14.472 38.1901 13.448 38.1901 12.264V4.46401H41.5501V11.784C41.5501 12.84 41.8141 13.656 42.3421 14.232C42.8701 14.792 43.5901 15.072 44.5021 15.072C45.4301 15.072 46.1581 14.792 46.6861 14.232C47.2141 13.656 47.4781 12.84 47.4781 11.784V4.46401H50.8621ZM53.3132 11.064C53.3132 9.72001 53.5772 8.52801 54.1052 7.48801C54.6492 6.44801 55.3852 5.64801 56.3132 5.08801C57.2412 4.52801 58.2732 4.24801 59.4092 4.24801C60.2732 4.24801 61.0972 4.44001 61.8812 4.82401C62.6652 5.19201 63.2892 5.68801 63.7532 6.31201V9.53674e-06H67.1612V17.76H63.7532V15.792C63.3372 16.448 62.7532 16.976 62.0012 17.376C61.2492 17.776 60.3772 17.976 59.3852 17.976C58.2652 17.976 57.2412 17.688 56.3132 17.112C55.3852 16.536 54.6492 15.728 54.1052 14.688C53.5772 13.632 53.3132 12.424 53.3132 11.064ZM63.7772 11.112C63.7772 10.296 63.6172 9.60001 63.2972 9.02401C62.9772 8.43201 62.5452 7.98401 62.0012 7.68001C61.4572 7.36001 60.8732 7.20001 60.2492 7.20001C59.6252 7.20001 59.0492 7.35201 58.5212 7.65601C57.9932 7.96001 57.5612 8.40801 57.2252 9.00001C56.9052 9.57601 56.7452 10.264 56.7452 11.064C56.7452 11.864 56.9052 12.568 57.2252 13.176C57.5612 13.768 57.9932 14.224 58.5212 14.544C59.0652 14.864 59.6412 15.024 60.2492 15.024C60.8732 15.024 61.4572 14.872 62.0012 14.568C62.5452 14.248 62.9772 13.8 63.2972 13.224C63.6172 12.632 63.7772 11.928 63.7772 11.112ZM82.8029 10.824C82.8029 11.304 82.7709 11.736 82.7069 12.12H72.9869C73.0669 13.08 73.4029 13.832 73.9949 14.376C74.5869 14.92 75.3149 15.192 76.1789 15.192C77.4269 15.192 78.3149 14.656 78.8429 13.584H82.4669C82.0829 14.864 81.3469 15.92 80.2589 16.752C79.1709 17.568 77.8349 17.976 76.2509 17.976C74.9709 17.976 73.8189 17.696 72.7949 17.136C71.7869 16.56 70.9949 15.752 70.4189 14.712C69.8589 13.672 69.5789 12.472 69.5789 11.112C69.5789 9.73601 69.8589 8.52801 70.4189 7.48801C70.9789 6.44801 71.7629 5.64801 72.7709 5.08801C73.7789 4.52801 74.9389 4.24801 76.2509 4.24801C77.5149 4.24801 78.6429 4.52001 79.6349 5.06401C80.6429 5.60801 81.4189 6.38401 81.9629 7.39201C82.5229 8.38401 82.8029 9.52801 82.8029 10.824ZM79.3229 9.86401C79.3069 9.00001 78.9949 8.31201 78.3869 7.80001C77.7789 7.27201 77.0349 7.00801 76.1549 7.00801C75.3229 7.00801 74.6189 7.26401 74.0429 7.77601C73.4829 8.27201 73.1389 8.96801 73.0109 9.86401H79.3229ZM97.6154 10.824C97.6154 11.304 97.5834 11.736 97.5194 12.12H87.7994C87.8794 13.08 88.2154 13.832 88.8074 14.376C89.3994 14.92 90.1274 15.192 90.9914 15.192C92.2394 15.192 93.1274 14.656 93.6554 13.584H97.2794C96.8954 14.864 96.1594 15.92 95.0714 16.752C93.9834 17.568 92.6474 17.976 91.0634 17.976C89.7834 17.976 88.6314 17.696 87.6074 17.136C86.5994 16.56 85.8074 15.752 85.2314 14.712C84.6714 13.672 84.3914 12.472 84.3914 11.112C84.3914 9.73601 84.6714 8.52801 85.2314 7.48801C85.7914 6.44801 86.5754 5.64801 87.5834 5.08801C88.5914 4.52801 89.7514 4.24801 91.0634 4.24801C92.3274 4.24801 93.4554 4.52001 94.4474 5.06401C95.4554 5.60801 96.2314 6.38401 96.7754 7.39201C97.3354 8.38401 97.6154 9.52801 97.6154 10.824ZM94.1354 9.86401C94.1194 9.00001 93.8074 8.31201 93.1994 7.80001C92.5914 7.27201 91.8474 7.00801 90.9674 7.00801C90.1354 7.00801 89.4314 7.26401 88.8554 7.77601C88.2954 8.27201 87.9514 8.96801 87.8234 9.86401H94.1354Z" fill="#101828" />
                </svg>
            </a>
            <div class="flex md:order-2 md:space-x-0 gap-3">
                <div class="flex items-center  space-x-1 md:space-x-0">
                    <button type="button" data-dropdown-toggle="language-dropdown-menu" class="flex items-center text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm px-3 py-2 focus:outline-none">
                        <svg class="w-6 h-6 fill-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960">
                            <path d="m370-80-16-128q-13-5-24.5-12T307-235l-119 50L78-375l103-78q-1-7-1-13.5v-27q0-6.5 1-13.5L78-585l110-190 119 50q11-8 23-15t24-12l16-128h220l16 128q13 5 24.5 12t22.5 15l119-50 110 190-103 78q1 7 1 13.5v27q0 6.5-2 13.5l103 78-110 190-118-50q-11 8-23 15t-24 12L590-80H370Zm70-80h79l14-106q31-8 57.5-23.5T639-327l99 41 39-68-86-65q5-14 7-29.5t2-31.5q0-16-2-31.5t-7-29.5l86-65-39-68-99 42q-22-23-48.5-38.5T533-694l-13-106h-79l-14 106q-31 8-57.5 23.5T321-633l-99-41-39 68 86 64q-5 15-7 30t-2 32q0 16 2 31t7 30l-86 65 39 68 99-42q22 23 48.5 38.5T427-266l13 106Zm42-180q58 0 99-41t41-99q0-58-41-99t-99-41q-59 0-99.5 41T342-480q0 58 40.5 99t99.5 41Zm-2-140Z" />
                        </svg>
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
                </div>
                <button type="button" class="text-white bg-purple-600 box-border border border-transparent hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Exit Quiz</button>
            </div>
            <div class="items-center justify-between hidden md:flex w-full md:w-auto md:order-1" id="navbar-sticky">
                <div class="flex items-center justify-center flex-col w-full gap-2">
                    <h3 class="text-base font-semibold">1/30</h3>
                    <h4 class="text-base font-medium">Introduction to computer architecture, organization, and programming languages</h4>
                </div>
            </div>
        </div>
    </nav>
    <!-- MODAL -->
    {{-- <section>
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
    </section> --}}
    <!-- COMPLETION -->
    {{-- <section>
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
                        <svg class="mx-auto mb-4 text-fg-disabled w-20 h-20" viewBox="0 0 96 96" fill="none">
                            <path d="M0 48C0 21.4903 21.4903 0 48 0C74.5097 0 96 21.4903 96 48C96 74.5097 74.5097 96 48 96C21.4903 96 0 74.5097 0 48Z" fill="#FFD700" fill-opacity="0.2" />
                            <path d="M36.3333 69V64.3333H45.6667V57.1C43.7611 56.6722 42.0597 55.8653 40.5625 54.6792C39.0653 53.4931 37.9667 52.0056 37.2667 50.2167C34.35 49.8667 31.9097 48.5931 29.9458 46.3958C27.9819 44.1986 27 41.6222 27 38.6667V36.3333C27 35.05 27.4569 33.9514 28.3708 33.0375C29.2847 32.1236 30.3833 31.6667 31.6667 31.6667H36.3333V27H59.6667V31.6667H64.3333C65.6167 31.6667 66.7153 32.1236 67.6292 33.0375C68.5431 33.9514 69 35.05 69 36.3333V38.6667C69 41.6222 68.0181 44.1986 66.0542 46.3958C64.0903 48.5931 61.65 49.8667 58.7333 50.2167C58.0333 52.0056 56.9347 53.4931 55.4375 54.6792C53.9403 55.8653 52.2389 56.6722 50.3333 57.1V64.3333H59.6667V69H36.3333ZM36.3333 45.2V36.3333H31.6667V38.6667C31.6667 40.1444 32.0944 41.4764 32.95 42.6625C33.8056 43.8486 34.9333 44.6944 36.3333 45.2ZM48 52.6667C49.9444 52.6667 51.5972 51.9861 52.9583 50.625C54.3194 49.2639 55 47.6111 55 45.6667V31.6667H41V45.6667C41 47.6111 41.6806 49.2639 43.0417 50.625C44.4028 51.9861 46.0556 52.6667 48 52.6667ZM59.6667 45.2C61.0667 44.6944 62.1944 43.8486 63.05 42.6625C63.9056 41.4764 64.3333 40.1444 64.3333 38.6667V36.3333H59.6667V45.2Z" fill="#FFD700" />
                        </svg>
                        <div class="w-full flex flex-col items-center justify-center gap-3 text-center">
                            <h3 class="text-2xl font-semibold">Quiz Completed!</h3>
                            <h3 class="mb-6 text-body">You scored 30 out of 30, that's <span>100%</span>! Keep it up.</h3>
                        </div>
                        <div class="grid w-full gap-3 pb-6 md:grid-cols-1">
                            <div for="hosting-small" class="inline-flex items-center justify-between w-full p-5 text-red-800 bg-red-50 border-1 border-red-200 rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-300 peer-checked:bg-purple-50 peer-checked:text-purple-900">
                                <div class="block">
                                    <div class="w-full">Answered 0 Incorrectly</div>
                                </div>
                            </div>
                            <div for="hosting-small" class="inline-flex items-center justify-between w-full p-5 text-green-800 bg-green-50 border-1 border-green-200 rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-300 peer-checked:bg-purple-50 peer-checked:text-purple-900">
                                <div class="block">
                                    <div class="w-full">Answered 30 Correctly</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 justify-end gap-2">
                            <button data-modal-hide="popup-modal" type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Retake</button>
                            <button data-modal-hide="popup-modal" type="button" class="text-white bg-purple-600 box-border border border-transparent hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                                Exit Quiz
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- QUIZ FORM -->
    <section class="w-full mt-20 ">
        <form action="" class="w-full relative px-[15px] flex flex-col pt-15 gap-15 max-w-screen-xl mx-auto items-center justify-center">
            <!-- MULTIPLE CHOICE -->
            <div class=" rounded-[20px] w-full max-w-2xl flex flex-col gap-4 border-[1px] border-gray-300 p-[30px]">
                <small class="text-sm w-full text-end font-medium">1/30</small>
                <p class="text-lg w-full ">High speed storage elements used in the CPU for temporary storage of frequently used operands.</p>
                <div class="w-full flex flex-col gap-1 mt-6">
                    <h3 class="mb-3 text-sm font-medium text-gray-700">Choose Answer</h3>
                    <ul class="grid w-full gap-6 md:grid-cols-2">
                        <li>
                            <input type="radio" id="hosting-small" name="hosting" value="hosting-small" class="hidden peer" required />
                            <label for="hosting-small" class="inline-flex items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-300 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-900">
                                <div class="block">
                                    <div class="w-full">Good for small websites</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                            <label for="hosting-big" class="inline-flex items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-300 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-900">
                                <div class="block">
                                    <div class="w-full">Good for large websites</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                            <label for="hosting-big" class="inline-flex items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-300 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-900">
                                <div class="block">
                                    <div class="w-full">Good for large websites</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="hosting-big" name="hosting" value="hosting-big" class="hidden peer">
                            <label for="hosting-big" class="inline-flex items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-300 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-900">
                                <div class="block">
                                    <div class="w-full">Good for large websites</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- TRUE OR FALSE -->
            <div class=" rounded-[20px] w-full max-w-2xl flex flex-col gap-4 border-[1px] border-gray-300 p-[30px]">
                <small class="text-sm w-full text-end font-medium">1/30</small>
                <p class="text-lg w-full ">High speed storage elements used in the CPU for temporary storage of frequently used operands.</p>
                <div class="w-full flex flex-col gap-1 mt-6">
                    <h3 class="mb-3 text-sm font-medium text-gray-700">Choose Answer</h3>
                    <ul class="grid w-full gap-6 md:grid-cols-2">
                        <li>
                            <input type="radio" id="true" name="truefalse" value="true" class="hidden peer" required />
                            <label for="true" class="inline-flex items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-300 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-900">
                                <div class="block">
                                    <div class="w-full">True</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="false" name="truefalse" value="false" class="hidden peer">
                            <label for="false" class="inline-flex items-center justify-between w-full p-5 text-body bg-neutral-primary-soft border-1 border-default rounded-base cursor-pointer peer-checked:hover:bg-purple-50 peer-checked:border-purple-300 peer-checked:bg-purple-50 hover:bg-neutral-secondary-medium peer-checked:text-purple-900">
                                <div class="block">
                                    <div class="w-full">False</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- IDENTIFICATION -->
            <div class=" rounded-[20px] w-full max-w-2xl flex flex-col gap-4 border-[1px] border-gray-300 p-[30px]">
                <small class="text-sm w-full text-end font-medium">1/30</small>
                <p class="text-lg w-full ">High speed storage elements used in the CPU for temporary storage of frequently used operands.</p>
                <div class="w-full flex flex-col gap-1 mt-6">
                    <h3 class="mb-3 text-sm font-medium text-gray-700">Choose Answer</h3>
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="text" id="search" class="block w-full p-3 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-purple-600 focus:border-purple-600 shadow-xs placeholder:text-body" placeholder="Type your answer" required />
                        <button type="button" class="absolute end-1.5 bottom-1.5 text-white bg-purple-600 hover:bg-purple-800 box-border border border-transparent focus:ring-4 focus:ring-purple-200 shadow-xs font-medium leading-5 rounded text-xs px-3 py-1.5 focus:outline-none">Next</button>
                    </div>
                </div>
            </div>
            <!-- FILL IN THE BLANKS -->
            <div class=" rounded-[20px] w-full max-w-2xl flex flex-col gap-4 border-[1px] border-gray-300 p-[30px]">
                <small class="text-sm w-full text-end font-medium">1/30</small>
                <p class="text-lg w-full ">High speed storage elements used in the ___ for temporary storage of frequently used operands.</p>
                <div class="w-full flex flex-col gap-1 mt-6">
                    <h3 class="mb-3 text-sm font-medium text-gray-700">Choose Answer</h3>
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="text" id="search" class="block w-full p-3 bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-purple-600 focus:border-purple-600 shadow-xs placeholder:text-body" placeholder="Type your answer" required />
                        <button type="button" class="absolute end-1.5 bottom-1.5 text-white bg-purple-600 hover:bg-purple-800 box-border border border-transparent focus:ring-4 focus:ring-purple-200 shadow-xs font-medium leading-5 rounded text-xs px-3 py-1.5 focus:outline-none">Next</button>
                    </div>
                </div>
            </div>
            <!-- RESULT TEMPLATE -->
            <div class=" rounded-[20px] bg-red-50 w-full max-w-2xl flex flex-col gap-4 border-[1px] border-red-300 p-[30px]">
                <small class="text-sm w-full text-end font-medium">0 point</small>
                <p class="text-lg w-full ">High speed storage elements used in the ___ for temporary storage of frequently used operands.</p>
                <div class="w-full flex flex-col gap-1 mt-6">
                    <h3 class="mb-3 text-sm font-medium text-gray-700">Your Answer</h3>
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="text" id="search" class="block w-full p-3 text-red-800 bg-neutral-secondary-medium border border-red-300 text-heading text-sm rounded-base focus:ring-purple-600 focus:border-purple-600 shadow-xs placeholder:text-body" placeholder="Type your answer" value="Processor" disabled />
                    </div>
                    <div class="flex items-center gap-3 mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-red-600" viewBox="0 -960 960 960">
                            <path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z" />
                        </svg>
                        <p class="text-red-800">Correct Answer: CPU</p>
                    </div>
                </div>
            </div>
            <div class=" rounded-[20px] bg-green-50 w-full max-w-2xl flex flex-col gap-4 border-[1px] border-green-300 p-[30px]">
                <small class="text-sm w-full text-end font-medium">1 point</small>
                <p class="text-lg w-full ">High speed storage elements used in the ___ for temporary storage of frequently used operands.</p>
                <div class="w-full flex flex-col gap-1 mt-6">
                    <h3 class="mb-3 text-sm font-medium text-gray-700">Your Answer</h3>
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="text" id="search" class="block w-full p-3 text-green-800 bg-neutral-secondary-medium border border-green-300 text-heading text-sm rounded-base focus:ring-purple-600 focus:border-purple-600 shadow-xs placeholder:text-body" placeholder="Type your answer" value="CPU" disabled />
                    </div>
                    <div class="flex items-center gap-3 mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-green-600" viewBox="0 -960 960 960">
                            <path d="m424-296 282-282-56-56-226 226-114-114-56 56 170 170Zm56 216q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Z" />
                        </svg>
                        <p class="text-green-800">Correct</p>
                    </div>
                </div>
            </div>
            <!-- SUBMIT BUTTON -->
            <div class="flex flex-col mb-5 gap-3 items-center justify-center text-center">
                <p>Are you done with your quiz? Submit now to get the result</p>
                <button type="button" class="text-white bg-purple-600 box-border border border-transparent hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit Quiz</button>
            </div>
        </form>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>