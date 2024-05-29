<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Doctores") }}
                </div>

                <!--Tabla-->




                <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Especialidad
                </th>
                <th scope="col" class="px-6 py-3">
                    Consultorio
                </th>
                <th scope="col" class="px-6 py-3">
                    Telefono
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Karina Arévalo
                </th>
                <td class="px-6 py-4">
                    General
                </td>
                <td class="px-6 py-4">
                    3
                </td>
                <td class="px-6 py-4">
                    834 305 58 59
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Lizeth Flores
                </th>
                <td class="px-6 py-4">
                Cirugía Pediátrica
                </td>
                <td class="px-6 py-4">
                   4
                </td>
                <td class="px-6 py-4">
                    834 105 09 89
                </td>
            </tr>
        </tbody>
    </table>
</div>



            </div>
        </div>
    </div>
</x-app-layout>
