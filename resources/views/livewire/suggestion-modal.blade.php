<div x-cloak x-data="{ modalOpen: false }">
    <button @click="modalOpen = true" class="px-5 py-2.5 border border-solid rounded-lg font-base border-third-text text-third-text">Suggest a new package</button>

    <div x-transition.duration.500ms x-show="modalOpen" class="fixed inset-0 transition-opacity bg-neutral-900 bg-opacity-60">
        <div @click="modalOpen = false" class="flex items-center justify-center h-screen vw-full">
            <div @click.stop class="z-10 w-full max-w-2xl p-5 rounded-lg shadow-2xl bg-container">
                <form wire:submit='save'>
                    <div class="flex items-center justify-between">
                        <h1 class="text-lg font-medium text-white">Suggest a resource</h1>
                        <button @click="modalOpen = false">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition stroke-secondary-text hover:stroke-primary-text" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </button>
                    </div>
    
                    <p class="mt-2 text-sm text-secondary-text">We love hearing from the community, suggest your favourite resources.</p>
    
                    <div class="mt-7">
                        <label for="input" class="block mb-1 text-sm text-secondary-text">Resource Link<span class="text-primary"> *</span></label>
                        <input wire:model="link" placeholder="https://github.com/michaeltukdev/BundleBay" required type="text" id="input" class="w-full px-3 py-2 mt-1 text-sm text-white rounded-md outline-none bg-input" placeholder="Enter something...">
                    </div>
    
                    <div class="flex items-center justify-between mt-8">
                        <button type="submit" class="px-5 py-2 transition duration-300 rounded-lg text-container bg-primary hover:bg-secondary">Submit Resource</button>
                        @error('link') <span class="text-sm text-primary">{{ $message }}</span> @enderror     
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>