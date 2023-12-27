<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400&family=Roboto:ital,wght@0,100;0,500;0,700;1,100&family=Sarabun:wght@100;200&display=swap');

        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Roboto', sans-serif;
            font-family: 'Sarabun', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: "FILL" 0, "wght" 400, "GRAD" 0, "opsz" 48;
        }

        .hov-primary {
            transition: all 0.2s ease-in-out;
        }

        .hov-primary:hover {
            background-color: #0d6efd;
            color: white !important;
            cursor: pointer;
            /* color: var(--bs-btn-bg); */
        }


        .bg-gray-100 {
            background-color: #f8f9fa;
        }

        a {
            text-decoration: none;
            color: black;
        }


        aside li {
            list-style: none;
            text-decoration: none;
            padding: 0.5rem;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .full-height-overflow {
            height: 100vh;
            overflow: auto;
        }

        aside ul {
            padding: 0
        }

        .nimt header,
        .nimt p {
            margin: 0;
            color: aliceblue;
        }

        .nimt header {
            font-size: 17.920px;
        }

        .nimt p {
            font-size: 10.5px;
        }

        aside {
            background-color: #58A4FD;
            padding: 0;
        }
        .project-base li{
            padding: 0.5rem 1.5rem;
            margin: 0;
            /* margin: 0.5rem 1rem; */
        }
    </style>
</head>

<body>
    <section class="row">
        <aside class="col-4 col-xl-2 bg-pr full-height-overflow">
            <ul>
                <a href="./">
                    <li class="row">
                        <div class="logo text-start col-xl-3">
                            <svg width="90" height="90" viewBox="0 0 403 532" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_69_2)">
                                    <path d="M209 0L265 229H14L104.288 147L209 0Z" fill="#EA1B21" />
                                    <path d="M209 457L14 228L265 228L229.665 342.5L209 457Z" fill="#EA1B21" />
                                    <path d="M62.7554 145.5L48.3094 218L14 229L62.7554 145.5Z" fill="#EA1B21" />
                                    <path d="M87.1331 124L72.687 196.5L38.3777 207.5L87.1331 124Z" fill="#EA1B21" />
                                    <path d="M111.511 103L97.0648 175.5L62.7554 186.5L111.511 103Z" fill="#EA1B21" />
                                    <path d="M208 0L152 229H403L312.712 147L208 0Z" fill="#2E3192" />
                                    <path d="M208 457L403 228L152 228L187.335 342.5L208 457Z" fill="#2E3192" />
                                    <path d="M354.245 145.5L368.691 218L403 229L354.245 145.5Z" fill="#2E3192" />
                                    <path d="M329.867 124L344.313 196.5L378.622 207.5L329.867 124Z" fill="#2E3192" />
                                    <path d="M305.489 103L319.935 175.5L354.245 186.5L305.489 103Z" fill="#2E3192" />
                                    <path d="M209 0L293.005 228.75H124.996L209 0Z" fill="white" />
                                    <path d="M209 457L124.996 228.25L293.005 228.25L209 457Z" fill="white" />
                                </g>
                                <g filter="url(#filter1_d_69_2)">
                                    <path d="M209 0L265 229H14L104.288 147L209 0Z" fill="#EA1B21" />
                                    <path d="M209 457L14 228L265 228L229.665 342.5L209 457Z" fill="#EA1B21" />
                                    <path d="M62.7554 145.5L48.3094 218L14 229L62.7554 145.5Z" fill="#EA1B21" />
                                    <path d="M87.1331 124L72.687 196.5L38.3777 207.5L87.1331 124Z" fill="#EA1B21" />
                                    <path d="M111.511 103L97.0648 175.5L62.7554 186.5L111.511 103Z" fill="#EA1B21" />
                                    <path d="M208 0L152 229H403L312.712 147L208 0Z" fill="#2E3192" />
                                    <path d="M208 457L403 228L152 228L187.335 342.5L208 457Z" fill="#2E3192" />
                                    <path d="M354.245 145.5L368.691 218L403 229L354.245 145.5Z" fill="#2E3192" />
                                    <path d="M329.867 124L344.313 196.5L378.622 207.5L329.867 124Z" fill="#2E3192" />
                                    <path d="M305.489 103L319.935 175.5L354.245 186.5L305.489 103Z" fill="#2E3192" />
                                    <path d="M209 0L293.005 228.75H124.996L209 0Z" fill="white" />
                                    <path d="M209 457L124.996 228.25L293.005 228.25L209 457Z" fill="white" />
                                </g>
                                <path
                                    d="M197.152 245.64C194.123 245.64 191.669 245.064 189.792 243.912C187.957 242.76 186.656 241.288 185.888 239.496H185.376L184.352 245H177.056V209.928H186.656V226.696C186.656 229.128 186.933 231.133 187.488 232.712C188.043 234.248 188.853 235.4 189.92 236.168C190.987 236.936 192.267 237.32 193.76 237.32C195.552 237.32 196.917 236.787 197.856 235.72C198.795 234.653 199.264 232.947 199.264 230.6V209.928H208.864V232.712C208.864 235.485 208.416 237.832 207.52 239.752C206.667 241.672 205.365 243.144 203.616 244.168C201.867 245.149 199.712 245.64 197.152 245.64ZM227.199 245.832C225.023 245.832 222.975 245.576 221.055 245.064C219.135 244.595 217.343 243.912 215.679 243.016L218.239 236.04C219.178 236.595 220.308 237.085 221.631 237.512C222.954 237.939 224.255 238.152 225.535 238.152C227.924 238.152 229.823 237.256 231.231 235.464C232.639 233.629 233.343 230.899 233.343 227.272C233.343 223.859 232.639 221.256 231.231 219.464C229.823 217.672 227.626 216.776 224.639 216.776C223.231 216.776 221.78 216.989 220.287 217.416C218.794 217.8 217.556 218.291 216.575 218.888V211.016C217.898 210.419 219.391 209.949 221.055 209.608C222.719 209.267 224.49 209.096 226.367 209.096C230.292 209.096 233.492 209.821 235.967 211.272C238.442 212.723 240.255 214.813 241.407 217.544C242.559 220.232 243.135 223.475 243.135 227.272C243.135 233.331 241.748 237.939 238.975 241.096C236.202 244.253 232.276 245.832 227.199 245.832Z"
                                    fill="black" />
                                <defs>
                                    <filter id="filter0_d_69_2" x="0" y="0" width="403" height="468"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="-10" dy="7" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_69_2" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_69_2"
                                            result="shape" />
                                    </filter>
                                    <filter id="filter1_d_69_2" x="0" y="0" width="403" height="468"
                                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dx="-10" dy="7" />
                                        <feGaussianBlur stdDeviation="2" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                            result="effect1_dropShadow_69_2" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_69_2"
                                            result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                        </div>
                        <div class="nimt col-xl-9 d-flex justify-content-end align-items-center ">
                            <div class="row">

                                <div>
                                    <header class="text-end">สถาบันมาตรวิทยาแห่งชาติ</header>
                                </div>
                                <div>
                                    <p class="text-end">National Institute of Metrology (Thailand)</p>
                                </div>

                            </div>
                        </div>
                    </li>
                </a>
                <li>
                    Project base
                    <ul class="project-base">
                        <a href="./">
                            <li class="hov-primary">Dashboard</li>
                        </a>
                        <a href="./">
                            <li class="hov-primary">สำหรับเจ้าหน้าที่</li>
                        </a>
                    </ul>
                </li>

            </ul>
        </aside>
        <main class="col-8 col-xl-10 bg-gray-100 border-min full-height-overflow">
        </main>
</body>

</html>
