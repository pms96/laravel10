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
            SELECT f.*
            FROM "public"."FormularioUsuarios" f
            INNER JOIN "public"."Usuarios" u ON f."nif" = u."nif"
            WHERE f."nif" IS NOT NULL
            AND f."fecha_registro" >= NOW() - INTERVAL '90 days';
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
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nif }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->fecha_registro }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ Carbon::now()->diffInDays($item->fecha_registro) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div id="tab-content-2" class="tab-content bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            SELECT u.* FROM "public"."Usuarios" u
            INNER JOIN "public"."InformacionUsuarios" i ON u.id = i.id_usuario
            WHERE (i."genero" = 'M' AND u."fecha_nacimiento" <= CURRENT_DATE - INTERVAL '25 year' ) OR (i."genero"='F' AND u."fecha_nacimiento" <=CURRENT_DATE - INTERVAL '20 year' ); 
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
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nif }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->apellido }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->fecha_nacimiento }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ Carbon::parse($item->fecha_nacimiento)->age }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div id="tab-content-3" class="tab-content bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            SELECT * FROM "public"."Usuarios" WHERE nif IS NOT NULL;
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
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nif }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->apellido }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->fecha_nacimiento }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div id="tab-content-4" class="tab-content bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            SELECT age_bucket AS age_range,
            COUNT(*) AS num_people
            FROM (
                SELECT
                WIDTH_BUCKET(EXTRACT(YEAR FROM AGE(fecha_nacimiento)), 0, 100, 10) - 1 AS age_bucket
                FROM public."Usuarios"
                WHERE nif IS NOT NULL
            ) AS age_ranges
            GROUP BY age_bucket
            ORDER BY age_bucket;
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
                                <td class="px-6 py-4 whitespace-nowrap">{{ ($item->age_range - 1) * 10 .'-'. ($item->age_range *10)-1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->num_people }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    <div id="tab-content-5" class="tab-content bg-white p-4 rounded-md shadow">
        <div class="container mx-auto mt-5">
            SELECT
            *
            FROM public."Usuarios"
            WHERE nif IS NOT NULL
            AND fecha_nacimiento >= CURRENT_DATE - INTERVAL '60 YEAR'
            ORDER BY fecha_nacimiento;
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
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nif }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->apellido }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->fecha_nacimiento }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ floor(Carbon::parse($item->fecha_nacimiento)->age / 10) * 10 }} - {{ (floor(Carbon::parse($item->fecha_nacimiento)->age / 10) * 10) + 9 }}</td>
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