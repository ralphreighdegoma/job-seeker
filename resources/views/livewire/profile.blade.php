<div>
    <form wire:submit="create">
        {{ $this->form }}
        <button
            class="select-none rounded-lg bg-yellow-400 mt-5 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="submit"
        >
            Save
        </button>
    </form>
</div>
