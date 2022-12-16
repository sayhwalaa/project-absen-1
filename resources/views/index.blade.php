<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>Login</title>
    <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-tailwind" />
    <meta name="keywords"
        content="creative tim, html dashboard, html css dashboard, web dashboard, tailwind dashboard, tailwind, tailwindcss, tailwind css, css3 dashboard, tailwind admin, Argon Dashboard 2 Tailwind, frontend, responsive tailwind dashboard, free dashboard, free admin dashboard, free tailwind admin dashboard">
    <meta name="description"
        content="Download Argon Tailwind CSS, a Free Tailwind CSS Admin Template developed by Creative Tim. Over 70 components, see the live demo on our site and join over 1,800,000 creatives!">
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Argon Tailwind CSS: Free Tailwind CSS Admin Template">
    <meta name="twitter:description"
        content="Download Argon Tailwind CSS, a Free Tailwind CSS Admin Template developed by Creative Tim. Over 70 components, see the live demo on our site and join over 1,800,000 creatives!">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
        content="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-tailwind/argon-dashboard-2-tailwind.jpg">
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Argon Tailwind CSS: Free Tailwind CSS Admin Template">
    <meta property="og:description"
        content="Download Argon Tailwind CSS, a Free Tailwind CSS Admin Template developed by Creative Tim. Over 70 components, see the live demo on our site and join over 1,800,000 creatives!">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" />
    <meta property="og:image"
        content="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-tailwind/argon-dashboard-2-tailwind.jpg" />
    <meta property="og:site_name" content="Creative Tim" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

    <link href="../assets/css/argon-dashboard-tailwind.min.css?v=1.0.1" rel="stylesheet" />
    <script>
        (function (a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function () {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function () {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
            'GTM-K9BGS8K': true
        });

    </script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46172202-22', 'auto', {
            allowLinker: true
        });
        ga('set', 'anonymizeIp', true);
        ga('require', 'GTM-K9BGS8K');
        ga('require', 'displayfeatures');
        ga('require', 'linker');
        ga('linker:autoLink', ["2checkout.com", "avangate.com"]);

    </script>
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');

    </script>
</head>

<style>
    #bg {
/* From https://css.glass */
background: rgba(9, 70, 239, 0.41);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(15.9px);
-webkit-backdrop-filter: blur(15.9px);
border: 1px solid rgba(9, 70, 239, 0.07);
    }
</style>

<body class="m-0 font-sans antialiased font-normal bg-amber-100 text-start text-base leading-default text-slate-500">
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <main class="mt-0 transition-all duration-200 ease-in-out">
        <section>
            <div class="relative flex items-center min-h-screen p-0 overflow-hidden bg-center bg-cover">
                <div class="container z-1">
                    <div class="flex flex-wrap -mx-3">
                        <div
                            class="flex flex-col w-full max-w-full px-3 mx-auto lg:mx-0 shrink-0 md:flex-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none lg:py4 dark:bg-gray-950 rounded-2xl bg-clip-border">
                                <div class="p-6 pb-0 mb-0">
                                    <h4 class="font-bold">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                
                                <div class="flex-auto p-6">
                                    <form role="form" action="{{ route('auth.login') }}" method="post">
                                        @csrf
                                        <div class="mb-4">
                                            <input type="email" placeholder="Email" name="email" id="email"
                                                class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" placeholder="Password" name="password" id="password"
                                                class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="inline-block w-full px-16 py-3.5 mt-6 mb-0 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="border-black/12.5 rounded-b-2xl border-t-0 border-solid p-6 text-center pt-0 px-1 sm:px-6">
                                    <p class="mx-auto mb-6 leading-normal text-sm">Don't have an account? <a
                                            href="#"
                                            class="font-semibold text-transparent bg-clip-text bg-gradient-to-tl from-blue-500 to-violet-500">Sign
                                            up</a></p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute top-0 right-0 flex-col justify-center hidden w-6/12 h-full max-w-full px-3 pr-0 my-auto text-center flex-0 lg:flex">
                            <div
                                class="relative flex flex-col justify-center h-full bg-cover px-24 m-4 overflow-hidden rounded-xl ">
                                <h4 class="z-20 font-bold text-black">Wellcome to E-Absen</h4>
                                <img src="{{ asset('/SBAdmin/login/img/sabang.png') }}" alt="" class="z-20">
                                <span
                                    class="absolute top-0 left-0 w-full h-full bg-center" id="bg"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7793ef150aab6bed","version":"2022.11.3","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
        crossorigin="anonymous"></script>
</body>

<script src="../assets/js/plugins/perfect-scrollbar.min.js" async></script>

<script src="../assets/js/argon-dashboard-tailwind.min.js?v=1.0.1" async></script>

</html>
