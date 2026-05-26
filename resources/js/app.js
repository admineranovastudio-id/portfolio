/* ============================================
   App JS — Custom Cursor, Theme, Menu, GSAP
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

    // ── Loader ──────────────────────────────
    const loader = document.getElementById('loader');
    if (loader) {
        setTimeout(() => loader.classList.add('hidden'), 600);
    }



    // ── Theme Toggle ────────────────────────
    const themeToggle = document.getElementById('themeToggle');
    const saved = localStorage.getItem('theme');
    if (saved) {
        document.documentElement.setAttribute('data-theme', saved);
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            const current = document.documentElement.getAttribute('data-theme');
            const next = current === 'dark' ? 'light' : 'dark';
            document.documentElement.setAttribute('data-theme', next);
            localStorage.setItem('theme', next);
        });
    }

    // ── Navbar Scroll ───────────────────────
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
        });
    }

    // ── Mobile Menu ─────────────────────────
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('navLinks');

    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
        // Close on link click
        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
            });
        });
    }

    // ── Contact Form ────────────────────────
    const form = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');
    const submitBtn = document.getElementById('submitBtn');

    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.querySelector('span').textContent = 'Mengirim...';
            }
            formMessage.textContent = '';
            formMessage.className = 'form-message';

            const data = Object.fromEntries(new FormData(form).entries());

            try {
                const res = await fetch('/contact', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': data._token,
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify(data),
                });
                const result = await res.json();

                if (res.ok) {
                    formMessage.textContent = result.message;
                    formMessage.classList.add('success');
                    form.reset();
                } else {
                    const msg = result.message || (result.errors ? Object.values(result.errors).flat().join(' ') : 'Terjadi kesalahan.');
                    formMessage.textContent = msg;
                    formMessage.classList.add('error');
                }
            } catch {
                formMessage.textContent = 'Gagal menghubungi server.';
                formMessage.classList.add('error');
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.querySelector('span').textContent = 'Kirim Pesan';
                }
            }
        });
    }

    // ── GSAP Animations ─────────────────────
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Hero title stagger
        gsap.utils.toArray('.hero-line').forEach((line, i) => {
            gsap.from(line, {
                y: 80,
                opacity: 0,
                duration: 1,
                delay: 0.6 + i * 0.15,
                ease: 'power4.out',
            });
        });

        // Generic fade-up
        gsap.utils.toArray('[data-animate="fade-up"]').forEach(el => {
            gsap.fromTo(el, {
                y: 40,
                opacity: 0
            }, {
                scrollTrigger: { trigger: el, start: 'top 85%' },
                y: 0,
                opacity: 1,
                duration: 0.8,
                delay: parseFloat(el.dataset.delay || 0),
                ease: 'power3.out',
            });
        });

        // Fade right
        gsap.utils.toArray('[data-animate="fade-right"]').forEach(el => {
            gsap.fromTo(el, {
                x: -50,
                opacity: 0
            }, {
                scrollTrigger: { trigger: el, start: 'top 80%' },
                x: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power3.out',
            });
        });

        // Fade left
        gsap.utils.toArray('[data-animate="fade-left"]').forEach(el => {
            gsap.fromTo(el, {
                x: 50,
                opacity: 0
            }, {
                scrollTrigger: { trigger: el, start: 'top 80%' },
                x: 0,
                opacity: 1,
                duration: 0.8,
                ease: 'power3.out',
            });
        });

        // Skill tags stagger
        ScrollTrigger.batch('.skill-tag', {
            onEnter: (elements) => {
                gsap.fromTo(elements, {
                    y: 30,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 0.5,
                    stagger: 0.05,
                    ease: 'power3.out',
                });
            },
            start: 'top 85%',
            once: true,
        });

        // Project cards stagger
        ScrollTrigger.batch('.project-card', {
            onEnter: (elements) => {
                gsap.fromTo(elements, {
                    y: 50,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    stagger: 0.15,
                    ease: 'power3.out',
                });
            },
            start: 'top 85%',
            once: true,
        });
    }
});
