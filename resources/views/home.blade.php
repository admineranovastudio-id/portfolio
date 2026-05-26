@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section id="hero" class="hero">
    <div class="container">
        <div class="hero-badge" data-animate="fade-up">
            <span class="badge">Web Developer &middot; Mahasiswa Informatika</span>
        </div>
        <h1 class="hero-title" data-animate="hero-text">
            <span class="hero-line">Eka Rizky</span>
            <span class="hero-line">Nauvan <span class="text-gradient">Nurilham</span></span>
        </h1>
        <p class="hero-tagline" data-animate="fade-up" data-delay="0.4">
            I build websites that work — and look like they mean it.
        </p>
        <div class="hero-actions" data-animate="fade-up" data-delay="0.6">
            <a href="#projects" class="btn btn-primary">
                <span>Lihat Proyek Saya</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17l9.2-9.2M17 17V7H7"/></svg>
            </a>
        </div>
        <div class="scroll-indicator" data-animate="fade-up" data-delay="0.8">
            <div class="scroll-line"></div>
            <span>Scroll</span>
        </div>
    </div>
</section>

{{-- About Section --}}
<section id="about" class="section">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <span class="section-num">01</span>
            <h2 class="section-title">About Me</h2>
        </div>
        <div class="about-grid">
            <div class="about-image" data-animate="fade-right">
                @if($about && $about->image)
                    <div style="width: 100%; height: 100%; border-radius: 12px; overflow: hidden; position: relative; z-index: 2;">
                        <img src="{{ asset('storage/' . $about->image) }}" alt="Eka Rizky Nauvan Nurilham" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                @else
                    <div class="image-placeholder">
                        <span class="mono"><img src="profile-card.png" alt=""></span>
                    </div>
                @endif
                <div class="image-border"></div>
            </div>
            <div class="about-content" data-animate="fade-left">
                <p class="about-text">
                    {!! $about->description_1 ?? 'Halo! Saya <strong>Eka Rizky Nauvan Nurilham</strong>, mahasiswa Informatika sekaligus Web Developer yang aktif membangun solusi digital. Saya memadukan teori akademis dengan praktik industri untuk menciptakan website yang solid dan bermakna.' !!}
                </p>
                <p class="about-text">
                    {!! $about->description_2 ?? 'Pengalaman mengerjakan proyek nyata seperti <strong>Barly Vision</strong> dan <strong>Eranovastudio</strong> mengajarkan saya bahwa performa dan estetika harus berjalan beriringan.' !!}
                </p>
                <blockquote class="about-quote">
                    "{!! $about->quote ?? 'Saya percaya website yang baik bukan hanya tentang estetika, tapi tentang solusi.' !!}"
                </blockquote>
                <div class="about-stats">
                    <div class="stat-item">
                        <span class="stat-num">{{ $projects->count() }}+</span>
                        <span class="stat-label">Proyek Selesai</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-num">2020</span>
                        <span class="stat-label">Mulai Coding</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Skills Section --}}
<section id="skills" class="section">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <span class="section-num">02</span>
            <h2 class="section-title">Tech Stack</h2>
        </div>
        <div class="skills-grid">
            <div class="skill-group" data-animate="fade-up">
                <h3 class="skill-group-title">Core Technologies</h3>
                <div class="skill-tags">
                    <div class="skill-tag large">
                        <span class="tag-name">HTML5</span>
                    </div>
                    <div class="skill-tag large">
                        <span class="tag-name">CSS3</span>
                    </div>
                    <div class="skill-tag large">
                        <span class="tag-name">JavaScript</span>
                    </div>
                    <div class="skill-tag large">
                        <span class="tag-name">PHP</span>
                    </div>
                    <div class="skill-tag large">
                        <span class="tag-name">MySQL</span>
                    </div>
                </div>
            </div>
            <div class="skill-group" data-animate="fade-up" data-delay="0.2">
                <h3 class="skill-group-title">Tools & Ecosystem</h3>
                <div class="skill-tags">
                    @foreach (['Git', 'GitHub', 'VS Code', 'Laravel', 'Tailwind CSS', 'Figma', 'Postman'] as $tool)
                    <div class="skill-tag">
                        <span class="tag-name">{{ $tool }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Projects Section --}}
<section id="projects" class="section">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <span class="section-num">03</span>
            <h2 class="section-title">Project</h2>
        </div>
        <div class="projects-grid">
            @foreach ($projects as $project)
            <a href="{{ $project->slug !== 'coming-soon' ? route('project.show', $project->slug) : '#' }}"
               class="project-card {{ $project->featured ? 'featured' : '' }}">
                <div class="project-image">
                    @if($project->mockup_image)
                        <img src="{{ asset('storage/' . $project->mockup_image) }}" alt="{{ $project->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                    @else
                        <div class="project-image-placeholder">
                            <span class="mono">{{ $project->slug }}_mockup.webp</span>
                        </div>
                    @endif
                    <div class="project-overlay">
                        <span class="view-project">View Project →</span>
                    </div>
                </div>
                <div class="project-info">
                    <div class="project-meta">
                        <span class="project-num">{{ $project->num }}</span>
                        <span class="project-cat">{{ $project->category }}</span>
                    </div>
                    <h3 class="project-title">{{ $project->title }}</h3>
                    <p class="project-desc">{{ $project->description }}</p>
                    <div class="project-tech-list">
                        @if(is_array($project->tech))
                            @foreach ($project->tech as $tech)
                            <span class="tech-badge">{{ $tech }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="projects-actions" style="margin-top: 3rem; text-align: center;" data-animate="fade-up">
            <a href="{{ route('project.index') }}" class="btn btn-primary">
                <span>Lihat Lainnya</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="contact" class="section">
    <div class="container">
        <div class="section-header" data-animate="fade-up">
            <span class="section-num">04</span>
            <h2 class="section-title">Get in Touch</h2>
        </div>
        <div class="contact-grid">
            <div class="contact-info" data-animate="fade-right">
                <h2 class="contact-heading">Mari<br><span class="text-gradient">Berkolaborasi</span></h2>
                <p class="contact-sub">Punya proyek? Mari diskusi. Biasanya membalas dalam 24 jam.</p>
                
                <div class="contact-details" style="margin-top: 2rem;">
                    <a href="mailto:nauvanurilham@gmail.com" style="display: inline-flex; align-items: center; gap: 0.75rem; color: var(--text-color, #e2e8f0); text-decoration: none; font-size: 1.1rem; transition: color 0.3s ease;" onmouseover="this.style.color='var(--primary-color, #8b5cf6)'" onmouseout="this.style.color='var(--text-color, #e2e8f0)'">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>nauvanurilham@gmail.com</span>
                    </a>
                </div>
            </div>
            <div class="contact-form-wrapper" data-animate="fade-left">
                <form id="contactForm" class="contact-form" onsubmit="sendToWhatsApp(event)">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" id="name" name="name" required minlength="2" placeholder="Nama Anda">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" required placeholder="Tentang apa?">
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" required minlength="20" rows="5" placeholder="Ceritakan proyek Anda..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-full" id="submitBtn">
                        <span>Kirim Pesan</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
                    </button>
                    <div id="formMessage" class="form-message"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    function sendToWhatsApp(event) {
        event.preventDefault(); // Prevent standard form submission

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const subject = document.getElementById('subject').value;
        const message = document.getElementById('message').value;

        const waNumber = "6289667950904";
        const waText = `Halo, saya ${name} (${email}).\n\n*Subjek:* ${subject}\n*Pesan:*\n${message}`;
        
        const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(waText)}`;
        window.open(waUrl, '_blank');
    }
</script>

@endsection
