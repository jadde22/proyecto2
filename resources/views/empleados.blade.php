<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleados') }}
        </h2>
        <a href="#" class="btn btn-primary registrar">Registrar Empleados</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Puesto</th>
                            <th>Edad</th>
                        </tr>
                        
                        <tr>
                            <td>Jadde</td>
                            <td>Coronel</td>
                            <td>Sub Director</td>
                            <td>45</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Jazmin</td>
                            <td>Mariño</td>
                            <td>Gerente</td>
                            <td>54</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Georgia</td>
                            <td>Chaina</td>
                            <td>Asistente</td>
                            <td>32</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Luis</td>
                            <td>Cabrera</td>
                            <td>Gerente</td>
                            <td>35</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Angela</td>
                            <td>blabla</td>
                            <td>Asistente</td>
                            <td>41</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Melitza</td>
                            <td>Aquino</td>
                            <td>Asistente</td>
                            <td>37</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Jaz</td>
                            <td>Coronel</td>
                            <td>Sub Director</td>
                            <td>53</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
