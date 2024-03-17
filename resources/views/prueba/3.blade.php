@include('prueba.header')
@include('prueba.navbar')

    <div class="container mx-auto mt-5">
        <h1 class="text-center text-2xl font-bold mb-5">Buscar Documentos por IDs</h1>
        <form id="buscar-ids-form" method="POST" action="{{ route('documentos.buscarIds') }}">
            @csrf
            <div class="mb-4">
                <label for="ids" class="block text-gray-700 font-bold mb-2">IDs:</label>
                <textarea class="w-full p-2 border border-gray-400 rounded" id="ids" name="ids" rows="5" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Buscar</button>
        </form>
        <div id="resultado3" class="mt-3"></div>
    </div>
    
    <script>

        document.getElementById('buscar-ids-form').addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(event.target);
            const response = await fetch('{{ route('documentos.buscarIds') }}', {
                    method: 'POST',
                    body: formData
                });

            const resultado = await response.json();
            if (response.ok) {
                let html = '<table class="w-full"><thead><tr><th class="px-4 py-2">ID</th><th class="px-4 py-2">Nombre</th><th class="px-4 py-2">Descripción</th></tr></thead><tbody>';
                resultado.documentos.forEach(documentos => {
                    html += `<tr><td class="border px-4 py-2">${documentos.id}</td><td class="border px-4 py-2">${documentos.nombre}</td><td class="border px-4 py-2">${documentos.csv}</td></tr>`;
                });
                html += '</tbody></table>';
                document.getElementById('resultado3').innerHTML = html;
            } else {
                document.getElementById('resultado3').innerText = `Error: ${resultado.error}`;
            }
        });
    </script>
</body>

</html>