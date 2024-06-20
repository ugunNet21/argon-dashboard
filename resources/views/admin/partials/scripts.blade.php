    <!--   Core JS Files   -->
    <script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/chartjs.min.js') }}"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#5e72e4",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     // Memeriksa apakah pengguna sebelumnya telah memilih mode
        //     if (localStorage.getItem('darkMode') === 'true') {
        //         document.body.classList.add('dark-mode');
        //         document.getElementById('dark-version').checked = true;
        //     }

        //     // Fungsi untuk mengubah mode dan menyimpan pilihan
        //     function darkMode(toggle) {
        //         if (toggle.checked) {
        //             document.body.classList.add('dark-mode');
        //             localStorage.setItem('darkMode', 'true');
        //         } else {
        //             document.body.classList.remove('dark-mode');
        //             localStorage.setItem('darkMode', 'false');
        //         }
        //     }

        //     // Menambahkan event listener ke switch
        //     document.getElementById('dark-version').addEventListener('change', function() {
        //         darkMode(this);
        //     });
        // });
        function darkMode(el) {
            const body = document.getElementsByTagName('body')[0];
            const hr = document.querySelectorAll('div:not(.sidenav) > hr');
            const sidebar = document.querySelector('.sidenav');
            const sidebarWhite = document.querySelectorAll('.sidenav.bg-white');
            const hr_card = document.querySelectorAll('div:not(.bg-gradient-dark) hr');
            const text_btn = document.querySelectorAll('button:not(.btn) > .text-dark');
            const text_span = document.querySelectorAll('span.text-dark, .breadcrumb .text-dark');
            const text_span_white = document.querySelectorAll('span.text-white');
            const text_strong = document.querySelectorAll('strong.text-dark');
            const text_strong_white = document.querySelectorAll('strong.text-white');
            const text_nav_link = document.querySelectorAll('a.nav-link.text-dark');
            const secondary = document.querySelectorAll('.text-secondary');
            const bg_gray_100 = document.querySelectorAll('.bg-gray-100');
            const bg_gray_600 = document.querySelectorAll('.bg-gray-600');
            const btn_text_dark = document.querySelectorAll('.btn.btn-link.text-dark, .btn .ni.text-dark');
            const btn_text_white = document.querySelectorAll('.btn.btn-link.text-white, .btn .ni.text-white');
            const card_border = document.querySelectorAll('.card.border');
            const card_border_dark = document.querySelectorAll('.card.border.border-dark');
            const svg = document.querySelectorAll('g');
            const navbarBrand = document.querySelector('.navbar-brand-img');
            const navbarBrandImg = navbarBrand.src;
            const navLinks = document.querySelectorAll(
                '.navbar-main .nav-link, .navbar-main .breadcrumb-item, .navbar-main .breadcrumb-item a, .navbar-main h6'
                );
            const cardNavLinksIcons = document.querySelectorAll('.card .nav .nav-link i');
            const cardNavSpan = document.querySelectorAll('.card .nav .nav-link span');

            const isDarkMode = el.getAttribute("checked") !== "true";

            if (isDarkMode) {
                body.classList.add('dark-version');
                localStorage.setItem('darkMode', 'true');

                if (navbarBrandImg.includes('logo-ct-dark.png')) {
                    var navbarBrandImgNew = navbarBrandImg.replace("logo-ct-dark", "logo-ct");
                    navbarBrand.src = navbarBrandImgNew;
                }
                cardNavLinksIcons.forEach(icon => {
                    if (icon.classList.contains('text-dark')) {
                        icon.classList.remove('text-dark');
                        icon.classList.add('text-white');
                    }
                });
                cardNavSpan.forEach(span => {
                    if (span.classList.contains('text-sm')) {
                        span.classList.add('text-white');
                    }
                });
                hr.forEach(h => {
                    if (h.classList.contains('dark')) {
                        h.classList.remove('dark');
                        h.classList.add('light');
                    }
                });
                hr_card.forEach(h => {
                    if (h.classList.contains('dark')) {
                        h.classList.remove('dark');
                        h.classList.add('light');
                    }
                });
                text_btn.forEach(btn => {
                    if (btn.classList.contains('text-dark')) {
                        btn.classList.remove('text-dark');
                        btn.classList.add('text-white');
                    }
                });
                text_span.forEach(span => {
                    if (span.classList.contains('text-dark')) {
                        span.classList.remove('text-dark');
                        span.classList.add('text-white');
                    }
                });
                text_strong.forEach(strong => {
                    if (strong.classList.contains('text-dark')) {
                        strong.classList.remove('text-dark');
                        strong.classList.add('text-white');
                    }
                });
                text_nav_link.forEach(link => {
                    if (link.classList.contains('text-dark')) {
                        link.classList.remove('text-dark');
                        link.classList.add('text-white');
                    }
                });
                secondary.forEach(sec => {
                    if (sec.classList.contains('text-secondary')) {
                        sec.classList.remove('text-secondary');
                        sec.classList.add('text-white', 'opacity-8');
                    }
                });
                bg_gray_100.forEach(bg => {
                    if (bg.classList.contains('bg-gray-100')) {
                        bg.classList.remove('bg-gray-100');
                        bg.classList.add('bg-gray-600');
                    }
                });
                btn_text_dark.forEach(btn => {
                    btn.classList.remove('text-dark');
                    btn.classList.add('text-white');
                });
                sidebarWhite.forEach(sb => {
                    sb.classList.remove('bg-white');
                });
                svg.forEach(s => {
                    if (s.hasAttribute('fill')) {
                        s.setAttribute('fill', '#fff');
                    }
                });
                card_border.forEach(card => {
                    card.classList.add('border-dark');
                });
                el.setAttribute("checked", "true");
            } else {
                body.classList.remove('dark-version');
                sidebar.classList.add('bg-white');
                localStorage.setItem('darkMode', 'false');

                if (navbarBrandImg.includes('logo-ct.png')) {
                    var navbarBrandImgNew = navbarBrandImg.replace("logo-ct", "logo-ct-dark");
                    navbarBrand.src = navbarBrandImgNew;
                }
                navLinks.forEach(link => {
                    if (link.classList.contains('text-dark')) {
                        link.classList.add('text-white');
                        link.classList.remove('text-dark');
                    }
                });
                cardNavLinksIcons.forEach(icon => {
                    if (icon.classList.contains('text-white')) {
                        icon.classList.remove('text-white');
                        icon.classList.add('text-dark');
                    }
                });
                cardNavSpan.forEach(span => {
                    if (span.classList.contains('text-white')) {
                        span.classList.remove('text-white');
                    }
                });
                hr.forEach(h => {
                    if (h.classList.contains('light')) {
                        h.classList.add('dark');
                        h.classList.remove('light');
                    }
                });
                hr_card.forEach(h => {
                    if (h.classList.contains('light')) {
                        h.classList.add('dark');
                        h.classList.remove('light');
                    }
                });
                text_btn.forEach(btn => {
                    if (btn.classList.contains('text-white')) {
                        btn.classList.remove('text-white');
                        btn.classList.add('text-dark');
                    }
                });
                text_span_white.forEach(span => {
                    if (span.classList.contains('text-white') && !span.closest('.sidenav') && !span.closest(
                            '.card.bg-gradient-dark')) {
                        span.classList.remove('text-white');
                        span.classList.add('text-dark');
                    }
                });
                text_strong_white.forEach(strong => {
                    if (strong.classList.contains('text-white')) {
                        strong.classList.remove('text-white');
                        strong.classList.add('text-dark');
                    }
                });
                secondary.forEach(sec => {
                    if (sec.classList.contains('text-white')) {
                        sec.classList.remove('text-white');
                        sec.classList.remove('opacity-8');
                        sec.classList.add('text-dark');
                    }
                });
                bg_gray_600.forEach(bg => {
                    if (bg.classList.contains('bg-gray-600')) {
                        bg.classList.remove('bg-gray-600');
                        bg.classList.add('bg-gray-100');
                    }
                });
                svg.forEach(s => {
                    if (s.hasAttribute('fill')) {
                        s.setAttribute('fill', '#252f40');
                    }
                });
                btn_text_white.forEach(btn => {
                    if (!btn.closest('.card.bg-gradient-dark')) {
                        btn.classList.remove('text-white');
                        btn.classList.add('text-dark');
                    }
                });
                card_border_dark.forEach(card => {
                    card.classList.remove('border-dark');
                });
                el.removeAttribute("checked");
            }
        }

        // Set dark mode on page load if it was previously enabled
        document.addEventListener('DOMContentLoaded', () => {
            const darkModeToggle = document.getElementById('dark-version');
            const darkModeEnabled = localStorage.getItem('darkMode') === 'true';

            if (darkModeEnabled) {
                darkModeToggle.setAttribute("checked", "true");
            }
            darkMode(darkModeToggle);
        });
    </script>
