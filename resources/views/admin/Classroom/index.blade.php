<x-admin.layout>
    @if (session('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50">
            {{ session('success') }}
        </div>
    @endif
    <div class="mt-4 flex justify-end">
        <button data-modal-target="create-classroom-modal" data-modal-toggle="create-classroom-modal" type="button"
            class="rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800">
            + Tambah Classroom
        </button>
    </div>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900 dark:text-white">
            Data Classroom
        </h1>

        <div class="mt-6 overflow-x-auto rounded-lg bg-white shadow dark:bg-gray-800">
            <table class="w-full text-left text-sm text-gray-600 dark:text-gray-300">
                <thead class="bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-white">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">Nama Kelas</th>
                        <th class="px-6 py-3">Jurusan</th>
                        <th class="px-6 py-3">Nama Siswa</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($classrooms as $classroom)
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $classroom->name }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $classroom->major }}
                            </td>

                            <td class="px-6 py-4">
                                @forelse ($classroom->students as $student)
                                    {{ $student->name }} <br>
                                @empty
                                    Belum ada siswa.
                                @endforelse
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center">
                                Belum ada data classroom.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    @include('admin.Classroom.create')
</x-admin.layout>
