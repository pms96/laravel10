@include('prueba.header')
@include('prueba.navbar')
    
    <p class="text-center"> Si quieres insertar un registro de usuraio descomenta las correspondientes del formuario y del controlador </p>
    <div class="container mx-auto mt-5">
        <h1 class="text-center text-2xl font-bold mb-5">Crear Registro</h1>
        <form id="crear-registro-form" method="POST" action="{{ route('usuarios.crearRegistro') }}">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-bold mb-2">Nombre:</label>
                <input type="text" class="w-full p-2 border border-gray-400 rounded" id="nombre" name="nombre" required>

                <!-- Si quieres insertar un registro de usuraio descomenta las siguientes lineas -->
                <!-- <label for="apellido" class="block text-gray-700 font-bold mb-2">Apellido:</label>
                <input type="text" class="w-full p-2 border border-gray-400 rounded" id="apellido" name="apellido">
                <label for="nif" class="block text-gray-700 font-bold mb-2">Nif:</label>
                <input type="text" class="w-full p-2 border border-gray-400 rounded" id="nif" name="nif">
                <label for="fechaNacimiento" class="block text-gray-700 font-bold mb-2">Fecha Nacimiento:</label>
                <input type="date" class="w-full p-2 border border-gray-400 rounded" id="fechaNacimiento" name="fechaNacimiento"> -->

            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear Registro</button>
        </form>
        <div id="resultado" class="mt-3"></div>
    </div>

    <script>
        document.getElementById('crear-registro-form').addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(event.target);
            const response = await fetch('{{ route('usuarios.crearRegistro') }}', {
                    method: 'POST',
                    body: formData
                });

            const resultado = await response.json();
            if (response.ok) {
                document.getElementById('resultado').innerText = `Código CSV: ${resultado.codigo_csv}`;
            } else {
                document.getElementById('resultado').innerText = `Error: ${resultado.error}`;
            }
        });
    </script>
</body>

</html>