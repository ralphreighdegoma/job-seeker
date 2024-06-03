<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\JobSeeker;


class JobSeekersComponent extends Component
{

    public $jobSeekers;

    public function mount()
    {
        $this->jobSeekers = JobSeeker::all();
    }

    public function render()
    {
        return view('livewire.job-seekers-component');
    }
}
