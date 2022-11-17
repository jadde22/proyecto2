<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ventas') }}
        </h2>
        <a href="#" class="btn btn-primary registrar">Registrar Ventas</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                <table class="table">
                        <tr>
                            <th>Producto</th>
                            <th>Tipo</th>
                            <th>Valor</th>
                            <th>Cantidad</th>
                        </tr>
                        
                        <tr>
                            <td>Colores</td>
                            <td>A4</td>
                            <td>1.50</td>
                            <td>4552</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Plumones</td>
                            <td>Delgado</td>
                            <td>2.50</td>
                            <td>5485</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Regla</td>
                            <td>Madera</td>
                            <td>3.30</td>
                            <td>3282</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Tajador</td>
                            <td>metal</td>
                            <td>0.70</td>
                            <td>3582</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Cuaderno</td>
                            <td>Cuadriculado</td>
                            <td>3.60</td>
                            <td>7541</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <tr>
                            <td>Lapicero</td>
                            <td>Punta fina</td>
                            <td>2.90</td>
                            <td>6378</td>
                            <td>
                                <a href="#" class="btn btn-success">Editar</a>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>Borrador</td>
                            <td>Blanco</td>
                            <td>1.20</td>
                            <td>1537</td>
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
