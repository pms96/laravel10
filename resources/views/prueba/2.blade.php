@include('prueba.header')
@include('prueba.navbar')

    <div class="container mx-auto mt-5">
        <h1 class="text-center text-2xl font-bold mb-5">Array Ids y Array Nombres de roles</h1>
    
        <p class="text-center">Asigna previamente los roles que desees a un id</p>
        <form id="asignar-roles-de-usuario-form" method="POST" action="{{ route('asignar.roles.usuario') }}">
            @csrf
            <div class="mb-4">
                <label for="id" class="block text-gray-700 font-bold mb-2">Id:</label>
                <input type="text" class="w-full p-2 border border-gray-400 rounded" id="id" name="id" required>
            </div>
            <div class="mb-4">
                <label for="roles" class="block text-gray-700 font-bold mb-2">Roles:</label>
               
                <div class="flex items-center">
                    <input type="checkbox" class="mr-2" id="super_admin" name="roles[]" value="super_admin">
                    <label for="super_admin">super_admin</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" class="mr-2" id="admin" name="roles[]" value="admin">
                    <label for="admin">admin</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" class="mr-2" id="user" name="roles[]" value="user">
                    <label for="user">user</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" class="mr-2" id="leader" name="roles[]" value="leader">
                    <label for="leader">leader</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" class="mr-2" id="co_leader" name="roles[]" value="co_leader">
                    <label for="co_leader">co_leader</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" class="mr-2" id="employer" name="roles[]" value="employer">
                    <label for="employer">employer</label>
                </div>
                
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Asignar Roles</button>
        </form>

        <div class="mt-5"></div>
        <p class="text-center">Si ya exísten ids con roles asinado puedes comprobar cual tiene</p>
        <form id="obtener-roles-de-usuario-form" method="POST" action="{{ route('obtener.roles.usuario') }}">
            @csrf
            <div class="mb-4">
                <label for="id" class="block text-gray-700 font-bold mb-2">Id:</label>
                <input type="text" class="w-full p-2 border border-gray-400 rounded" id="id" name="id" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Consultar Roles</button>
        </form>
        <div id="resultado2" class="mt-3"></div>
    </div>

    <script>
        document.getElementById('asignar-roles-de-usuario-form').addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(event.target);
            const response = await fetch('{{ route('asignar.roles.usuario') }}', {
                    method: 'POST',
                    body: formData
                });

            const resultado = await response.json();
            if (response.ok) {
                document.getElementById('resultado2').innerHTML = 'Asignado';
                document.getElementById('asignar-roles-de-usuario-form').reset();
            } else {
                document.getElementById('resultado2').innerText = `Error: ${resultado.error}`;
            }
        });

        document.getElementById('obtener-roles-de-usuario-form').addEventListener('submit', async (event) => {
            event.preventDefault();
            const formData = new FormData(event.target);
            const response = await fetch('{{ route('obtener.roles.usuario') }}', {
                    method: 'POST',
                    body: formData
                });

            const resultado = await response.json();
            if (response.ok) {
                let html = '<table class="w-full"><tbody><tr><td class="border px-4 py-2">Ids</td><td class="border px-4 py-2">';
                resultado.idsRoles.forEach(idsRoles => {
                    html += `${idsRoles}, `;
                });
                html += `<tr><td class="border px-4 py-2">Nombres</td><td class="border px-4 py-2">`;
                resultado.nombresRoles.forEach(nombresRoles => {
                    html += `${nombresRoles}, `;
                });
                html += `</td></tr>`;
                html += '</tbody></table>';
                document.getElementById('resultado2').innerHTML = html;
            } else {
                document.getElementById('resultado2').innerText = `Error: ${resultado.error}`;
            }
        });
    </script>
</body>

</html>