<div>
    <section class="relative bg-white-200 text-white min-h-screen py-12">
        <div class="absolute inset-0 bg-cover bg-center"></div>
        <div class="container mx-auto px-4 relative z-10">
            <!-- Big Heading -->

            <livewire:searchbox />

            <div class="grid grid-cols-4 md:grid-cols-4 lg:grid-cols-4 gap-8 mt-20">
                @foreach ($jobSeekers as $jobseeker)
                    <livewire:v-card :data="$jobseeker" />
                @endforeach
            </div>
        </div>
    </section>
</div>
