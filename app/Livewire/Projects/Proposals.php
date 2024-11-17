<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Proposals extends Component
{

    public Project $project;

    public int $qty = 5;

    #[Computed()]
    public function proposals()
    {
        return $this->project->proposals()->orderBy('hours')->paginate($this->qty);
    }

    public function loadMore()
    {
        $this->qty += 5;
    }

    #[Computed()]
    public function lastProposalTime()
    {
        return $this->project->proposals()->latest()->first()->created_at->diffForHumans();
    }

    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
