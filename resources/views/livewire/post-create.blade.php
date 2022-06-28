<div>
    <div class="container mx-auto px-4">
        <h1 class="text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">Create Job Listing</h1>
        <p class="text-lg mt-2 text-gray-600">Start crafting your new Job post.</p>
        <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">

            @if($saveSuccess)
                <div class="rounded-md bg-green-100 rounded-lg p-4">
                    <div class="flex">
                        
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-success">Successfully Posted Job</h3>
                            
                        </div>
                    </div>
                </div>
            @endif

            <div class="sm:col-span-6">
                <label for="title" class="block text-sm font-medium text-gray-700">
                    Job Title
                </label>
                <div class="mt-1">
                    <input id="title" wire:model="post.title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                </div>
            </div>
            <div class="sm:col-span-6 pt-5">
                <label for="body" class="block text-sm font-medium text-gray-700">Description</label>
                <div class="mt-1">
                    <textarea id="body" rows="3" wire:model="post.body" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                </div>
                <p class="mt-2 text-sm text-gray-500">Add the description for the Job.</p>
            </div>
            <div wire:click="savePost" class="btn btn-primary">Post Job</div>
        </div>
    </div>
</div>