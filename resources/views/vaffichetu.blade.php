<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table V04</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

    <link rel="stylesheet" type="text/css" href="css/affichetu.css">
    <link rel="stylesheet" type="text/css" href="css/affichetu1.css">

    <meta name="robots" content="noindex, follow">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
 
    <script>
        (function(w, d) {
            ! function(a, b, c, d) {
                a[c] = a[c] || {};
                a[c].executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var f = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: f
                        });
                    }
                };
                for (const g of ["track", "set", "debug"]) {
                    a.zaraz[g] = a.zaraz._f(g);
                }
                a.zaraz.init = () => {
                    var h = b.getElementsByTagName(d)[0],
                        i = b.createElement(d),
                        j = b.getElementsByTagName("title")[0];
                    j && (a[c].t = b.getElementsByTagName("title")[0].text);
                    a[c].x = Math.random();
                    a[c].w = a.screen.width;
                    a[c].h = a.screen.height;
                    a[c].j = a.innerHeight;
                    a[c].e = a.innerWidth;
                    a[c].l = a.location.href;
                    a[c].r = b.referrer;
                    a[c].k = a.screen.colorDepth;
                    a[c].n = b.characterSet;
                    a[c].o = (new Date).getTimezoneOffset();
                    if (a.dataLayer) {
                        for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                                ...o[1],
                                ...p[1]
                            })), {}))) {
                            zaraz.set(n[0], n[1], {
                                scope: "page"
                            });
                        }
                    }
                    a[c].q = [];
                    for (; a.zaraz.q.length;) {
                        const q = a.zaraz.q.shift();
                        a[c].q.push(q);
                    }
                    i.defer = !0;
                    for (const r of [localStorage, sessionStorage]) {
                        Object.keys(r || {}).filter((t) => t.startsWith("_zaraz_")).forEach((s) => {
                            try {
                                a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s));
                            } catch {
                                a[c]["z_" + s.slice(7)] = r.getItem(s);
                            }
                        });
                    }
                    i.referrerPolicy = "origin";
                    i.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                    h.parentNode.insertBefore(i, h);
                };
                ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init);
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>

    <style>
        nav {
            margin: 30px auto 60px;

            position: relative;
            width: 590px;
            height: 50px;
            background-color: #34495e;
            border-radius: 8px;
            font-size: 0;
            
        }

        nav a {
            line-height: 50px;
            height: 100%;
            font-size: 15px;
            display: inline-block;
            position: relative;
            z-index: 1;
            text-decoration: none;
            text-transform: uppercase;
            text-align: center;
            color: white;
            cursor: pointer;
        }

        nav .animation {
            position: absolute;
            height: 100%;
            top: 0;
            z-index: 0;
            transition: all .5s ease 0s;
            border-radius: 8px;
        }

        a:nth-child(1) {
            width: 100px;
        }

        a:nth-child(2) {
            width: 110px;
        }

        a:nth-child(3) {
            width: 100px;
        }

        a:nth-child(4) {
            width: 160px;
        }

        a:nth-child(5) {
            width: 120px;
        }

        nav .start-home,
        a:nth-child(1):hover~.animation {
            width: 100px;
            left: 0;
            background-color: #1abc9c;
        }

        nav .start-about,
        a:nth-child(2):hover~.animation {
            width: 110px;
            left: 100px;
            background-color: #e74c3c;
        }

        nav .start-blog,
        a:nth-child(3):hover~.animation {
            width: 100px;
            left: 210px;
            background-color: #3498db;
        }

        nav .start-portefolio,
        a:nth-child(4):hover~.animation {
            width: 160px;
            left: 310px;
            background-color: #9b59b6;
        }

        nav .start-contact,
        a:nth-child(5):hover~.animation {
            width: 120px;
            left: 470px;
            background-color: #e67e22;
        }

        body {
            font-size: 12px;
            font-family: sans-serif;
            background: #2c3e50;
            text-align: center;
        }

        h1 {
            text-align: center;
            margin: 50px 0 40px;
            text-align: center;
            font-size: 30px;
            color: #ecf0f1;
            text-shadow: 2px 2px 4px #000000;
            font-family: 'Cherry Swash', cursive;
        }

        p {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
            color: #ecf0f1;
            font-family: 'Cherry Swash', cursive;
            font-size: 16px;
        }

        span {
            color: #2BD6B4;
        }
    </style>
</head>

<body>

    <nav>
        <a href="{{route('reins')}}">Acceuil</a>
        <a href="{{route('ajoutetu')}}">Save Etu</a>
        <a href="{{route('affichetu')}}">Show Etu</a>
        <a href="{{route('searchetu')}}">Search Etu</a>
        <a href="#">Contact</a>
        <div class="animation start-home"></div>
    </nav>
    <h1>LISTE ETUDIANTS</h1>
    <div class="limiter " style="margin-left: 200px; ">
        <div class="wrap-table100">
            <div class="table100 ver1 m-b-110 ">
                <div class="table100-head">
                    <table class="">
                        <thead>
                            <tr class="row100 head">
                                <th class="cell100 column1">ID</th>
                                <th class="cell100 column2">Nom</th>
                                <th class="cell100 column3">Prénom</th>
                                <th class="cell100 column4">Email</th>
                                <th class="cell100 column4 col-sm-15">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="table100-body js-pscroll">
                    <table>
                        <tbody>
                            @foreach ($etudiant as $etudiants)
                            <tr class="row100 body">
                                <td class="cell80 column1">{{ $etudiants->id }}</td>
                                <td class="cell100 column2">{{ $etudiants->nom }}</td>
                                <td class="cell100 column3">{{ $etudiants->prenom }}</td>
                                <td class="cell100 column4">{{ $etudiants->email }}</td>
                                <td class="cell100 column5">
                                    <div class="d-grid gap-2 d-md-block">
                                        <a type="button" class="btn btn-outline-success" href="{{route('editetu', $etudiants->id)}}">Editer</a>
                                        <a type="button" class="btn btn-outline-danger" href="#">Supprimer</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>

    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
        $('.js-pscroll').each(function() {
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function() {
                ps.update();
            })
        });
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script src="js/affichetu.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7cd5565cde7e776e","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.4.0","si":100}' crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 
</body>

</html>