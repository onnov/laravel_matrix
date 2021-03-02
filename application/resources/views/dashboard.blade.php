<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3>Матрица:</h3>
                    <form onsubmit="return Diagonal.run(this);">
{{--                    <form onsubmit="return false">--}}
                        <div class="form-inline form-group row mb-1">
                            <input class="form-control" name="matrix[0][0]" value="1">
                            <input class="form-control" name="matrix[0][1]" value="2">
                            <input class="form-control" name="matrix[0][2]" value="3">
                        </div>
                        <div class="form-inline form-group row mb-1">
                            <input class="form-control" name="matrix[1][0]" value="4">
                            <input class="form-control" name="matrix[1][1]" value="5">
                            <input class="form-control" name="matrix[1][2]" value="6">
                        </div>
                        <div class="form-inline form-group row mb-1">
                            <input class="form-control" name="matrix[2][0]" value="7">
                            <input class="form-control" name="matrix[2][1]" value="8">
                            <input class="form-control" name="matrix[2][2]" value="9">
                        </div>

                        <div class="form-group row">
                            <button type="submit" class="btn btn-primary mb-2">count</button>
                        </div>
                    </form>

                    <h3>Результат:</h3>
                    <div>Сумма главной диагонали: <span id="principal">0</span></div>
                    <div>Сумма побочной диагонали: <span id="secondary">0</span></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
