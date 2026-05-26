@extends('layouts.app')

@section('title', $project->title . ' | Eka Rizky')

@section('content')
<section class="project-detail">
    <div class="container">
        {{-- Header --}}
        <div class="detail-header" data-animate="fade-up">
            <a href="{{ route('home') }}#projects" class="back-link">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                <span>Kembali</span>
            </a>
            <h1 class="detail-title">{{ $project->title }}</h1>
            <div class="detail-info-bar">
                <div class="info-item">
                    <span class="info-label">Peran</span>
                    <span class="info-value">{{ $project->role }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Tahun</span>
                    <span class="info-value">{{ $project->year }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Kategori</span>
                    <span class="info-value">{{ $project->category }}</span>
                </div>
            </div>
        </div>

        {{-- Overview --}}
        <div class="detail-section" data-animate="fade-up">
            <p class="detail-overview">{{ $project->description }}</p>
            <div class="detail-tech">
                @if(is_array($project->tech))
                    @foreach ($project->tech as $tech)
                    <span class="tech-badge">{{ $tech }}</span>
                    @endforeach
                @endif
            </div>
        </div>

        {{-- Mockup --}}
        <div class="detail-gallery" data-animate="fade-up">
            @if($project->mockup_image)
                <div class="gallery-item" style="padding: 0; background: transparent; border: none; grid-column: 1 / -1;">
                    <img src="{{ Storage::url($project->mockup_image) }}" alt="{{ $project->title }} Main Mockup" style="width: 100%; border-radius: 16px;">
                </div>
            @else
                <div class="gallery-item">
                    <div class="gallery-placeholder">
                        <span class="mono">{{ $slug }}_desktop_mockup.webp</span>
                    </div>
                </div>
                <div class="gallery-item half">
                    <div class="gallery-placeholder">
                        <span class="mono">{{ $slug }}_mobile_mockup.webp</span>
                    </div>
                </div>
            @endif
        </div>

        {{-- Extra Gallery Section --}}
        @if(is_array($project->gallery) && count($project->gallery) > 0)
        <div class="extra-gallery-section" data-animate="fade-up" style="margin-top: 4rem;">
            <h3 class="detail-title" style="font-size: 1.5rem; margin-bottom: 2rem;">Galeri Proyek</h3>
            <div class="extra-gallery-grid" style="display: flex; flex-direction: column; gap: 2rem;">
                @foreach($project->gallery as $image)
                <div class="gallery-image-wrapper">
                    <img src="{{ Storage::url($image) }}" alt="{{ $project->title }} Gallery" style="width: 100%; height: auto; border-radius: 16px; border: 1px solid var(--border);">
                </div>
                @endforeach
            </div>
        </div>
        @endif

        {{-- Navigation --}}
        <div class="detail-nav" data-animate="fade-up">
            @if ($project->prev)
            <a href="{{ route('project.show', $project->prev) }}" class="nav-prev">
                <span class="nav-label">← Sebelumnya</span>
                <span class="nav-name">{{ $projects->firstWhere('slug', $project->prev)->title ?? '' }}</span>
            </a>
            @else
            <div></div>
            @endif
            @if ($project->next)
            <a href="{{ route('project.show', $project->next) }}" class="nav-next">
                <span class="nav-label">Selanjutnya →</span>
                <span class="nav-name">{{ $projects->firstWhere('slug', $project->next)->title ?? '' }}</span>
            </a>
            @endif
        </div>
    </div>
</section>
@endsection
