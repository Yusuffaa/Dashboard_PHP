<x-admin.layout>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            {{$title}}
        </h1>
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Profile Information
            <p class="text-gray-500 dark:text-gray-400">Nama: {{ $nama }}</p>
            <p class="text-gray-500 dark:text-gray-400">Kelas: {{ $kelas }}</p>
            <p class="text-gray-500 dark:text-gray-400">Sekolah : {{ $sekolah }}</p>
            <p class="text-gray-500 dark:text-gray-400">Alamat: {{ $alamat }}</p>
        </h3>
        <p class="text-gray-500 dark:text-gray-400">
            <a href="{{ $github }}" target="_blank" style="display: inline-flex; align-items: center; gap: 20px;">
                <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="GitHub Logo" width="35" height="35">
                <span>GitHub Profile</span>
            </a>
        </p>
    </div>
</x-admin.layout>
