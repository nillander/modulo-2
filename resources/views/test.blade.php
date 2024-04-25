<x-app-layout>
    <x-slot name='header'>
        <h3>Test</h3>
    </x-slot>
    @php
    $suco = 'orange juice';
    @endphp
    <p>This is a {{ $comida }} and {{ $suco }} page.</p>
    <ul>
        <li>Nome: {{ auth()->user()->name }} </li>
    </ul>
</x-app-layout>
