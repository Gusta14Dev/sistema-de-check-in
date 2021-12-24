<x-app-layout>

    <x-slot name="students">true</x-slot>
    
    <div class="flex flex-col space-y-8">
        <!-- First Row -->
        <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 px-4 xl:p-0 gap-y-4 md:gap-6">
            <x-students-today></x-students-today>
            <x-register-room></x-register-room>
        </div>
    </div>
</x-app-layout>