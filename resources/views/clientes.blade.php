<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clientes') }}
        </h2>
        <a href="#" class="btn btn-primary registrar">Registrar Cliente</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <table class="table">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Telefono</th>
                            <th>Email</th>
                        </tr>
                        
                        <tr>
                            <td>Jadde</td>
                            <td>Coronel</td>
                            <td>72736355</td>
                            <td>jadde@coronel.com</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Jazmin</td>
                            <td>Mariño</td>
                            <td>87387636</td>
                            <td>Jazmin@Mariño.com</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Georgia</td>
                            <td>Chaina</td>
                            <td>87346744</td>
                            <td>Georgia@Chaina.com</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Luis</td>
                            <td>Cabrera</td>
                            <td>34897289</td>
                            <td>Luis@Cabrera.com</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Angela</td>
                            <td>blabla</td>
                            <td>78638276</td>
                            <td>Angela@blabla.com</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Melitza</td>
                            <td>Aquino</td>
                            <td>73687263</td>
                            <td>Melitza@Aquino.com</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Jaz</td>
                            <td>Coronel</td>
                            <td>72736355</td>
                            <td>jaz@coronel.com</td>
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
