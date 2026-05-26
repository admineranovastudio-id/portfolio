@extends('layouts.app')

@section('title', 'All Projects | Eka Rizky')

@section('content')
<section class="project-detail" style="padding-top: 8rem; padding-bottom: 4rem;">
    <div class="container">
        <div class="detail-header" data-animate="fade-up" style="margin-bottom: 3rem;">
            <a href="{{ route('home') }}#projects" class="back-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                <span>Kembali ke Beranda</span>
            </a>
            <h1 class="detail-title" style="margin-top: 1.5rem;">All Projects</h1>
            <p class="detail-overview" style="margin-bottom: 0;">Berikut adalah daftar lengkap karya dan proyek yang pernah saya kerjakan.</p>
        </div>

        <div class="projects-grid">
            @foreach ($projects as $project)
            <a href="{{ $project->slug !== 'coming-soon' ? route('project.show', $project->slug) : '#' }}"
               class="project-card {{ $project->featured ? 'featured' : '' }}">
                <div class="project-image">
                    @if($project->mockup_image)
                        <img src="{{ Storage::url($project->mockup_image) }}" alt="{{ $project->title }}" style="width: 100%; height: 100%; object-fit: cover;">
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
    </div>
</section>
@endsection
