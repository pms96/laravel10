@include('prueba.header')
@include('prueba.navbar')
@php
use Carbon\Carbon;
@endphp

    <div class="max-w-2xl mx-auto">
    <!-- Tabs -->
    <div class="flex mb-4">
      <button class="tab-button py-2 px-4 bg-gray-200 text-gray-700 rounded-l-md">1</button>
      <button class="tab-button py-2 px-4 bg-gray-300 text-gray-700">2</button>
      <button class="tab-button py-2 px-4 bg-gray-300 text-gray-700">3</button>
      <button class="tab-button py-2 px-4 bg-gray-300 text-gray-700">4</button>
      <button class="tab-button py-2 px-4 bg-gray-300 text-gray-700 rounded-r-md">5</button>
    </div>
    <!-- Contenido de las pestañas -->
    <div id="tab-content-1" class="tab-content active bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            Excluir los registros que aparecen en la tabla FormularioUsuarios durante los últimos 90 días si coincide el nif.
        </div>
        @if( isset($tab1) )
            <div class="container mx-auto p-8">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nif</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Registro</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Días pasados</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tab1 as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['id'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['nif'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['fecha_registro'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ Carbon::now()->diffInDays($item['fecha_registro']) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div id="tab-content-2" class="tab-content bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            Usando el campo fecha_nacimiento y género, filtrar por personas con rasgo masculino mayores de 25 años, y con rasgo femenino mayores de 20 años.
        </div>
        @if( isset($tab2) )
            <div class="container mx-auto p-8">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nif</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Nacimiento</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edad</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tab2 as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['id'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['nif'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['nombre'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['apellido'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['fecha_nacimiento'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ Carbon::parse($item['fecha_nacimiento'])->age }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div id="tab-content-3" class="tab-content bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            Asegurarse de que los usuarios tengan nif.
        </div>
        @if( isset($tab3) )
            <div class="container mx-auto p-8">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nif</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Nacimiento</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tab3 as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['id'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['nif'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['nombre'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['apellido'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['fecha_nacimiento'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div id="tab-content-4" class="tab-content bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            Obtener una cuenta por grupo de edad de 10 en 10 años de las personas que resulten de este filtrado.
        </div>
        @if( isset($tab4) )
            <div class="container mx-auto p-8">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rango</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Suma</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tab4 as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ ($item['age_range'] - 1) * 10 .'-'. ($item['age_range'] *10)-1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['num_people'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div id="tab-content-5" class="tab-content bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            Filtrar los resultados para mostrar solo grupos de edad menores de 60 años.
        </div>
        @if( isset($tab5) )
            <div class="container mx-auto p-8">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nif</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Apellido</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha Nacimiento</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Rango</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($tab5 as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['id'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['nif'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['nombre'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['apellido'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item['fecha_nacimiento'] }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ floor(Carbon::parse($item['fecha_nacimiento'])->age / 10) * 10 }} - {{ (floor(Carbon::parse($item['fecha_nacimiento'])->age / 10) * 10) + 9 }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
  </div>

  <script>
    // JavaScript para manejar el cambio de pestañas
    document.addEventListener('DOMContentLoaded', function() {
      const tabButtons = document.querySelectorAll('.tab-button');
      const tabContents = document.querySelectorAll('.tab-content');

      tabButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
          // Ocultar todos los contenidos de las pestañas
          tabContents.forEach(content => {
            content.classList.remove('active');
          });

          // Mostrar el contenido de la pestaña seleccionada
          tabContents[index].classList.add('active');
        });
      });
    });
  </script>
</body>

</html>