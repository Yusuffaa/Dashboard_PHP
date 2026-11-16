<x-admin.layout>

    @if (session('success'))
        <div id="success-alert"
            class="flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
            role="alert">

            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd">
                </path>
            </svg>

            <span class="font-medium">{{ session('success') }}</span>
        </div>
    @endif

    <div class="mb-6 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
        <div>
            <h1 class="text-3xl font-bold text-gray-900 dark:text-white">Students</h1>
            <p class="mt-2 text-gray-600 dark:text-gray-400">Welcome to your student page!.</p>
        </div>

        <button type="button" data-modal-target="create-student-modal" data-modal-toggle="create-student-modal"
            class="inline-flex items-center justify-center gap-2 rounded-lg bg-blue-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add Student
        </button>
    </div>

    <div class="overflow-hidden rounded-lg bg-white shadow-sm dark:bg-gray-800">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">No</th>
                        <th scope="col" class="px-6 py-3">NIS</th>
                        <th scope="col" class="px-6 py-3">Nama</th>
                        <th scope="col" class="px-6 py-3">Kelas</th>
                        <th scope="col" class="px-6 py-3">Alamat</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="border-b bg-white dark:border-gray-700 dark:bg-gray-800">
                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $student->name }}</td>
                            <td class="px-6 py-4">{{ $student->nis }}</td>
                            <td class="px-6 py-4">{{ $student->classroom->name }}</td>
                            <td class="px-6 py-4">{{ $student->address }}</td>
                            <td class="px-6 py-4">
                                <select
                                    onchange="this.classList.toggle('text-green-700', this.value === 'Active'); this.classList.toggle('bg-green-100', this.value === 'Active'); this.classList.toggle('text-red-700', this.value === 'Inactive'); this.classList.toggle('bg-red-100', this.value === 'Inactive');"
                                    class="rounded-md border-0 px-3 py-1.5 text-xs font-semibold
                                    {{ 'bg-green-100 text-green-700' }}">
                                    <option value="Active" class="bg-white text-green-700">Active</option>
                                    <option value="Inactive" class="bg-white text-red-700">Inactive</option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    @include('admin.Student.create')

</x-admin.layout>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.getElementById('success-alert');

        if (alert) {
            setTimeout(function() {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';

                setTimeout(function() {
                    alert.remove();
                }, 500);
            }, 3000);
        }
    });
</script>
